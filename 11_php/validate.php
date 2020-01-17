<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset{
            width: 200px;
        }
        .error{
            color: red;
        }
        input{
            width: 100%;
        }
    </style>
</head>
<body>

<?php

    $nameError = false;
    $nameErrorMessage = "";

    function filter($text){
        $text = trim($text);
        $text = htmlentities($text,ENT_QUOTES);
        $text = stripslashes($text);
        return $text;
    }

    function nameFilter($name){
        global $nameError,$nameErrorMessage;
        $name = filter($name);
        $count = strlen($name);
        if($count<1){
            $nameError = true;
            $nameErrorMessage = "Name is Empty";
            return false;
        }else{
            if($count<4){
                $nameError = true;
                $nameErrorMessage = "Name is too short";
                return false;
            }else{

                if($count > 50){

                    $nameError = true;
                    $nameErrorMessage = "Name is too long";
                    return false;
                }else{

                    if(!preg_match("/^[a-zA-Z ]*$/",$name)){

                        $nameError = true;
                        $nameErrorMessage = "Only letters and white space allowed";
                        return false;

                    }else{

                        return $name;

                    }

                }

            }
        }
    }


    if(isset($_POST['btn'])){

        $uname = nameFilter($_POST['uname']);
        echo $uname;

    }

?>

<fieldset>
    <legend>Testing Form</legend>
    <form action="" method="post">
        <div class="">
            <lable>Your Name</lable>
            <br>
            <input type="text" name="uname" >
            <br>
            <?php if($nameError){ ?>
                <small class="error"><?php echo $nameErrorMessage; ?></small>
            <?php } ?>
        </div>
        <br>
        <button type="submit" name="btn" value="send">Run Test</button>
    </form>
</fieldset>

</body>
</html>