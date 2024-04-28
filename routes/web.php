<?php

use Illuminate\Support\Facades\Route;

// [name route] use for anchor tag to redirection
Route::get('/', function () {
    return view('welcome');
})->name("welcome_page");

// Routes Constraints
Route::get("/new_path/comment/{num?}/{str?}/{str_num?}/{selected_value?}/{formated_value?}",
    function(string $number = null, string $string = null, string $aplha_numeric = null, string $selectedValue = null, string $formatedValue = null){
        return "[whereNumber] - Number : ".$number." <br/>[whereAlpha] - String : ".$string." <br/>[whereAlphaNumeric] - AlphaNumeric : ".$aplha_numeric." <br/>[whereIn] - selectedValue ( you, me ) : ". $selectedValue." <br/>[where] - formatedValue ( @[a-z]+ ) : ". $formatedValue;
    }
)->whereNumber("num")->whereAlpha("str")->whereAlphaNumeric("str_num")->whereIn("selected_value", ["you", "me"])->where("formated_value", "@[a-z]+");

// Route another way
Route::view("/route", "routing_testing")->name("route_page");
Route::get("/blade_template_beginner", function(){
    return view("blade_template1");
})->name("btb");
Route::view("/blade_template_inter", "blade_template2")->name("bti");

// Redirect URLs
Route::redirect("/rt", "/route", 302); // 301(Permanent redirect) - 302(Temporary redirect)

// Route groups
Route::prefix("page")->group(function(){
    Route::get("/first_group", function(){
        return "Page/first_group";
    });

    Route::get("/second_group", function(){
        return "Page/second_group";
    });

    Route::get("/third_group", function(){
        return "Page/third_group";
    });
});

Route::view('/home', 'blade_template3')->name('bte');
Route::view("blade_js", "blade_template4")->name("btp");

// Display page for 404 code
Route::fallback(function(){
    return "<h1 style='text-align: center;'>Page Not Found</h1>";
});
