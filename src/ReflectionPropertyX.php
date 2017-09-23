<?php
/**
 * 用于读取类里面的属性值,可以把在PHPDoc里面声明的任意@ 属性变成当前对象的真正属性
 * Created by PhpStorm.
 * User: kingmax
 * Date: 16/2/5
 * Time: 下午8:28
 */

namespace rayful\Tool;


class ReflectionPropertyX extends \ReflectionProperty
{
    /**
     * Tags Map.
     * @var array
     */
    private $tags = [];

    /**
     * __construct function.
     * @param mixed $class object or a string(class name)
     * @param string $name
     */
    public function __construct($class, $name)
    {
        parent::__construct($class, $name);
        $this->getAllTags();
    }

    /**
     * getAllTags function.
     * @return void
     */
    private function getAllTags()
    {
        if ($comment = $this->getDocComment()) {
            if (preg_match_all("/\@(\w+)(.*)/", $comment, $m)) {
                foreach ($m[0] as $i => $result) {
                    $tagName = $m[1][$i];
                    $tagValue = trim($m[2][$i]);
                    $this->setTag($tagName, $tagValue);
                }
            }
        }
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getTag($name)
    {
        if (isset($this->tags[$name])) {
            return $this->tags[$name];
        }
    }

    private function setTag($name, $value)
    {
        $this->tags[$name] = $value;
    }
}