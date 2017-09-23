<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午10:17
 */
require __DIR__ . "/../src/ReflectionPropertyX.php";
require __DIR__ . "/Product.php";

$product = new Product();
$property = new \rayful\Tool\ReflectionPropertyX($product, "title");
$label = $property->getTag("label");
$var = $property->getTag("var");
$input = $property->getTag("input");
$tags = $property->getTags();

exit();