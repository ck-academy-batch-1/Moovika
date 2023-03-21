<?php
class jewellery{
    public $type;
    public $design;
     
    function design1()
    {
        $this->curv;
    }
    function design2()
    {
        $this->round;
    }
    function __construct ($t,$d){
        $this->type = $t;
        $this->design = $d;
    }
}
class  jewellerycollection extends jewellery{
    public $collection=true;
}
$jewellery1 = new jewellerycollection('Bangle','Round');
echo $jewellery1 -> type;
echo $jewellery1 -> design;
echo $jewellery1 -> txt1();
?>