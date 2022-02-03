<?php

namespace App\GraphQL\Mutations;

use App\Models\Nomenclators\Category;

class DeleteCategories
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
         $ids = $args['ids'];
        $result = array();

        if (count($ids) != 0) {

            foreach ($ids as $id) {
                //OBTENER
                $cat = Category::find($id);
                if($cat !== null){
                //BORRAR
                $cat->delete();
                array_push($result, $cat);
                }

            }
        }

        return $result;
    }
}
