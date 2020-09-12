<?php


namespace App\Service\Nkd;


class TrackService
{

    public static function validate(){
        return
            [
                'designation'=> 'required|string|min:3',
                'category_id'=> 'required',

                'brand'=> 'required',
                'budget'=> 'required|string|min:3',
                'description'=> 'string|min:3',
            ];
    }
}
