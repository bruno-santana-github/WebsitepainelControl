<?php 
include('config.php');
    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_sobre`");
    $sql->execute();
    $sobre = $sql->fetch()['sobre'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link href="<?php echo INCLUDE_PATH;?>assets/css/template.css" rel="stylesheet"/>
        <link href="<?php echo INCLUDE_PATH;?>assets/css/bootstrap.min.css" rel="stylesheet">
        <title>Bite.Code | Painel</title>
        <meta charset="UTF-8"/>
        <meta name="author" description="Website desenvolvido em html, css, javascript e bootstrap"/>
        <meta name="keyword" content="Website, html, css, javascript, bootstrap"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo htmlspecialchars('<');?>Bite.Code<?php echo htmlentities('>');?></a>
                </div><!--navbar-header-->
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>#sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>#cadastra-se">Cadastra-se</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>#contato">Contato</a></li>
                        <li><a href="<?php echo INCLUDE_PATH_PAINEL;?>" target="_blank">Login</a></li>
                    </ul><!---navbar-right-->
                </div><!---navbar-collapse-->
            </div><!--container-->
        </nav><!--navbar-fixed-top--->

        <div class="box">

            <section class="banner">
                <div class="overlay"></div>
                <div class="container chamda-banner">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><?php echo htmlentities('<'); ?>Bite.Code<?php echo htmlentities('>');  ?></h2>
                            <p class="p">Empresa voltada para desenvolvimento web e marketing digital</p>
                            <a href="<?php echo INCLUDE_PATH;?>">Saiba Mais!</a>
                        </div><!--col-md-12--->
                    </div><!--row--->    
                </div><!--chamada-banner--->
            </section><!---banner-->

            <section id="" class="cadastro-lead">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6">
                        <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
                        </div><!--col-md-6-->
                        <div class="col-md-6">
                            <form method="post">
                                <input type="text" name="nome"/><input type="submit" value="Enviar"/>
                            </form>
                        </div><!---col-md-6-->
                    </div><!---row--->
                </div><!---container-->
            </section><!--cadastro-lead-->

            <section class="depoimento text-center">
                <div class="container">
                    <div class="row">
                        <h2>Depoimentos</h2>
                        <blockquote>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo."</p>
                        </blockquote>
                    </div><!--row-->
                </div><!--container--->
            </section><!---depoimento--->

            <section class="diferenciais text-center">
                <h2>Conheça Nossa Empresa</h2>
                <div class="container  diferenciais-container">
                    <div class="row">
                        <?php echo $sobre;?>
                    </div><!--row--->
                </div><!---container--->
            </section><!---diferenciais--->

            <section class="equipe">
                <h2>Equipe</h2>
                <div class="container equipe-container">
                    <row class="row">
                            <?php 
                        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_equipe`");
                        $sql->execute();
                        $member = $sql->fetchAll();
                        for($i = 0; $i < count($member); $i++) {    
                            ?>
                                <div class="col-md-6">
                                    <div class="equipe-single">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="user-picture">
                                                <div class="user-picture-child"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <h3><?php echo $member[$i]['nome'];?></h3>
                                                <p><?php echo $member[$i]['descricao'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>                        
                    </div><!--row-->
                </div><!---container-->
            </section><!---equipe--->

            <section class="contato final-site">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Fale conosco</h2>
                            <form class="form-group">
                                <label for="email">Nome:</label>
                                <input type="text" name="nome" class="form-control" id="nome">
                            </form><!---form-group-->
                            <form class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" class="form-control" id="nome">
                            </form><!---form-group-->
                            <form class="form-group">
                                <label for="email">Mensagem:</label>
                                <textarea class="form-control"></textarea>
                            </form><!---form-group-->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div><!---col-md-6-->
                        <div class="col-md-6">
                            <h2>Nossos planos</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Plano Semanal</th>
                                        <th>Plano Diário</th>
                                        <th>Plano Anual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>R$199,00</td>
                                        <td>R$299,00</td>
                                        <td>R$399,00</td>
                                    </tr>
                                    <tr>
                                        <td>R$199,00</td>
                                        <td>R$299,00</td>
                                        <td>R$399,00</td>
                                    </tr>
                                    <tr>
                                        <td>R$199,00</td>
                                        <td>R$299,00</td>
                                        <td>R$399,00</td>
                                    </tr>
                                </tbody>
                            </table><!---table--->
                        </div><!---col-md-6-->
                    </div><!--row--->
                </div><!--container-->
            </section><!---contato--->
            <footer>
                <p class="text-center">Todos os direitos reservados!</p>
            </footer>
        </div><!---box--->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo INCLUDE_PATH;?>assets/js/jquery-3.6.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo INCLUDE_PATH;?>assets/js/bootstrap.min.js"></script>
    
    </body>
</html>