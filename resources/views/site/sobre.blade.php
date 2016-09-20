@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1><span>Sobre Nós</span></h1>
                <p>Lorem Ipsum.</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->

    <div class="about-section section-padding">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-image">
                            <img class="img-responsive" src="images/about/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-info">
                            <h1>Suporte <span>Container</span></h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <ul class="info-list">
                                <li><i class="fa fa-check"></i>Lorem Ipsum</li>
                                <li><i class="fa fa-check"></i>Lorem Ipsum</li>
                                <li><i class="fa fa-check"></i>Lorem Ipsum</li>
                                <li><i class="fa fa-check"></i>Lorem Ipsum</li>
                                <li><i class="fa fa-check"></i>Lorem Ipsum</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- about section -->

    <div class="work-process image-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="process-accordion">
                        <div class="process-info">
                            <div class="section-title">
                                <h1>Lorem Ipsum</h1>
                                <h2>Lorem Ipsum</h2>
                            </div>
                            <div class="panel-group" id="process-accordion" role="tablist">
                                <div class="panel panel-default active-process">
                                    <div class="panel-heading" role="tab" id="initiation">
                                        <div class="process-number">
                                            <img class="img-responsive" src="images/process/2.png" alt="image">
                                        </div>
                                        <div class="process-bg">
                                            <img class="img-responsive" src="images/process/6.png" alt="image">
                                        </div>
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#process-accordion" href="#process" aria-expanded="true" aria-controls="process">
                                                Lorem Ipsum
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="process" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="initiation">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod fore to tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                                        </div>
                                    </div>
                                </div><!-- panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="selection">
                                        <div class="process-number">
                                            <img class="img-responsive" src="images/process/3.png" alt="image">
                                        </div>
                                        <div class="process-bg">
                                            <img class="img-responsive" src="images/process/7.png" alt="image">
                                        </div>
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#process-accordion" href="#process-one" aria-expanded="true" aria-controls="process-one">
                                                Lorem Ipsum
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="process-one" class="panel-collapse collapse" role="tabpanel" aria-labelledby="selection">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod fore to tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                                        </div>
                                    </div>
                                </div><!-- panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="programs">
                                        <div class="process-number">
                                            <img class="img-responsive" src="images/process/4.png" alt="image">
                                        </div>
                                        <div class="process-bg">
                                            <img class="img-responsive" src="images/process/8.png" alt="image">
                                        </div>
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#process-accordion" href="#process-two" aria-expanded="true" aria-controls="process-two">
                                                Lorem Ipsum
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="process-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="programs">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod fore to tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                                        </div>
                                    </div>
                                </div><!-- panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="finalize">

                                        <div class="process-number">
                                            <img class="img-responsive" src="images/process/5.png" alt="image">
                                        </div>
                                        <div class="process-bg">
                                            <img class="img-responsive" src="images/process/9.png" alt="image">
                                        </div>
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#process-accordion" href="#process-three" aria-expanded="true" aria-controls="process-three">
                                                Lorem Ipsum
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="process-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="finalize">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod fore to tempor incididunt ut labore et dolore magna aliqua ut enim ad.</p>
                                        </div>
                                    </div>
                                </div><!-- panel-default -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 hidden-xs hidden-sm">
                    <div class="process-image">
                        <img class="img-responsive" src="images/process/1.png" alt="image">
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- process -->

    <div class="timline-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Lorem Ipsum</h1>
                <h2>Lorem Ipsum</h2>
            </div>
            <div class="timline-content">
                <div class="timline-top">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="time-line hidden-xs">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="posted-date">
                                <ul class="posted list-inline">
                                    <li class="year">2014</li>
                                    <li class="year">2015</li>
                                    <li class="year">2016</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timline-bottom">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- timline section -->
@endsection