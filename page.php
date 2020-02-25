<?php 
get_header();

?>
<div class="banner-page jumbotron jumbo-page">
        <h1>Benvinguts a Es Liceu PAGE.PHP</h1>
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