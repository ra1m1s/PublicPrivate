<?php

class Phone{
public $gamintojas;
public $metai;
public $modelis;
public $bukle;

function __construct($gamintojas = null, $metai = null , $modelis = null , $bukle = null){
    $this->maker = $gamintojas;
    $this->year = $metai;
    $this->model = $modelis;
    $this->condition = $bukle;

}




}







?>