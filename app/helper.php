<?php


// Important functions

echo "Hello";

if(!function_exists('get_formatted_data')){
    function get_formatted_date($data,$format)
    {
        $formattedData=date($format,strtotime($data));
        return $formattedData;
    }
}