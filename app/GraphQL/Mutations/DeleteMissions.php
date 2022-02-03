<?php

namespace App\GraphQL\Mutations;

use App\Models\ForeignMission;

class DeleteMissions
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
                $mission = ForeignMission::find($id);
                if($mission !== null){
                //BORRAR
                $mission->delete();
                array_push($result, $mission);
                }

            }
        }

        return $result;
    }
}
