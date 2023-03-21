<?php
class pen{
    public $name;
    public $color;
    function set_name($name){
        $this->name = $name;
    }

    function set_color($color){
        $this->color =$color;
    }
    function get_name(){
        return $this-> name;
       
    }
    function get_color(){
        return $this-> color;
    }
}
$inkpen = new pen();
$inkpen->set_name('inkpen');
$inkpen->set_color('red');
echo "Name is ===>" . $inkpen->get_name();
echo"<br>";
echo "Color is ===>" . $inkpen->get_color();

?>