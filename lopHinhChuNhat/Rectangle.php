<?php


class Rectangle
{
    private $width;
    private $height;

//    function set_width($width){
//        $this->width = $width;
//    }
//    function get_width($width){
//        return $this->width;
//    }
//    function set_height($height){
//        $this->height = $height;
//    }
//    function get_height($height){
//        return $this->height;
//    }


    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }

    public function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }

    public function display(){
        return "Rectangle{" . "width = " . $this->width . ", heigth = " . $this->height . "}";
    }

}
