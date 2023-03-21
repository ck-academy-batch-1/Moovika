<?php
class Language
{
    public $family;
    public $location;

    function speaker(){
        $this-> speaker;
    }
    function writer(){
        $this-> writer;
    }
    function __construct ($f,$l){
        $this->family=$f;
        $this->location=$l;
    }
}

$Mothertoung = new Language('Indo-European','French');
echo "My language is  " . $Mothertoung-> family ."<br>";

echo "This language  broadly used at " . $Mothertoung-> location;

?>