<?php
class mouse{
    var $Brand;
    var $type;
    function __construct($Brand,$type){
        $this-> Brand = $Brand;
        $this->type = $type;
    }
    function __destruct(){
        echo "The mouse brand is: {$this-> Brand} <br> The type is: {$this->type}";

    }

}
 $mouse1 = new mouse("hp","wire-less");

?>