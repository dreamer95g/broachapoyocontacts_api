<?php

namespace App\Http\Controllers;

use App\Models\Nomenclators\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('client.credentials');
    }

    public function store(Request $request)
    {
        $rules = [
            'photo' => 'required|image'
        ];

        $this->validate($request, $rules);

        $img = $request->photo->store('uploads/photos');

        $params = ['name' => $img];

        $image = Image::create($params);

        $data = [
            "id" => $image->id,
            "name" => $image->name
        ];

        return response()->json($data);
    }
}
