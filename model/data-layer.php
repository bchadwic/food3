<?php
// model deals with data manipulation and functions

/**
 * model/data-layer.php
 * returns data for my app
 */
function getMeals(){
    return array("breakfast", "brunch", "lunch", "dinner");
}

function getCondiments(){
    return array("ketchup", "mustard", "sriracha", "mayo");
}