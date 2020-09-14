<?php


namespace App\Service\Nkd;


class CategoryServeice
{
    public static function validate(){
        return
            [
                'name'=> 'required|string|min:3',
                'description'=> 'required|string|min:3',
            ];
    }

}
