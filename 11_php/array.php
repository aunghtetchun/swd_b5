<?php

$mySefl = array("name"=>"hein htet zan","age"=>26,"status"=>false,"address"=>"bahan");
$kyawWonna = array("name" => "kyaw Wanna","age "=>30,"status"=>true,"address"=>"lan bay");
$weekday = array(
    array("name"=>"hein htet zan","age"=>26,"status"=>false,"address"=>"bahan"),
    array("name" => "kyaw Wanna","age "=>30,"status"=>true,"address"=>"lan bay"),
    array("name" => "kyaw Wanna","age "=>30,"status"=>true,"address"=>"lan bay"),
    array("name" => "kyaw Wanna","age "=>30,"status"=>true,"address"=>"lan bay"),
    array("name" => "kyaw Wanna","age "=>30,"status"=>true,"address"=>"lan bay")
);

$arr = array("hein htet zan",26,false,"bahan");
$arr2 = array("kayw gyi",30,true,"lan bay");

$myClass = array(
    array("hein htet zan",26,false,"bahan"),
    array("kayw gyi",30,true,"lan bay"),
    array("hein htet zan",26,false,"bahan"),
    array("kayw gyi",30,true,"lan bay"),
    array("hein htet zan",26,false,"bahan"),
    array("kayw gyi",30,true,"lan bay"),
    array("hein htet zan",26,false,"bahan"),
    array("kayw gyi",30,true,"lan bay"),
);


$name = "hein htet zan";
$nameArr = explode(" ",$name);
echo join("=>",$nameArr);
?>



