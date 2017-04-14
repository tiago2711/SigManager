<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SigManager - Home</title>

        <!-- JQuery core-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- MDL core CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-orange.min.css">


        <!-- Bootstrap core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/dist/css/simple-sidebar.css" rel="stylesheet">
        <link href="bootstrap/dist/css/style.css" rel="stylesheet">  

        <!-- MyCSS -->
        <link href="bootstrap/dist/css/MyCSS/generico.css" rel="stylesheet">
        <link href="bootstrap/dist/css/MyCSS/admin.css" rel="stylesheet">
        <link href="bootstrap/dist/css/MyCSS/material-dashboard.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">

        <style>

            sidebar-wrapper
        </style>

        <script>
            function confirmExit() {
                var r = confirm("Deseja sair do SGC?");
                if (r === true) {
                    signOut();
                    return true;
                } else {
                    return false;
                }
            }


            function signOut() {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function () {
                    console.log('User signed out.');
                });
            }


            window.onload = function () {


                var user = window.sessionStorage.getItem("User");
                var img = window.sessionStorage.getItem("Img");
                //var email = window.sessionStorage.getItem("Email");
                document.getElementById("nome").innerHTML = user;
                document.getElementById("ftPerfil").src = img;
                //document.getElementById("email").innerHTML = email;

            }

        </script>

    </head>
    <body>

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SigManager - Home</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="?controller=Index&action=account" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
                                <li><a href="#">Another One</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md md-24">Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-wrapper">

            <p class="img_admin"><a href="?controller=Index&action=home"><img id="ftPerfil" src="src/Imgs/admin.png"</img></a></p>
            <h5 class="admin_user" id="nome"></h5>


            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="?controller=Index&action=home">Administradores</a></li>
                <li>
                    <a href="?controller=User&action=create"><i class="fa-icon fa-user-plus fa-lg" aria-hidden="true"></i>Inserir Novo Administrador</a>
                </li>
                <li>
                    <a href="?controller=User&action=list"><i class="fa-icon fa-list fa-lg" aria-hidden="true"></i>Lista de Administradores</a>
                </li>
            </ul>

            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="?controller=Index&action=home">Banco de Dados</a></li>
                <li>
                    <a href="?controller=News&action=create"><i class="fa-icon fa-newspaper-o fa-lg" aria-hidden="true"></i>Inserir Nova Notícia</a>
                </li>
                <li>
                    <a href="?controller=News&action=list"><i class="fa-icon fa-list fa-lg" aria-hidden="true"></i>Lista de Notícias</a>
                </li>
            </ul>

            <ul class="sidebar-nav">
                
                <li class="sidebar-brand">
                    <a href="?controller=Index&action=home">Opções</a></li>
                <li>
                <div class="admin">

                    <li> <a id="bt_account" href="?controller=Index&action=account" ><i class="fa-icon fa-user fa-lg" aria-hidden="true"></i>&nbsp; Minha Conta</a></li>
                    <li> <a id="bt_exit" href="index.php?controller=Authenticate&action=logoff" onclick="signOut();"><i class="fa-icon fa-sign-out fa-lg" aria-hidden="true"></i>&nbsp; Logout</a></li>
                </div>
            </ul>

        </div>



