<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistemas Web</title>
        
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
         <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(main);
 
 var contador = 1;
  
 function main () {
   $('.menu_bar').click(function(){
     if (contador == 1) {
       $('nav').animate({
         left: '0'
       });
       contador = 0;
     } else {
       contador = 1;
       $('nav').animate({
         left: '-100%'
       });
     }
   });
  
   // Mostramos y ocultamos submenus
   $('.submenu').click(function(){
     $(this).children('.children').slideToggle();
   });
 }
    </script>
          <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#6d6d6d;
   }
   .box
   {
    width:1270px;
        padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>

<style type="text/css">
      
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      * {
	padding:0;
	margin:0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
      .menu_bar {
	display:none;
}
 
header {
	width: 100%;
}
 
header nav {
	background:#023859;
	z-index:1000;
	max-width: 1000px;
	width:95%;
	margin:20px auto;
}
 
header nav ul {
	list-style:none;
}
 
header nav ul li {
	display:inline-block;
	position: relative;
}
 
header nav ul li:hover {
	background:#E6344A;
}
 
header nav ul li a {
	color:#fff;
	display:block;
	text-decoration:none;
	padding: 20px;
}
 
header nav ul li a span {
	margin-right:10px;
}
 
header nav ul li:hover .children {
	display:block;
}
 
header nav ul li .children {
	display: none;
	background:#011826;
	position: absolute;
	width: 150%;
	z-index:1000;
}
 
header nav ul li .children li {
	display:block;
	overflow: hidden;
	border-bottom: 1px solid rgba(255,255,255,.5);
}
 
header nav ul li .children li a {
	display: block;
}
 
header nav ul li .children li a span {
	float: right;
	position: relative;
	top:3px;
	margin-right:0;
	margin-left:10px;
}
 
header nav ul li .caret {
	position: relative;
	top:3px;
	margin-left:10px;
	margin-right:0px;
}
 
@media screen and (max-width: 800px) {
	body {
		padding-top:80px;
	}
 
	.menu_bar {
		display:block;
		width:100%;
		position: fixed;
		top:0;
		background:#E6344A;
	}
 
	.menu_bar .bt-menu {
		display: block;
		padding: 20px;
		color: #fff;
		overflow: hidden;
		font-size: 25px;
		font-weight: bold;
		text-decoration: none;
	}
 
	.menu_bar span {
		float: right;
		font-size: 40px;
	}
 
	header nav {
		width: 80%;
		height: calc(100% - 80px);
		position: fixed;
		right:100%;
		margin: 0;
		overflow: scroll;
	}
 
	header nav ul li {
		display: block;
		border-bottom:1px solid rgba(255,255,255,.5);
	}
 
	header nav ul li a {
		display: block;
	}
 
	header nav ul li:hover .children {
		display: none;
	}
 
	header nav ul li .children {
		width: 100%;
		position: relative;
	}
 
	header nav ul li .children li a {
		margin-left:20px;
	}
 
	header nav ul li .caret {
		float: right;
	}
}
    </style>
	</head>
    <body>
    <?php
    error_reporting(0);
  if($this->session->get('identidad') != null){
    //echo $this->session->get('identidad');
    echo '
    <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php?c=cliente"><span class="icon-suitcase"></span>Usuarios</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Plan de estudio<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="index.php?c=plan_estudio">Ver plan de estudio <span class="icon-dot"></span></a></li>
						<li><a href="index.php?c=facultad">Facultades <span class="icon-dot"></span></a></li>
            <li><a href="index.php?c=programas">Programas <span class="icon-dot"></span></a></li>
            <li><a href="index.php?c=asignaturas">Asignaturas <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a><span class="icon-earth"></span>' . $this->session->get('nombres') . " " . $this->session->get('apellidos') . '</a></li>
				<li><a href="index.php?c=login&a=logout"><span class="icon-mail"></span>Cerrar sesión</a></li>
			</ul>
		</nav>
  </header>
  ';
  }else{
    header('Location: index.php?c=login');
  }
  ?>
  <div class="container box">
  