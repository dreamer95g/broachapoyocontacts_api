<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;
use GrahamCampbell\ResultType\Result;

class DeleteContacts
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
                $contact = Contact::find($id);
                if($contact !== null){
                //BORRAR
                $contact->delete();
                array_push($result, $contact);
                }

            }
        }

        return $result;
    }
}
