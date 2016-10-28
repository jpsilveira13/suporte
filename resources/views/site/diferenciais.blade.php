@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1>Nossos <span>Diferenciais</span></h1>
                <p>A excelência do nosso produto para você.</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->
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
                                            <p>A <strong>Suporte container</strong> conta com uma equipe altamente qualificada , nossos colaboradores possuem treinamentos adequados, além de um processo de qualificação interna. Oferecemos aos nossos clientes serviços e produtos com qualidade, garantia e custo benefício diferenciado. Equipe com grande experiência na realização de reparos e modificações na parte estrutural de containers.</p>
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
                                            <p>Pensando em cada cliente como único, analisamos seu projeto e trabalhamos com prazo real. Assim, ao assumirmos esse compromisso, colocamos como objetivo principal o prazo aliado à qualidade para cumprirmos com seriedade e o entregarmos ao cliente na certeza da sua total satisfação.</p>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- tab pane -->

                            <div role="tabpanel" class="tab-pane" id="lifetime">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="features-info">
                                            <p>Atendendo a rigorosa exigência do mercado, a legislação e sempre encontrando a melhor relação custo benefício para nossos clientes fomos aumentando nossa equipe, qualificando os mesmos e nos tornando uma das maiores empresas especializadas em containers do Brasil.</p>

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
    <div class="skills-section">
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="skills-image">
                        <img class="img-responsive" src="images/features/feature.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills-info">
                        <div class="section-title">
                            <h1>Nossos Diferenciais</h1>
                            <h2>Juntos oferecemos o melhor serviço para o nosso cliente</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                        </div>

                        <div class="skill">
                            <label>Planejamento</label>
                            <div class="skill-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                    </div>
                                </div>
                            </div>

                            <label>Equipe</label>
                            <div class="skill-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
                                    </div>
                                </div>
                            </div>

                            <label>Qualidade</label>
                            <div class="skill-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                    </div>
                                </div>
                            </div>

                            <label>Serviço</label>
                            <div class="skill-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                    </div>
                                </div>
                            </div>
                        </div><!-- skill -->
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- skills section -->

@endsection