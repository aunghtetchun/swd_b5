<?php

$x = 5;
define("TEST",5);

function aa(){
    global $x;
    return $x+5;
}

echo aa();

?>

<script>

    let x = 5;
    function aa(){
        return x+5;
    }

</script>