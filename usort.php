<?php
class Car {
    function Car() {
        $this->model = "1";
    }
}
class bus{
    function bus(){
        $this->model="2";
    }
}

// create an object
$one = new Car();
echo "\n";
$two = new bus();
// show object properties
echo $one->model;
echo $two->model;
?>