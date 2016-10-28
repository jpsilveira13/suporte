@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1>Nossos  <span>Equipamentos</span></h1>
                <p>Saiba mais os equipamentos cujo quais trabalhamos</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->
    <div class="portfolio-section">
        <div class="portfolio-content container">
            <div class="text-center">
                <ul class="portfoli-menu">
                    <li><a href="#" class="active" data-filter="*">Todos os equipamentos</a></li>
                    <li><a href="#" data-filter=".container">Containers</a></li>
                    <li><a href="#" data-filter=".geradores">Geradores</a></li>
                    <li><a href="#" data-filter=".compressores">Compressores</a></li>
                    <li><a href="#" data-filter=".projetos">Projetos</a></li>
                </ul>
            </div>
            <div class="row portfolio-filter portfolio-two">
                <div class="portfolio col-sm-6 container supply">
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
                <div class="portfolio col-sm-6 container supply">
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
                <div class="portfolio col-sm-6 container supply">
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
                <div class="portfolio col-sm-6 compressores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/compreensor/compreensor1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Compreensor</h4>
                                <p>Montagem</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/compreensor/compreensor1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div>
                <div class="portfolio col-sm-6 compressores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/compreensor/compreensor2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Compreensor</h4>
                                <p>Montagem</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/compreensor/compreensor2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div>
                <div class="portfolio col-sm-6 container supply">
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
                <div class="portfolio col-sm-6 container supply">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem11.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem11.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 container supply">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/containersite/imagem13.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/containersite/imagem13.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 projetos supply">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 geradores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/gerador/gerador1.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Gerador</h4>
                                <p>150 KVA</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/gerador/gerador1.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 geradores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/gerador/gerador4.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Gerador</h4>
                                <p>Gerador 500 KVA 2</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/gerador/gerador4.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 geradores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/gerador/gerador5.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Gerador</h4>
                                <p>Gerador 500 KVA </p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/gerador/gerador5.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto3.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto3.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 geradores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/gerador/gerador2.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Gerador</h4>
                                <p>Gerador 300 KVA</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/gerador/gerador2.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 geradores">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/gerador/gerador3.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Gerador</h4>
                                <p>Gerador 300kVA 2</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/gerador/gerador3.jpg')}}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto4.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Interior Project</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto4.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto5.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto5.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto6.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto6.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto7.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto7.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto8.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto8.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
                <div class="portfolio col-sm-6 projetos">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/projetos/projeto9.jpg')}}" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="{{url('images/projetos/projeto9.jpg')}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

            </div> <!-- row -->
        </div> <!-- portfolio content -->
    </div> <!-- portfolio section -->

@endsection