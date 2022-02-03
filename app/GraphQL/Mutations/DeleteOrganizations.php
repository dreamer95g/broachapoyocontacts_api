<?php

namespace App\GraphQL\Mutations;

use App\Models\Organization;

class DeleteOrganizations
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
                $org = Organization::find($id);
                 if($org !== null){
                //BORRAR
                $org->delete();
                array_push($result, $org);
                }

            }
        }

        return $result;
    }
}
