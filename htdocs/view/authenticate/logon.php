<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="316109740356-mt9l27vhaubr2tomqg9mb9ssd9e8865c.apps.googleusercontent.com">

        <link href="bootstrap/dist/css/MyCSS/bootstrap3/css/bootstrap.css" rel="stylesheet" />
        <link href="bootstrap/dist/css/MyCSS/login-register.css" rel="stylesheet" />

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        <script src="bootstrap/dist/css/MyCSS/jquery/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="bootstrap/dist/css/MyCSS/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap/dist/css/MyCSS/login-register.js" type="text/javascript"></script>


    </head>

    <script>
        function getName() {
            window.sessionStorage.setItem("User", document.getElementById("username").value);
            console.log(document.getElementById("username").value);
        }
        
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

            window.sessionStorage.setItem("User", profile.getName());
            window.sessionStorage.setItem("Img", profile.getImageUrl());
            window.sessionStorage.setItem("Email", profile.getEmail());


            $(document).ready(function () {
                $("body").append(
                        // Creating Form Div and Adding <h2> and <p> Paragraph Tag in it.
                        $("<form/>", {
                            id: 'formHidden',
                            action: "index.php?controller=Authenticate&action=google",
                            method: 'POST'
                        }).append(
                        // Create <form> Tag and Appending in HTML Div form1.
                        $("<input/>", {
                            type: 'hidden',
                            id: 'nome',
                            name: 'User',
                            placeholder: 'Your Name',
                            value: window.sessionStorage.getItem("User")
                        })
                        )
                        );

                $("#formHidden").submit();
            });

        }


    </script>
    <body>
        <div id="teste">


        </div>
        <form class="form-signin" method="post" action="index.php?controller=Authenticate&action=logon">
            <div class="container">
                <h2><img src="src/Imgs/logo.png"></h2>

                <h2><br>Bem Vindo!</h2>
                <div class="button">
                    <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                </div>
                <div class="modal fade login" id="loginModal">
                    <div class="modal-dialog login animated">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Login with</h4>
                            </div>
                            <div class="modal-body">  
                                <div class="box">
                                    <div class="content">
                                        <div class="social">
                                            <a id="google_login">
                                                <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="290px" data-height="40px" data-placeholder="Login with Google"></div>
                                            </a>
                                        </div>
                                        <div class="division">
                                            <div class="line l"></div>
                                            <span>or</span>
                                            <div class="line r"></div>
                                        </div>
                                        <div class="error"></div>
                                        <div class="form loginBox">
                                            <form method="post" accept-charset="UTF-8" id="login">
                                                <input id="username" class="form-control" type="text" placeholder="Usuário" name="username">
                                                <input id="password" class="form-control" type="password" placeholder="Senha" name="password">
                                                <input class="btn btn-default btn-login" type="submit" value="Login" onclick="getName()">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </form>
    </body>


</html>
