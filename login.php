<?php 

define('__CONFIG__', true);
require_once "inc/config.php";

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login to PHP Login System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/assets/css/main.css">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />

        <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <h2>Log in to your account</h2>
            </div>
            <!-- form login -->
            <form class="uk-form-stacked js-login">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Email</label>
                        <div class="uk-inline uk-width-1-3@s">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input class="uk-input" type="email">
                      </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-password">Password</label>
                    <div class="uk-inline uk-width-1-3@s">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                        <input class="uk-input" type="password">
                    </div>
    
                <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">LOGIN</button>
                <p>Or you would like to :</p>
                <a href="register.php">Sign up for an account!</a></br>
                <a href="#">Recover my password</a></br>
                <a href="index.php">Go back to homepage</a>
                </div>
                

            </form>
        </div>
        <?php require_once "inc/footer.php"; ?>
    </body>
</html>