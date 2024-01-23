<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side-Nav</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="row">
    <div class="col-3 border border-2 mt-3 ms-3 nav-button" style="width: 200px;">
    <ul class="d-block list-unstyled ms-5 my-3 fs-5" style="line-height: 30px;">
        <li>
            <a href="index.html" class="nav-link">Home</a>
        </li>
        <li>
            <a href="creat.html" class="nav-link">Create</a>
        </li>
        <li>
            <a href="example.html" class="nav-link">Examples</a>
        </li>
        <li>
            <a href="login.html" class="nav-link">Login</a>
        </li>
        <li>
            <a href="register.html" class="nav-link">Register</a>
        </li>
    </ul>
    </div>
    <div class="col-3 mt-3 ms-3">
        <img src="2.PNG" id="button">
    </div>
    </div>

    <script>
$('#button').click(function(){
   $(".nav-button").slideToggle(800);
});
    </script>
</body>
</html>