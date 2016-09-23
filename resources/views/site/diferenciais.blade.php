@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1>Nossos <span>Serviços</span></h1>
                <p>Lorem Ipsum</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->

    <div class="services-section section-padding">
        <div class="container text-center">
            <div class="service-content">
                <div class="row">
                    <div class="col-sm-4 no-padding">
                        <div class="item item-left">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service.png" alt="Image">
                            </div>
                            <h4>Lorem Ipsum</h4>
                        </div>
                    </div>

                    <div class="col-sm-4 no-padding">
                        <div class="item item-middle">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service2.png" alt="Image">
                            </div>
                            <h4>Lorem Ipsum</h4>
                        </div>
                    </div>

                    <div class="col-sm-4 no-padding">
                        <div class="item item-right">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service3.png" alt="Image">
                            </div>
                            <h4>Lorem Ipsum</h4>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- service-content -->
        </div><!-- container -->
    </div><!-- services section -->

    <div class="service-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Our Services</h1>
                <h2>We Offer Our Clients</h2>
            </div>
            <div class="service-tabs text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#residential" data-toggle="tab">Residential Construction</a></li>
                    <li role="presentation"><a href="#industrial" data-toggle="tab">Industrial Construction</a></li>
                    <li role="presentation"><a href="#plumbing" data-toggle="tab">Home Plumbing</a></li>
                    <li role="presentation"><a href="#shipment" data-toggle="tab">Cargo Shipment</a></li>
                </ul>
            </div>

            <div class="tab-content service-content">
                <div role="tabpanel" class="tab-pane fade in active" id="residential">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service.jpg" alt="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Residential Construction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                                <ul class="service-structure list-inline">
                                    <li class="planing"><a href="#"><i class="fa fa-search"></i></a><span>Planning</span></li>
                                    <li class="analysis"><a href="#"><i class="fa fa-pencil"></i></a><span>Analysis</span></li>
                                    <li class="construc"><a href="#"><i class="fa fa-hand-pointer-o"></i></a><span>Construction</span></li>
                                    <li class="launch"><a href="#"><i class="fa fa-check"></i></a><span>Launch</span></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="industrial">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Industrial Construction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm temporaty incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                                <p>Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliqui off exo ea commodo consequat. Duis too aute irure dolor in reprehenderit. volupt velit esse cillum to the end.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service2.jpg" alt="image">
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="plumbing">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="service-item">
                                <div class="service-info">
                                    <h4>Home Plumbing consectetur adipisicing elit</h4>
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
                                <h4>Cargo shipment process</h4>
                                <p> Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
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

    <div class="features-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Why Choose Us</h1>
                <h2>We have awesome Features</h2>
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
                                    Experienced Engineers
                                </a>
                            </li>
                            <li role="presentation" class="before-middle">
                                <a class="feature-tab" href="#awesome" data-toggle="tab">
										<span class="features-image image-middle">
											<img class="img-responsive" src="images/features/2.png" alt="Image">
										</span>
                                    Awesome Architecture
                                </a>
                            </li>
                            <li role="presentation" class="features-before">
                                <a class="feature-tab" href="#lifetime" data-toggle="tab">
										<span class="features-image features">
											<img class="img-responsive" src="images/features/3.png" alt="Image">
										</span>
                                    Lifetime Client Support
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
                                            <img class="img-responsive" src="images/features/1.jpg" alt="image">
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
                                            <img class="img-responsive" src="images/features/2.jpg" alt="image">
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
                                            <img class="img-responsive" src="images/features/3.jpg" alt="image">
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
@endsection