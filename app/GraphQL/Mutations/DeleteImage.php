<?php

namespace App\GraphQL\Mutations;

use App\Models\Media\Image;
use Illuminate\Support\Facades\Storage;

class DeleteImage
{

    public function __invoke($_, array $args)
    {
        // $id = $args['id'];
        // $img = Image::find($id);
        // $img->delete();
        // Storage::delete($img->name);
        // return $img;
    }
}
