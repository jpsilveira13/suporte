@extends('site.layout')
@section('content')
    <div class="home-section image-bg">
        <div class="overlay"></div>
        <div class="home-content">
            <div class="container text-center">
                <h1>Bem vindo!</h1>
                <h2>Impulsionando sua <span>Obra</span></h2>
            </div><!-- container -->
        </div><!-- home content -->
    </div><!-- home -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 no-padding">
                    <div class="service house-plans image-bg">
                        <div class="overlay"></div>
                        <div class="image-box">
                            <img class="img-responsive" src="images/service/3.png" alt="Image">
                        </div>
                        <div class="box-title">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, cons. adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-title">
                <h4>Executamos seu projeto, contando com profissionais qualificados.</h4>
            </div>
        </div><!-- container -->
    </div><!-- services -->

    <div class="features-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Por que escolher a Suporte Container?</h1>
                <h2>Nossos diferenciais são únicos</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-5 no-padding">
                    <div class="features-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active features-before">
                                <a class="feature-tab" href="#experienced" data-toggle="tab">
										<span class="features-image features">
											<img class="img-responsive" src="images/features/1.png" alt="Image">
										</span>
                                    Equipe Técnica
                                </a>
                            </li>
                            <li role="presentation" class="before-middle">
                                <a class="feature-tab" href="#awesome" data-toggle="tab">
										<span class="features-image image-middle">
											<img class="img-responsive" src="images/features/2.png" alt="Image">
										</span>
                                    Prazo
                                </a>
                            </li>
                            <li role="presentation" class="features-before">
                                <a class="feature-tab" href="#lifetime" data-toggle="tab">
										<span class="features-image features">
											<img class="img-responsive" src="images/features/3.png" alt="Image">
										</span>
                                    Compromisso
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-7 no-padding">
                    <div class="right-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="experienced">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="feature-image">
                                            <img class="img-responsive" src="{{url('images/container/equipe-tecnica.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="features-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur for adipisicing elit, sed do eiusmod tempor to incidiunt ut labore et dolore magna aliquai. Ut enim ad minim veniam, quis nostr.</p>
                                            <ul class="features-list">
                                                <li><i class="fa fa-angle-right"></i>Vestibulum pulvinar commodo.</li>
                                                <li><i class="fa fa-angle-right"></i>Pellentesque id massa et ligula con.</li>
                                                <li><i class="fa fa-angle-right"></i>Vivamus sed nunc sed ligula rhon.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- tab pane -->

                            <div role="tabpanel" class="tab-pane" id="awesome">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="feature-image">
                                            <img class="img-responsive" src="{{url('images/container/tempo-img.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="features-info">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et.</p>
                                            <ul class="features-list">
                                                <li><i class="fa fa-angle-right"></i>Vel illum dolore eu feugiat.</li>
                                                <li><i class="fa fa-angle-right"></i>Pellentesque id massa et ligula con.</li>
                                                <li><i class="fa fa-angle-right"></i>Vivamus sed nunc sed ligula rhon.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- tab pane -->

                            <div role="tabpanel" class="tab-pane" id="lifetime">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="features-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur for adipisicing elit, sed do eiusmod tempor to incidiunt ut labore et dolore magna aliquai. Ut enim ad minim veniam, quis nostr.</p>
                                            <ul class="features-list">
                                                <li><i class="fa fa-angle-right"></i>Vestibulum pulvinar commodo.</li>
                                                <li><i class="fa fa-angle-right"></i>Pellentesque id massa et ligula con.</li>
                                                <li><i class="fa fa-angle-right"></i>Vivamus sed nunc sed ligula rhon.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 no-padding">
                                        <div class="feature-image image-right">
                                            <img class="img-responsive" src="{{'images/container/compromisso.jpg'}}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- tab pane -->
                        </div><!-- tab content -->
                    </div><!-- right-content -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- features section -->
    <div class="service-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Nosso Serviços</h1>
                <h2>O que ofertamos para nossos clientes</h2>
            </div>
            <div class="service-tabs text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#residential" data-toggle="tab">Container para Área industrial</a></li>
                    <li role="presentation"><a href="#industrial" data-toggle="tab">Container para área Construção</a></li>
                    <li role="presentation"><a href="#plumbing" data-toggle="tab">Container para Armazenamento</a></li>
                    <li role="presentation"><a href="#shipment" data-toggle="tab">Vendas de Containers</a></li>
                </ul>
            </div>

            <div class="tab-content service-content">
                <div role="tabpanel" class="tab-pane fade in active" id="residential">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/container/imgindustrial.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Área Industrial</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                                <ul class="service-structure list-inline">
                                    <li class="planing"><a href="#"><i class="fa fa-search"></i></a><span>Planejamento</span></li>
                                    <li class="analysis"><a href="#"><i class="fa fa-pencil"></i></a><span>Análise</span></li>
                                    <li class="construc"><a href="#"><i class="fa fa-hand-pointer-o"></i></a><span>Entrega</span></li>
                                    <li class="launch"><a href="#"><i class="fa fa-check"></i></a><span>Aceitação</span></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="industrial">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Container para construção</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                                <p>Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/container/container-construcao.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="plumbing">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="service-item">
                                <div class="service-info">
                                    <h4>Container Armazenamento</h4>
                                    <p> Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="shipment">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Venda de Container</h4>
                                <p> Typi non hoabent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-info">
                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                <ul>
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Cargo shipment consectetur adipisicing elit</li>
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Typi non habent claritatem insitam</li>
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Investigationes demonstraverunt lectores legere me lius quod </li>
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Humanitatis per seacula quarta decima et quinta decima</li>
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ut enim ad minim veniam, quis nost exercitation ullamco</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->
            </div><!-- tab content -->
        </div><!-- container -->
    </div><!-- service section -->

    <div class="portfolio-section">
        <div class="portfolio-title image-bg">
            <div class="overlay"></div>
            <div class="section-title">
                <div class="container">
                    <h1>Participação em inovação</h1>
                    <h2>Obras que participamos</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-slider">
                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/1.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/1.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/2.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/2.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/3.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>ILorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/3.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/4.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/4.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/2.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/2.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/3.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/3.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/1.jpg" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="project-details.html"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="images/portfolio/1.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- portfolio content -->
    </div><!-- portfolio section -->

    <div class="testimonial-section image-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="testimonial-slider">

                <div class="left-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Ashiful Haque | CEO, AsceticDesigners</h5>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Jhon Doe | CTO, GridBootstrap</h5>
                        </div>
                    </div>
                </div>

                <div class="left-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Stephen Lee | Marksell LTD.</h5>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Jhon Hog | VC, Baselion</h5>
                        </div>
                    </div>
                </div>

                <div class="left-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Mark Lee | CEO, ABC Design</h5>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and pesetting to industry. Lorem Ipsum has been the industry's standard dummy tet ever since they 1500s, </p>
                            <h5>Mard Devid | Aricell Developer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- testimonial section -->


@endsection