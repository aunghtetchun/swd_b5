<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Page</title>
</head>
<body>

<form action="server.php" method="post" enctype="multipart/form-data">
    <div class="">
        Name : <input type="text" name="uname">
    </div>
    <div class="">
        Email : <input type="email" name="email">
    </div>
    <div class="">
        Password : <input type="password" name="pass">
    </div>

    <div class="">
        Photo : <input type="file" name="photo[]" multiple>
    </div>

    <div>
        Skill
        <br>
        <label for="">
            HTML
            <input type="checkbox" name="skill[]" value="html">
        </label>
        <label for="">
            CSS
            <input type="checkbox" name="skill[]" value="css">
        </label>
        <label for="">
            JavaScript
            <input type="checkbox" name="skill[]" value="js">
        </label>
    </div>

    <hr>
<button type="submit">send</button>
</form>
    
</body>
</html>