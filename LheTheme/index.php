<?php get_header();?>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <h1 class="displa-4">Seja bem vindo!</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Texto de Entrada</h2>
            <p>Desc</p>
        </div>
    </div>
    <div class="row">
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?>
        <div class="col-4">
            <h3><?php the_title();?></h3>
            <p><?php the_excerpt();?></p>
            <div class="rounded img-fluid"><?php the_post_thumbnail();?></div>
            <a href="<?php the_permaLink();?>">
                ler mais
            </a>
        </div>
        <?php            
                };
            };
        ?>
    </div>
<?php get_footer();?>
