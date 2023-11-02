<?php
include_once "Hewan.php";

class Anjing implements Hewan{

    public function berkembangBiak(){
        echo"Anjing berkembang biak dengan cara melahirkan";
    }
    public function berkomunikasi(){
        echo"Anjing berkomunikasi dengan cara menggonggong";
    }
}
