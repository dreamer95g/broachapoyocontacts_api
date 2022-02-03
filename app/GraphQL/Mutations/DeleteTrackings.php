<?php

namespace App\GraphQL\Mutations;

use App\Models\Tracking;

class DeleteTrackings
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
                $tracking = Tracking::find($id);
                if($tracking !== null){
                 //BORRAR
                $tracking->delete();
                array_push($result, $tracking);
                }

            }
        }

        return $result;
    }
}
