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
        $imagesPathTops = public_path('ai/tops');
        $imagesTops = array_diff(scandir($imagesPathTops), ['.', '..']);
        $imageListTops = [];
        foreach ($imagesTops as $image) {
            $imageListTops[] = [
                'name' => $image,
                'url' => asset('ai/tops/' . $image)
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


        $imagesPathShoes = public_path('ai/shoes');
        $imagesShoes = array_diff(scandir($imagesPathShoes), ['.', '..']);
        $imageListShoes = [];
        foreach ($imagesShoes as $image) {
            $imageListShoes[] = [
                'name' => $image,
                'url' => asset('ai/shoes/' . $image)
            ];
        }

        return view('home', compact('imageListShoes', 'imageListBottoms', 'imageListTops'));
    }
}
