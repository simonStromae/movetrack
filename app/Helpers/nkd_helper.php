<?php


    if(!function_exists('getUser')){
        function getUser(\App\Client $client):\App\User{
            $user = \App\User::where('client_id', $client->id)->first();
            return  $user ;
        }
    }

    if (!function_exists('get_status')){
        function get_status($status){
            if($status === 'success'){
                return 'Recherche du besoin passée';
            }else if($status === 'in pending') {

                return 'Recherche du besoin passée';
            }else if($status === 'decline'){

                return 'Recherche du besoin passée';
            }elseif($status === 'emit'){
                return 'Validé';
            }
        }
    }

    if (!function_exists('in_return')){
        /**
         * @param callable $function
         * @return \Illuminate\Http\RedirectResponse
         */
        function in_return(callable $function ){
            try{
                $function();
            }catch (\Exception $e){

                notify()->error('Echec lors de l\'enregistrement');
                return redirect()->back();
            }
        }
    }
