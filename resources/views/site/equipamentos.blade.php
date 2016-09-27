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
                    <li><a href="#" class="active" data-filter="*">All Projects</a></li>
                    <li><a href="#" data-filter=".industrial">Industrial Construction</a></li>
                    <li><a href="#" data-filter=".plumbing">Home Plumbing</a></li>
                    <li><a href="#" data-filter=".supply">Power Supply</a></li>
                    <li><a href="#" data-filter=".shipment">Cargo Shipment</a></li>
                </ul>
            </div>
            <div class="row portfolio-filter portfolio-two">
                <div class="portfolio col-sm-6 industrial supply">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/1.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 plumbing supply shipment">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/2.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/2.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 industrial  plumbing supply">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/3.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/3.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 industrial supply shipment">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/4.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/4.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 plumbing supply shipment">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/5.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/5.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 plumbing shipment">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/6.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/6.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 industrial  plumbing shipment">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/7.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Interior Project</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/7.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->

                <div class="portfolio col-sm-6 industrial plumbing">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="images/portfolio/8.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum</p>
                            </div>
                            <div class="portfolio-icons">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="images/portfolio/8.jpg"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div> <!-- portfolio-item -->
                </div> <!-- portfolio -->
            </div> <!-- row -->
        </div> <!-- portfolio content -->
    </div> <!-- portfolio section -->

@endsection