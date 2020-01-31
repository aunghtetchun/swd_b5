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
            width: 300px;
            margin: 100px auto;
        }
        .form-group{
            margin-bottom: 10px;
        }
        .form-group input{
            width: 100%;
        }
    </style>
</head>
<body>

<form action="">

    <fieldset>
        <legend>Contact Create Form</legend>
        <div class="form-group">
            <lable>Name</lable>
            <br>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <lable>Phone</lable>
            <br>
            <input type="number" name="phone">
        </div>
        <div class="form-group">

            <button type="submit" name="create" value="add">Add Contact</button>
        </div>

    </fieldset>

</form>

</body>
</html>