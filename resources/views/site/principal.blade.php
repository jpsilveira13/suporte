@extends('site.layout')
@section('content')
    <div class="home-section image-bg">
        <div class="overlay"></div>
        <div class="home-content">
            <div class="container text-center">
                <div class="col-md-12">
                    <h1>Bem vindo!</h1>
                    <h2>Impulsionando sua <span>Obra</span></h2>
                </div>
            </div><!-- container -->
        </div><!-- home content -->
    </div><!-- home -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 no-padding">
                    <div class="service house-plans image-bg">
                        <div class="overlay"></div>
                        <div class="box-title">
                            <h3 style="line-height: 35px;text-align:center;font-size:1.8em">Entregamos em todo território nacional.</h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-title">
                <h4 style="font-size: 1.9em;">Venda e locação de container de acordo com seu projeto.</h4>
            </div>
        </div><!-- container -->
    </div><!-- services -->

    <div class="features-section section-padding estilo-novo image-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title text-center">
                <h1>Por que escolher a Suporte Container?</h1>
                <h2 style="color: #fff">Nossos diferenciais são únicos</h2>
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
    <div class="service-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Nosso Serviços</h1>
                <h2>O que ofertamos para nossos clientes</h2>
            </div>
            <div class="service-tabs text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#residential" data-toggle="tab">Container Marítimo</a></li>
                    <li role="presentation"><a href="#industrial" data-toggle="tab">Container Reefer</a></li>
                    <li role="presentation"><a href="#plumbing" data-toggle="tab">Manutenções e modificações</a></li>
                    <li role="presentation"><a href="#shipment" data-toggle="tab">Casas, módulos e reparos</a></li>
                </ul>
            </div>

            <div class="tab-content service-content">
                <div role="tabpanel" class="tab-pane fade in active" id="residential">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/service/container-mari.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Container marítimo</h4>
                                <p>Trata-se de um container de aço corten, com assoalho de compensado naval em madeira de 28mm de espessura. É ideal para depósito e armazenagem de carga seca em geral.                                                                 Utilizados como depósitos em seu estado original, também pode transformar-se em escritório, sanitários, bilheterias e ou conforme a necessidade e projeto.</p>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="industrial">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Container Reefer</h4>
                                <p>Também conhecido como container frigorífico ou refrigerado, trabalha com temperaturas entre +25ºC a -25ºC.
                                    Ideal para armazenagem de congelados também é utilizado como câmara frigorífica estática, tendo a opção de se criar dois ambientes, congelado e resfriado, a partir de um único maquinário.
                                </p>
                                <p>Seu excelente isolamento térmico com até 15cm de poliuretano injetado, não se compara aos painéis de câmara frigoríficas existentes no mercado. Sua mobilidade imediata, sem comprometimento de sua estrutura é mais uma vantagem que esse tipo de container oferece.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/service/reefer.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="plumbing">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/service/reparos.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Manutenção, reparos e modificações</h4>
                                <p>Oferecemos erviços de solda conta com uma equipe altamente qualificada, com grande experiência na realização de reparos e modificações na parte estrutural de containers . Qualidade garantida das modificações e reparos realizados através de certificados emitidos pelos fabricantes dos materiais.</p>
                                <p>Possuímos um quadro de vistoriadores, e trabalhamos com um sistema de controle de qualidade, realizando pós reparos de 100 % das unidades reparadas, e disponibilizamos as fotos via sistema aos clientes.</p>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- tab pane -->

                <div role="tabpanel" class="tab-pane fade" id="shipment">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="service-info">
                                <h4>Casas, módulos e escritórios</h4>
                                <p>TA Suporte é referência no mercado e especialista em transformações de containers, utilizando material de primeira qualidade. Utilizamos equipamentos que oferecem um melhor acabamento durante os cortes de materiais (Máquinas de Plasma) e soldas (Máquinas de Soldas Mig e TIG).
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-image">
                                <img class="img-responsive" src="{{url('images/service/casas.jpg')}}" alt="image">
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
                    <h2>Nossos projetos</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-slider">
                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem1.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Container Construção</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem1.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem8.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Construção Container</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem8.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem3.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>ILorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem3.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem4.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem4.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem5.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem5.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem6.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem6.jpg')}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio">
                    <div class="portfolio-item">
                        <img class="img-responsive" src="{{url('images/portfolio/imagem11.jpg')}}" alt="image">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h4>Lorem Ipsumn</h4>
                            <p>Lorem Ipsumn</p>
                        </div>
                        <div class="portfolio-icons">
                            <a href="{{url('equipamentos')}}"><i class="fa fa-link"></i></a>
                            <a class="image-link" href="{{url('images/portfolio/imagem11.jpg')}}"><i class="fa fa-search"></i></a>
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
                            <h5>Henrique Massa | Diretor Engenharia - Constrenge Ferrovia</h5>
                            <p>Sou muito satisfeito em ser cliente de vocês. Não é toda empresa que trata o cliente desse modo. Tenho recebido muitos elógios sobre os nossos canteiros de obra sobre a organização e segurança, ficamos muito seguros em adquirir nosso containers com a <strong>Suporte</strong>. </p>

                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <h5>Luiz Guaritá Neto | Sócio Proprietário - RCG</h5>
                            <p>Faço questão de deixar meu depoimento a está excelente empresa. Acho importante sabermos reconhecer um bom serviço e elogiá-lo para que possa servir de estímulo e a Suporte Container continue sempre sempre no alto padrão de qualidade </p>

                        </div>
                    </div>
                </div>

                <div class="left-content">
                    <div class="testimonial">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-info">
                            <h5>Daniel Belli | Presidente - Grupo Carthago</h5>
                            <p>Quero agradecer imensamente pela eficiência pela qual fui atendido desde o primeiro contato com a empresa. Indicarei a Suporte para meus clientes e parceiros.  Desejo boa sorte e sucesso pra vocês.   </p>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- testimonial section -->


@endsection