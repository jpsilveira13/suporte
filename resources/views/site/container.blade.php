@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1>Nossos  <span>Containers</span></h1>
                <p>Saiba mais nossos projetos em containers.</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->
    <div class="portfolio-section">
        <div class="portfolio-content container">
            <div class="text-center">
                <ul class="portfoli-menu">
                    <li><a href="#" class="active" data-filter="*">Todos os Containers</a></li>

                    <li><a href="#" data-filter=".almoxarifado">Almoxarifado</a></li>
                    <li><a href="#" data-filter=".vestiario">Vestiário</a></li>
                    <li><a href="#" data-filter=".normatizado">Normatizados</a></li>
                </ul>
            </div>
            <div class="row portfolio-filter portfolio-two">
                <div class="portfolio col-sm-6 container ">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 container">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 normatizado ">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/normatizados1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Normatizado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/normatizados1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 normatizado">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/normatizados2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Normatizado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/normatizados2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 vestiario">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/vestiario1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Vestiário</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/vestiario1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 vestiario">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/vestiario2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Vestiário</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/vestiario2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 normatizado ">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/normatizados3.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Normatizado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/normatizados3.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 normatizado">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/normatizados4.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Normatizado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/normatizados4.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 normatizado">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/normatizados5.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Normatizado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/normatizados5.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 almoxarifado">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/almoxarifa1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Almoxarifado Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/almoxarifa1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 almoxarifado">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/almoxarifa2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Almoxarifado</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/almoxarifa2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 vestiario">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/vestiario3.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Vestiário</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/vestiario3.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 vestiario">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/vestiario4.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Vestiário</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/vestirario4.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 container">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem8.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Container</h4>
                                <p>Montagem</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem8.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 container">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem10.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem10.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->


            </div> <!-- row -->
        </div> <!-- portfolio content -->
    </div> <!-- portfolio section -->

@endsection