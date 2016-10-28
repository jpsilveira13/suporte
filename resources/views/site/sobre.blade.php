@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1><span>Sobre Nós</span></h1>
                <p>Saiba mais sobre nossa empresa.</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->

    <div class="about-section section-padding">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-image">
                            <img class="center-block img-responsive" src="{{url('images/about/about.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-info">
                            <h1>Suporte <span>Container</span></h1>
                            <p>No mercado desde 2012, com indústria e distribuição localizada na cidade de Uberaba Minas Gerais, a Suporte Containers é composta por uma equipe de profissionais especializados na fabricação, customização e locação de containers e módulos habitacionais. Com o conhecimento técnico de seus profissionais, a SUPORTE está sempre preparada para atender com rapidez, oferecendo ao cliente o equipamento adequado no momento apropriado e pelo tempo necessário, atendendo através da  venda e de locação de seus produtos.</p>
                            <ul class="info-list">
                                <li><i class="fa fa-check"></i>Os produtos da Suporte são fabricados e customizados interna e externamente de forma normatizada, NR10, NR18 e NR31, apresentando laudos técnicos individuais emitidos por técnicos especialistas.</li>
                                <li><i class="fa fa-check"></i>Nossos produtos geram economia e agilidade comparadas ás estruturas convencionais, nossos containers são provenientes da renovação e customização de marítimos para uso habitacional, utilizando de matérias primas ecologicamente corretas. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- about section -->
    <div class="timline-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1>Linha do Tempo</h1>
                <h2>Um pouquinho de nós!</h2>
            </div>
            <div class="timline-content">
                <div class="timline-top">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Nascimento Suporte Container</h4>
                                <p>A Suporte nasceu para oferecer soluções modulares normatizadas como opção inovadora de espaços permanentes ou temporários.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Confiança</h4>
                                <p>Com confiança de nossos clientes a Suporte Container começou a fabricar containers customizados internamente e externamente de forma normatizada, NR10, NR18 e NR31, apresentando laudos técnicos individuais emitidos por técnicos especialistas. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Visão</h4>
                                <p>Ter reconhecimento em todo território nacional como uma das melhores provedoras de soluções modulares.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="time-line hidden-xs">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="posted-date">
                                <ul class="posted list-inline">
                                    <li class="year">2012</li>
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
                                <h4>Responsabilidade</h4>
                                <p> Sempre trabalhando com responsabilidade e pontualidade nos projetos executados a Suporte Container conquistou confiança dos seus clientes.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="timline-panel">
                                <div class="timline-overlay"></div>
                                <h4>Clientes</h4>
                                <p>Prezando pela excêlencia em atendimento, a Suporte Container acredita que o cliente é parte principal em nossa empresa. Por isso trabalhamos continuamente para manter sua satisfação é confiança.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </div><!-- timline section -->
    <br /><br /><br /><br />
@endsection