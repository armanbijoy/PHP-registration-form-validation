<?php


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $password_confirm = post_data('password_confirm');
    $cv_url = post_data('cv_url');

    echo '<pre>';
    var_dump($username, $email, $password, $password_confirm, $cv_url);
    echo '</pre>';


}

function post_data($field)
{
    $_POST[$field] ??= '';

   return htmlspecialchars(stripslashes($_POST[$field]));
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="padding: 50px;">

<form action="" method="post" novalidate>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control "
                       name="username" value="">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                <div class="invalid-feedback">
                  
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control "
                       name="email" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control"
                       name="password" value="">
                <div class="invalid-feedback">
             
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password"
                       class="form-control"
                       name="password_confirm" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Your CV link</label>
            <input type="text" class="form-control"
                   name="cv_url" placeholder="https://www.example.com/my-cv" value=""/>
            <div class="invalid-feedback">
               
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Register</button>
    </div>
</form>

</body>
</html>