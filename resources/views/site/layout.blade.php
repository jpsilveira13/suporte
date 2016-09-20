<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-language" content="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="João Paulo da Silveira & Igor Roberto Silveira">
    <meta name="keywords" content="Suporte, Containers, Metalúrgica, Franquia, Franqueados, Brasil, Construção, Civil, Obras, Container, Locar, Aluguel, Locação, Negócio, Armazenamento, Habitação, Eventos, Agrícola, ">
    <meta name="author" content="João Paulo Silveira. FullStack Developer :D">

    <title>Suporte | Franquia, Locação e Aluguel de Containers</title>
    <meta name="description" content="">



    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- icons -->
    <link rel="icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Developed By Grid Bootstrap -->

</head>
<body>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box">
                        <span class="icon-left"><i class="fa fa-envelope"></i></span>
                        <a href="#">contato@suportecontainer.com.br</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="info-box pull-right">
                        <span>(34) XXXX.XXXX</span>
                        <span class="icon-right"><i class="fa fa-phone"></i></span>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- top-bar -->

    <div class="main-menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a class="logo" href="{{url('/')}}"><img class="img-responsive" src="{{url('images/container/logopadrao.png')}}" alt="Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li @if(Request::is('/')) class="active" @endif><a href="{{url('/')}}">Home</a></li>
                        <li><a href="features.html">Diferenciais</a></li>
                        <li><a @if(Request::is('sobre')) class="active" @endif href="{{url('sobre')}}">Sobre Nós</a></li>
                        <li><a @if(Request::is('servicos')) class="active" @endif href="{{url('servicos')}}">Serviços</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li @if(Request::is('contato')) class="active" @endif><a href="{{url('contato')}}">Contato</a></li>
                    </ul>
                </div>
            </div><!-- container -->
        </nav><!-- navbar -->
    </div><!-- main menu -->
</header><!-- Header -->

@yield('content')
<div class="clients-section image-bg">
    <div class="overlay"></div>
    <div id="brand-carousel" class="brand-item">
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/cartago.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/marco.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/mgo.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/transpetro.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/vli.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/cartago.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/marco.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/mgo.png" alt="Brand image">
        </div>
        <div class="brand-image">
            <img class="img-responsive" src="images/brand/transpetro.png" alt="Brand image">
        </div>
    </div>
</div><!-- brands -->
<footer class="footer">
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 no-padding">
                    <div class="contact-info left-contact">
                        <div class="contact-image image-box">
                            <img class="img-responsive" src="images/footer/1.png" alt="Image">
                        </div>
                        <div class="box-title">
                            <h3>Nossa localização</h3>
                            <p>Endereco</p>
                            <p>Uberaba - MG</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 no-padding">
                    <div class="contact-info opening-hour">
                        <div class="contact-image image-box">
                            <img class="img-responsive" src="images/footer/2.png" alt="Image">
                        </div>
                        <div class="box-title">
                            <h3>Atendimento</h3>
                            <p>Segunda - Sexat @09.00 - 17.00</p>
                            <p>Sexta & Sábado    @10.00 - 16.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 no-padding">
                    <div class="contact-info right-contact">
                        <div class="contact-image image-box">
                            <img class="img-responsive" src="images/footer/3.png" alt="Image">
                        </div>
                        <div class="box-title">
                            <h3>Fale Conosco</h3>
                            <p>Telefone: (34) xxxx.xxxx</p>
                            <p>Celular: (34) xxxx.xxxx</p>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            <div class="row">
                <div class="footer-logo text-center">

                    <a href="{{url('/')}}"><img class="img-responsive" src="{{url('images/container/logopadrao.png')}}" alt="Logo"></a>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- contact informetion -->

    <div class="footer-bottom">
        <div class="container">
            <div class="col-sm-6 copyright-text">
                <p>&copy; Suporte Container 2016 | Todos os direitos reservados</p>
            </div>

            <div class="col-sm-6">
                <ul class="footer-social list-inline">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-apple"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- footer bottom -->
</footer><!-- footer -->


<!-- script -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/inview.min.js')}}"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>