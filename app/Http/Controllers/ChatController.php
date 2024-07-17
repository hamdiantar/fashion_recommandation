<?php

namespace App\Http\Controllers;

use App\Models\ClothingDesign;
use Gemini\Laravel\Facades\Gemini;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Throwable;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use OpenAI\OpenAI as AI;

class ChatController extends Controller
{
    public function generateImage(Request $request)
    {
        $open_ai_key = 'sk-proj-v5VAdBG7GPcwO7JIf6c3T3BlbkFJt997WRSlvOqyUsc1bXuq';
        $open_ai = new OpenAi($open_ai_key);
        $des = $this->describeImages($request);
        $message = 'Generate a model fashion design then make the design generated on real human
        ['.$request->gender.']'.$des.' with this extra info :'. $request->extra_info;
        $complete = $open_ai->image([
            "prompt" => $message,
            "n" => 1,
            "size" => '1024x1024',
            "response_format" => "url",

        ]);
        $response  = json_decode($complete, TRUE);
        $data['image'] = $response['data'][0]['url'] ?? '';
        $this->storeImage($request, $data['image']);
        return response()->json($data, 200);
    }

    public function describeImages(Request $request)
    {
        $open_ai_key = 'sk-proj-v5VAdBG7GPcwO7JIf6c3T3BlbkFJt997WRSlvOqyUsc1bXuq';
        $selectedFullStyle = $request->input('selectedFullStyle');
        $imagePathFullStyle1 = public_path('ai/full_style/' . $selectedFullStyle);
        $imagePathFullStyle2 = public_path('ai/bottoms/' . $selectedFullStyle);
        $imageExistsInFullStyle = File::exists($imagePathFullStyle1);
        $imageExistsInBottoms = File::exists($imagePathFullStyle2);
        if ($imageExistsInFullStyle) {
            $imagePathFullStyle = $imagePathFullStyle1;
        }
        if ($imageExistsInBottoms) {
            $imagePathFullStyle = $imagePathFullStyle2;
        }
        $encodedImageFullStyle = $this->encodeImage($imagePathFullStyle, 'shoes');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $open_ai_key
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4o',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => [
                        [
                            'type' => 'image_url',
                            'image_url' => [
                                'url' => 'data:image/jpeg;base64,' . $encodedImageFullStyle
                            ]
                        ]
                    ]
                ]
            ],
            'max_tokens' => 300
        ]);
        $apiResponse = $response->json();
        $description = $apiResponse['choices'][0]['message']['content'];
        if (strlen($description) > 800) {
            $description = substr($description, 0, 800);
        }
       return $description;
    }

    private function encodeImage($imagePath): string
    {
        $imageData = file_get_contents($imagePath);
        return base64_encode($imageData);
    }


//        $data['image'] = 'https://oaidalleapiprodscus.blob.core.windows.net/private/org-DVlZ9peHjW9PCUEF9aKdXFwp/user-meIzuCLdt0AcnTVUEqGKhZGm/img-njla2rrbXIgYHarGZACfeiYy.png?st=2024-05-26T10%3A07%3A50Z&se=2024-05-26T12%3A07%3A50Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-05-26T10%3A56%3A21Z&ske=2024-05-27T10%3A56%3A21Z&sks=b&skv=2021-08-06&sig=zx49TGDi40godnytzvm27nq0iPaq/KCqgIqjp/2z2kM%3D';


    public function downloadImage(Request $request)
    {
        $imageUrl = $request->input('image_url');
        $response = Http::get($imageUrl);
        $tempFilename = Str::random(40) . '.png';
        Storage::disk('local')->put($tempFilename, $response->body());
        $tempFilePath = storage_path('app/' . $tempFilename);
        $filename = 'fashion_recommendation.png';
        return response()->download($tempFilePath, $filename)->deleteFileAfterSend(true);
    }

    public function storeImage(Request $request, $imageUrl): void
    {
        $imageContent = file_get_contents($imageUrl);
        $filename = uniqid('image_') . '.png';
        $path = public_path('uploads/' . $filename);
        // Ensure the uploads directory exists
        if (!file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0755, true);
        }
        file_put_contents($path, $imageContent);
        $design = new ClothingDesign();
        $design->user_id = Auth::id();
        $design->image_url = 'uploads/' . $filename; // Store the relative path
        $design->description = $request->post('content');
        $design->save();
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        $user = auth()->user();
        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect()->back()->with('success', 'Password updated successfully');
    }
}
