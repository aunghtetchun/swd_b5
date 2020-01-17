<?php
$firstName = "ko ";
$lastName = "$firstName htet";
$indexArr = ['name','age','san kyi tar',false];
$arr = array('name','age','location',false);
$assoc = array("name"=>"hein htet zan","age"=>26,"sataus"=>false);


for ($i=1; $i <= 10 ; $i++) { 
    echo "hello $i <br>";
}
echo "<hr>";
foreach ($indexArr as $k=>$x) {
    echo "$k-$x <br>";
}
echo "<hr>";
foreach ($assoc as $key => $value) {
    echo "$key - $value <br>";
}



?>


<script>

    let name = "hein htet zan";
    let locaiton = 'bahan';
    let skill = `${name} web design`;

    class Aa{

    }
    let aa = new Aa();

    let myself = ['name','age',false];
    let obj = {name:"hein htet zan",age:26,status:false};

</script>