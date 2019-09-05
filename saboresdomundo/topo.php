<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="manifest" href="/SaboresDoMundo/saboresdomundo/manifest.json">


    <style>

    	@media only screen and (max-width: 600px) {
    		p#icon_fade_mobile{
    			display: none;
    		}
    	}

    	form#form_principal{
    		margin: 2%!important;
    		margin-left: 0px!important;
    		margin-right: 0px!important;
    	}

    	.bold-1{
    		font-weight: 500;
    	}

    	.list-group-item.active {
    	    background-color: #e64a19!important;
    	    border-color: #e64a19!important;
    	}


    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <a class="navbar-brand waves-effect" href="#" >
                    <strong class="bold-1" style="color: #f4511e;">Sabores do Mundo</strong>
                </a>

               

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect bold-1" href="#">Home
						</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect bold-1" href="#" target="">Novas Receitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect bold-1" href="#" target="">Mais Vistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect bold-1" href="#" target="">Receitas Internacionais</a>
                        </li>
                       
                    </ul>

                   
                </div>

                <form class="form-inline" id="busca_principal" style="padding: 0px!important;">
                	<input class="form-control" id="busca_principal" type="text" placeholder="Pesquise Aqui" aria-label="Pesquise Aqui">
                </form>

                <div class="collapse navbar-collapse" align="right">
                	<!-- Right -->
                	<ul class="navbar-nav nav-flex-icons">
                	    <li class="nav-item">
                	        <a href="#" class="nav-link waves-effect" target="">
                	            <i class="fab fa-facebook-f"></i>
                	        </a>
                	    </li>
                	</ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <p id="icon" style="text-shadow: rgb(179, 32, 16) 0px 0px 0px, rgb(181, 33, 16) 1px 1px 0px, rgb(183, 33, 17) 2px 2px 0px, rgb(186, 33, 17) 3px 3px 0px, rgb(188, 34, 17) 4px 4px 0px, rgb(190, 34, 17) 5px 5px 0px, rgb(193, 35, 17) 6px 6px 0px, rgb(195, 35, 18) 7px 7px 0px, rgb(198, 36, 18) 8px 8px 0px, rgb(200, 36, 18) 9px 9px 0px, rgb(202, 37, 18) 10px 10px 0px, rgb(205, 37, 18) 11px 11px 0px, rgb(207, 37, 19) 12px 12px 0px, rgb(210, 38, 19) 13px 13px 0px, rgb(212, 38, 19) 14px 14px 0px, rgb(214, 39, 19) 15px 15px 0px, rgb(217, 39, 20) 16px 16px 0px, rgb(219, 40, 20) 17px 17px 0px, rgb(222, 40, 20) 18px 18px 0px, rgb(224, 40, 20) 19px 19px 0px, rgb(226, 41, 20) 20px 20px 0px, rgb(229, 41, 21) 21px 21px 0px, rgb(231, 42, 21) 22px 22px 0px, rgb(233, 42, 21) 23px 23px 0px, rgb(236, 43, 21) 24px 24px 0px, rgb(238, 43, 21) 25px 25px 0px, rgb(241, 43, 22) 26px 26px 0px, rgb(243, 44, 22) 27px 27px 0px, rgb(245, 44, 22) 28px 28px 0px, rgb(248, 45, 22) 29px 29px 0px, rgb(250, 45, 23) 30px 30px 0px, rgb(253, 46, 23) 31px 31px 0px; font-size: 58px; color: rgb(255, 255, 255); height: 139px; width: 139px; line-height: 139px; border-radius: 17%; text-align: center; background-color: rgb(255, 46, 23);"> SM </p> 	

            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-stream mr-3"></i>Pagina Inicial
                </a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-star mr-3"></i>Receitas Favoritas</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-cogs mr-3"></i>Configurações</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-sign-out-alt mr-3"></i>Sair</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            