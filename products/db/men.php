<?php
$products = array();

/* 
* Homepage Starts Here
*/

$product1 = array();
$product1['id'] = 1;
$product1['title'] = "High Elastic Fitness Trousers";
$product1['price'] = "$36.32";
$product1['sale_price'] = "$20.56";
$product1['meta'] = array(
    "style" => "Flower",
    "material" => "Plastic",
    "color" => "White Green Pink Purple",
    "whole_length" => "38cm / 15.3in",
    "package" => "1 pcs",
    "festivals" => "Christmas day/Valentine's Day/New Year/ Birthday/ Gifts"
);

$product1['featured_image'] = "/assets/images/products/banner-big2-1_1080x.jpg";
$product1['images'] = array();


$product2 = array();
$product2['id'] = 2;
$product2['title'] = "High quality Bodybuilding Pants";
$product2['price'] = "$25.78";
$product2['sale_price'] = "$10.50";
$product2['meta'] = array(
    "function" => "Stiring",
    "feature" => "Eco-Friendly",
    "eggbeater_laying_method" => "Hand",
    "type" => "Egg Tools",
    "material" => "Stainless steel",
    "uses" => "Kitchen Mixer"
);

$product2['featured_image'] = "/assets/images/products/product-image-618006941_720x_74c65549-3a95-43b2-a9e3-af710af5b171_2048x.jpg";
$product2['images'] = array();


$product3 = array();
$product3['id'] = 3;
$product3['title'] = "Joggers Pants";
$product3['price'] = "$51.73";
$product3['sale_price'] = "$2.91";
$product3['meta'] = array(
    "style" => "Modern",
    "theme" => "Pattern",
    "pattern" => "3D Sticker",
    "specification" => "Single-piece Package",
    "model_number" => "Foam Wall Stickers",
    "clarification" => "For Wall",
    "material" => "PVC",
    "scenerios" => "Wall",
    "color" => "White, black, pink, yellow, orange and so on",
    "size" => "70X30cm, 70X15cm"
);

$product3['featured_image'] = "/assets/images/products/product-image-660397162_720x_87ba509a-d640-470f-b324-afa88735e9c3_2048x.jpg";
$product3['images'] = array();


$product4 = array();
$product4['id'] = 4;
$product4['title'] = "Jogger Trousers";
$product4['price'] = "$40.94";
$product4['sale_price'] = "$12.98";
$product4['meta'] = array(
    "theme" => "Pattern",
    "specifications" => "Dinosaur Bike",
    "style" => "Solid",
    "scenerios" => "Wall",
    "brand_name" => "mondecor",
    "material" => "Plastic",
    "pattern" => "Plane Wall Sticker",
    "size" => "0.6 x 3M / 5M / 10M",
);

$product4['featured_image'] = "/assets/images/products/product-image-869275685_720x_8b793546-cbe3-442a-be56-bc304dda807a_2048x.jpg";
$product4['images'] = array();


$product5 = array();
$product5['id'] = 5;
$product5['title'] = "Jogging Sportswear Sets";
$product5['price'] = "$76.76";
$product5['sale_price'] = "$23.54";
$product5['meta'] = array(
    "material" => "PVC",
    "theme" => "Plant",
    "scenerios" => "Wall",
    "pattern" => "Plane Wall Sticker",
    "brancolord_name" => "multi",
    "received_size" => "60*90cm*2",
    "finished_size" => "187*128cm"
);

$product5['featured_image'] = "/assets/images/products/product-image-803591788_720x_8324d651-f94d-46ee-841a-97afb7e3e274_2048x.jpg";

$product5['images'] = array();


$product6 = array();
$product6['id'] = 6;
$product6['title'] = "Men Sweatpants";
$product6['price'] = "$55.41";
$product6['sale_price'] = "$81.24";
$product6['meta'] = array(
    "pattern_type" => "Solid",
    "use" => "Decorative,Seat,Car,Chair",
    "shape" => "Square",
    "technics" => "Knitted",
    "material" => "100% Polyester",
    "style" => "mordern",
    "pattern" => "plush"
);

$product6['featured_image'] = "/assets/images/products/product-image-720090548_720x_b3cfc9c3-ffe3-42a3-9dae-0cbaa0e24437_2048x.jpg";
$product6['images'] = array();


$product7 = array();
$product7['id'] = 7;
$product7['title'] = "Men sport clothes";
$product7['price'] = "$50.36";
$product7['sale_price'] = "$64.12";
$product7['meta'] = array(
    "style" => "Europe",
    "theme" => "Love",
    "material" => "Crystal",
    "light_color" => "Various Colors Changing",
    "approximate_size" => "4.5*3*1.2cm",
    "approximate_weight" => "32g"
);

$product7['featured_image'] = "/assets/images/products/product-image-526963369_720x_89e836fa-58f2-4c62-9cfe-83d520118239_2048x.jpg";
$product7['images'] = array();

/**
* Home Ends
*/

array_push($products, $product1);
array_push($products, $product2);
array_push($products, $product3);
array_push($products, $product4);
array_push($products, $product5);
array_push($products, $product6);
array_push($products, $product7);

function getAllMen() {
    return json_encode($GLOBALS['products']);
}