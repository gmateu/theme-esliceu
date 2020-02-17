<?php 
get_header();

?>
<div class="banner-page jumbotron">
        <h1>Benvinguts a Es Liceu</h1>
        <p>Posar subtítol</p>
    </div>

    
    <div class="container">
    
        <?php
        while(have_posts(  )){
            the_post(  );
            ?>
            <div class="post-item">
                <h2><a href="<?=the_permalink()?>"><?=the_title($before, $after, $echo)?></a></h2>
                <div class="metabox">
                    <p>Autor: <?=the_author()?></p>
                </div>
                <div class="content">
                    <?=the_content()?>
                </div>
            </div>
            <hr>
        <?php
        }?>
    </div>

<?php
    get_footer();
?>