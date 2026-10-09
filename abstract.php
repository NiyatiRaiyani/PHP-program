<?php
abstract class productfeature{

    abstract function productdetails();
    abstract function productimages();
    abstract function productownerdetails();
}

class uploadproduct extends productfeature{

    function productdetails(){
        echo "Pd";
    }

    function productimages(){
        echo "PI";
    }

    function productownerdetails(){
        echo "pwD";
    }
}
$upload = new uploadproduct();
echo "<br>";
$upload->productdetails();
echo "<br>";
$upload->productimages();
echo "<br>";
$upload->productownerdetails();
    