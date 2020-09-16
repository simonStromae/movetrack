<?php


    if(!function_exists('getUser')){

        function getUser(\App\Client $client):\App\User{
            $user = \App\User::where('client_id', $client->id)->first();
            return  $user ;
        }

    }

    if (!function_exists('clientCount')){

        function clientCount() :int{
            $count = \App\Client::count();
            return $count;
        }
    }

    if (!function_exists('benefitCount')){

        function benefitCount( bool $today=null) :int{
            if($today)
                $tracks = \App\Track::where('status', 'success')->where('created_date', date('Y-m-d'))->get();
            else
                $tracks = \App\Track::where('status', 'success')->get();
            $count= 0;

            foreach ( $tracks as $t):
                 $count += $t->delivery_price;
//                 $count += $t->real_price + $t->delivery_price;
            endforeach;

            return $count;
        }
    }

    if (!function_exists('trackCount')){

        function trackCount(string $type, bool $today=null) :int{
            if($today){
                $count = \App\Track::where('status', $type)->where('created_date', date('Y-m-d'))->count();
            }else
                $count = \App\Track::where('status', $type)->count();

            return $count;
        }
    }


    if (!function_exists('get_status')){

            function get_status($status): string{

                if($status === 'success'){
                    return 'Validé';
                }else if($status === 'in pending') {

                    return 'Recherche du besoin passée';
                }else if($status === 'decline'){

                    return 'Annulé';
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


    if (!function_exists('try_find_ressource')){

        function try_find_ressource(callable $function ){

            try{
                $function();
            }catch (\Exception $e){

                return abort('404');
            }
        }
    }
