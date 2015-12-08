<?php
/**
 * Created by PhpStorm.
 * User: project
 * Date: 08/12/15
 * Time: 17:05
 */?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="SPK Project">
    <meta name="keywords" content="AHP ELECTRE AHP-ELECTRE">
    <meta name="author" content="SPK-09">
    <link rel='shortcut icon' type='image/x-icon' href='../../../../favicon.ico'/>
    <title>Login</title>
    <link href="../../../../assets/plugins/other_components/metro.ui/css/metro.css" rel="stylesheet">
    <link href="../../../../assets/plugins/other_components/metro.ui/css/metro-icons.css" rel="stylesheet">
    <link href="../../../../assets/plugins/other_components/metro.ui/css/metro-responsive.css" rel="stylesheet">

    <script src="../../../../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../../../assets/plugins/other_components/metro.ui/js/metro.js"></script>

    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
        }
    </style>
</head>
<body class="bg-darkTeal">
<div class="login-form padding20 block-shadow">
    <form>
        <h1 class="text-light">Login to service</h1>
        <hr class="thin"/>
        <br />
        <div class="input-control text full-size" data-role="input">
            <label for="user_login">User email:</label>
            <input type="text" name="user_login" id="user_login">
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
        </div>
        <br />
        <br />
        <div class="input-control password full-size" data-role="input">
            <label for="user_password">User password:</label>
            <input type="password" name="user_password" id="user_password">
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        </div>
        <br />
        <br />
        <div class="form-actions">
            <button type="submit" class="button primary">Login to...</button>
            <button type="button" class="button link">Cancel</button>
        </div>
    </form>
</div>
</body>
</html>