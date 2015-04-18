<?php
require 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/maintemplate.css" rel="stylesheet">
	
</head>

  <body>
	<header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <!--  <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li> 
              </ul> -->
              <form id="loginForm" class="navbar-form navbar-right">
                  <div class="form-group">
                  	<input name="user" type="text" placeholder="Id de Usuario" class="form-control"/>
                  </div>
                  <div class="form-group">
                  	<input name="password" type="password" placeholder="Contraseña" class="form-control" />
                  </div>
                  <input type="submit" class="btn btn-success" value="Entrar"></button>
              </form>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </header>
        <div class="main-container">
            <div class="sidebar hidden-xs">
            	<ul class="nav nav-sidebar">
                	<li class="active" >
                    	<a href="#">Administraci&oacute;n  <span class="sr-only">(current)</span></a>
                	</li>
                    <li id="createuser">
                    	<a href="#">Crear Usuarios<span class="sr-only"></span></a>
                    </li>
                    <li>
                      <a href="#">Añadir Compañias</a>
                    </li>
                </ul>
            </div>
            
    		<div class="wrapper" id="contentarea"></div>
	
        </div><!-- /.container-fluid-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

   
	<script src="jquery/jquery-2.1.3.min.js"></script>
  	<script src='js/application.js'></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
	
  
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--   <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>

