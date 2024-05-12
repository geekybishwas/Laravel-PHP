<?php


// Important functions

echo "Hello";

// if(!function_exists('get_formatted_data')){
//     function get_formatted_date($data,$format)
//     {
//         $formattedData=date($format,strtotime($data));
//         return $formattedData;
//     }
// }
if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
};