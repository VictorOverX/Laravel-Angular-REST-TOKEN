<!-- Footer - Tabs -->
<footer class="home-footer dark-map" id="contact">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav  nav-tabs-alt nav-tabs-two nav-tab-inverse" role="tablist">
            <li role="presentation" class="active">
                <a href="#contact-info" aria-controls="contact-info" role="tab" data-toggle="tab">Informações de Contato</a>
            </li>
            <li role="presentation">
                <a href="#service-inquiry" aria-controls="service-inquiry" role="tab" data-toggle="tab">Fale conosco</a>
            </li>
            <li role="presentation">
                <a href="#on-map" aria-controls="on-map" role="tab" data-toggle="tab">Exibir no mapa</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Informações de Contato -->
            <div role="tabpanel" class="tab-pane active" id="contact-info">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="footer-header">	
                            <h2>Informações de Contato</h2>
                            <p class="large">Sed condimentum ante ac quam varius pretium. Nunc ornare augue et elementum. Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.</p>
                        </div>	
                    </div>				
                </div><!--row-->
                <div class="row">
                    <div class="col-md-4">
                        <article class="contact-item">
                            <div class="dotted-line hidden-sm hidden-xs"></div>
                            <div class="striped-icon-xlarge">
                                <span aria-hidden="true" class="icon-pointer"></span>
                            </div>
                            <h5>Endereço</h5>
                            <p>25, Lomonosova St. Moscow, Russia, 665087</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="contact-item">
                            <div class="dotted-line hidden-sm hidden-xs"></div>
                            <div class="striped-icon-xlarge">
                                <span aria-hidden="true" class="icon-call-end"></span>
                            </div>
                            <h5>Telefone</h5>
                            <p>+55 (31) </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="contact-item">
                            <div class="striped-icon-xlarge">
                                <span aria-hidden="true" class="icon-envelope"></span>
                            </div>
                            <h5>E-mail</h5>
                            <p>contato@linexti.com.br</p>
                        </article>
                    </div>
                </div>
            </div><!--tabpanel-->

            <!-- Peça um oçamento -->
            <div role="tabpanel" class="tab-pane" id="service-inquiry">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="footer-header">	
                            <h2>FALE <strong>CONOSCO</strong></h2>
                        </div>	
                    </div>				
                </div><!--row-->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 contact-form">
                        <div id="response"></div>
                        <form  method="post" action="sendEmail.php" name="contact-form" id="contact-form">		             
                            <div>
                                <input type="text" placeholder="Assunto" value="" name="subject"  id="subject" class="form-control">
                            </div>
                            <div>
                                <input type="text" placeholder="Seu nome" value="" name="name" id="name" class="form-control">
                            </div>
                            <div>
                                <input type="email" placeholder="Seu email" value="" name="email" id="email" class="form-control">
                            </div>
                            <div>
                                <textarea id="message" class="form-control" rows="3" name="message" placeholder="Sua Mensagem"></textarea>
                            </div>
                            <div>
                                <input  class="contact_button button btn btn-primary btn-block" type="submit" name="submit" id="submit" value="Enviar sua mensagem" />
                            </div>
                        </form>	
                    </div>
                </div>
            </div><!--tabpanel-->

            <!-- Map -->
            <div role="tabpanel" class="tab-pane" id="on-map">
                <div id="mapCanvas"></div>
            </div><!--tabpanel-->

        </div><!--tab-content-->

        <!-- Copyright -->
        <div class="copyright-alt">
            <ul class="copyright-links list-inline">
                <li><a href="#fakelink"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#fakelink"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#fakelink"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                <li><a href="#fakelink"><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href="#fakelink"><i class="fa fa-instagram fa-lg"></i></a></li>
            </ul>			
            <p>&copy; 2011-{!! date("Y") !!} – LineXTI :: Todos os direitos reservados</p>
        </div>
    </div><!--container-->
</footer>  