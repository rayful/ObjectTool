<?php

/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午10:15
 */
class Product
{
    /**
     * @var string
     * @input
     */
    public $title;

    /**
     * @var string
     * @input text
     * @label 货号
     */
    public $sn;

    /**
     * @var string
     * @input textarea
     * @label 描述
     */
    public $description;

    /**
     * @var array
     * @input file
     */
    public $images;
}