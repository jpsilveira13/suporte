@extends('site.layout')
@section('content')
    <div class="breadcrumb-section image-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <div class="container text-center">
                <h1><span>Fale</span> Conosco</h1>
                <p>Lorem Ipsum.</p>
            </div>
        </div><!-- breadcrumb content -->
    </div><!-- breadcrumb section -->

    <div class="contact-form-section section-padding">
        <div id="gmap"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="contact-info">
                        <h2>Manda mensagem para nós!</h2>
                        <form id="contact-form" class="contact-form" name="contact-form" method="post" action="#">
                            <div class="form-group">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" class="form-control name-field" required="required" placeholder="Seu nome">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" class="form-control mail-field" required="required" placeholder="Seu Email">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" class="form-control web-filed" required="required" placeholder="Telefone">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <textarea name="message" id="message" required="required" class="form-control message-filed" rows="7" placeholder="Escreva sua Mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar<i class="fa fa-arrow-right"></i></button>
                        </form><!-- contact form -->
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- contact form section -->
@endsection