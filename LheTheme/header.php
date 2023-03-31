<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Designen</title>
        <link rel="stylesheet" href="<?= get_template_directory_uri()?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
        <?php wp_head();?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3 logo">
                    <a href="<?= site_url();?>">
                        <img src="<?= get_template_directory_uri()?>/assets/imgs/logo.png" alt="" class="rounded float-start img-fluid">
                    </a>
                </div>
                <div class="col-9 titulo">
                    <h1><?php bloginfo('name');?></h1>
                    <p><?php bloginfo('description');?></p>
                </div>
            </div>