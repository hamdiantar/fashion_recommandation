<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $imagesPathFullStyles = public_path('ai/full_style');
        $imagesFullStyles = array_diff(scandir($imagesPathFullStyles), ['.', '..']);
        $imageListFullStyles = [];
        foreach ($imagesFullStyles as $image) {
            $imageListFullStyles[] = [
                'name' => $image,
                'url' => asset('ai/full_style/' . $image)
            ];
        }
        $imagesPathBottoms = public_path('ai/bottoms');
        $imagesBottoms = array_diff(scandir($imagesPathBottoms), ['.', '..']);
        $imageListBottoms = [];
        foreach ($imagesBottoms as $image) {
            $imageListBottoms[] = [
                'name' => $image,
                'url' => asset('ai/bottoms/' . $image)
            ];
        }
        return view('home', compact('imageListBottoms', 'imageListFullStyles'));
    }
}
