<?php 
get_header();

?>
<div id="jumbo-post" class="banner-page jumbotron">
        <h1>Benvinguts a Es Liceu INDEX.PHP</h1>
        <p>Posaaaaar subtítol</p>
    </div>

    
    <div class="container">
    
        <?php
        while(have_posts(  )){
            the_post(  );
            ?>
            <div class="post-item">
                <h2><a href="<?=the_permalink()?>"><?=the_title($before, $after, $echo)?></a></h2>
                <div class="metabox">
                    <p>Escrit per <?=the_author()?> el <?=the_time('d-M-Y')?> a <?=get_the_category_list(', ')?></p>
                </div>
                <div class="content">
                    <?=the_excerpt()?>
                </div>
                <p>
                    <a class="btn btn-info" href="<?=the_permalink()?>">Continue reading</a>
                </p>
            </div>
            <hr>
        <?php
        }?>
    </div>

<?php
    get_footer();
?>