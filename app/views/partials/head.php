<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <!-- <script type="text/javascript" src="public/main.js"></script> -->
    <title>Weight App</title>
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Weight Tracker App</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#signInModal">
                Sign in
                </button>
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signUpModal">
                Sign up
                </button>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Weight Tracker App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <div class="loginInOutButtons">
                    <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#signInModal">
                    Sign in
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signUpModal">
                    Sign up
                    </button>
                </div>  
            </div>
        </div>
    </nav>

    <!-- Sing up modal form -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign in form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="/signin" method="post" class="signUpForm">
                        <label for="login">Login</label>
                        <input type="text" class="text_input" name="login" placeholder="Enter here your login">
                        <label for="password">Password</label>
                        <input type="password" class="text_input" name="password" placeholder="Enter here your password">
                        <input type="submit" class="submit_input" value="Sign in!">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sing up modal form -->

    <!-- Sing in modal form -->
    <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="/signup" method="post" class="signUpForm">
                        <label for="login">Login</label>
                        <input type="text" class="text_input" name="login" placeholder="Enter here your login">
                        <label for="password">Password</label>
                        <input type="password" class="text_input" name="password" placeholder="Enter here your password">
                        <label for="password_check">Confirm you password</label>
                        <input type="password" class="text_input" name="password_check" placeholder="Please confirm your password">
                        <input type="submit" class="submit_input" value="register!">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sing in modal form -->

    <div class="mainContainer">