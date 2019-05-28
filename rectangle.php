<?php
/**
 * Created by PhpStorm.
 * User: CollinsJumah
 * Date: 5/19/2019
 * Time: 07:53
 */

class rectangle{
    public $width=0;
    public $height=0;

    //constructor
    function __construct($w=0,$h=0)
    {
    $this->height=$h;
    $this->width=$w;
    }
//the setSize method has two urguments corresponding to width and height. Both have a default value of 0.
//using this refers to the class width and height attributes.
    function setSize($w=0,$h=0){
        $this->height=$h;
        $this->width=$w;
    }

    function getArea(){
        return($this->width*$this->height);
    }

    function getPerimeter(){
        return (($this->height+ $this->width)*2);
    }
    function isSquare(){
        if($this->width==$this->height){
            return true;
        }else{
            return false;
        }
    }
}
//because constructor is anaother method, it takes urguments, and values
// for those urgument can be provided when object is created.
class user{
    function __construct($id)
    {
        //
    }

}
$ob=new user(222);

?>