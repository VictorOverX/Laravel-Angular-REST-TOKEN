<!-- Navigation -->
<header class="header">
    <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container relative-nav-container">
            <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-navicon"></i>
            </a>
            <a class="navbar-brand scroll" href="">
                <img class="normal-logo hidden-xs" src="assets/images/logo.png" alt="logo"/>
                <img class="inverse-logo hidden-xs" src="assets/images/logo-w.png" alt="logo"/>
                <img class="visible-xs-block" src="assets/images/logo-sign2.png" width="40" height="44" alt="logo"/>
            </a>
            <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                <li><a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a></li>
                <li class="open-signup">
                    <a href="#fakelink"><i class="fa fa-user"></i></a>
                    <div class="wrap-login-signup">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs-alt nav-tabs-one" role="tablist">
                                <li role="presentation" class="active"><a  href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Cadastrar</a></li>
                                <li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Logar</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active text-center" id="signup">
                                    <div class="signup-content">
                                        <h5>Novo Cliente</h5>
                                        <a href="#" class="signup-facebook">
                                            <i class="fa fa-facebook-square">&nbsp;&nbsp;</i>Entrar com o facebook
                                        </a>
                                        <span class="or-sep">ou</span>
                                        <form class="form">
                                            <div class="form-group">
                                                <input placeholder="Seu endereço de email" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="submit-button form-control" value="Nova Conta" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="login">

                                    <div class="signup-content">
                                        <h5>Nova Conta</h5>
                                        <form class="form">
                                            <div class="form-group">
                                                <input placeholder="Email" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input placeholder="Senha" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="submit-button form-control" value="Logar" />
                                            </div>
                                        </form>
                                        <span class="forgot">Esqueceu <a href="#">sua senha?</a>?</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="navbar-collapse collapse floated" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border">  
                    <li class=" ">
                        <a href="#">Home</a>                                
                    </li>

                    <li class=" ">
                        <a href="#">Equipe</a>                                
                    </li>

                    <li>
                        <a href="#">Serviços</a>
                        <div class="wrap-inside-nav">
                            <div class=" inside-col">
                                <ul class="inside-nav">
                                    <li><a href="">Service 1</a></li>
                                    <li><a href="">Service 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="">Produtos</a></li>

                    <li>
                        <a href="#">Portfólio</a>
                        <div class=" wrap-inside-nav">
                            <div class=" inside-col">
                                <ul class="inside-nav">
                                    <li><a href="gallery.html">Gallery Tiles</a></li>
                                    <li><a href="gallery-2.html">Gallery 2 Columns</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                        <div class=" wrap-inside-nav">
                            <div class=" inside-col">
                                <ul class="inside-nav">
                                    <li><a href="blog-3.html">Blog 3 Columns </a></li>
                                    <li><a href="blog-2.html">Blog 2 Columns</a></li>
                                    <li><a href="blog.html">Blog Classic</a></li>
                                    <li><a href="blog-post.html">Blog Single Post </a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="navbar-search">
            <div class="container">
                <form role="search">
                    <div class="input-group">
                        <input type="text" placeholder="Digite sua pesquisa..." class="form-control" autocomplete="off">
                        <span class="input-group-btn">
                            <button type="reset" class="btn search-close" id="search-close">
                                <i class="fa fa-close"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header><!--/.header -->