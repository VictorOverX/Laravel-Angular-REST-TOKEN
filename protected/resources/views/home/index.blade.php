@extends('app')

@section('content')
    
<!-- Home - Header -->
<section class="home-header dark">
    <div class="container">	
        <div class="row">
            <div class="col-sm-6 col-xs-10">
                <h4 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s" style="margin-bottom: 2px;">Bem Vindo a LineXTI</h4>
                <p class="large wow fadeInUp" data-wow-delay="1.8s" data-wow-duration="1.5s">Equipe de Freelancers® para desenvolvimento Web, mobile, e Softwares. </p>
                <div class="row wow fadeInUp"  data-wow-delay="2.6s" data-wow-duration="1.5s">
                    <div class="col-md-5">
                        <a class="btn btn-primary btn-short">Nosso trabalho</a>
                    </div>
                    <div class="col-md-5">
                        <a class="btn btn-warning btn-short">Solicite um orçamento</a>
                    </div>  
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
</section>

<!-- Home - About -->
<section class="about-product" id="about">
    <div class="container">	
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <header class="section-header">
                    <p class="subhead">Conheça as opções oferecidas pela </p>
                    <h2>LineXTI</h2>
                </header>	
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                <article>
                    <h5>Aumente as Vendas</h5>
                    <p>
						Seu site está nas primeiras páginas do Google? A internet ajuda seu negócio a vender mais? 
						Seu cliente encontra seu produto ou serviço de forma rápida pelos mecanismos de busca?
                    </p>
                </article>
            </div>
            <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                <article>
                    <div class="tline"></div>
                    <h5>Atendimento Virtual</h5>
                    <p>
                    	Atendemos todo o Brasil! Se você está longe não se preocupe, podemos atendê-lo utilizando 
                    	vídeo conferencia. Ligue e agende um horário com um de nossos consultores. <br /><strong><a href="">Fale com a nossa equipe.</a></strong>
                    </p>
                </article>
            </div>
            <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                <article>
                    <h5>Manutenção de sites</h5>
                    <p>
						Quer alterar algo no seu site, incluir um novo slider ou página, alterar um formulário? 
						Você está no lugar certo! <strong><a href="">Fale com a nossa equipe.</a></strong>
                    </p>
                </article>
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="{{ URL::to('assets/images/por-que-procurar-uma-agência-de-criacao-de-sites.jpg') }}" alt="pic" />
            </div>
        </div><!--row-->
    </div><!--container-->
</section>
<!-- Home - Gallery -->
<section class="gallery " id="gallery">
    <a class="striped-icon divider scroll" href="#gallery">
        <i class="fa fa-chevron-down"></i>
    </a>
    <div class="container">	
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <header class="section-header   wow fadeInUp" data-wow-duration="2s">
                    <p class="subhead">PORTFÓLIO</p>
                    <h2>Conheça nossos serviços</h2>
                </header>	
            </div>
        </div><!--row-->
    </div><!--container-->

    <div class="gallery-controls wow fadeInUp" data-wow-duration="2s" >
        <div id="filters" class="btn-group">
            <button type="button" class="btn btn-info active"  data-filter="*">Todos</button>
            <button type="button" class="btn btn-info"  data-filter=".office">Sites</button>
            <button type="button" class="btn btn-info"  data-filter=".workplace">Portais</button>
            <button type="button" class="btn btn-info"  data-filter=".team">Loja Virtual</button>
            <button type="button" class="btn btn-info"  data-filter=".team">Marcas</button>
        </div>
    </div>

    <div id="gallery-items" class="gallery-items wow fadeInUp" data-wow-duration="2s" >
        <figure class="gallery-item office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>
        <figure class="gallery-item team">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>
        <figure class="gallery-item wide office double">
            <img src="assets/images/placehold/384x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/384x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>
        <figure class="gallery-item wide team  double">
            <img src="assets/images/placehold/384x384.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/384x384.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item wide workplace office double">
            <img src="assets/images/placehold/384x384.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/384x384.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace  office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace team">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item office">
            <img src="assets/images/placehold/192x384.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x384.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item wide workplace double">
            <img src="assets/images/placehold/384x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/384x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace team">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item team office">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
        <figure class="gallery-item workplace">
            <img src="assets/images/placehold/192x192.gif" alt="gallery" />
            <figcaption>
                <a class="fancybox" href="assets/images/placehold/192x192.gif"><span aria-hidden="true" class="icon-plus"></span></a>
                <a href="#fakelink"><span aria-hidden="true" class="icon-info"></span></a>
            </figcaption>
        </figure>	
    </div>
    <div class="gallery-load">
        <button type="button" class="btn btn-primary">Mais Serviços</button>
    </div>

</section>


