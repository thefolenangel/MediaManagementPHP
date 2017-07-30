<?php

function get_item_html($id, $item){
    $output = "<li><a href='details.php?id=".$id."'><img src='" 
                    . $item["img"] 
                    . "' alt='" 
                    . $item["title"] . "'/>" 
                    . "<p>View Details</p>" 
                    . "</a></li>";
    return $output;
}


function array_category($catalog,$category) {
    if ($category === null) {
        return array_keys($catalog);
    }
    $output = array();
    
    foreach ($catalog as $id => $item) {
        if ($category == null || strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"An ");
            $sort = ltrim($sort,"A ");
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}