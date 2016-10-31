@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1>Nossos <span>Serviços</span></h1>
                <p>A excelência a favor de nossos clientes</p>
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
                            <h4>Equipamentos para indústria</h4>
                        </div>
                    </div>

                    <div class="col-sm-4 no-padding">
                        <div class="item item-middle">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service2.png" alt="Image">
                            </div>
                            <h4>Equipamentos para comércio</h4>
                        </div>
                    </div>

                    <div class="col-sm-4 no-padding">
                        <div class="item item-right">
                            <div class="service-image">
                                <img class="img-responsive" src="images/service/service3.png" alt="Image">
                            </div>
                            <h4>Equipamentos para obras</h4>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- service-content -->
        </div><!-- container -->
    </div><!-- services section -->

    <div class="service-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Nossos serviços</h1>
                <h2>Veja alguns dos nossos serviços oferecidos ao nossos clientes</h2>
            </div>
            <div class="service-tabs text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#residential" data-toggle="tab">Container Marítimo</a></li>
                    <li role="presentation"><a href="#industrial" data-toggle="tab">Container Reefer</a></li>
                    <li role="presentation"><a href="#plumbing" data-toggle="tab">Manutenção e modificação</a></li>
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
                                <h4>Manutenção e modificações</h4>
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

@endsection