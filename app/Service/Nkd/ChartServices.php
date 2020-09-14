<?php


namespace App\Service\Nkd;


use App\Category;
use App\Quater;
use App\Track;

class ChartServices
{

    /**
     * nkd_chart_Set
     * IMPORTANT : All dataTab MUST BE IN  ORDER by $key, $label_tab and $value_tab
     * thid function is very important for Chart, it deletes all double proprely in the 2 tabs on Matching values
     *
     * cette fonction supprime les doublons dans les 2 tableau et leurs  correspondances respectives
     * @param array $label_tab
     * @param array $value_tab
     * @return array
     */
    private static function deleteDoubleForChart(array $label_tab, array $value_tab):array
    {

        for($i=0; $i < count($label_tab); $i++)
        {
            if(isset($label_tab[$i+1]) && $label_tab[$i] === $label_tab[$i+1]){
                unset($value_tab[$i+1]);
            }
        }

        // remove double
        $label_tab = array_unique($label_tab);

        // array_value : tres important change les index et les met en ordre croissant selon leur position dans le tableau <3 <3
        $label_tab = array_values($label_tab);
        $value_tab = array_values($value_tab);

        return [$label_tab, $value_tab];
    }

    /**
     * @param $data_tracks
     * @return array
     */
    public static function pieTrack($data_tracks){

        return ChartServices::make_data_chart($data_tracks, Category::all(), function($category, $track) {
            return $category->id === $track->category_id;
        });

//        $label_tab=[];
//        $data_tab=[];
//        $categories = Category::all();
//
//        foreach($categories as $c):
//            $count_value=0;
//
//            foreach($data_tracks as $track):
//
//                if($c->id === $track->category_id)
//                    $count_value++;
//
//            endforeach;
//
//            array_push($data_tab, $count_value);
//            array_push($label_tab, $c->name);
//        endforeach;
//
//
//        return ChartServices::deleteDoubleForChart($label_tab, $data_tab);
    }

    public static function pieQuaterClient($data_tracks){

        return ChartServices::make_data_chart($data_tracks, Quater::all(), function($quater, $client) {
            return $quater->id === $client->quater_id;
        });

//        $label_tab=[];
//        $data_tab=[];
//        $categories = Category::all();
//
//        foreach($categories as $c):
//            $count_value=0;
//
//            foreach($data_tracks as $track):
//
//                if($c->id === $track->category_id)
//                    $count_value++;
//
//            endforeach;
//
//            array_push($data_tab, $count_value);
//            array_push($label_tab, $c->name);
//        endforeach;
//
//
//        return ChartServices::deleteDoubleForChart($label_tab, $data_tab);
    }

    /**
     *  nkd_chart_Set
     * @param $data
     * @param $data_model
     * @param callable $function function return bool to give comparation condition
     * @return array
     */
    private static function make_data_chart($data, $data_model, callable $condition){
        $label_tab=[];
        $data_tab=[];
        $categories_data = $data_model;

        foreach($categories_data as $c):
            $count_value=0;

            foreach($data as $item):

                if ( $condition($c, $item) )
                    $count_value++;

            endforeach;

            array_push($data_tab, $count_value);
            array_push($label_tab, $c->name);
        endforeach;

        return ChartServices::deleteDoubleForChart($label_tab, $data_tab);
    }

}
