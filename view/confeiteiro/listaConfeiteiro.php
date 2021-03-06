<?php
include_once '../../controller/confeiteiro/confeiteiroController.php';
?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="../bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="../bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="../bootstrap/css/animate.css" rel="stylesheet" />
        <link href="../bootstrap/css/style.css" rel="stylesheet">
        <link href="../bootstrap/color/default.css" rel="stylesheet">

        <!-- Validações -->
        <script type="text/javascript" src="../js/jquery-2.2.2.js"></script>
        <script type="text/javascript" src="../js/funcoes.js"></script>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro-pages">
            <div id="navigation">
                <nav class="navbar navbar-custom" role="navigation">
                    <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>
                            

                </nav>
            </div>
            <div class="slogan">
                <a href="../../index.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
            </div>
        </section>
        
        
        <?php session_start(); ?>
        <section id="produto" class="home-section text-center">    
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>Lista de Confeiteiros</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped"> 
                    <thead>

                    <th style=" text-align:center; ">Nome</th>
                    <th style=" text-align:center; ">Email p/ contato</th>
                    <th style=" text-align:center; ">Telefone p/ contato</th>
                    <th style=" text-align:center; ">Celular p/ contato</th>
                    </thead>
                    <tbody> 
                    <?php foreach ($_SESSION['confeiteiros'] as $confeiteiro) { ?>
                        <tr><?php if ($confeiteiro['nm_situacao'] != 'D') { ?>
                                <td align="center"><?= $confeiteiro['nm_confeiteiro'] ?></td>
                                <td align="center"><?= $confeiteiro['nm_email'] ?></td>
                                <td align="center"><?= $confeiteiro['cd_telefone'] ?></td>
                                <td align="center"><?= $confeiteiro['cd_celular'] ?></td>
                            </tr><?php } ?>
                    <?php } ?>
                    </tbody>       
                </table>
            </div>
        </section> 
        <?php include 'rodape.php'; ?>