<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <header class="section-header">
                    <p class="subhead">O que podemos fazer por você…</p>
                    <h2>O que oferecemos</h2>
                </header>   
            </div>
        </div>< 
        <div class="row">
            
            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/design.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Criação de Sites</h4>  
                    <p>
                        A LineXTI é uma agência especializada em Criação de Sites e desenvolvimento de projetos 
                        voltados para Web com objetivo único de proporcionar um resultado profissional e um 
                        retorno na comunicação e interação com seus clientes através da Internet.
                    </p>
                </div>
            </div>

            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/sistemas.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Criação de Sistemas</h4>  
                    <p>
                        Desenvolvemos projetos e Sistemas Web visando a experiência já conhecida dos usuários 
                        criando recursos baseados nos procedimentos operacionais já utilizados para melhorar 
                        ainda mais a performance e segurança de todo o processo.
                    </p>
                </div>
            </div>

            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/loja-virtual.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Loja Virtual</h4>  
                    <p>
                        Alugue sua Loja Virtual para começar ou Compre sua Loja Virtual Ecommerce e pague em até 
                        10 X Sem Juros e seja dono do seu próprio negócio. Ou melhor! Começe Alugando a plataforma 
                        Virtual Ecommerce, e, se gostar, Compre-a e seja independente.
                    </p>
                </div>
            </div>

            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/fb-google-ads.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Google e Facebook Ads</h4>  
                    <p>
                        Criação e Gestão de campanhas de publicidade pagas nos 
                        principais canais de marketing digital dirigido objetivando 
                        posicionamento privilegiado com o menor custo X clique e retorno sobre o investimento.
                    </p>
                </div>
            </div>

            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/consultoria.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Consultoria Web</h4>  
                    <p>
                        Contrate nossos serviços de Consultoria Web e alavanque seu negócio queimando etapas, 
                        otimizando processos e maximizando resultados com quem entende do assunto quando se 
                        trata de Internet. De alguma maneira, podemos ajudá-lo!
                    </p>
                </div>
            </div>

            <div class="col-md-4 clearfix col-sm-6 col-xs-12 service-item wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; -webkit-animation-duration: 2s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
                <div class="service-img">
                    <img src="assets/images/services/redes-sociais.png" class="img-responsive">
                </div>
                <div class="service-box">
                    <h4>Redes Sociais</h4>  
                    <p>
                        Gestão de Perfis em Redes Sociais com Produção de conteúdo relevante para as principais 
                        Redes Sociais e Blogs com ações de marketing proporcionando interação e comunicação com seus clientes.
                    </p>
                </div>
            </div>            

        </div><!--row-->
    </div><!--container-->
</section>


<section class="steps wrap-text-pages is-divider " id="textpages">
    <a href="#textpages" class="striped-icon divider scroll"><i class="fa fa-chevron-down"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <header class="section-header wow fadeInUp no-margin-top" data-wow-duration="2s" >
                    <p class="subhead">search engine</p>
                    <h2>Marketing Digital</h2>
                    <p class="large">Torne seu site lucrativo com um planejamento de marketing digital. Traga mais acessos para seu site e obtenha mais resultados utilizando as ferramentas certas</p>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="col-md-offset-1 col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item top-item left-item">
                        <div class="dot-line"></div>
                        <h5>Inbound Marketing</h5>
                        <p> &nbsp;É o marketing que acreditamos e que os consumidores acreditam.</p>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item middle-item left-item">
                        <div class="dot-line"></div>
                        <h5>Marketing de Conteúdo</h5>
                        <p>  &nbsp;Criação de conteúdo único e relevante para sua empresa e seu público alvo.</p>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item bottom-item left-item">
                        <div class="dot-line"></div>
                        <h5>Redesign de Site</h5>
                        <p>  &nbsp;O site da sua empresa não deve ser apenas um cartão de visitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-image wow fadeInUp" data-wow-duration="2s" >
                <img src="assets/images/text-pages-img.png" alt="" class=" hidden-xs hidden-sm" />
            </div>
            <div class="col-md-4">
                <div class="col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item top-item right-item">
                        <div class="dot-line"></div>
                        <h5> Links Patrocinados</h5>
                        <p>  &nbsp;Seu anúncio na primeira página do Google</p>
                    </div>
                </div>
                <div class="col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item middle-item right-item">
                        <div class="dot-line"></div>
                        <h5>SEO </h5>
                        <p>  &nbsp;O seu Site não aparece no Google? Temos a solução para sua empresa.</p>
                    </div>
                </div>
                <div class="col-md-11 wow fadeInUp" data-wow-duration="2s" >
                    <div class="text-item bottom-item right-item">
                        <div class="dot-line"></div>
                        <h5>Redes Sociais</h5>
                        <p> &nbsp; Aproxime-se dos seus clientes nas Redes Sociais</p>
                    </div>
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
</section>

@endsection