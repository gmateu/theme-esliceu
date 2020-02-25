<?php 
get_header();

?>

<div id="showcase">
    <h1>Benvinguts a la FRONT-PAGE.PHP</h1>
    <p><?php
        echo wp_hash_password("1234");
    ?></p>
</div>

    <div class="full">
        <div class="section-1">
            <div class="section-inner">
                <h2 class="headline headline--medium text-center">Propers events</h2>
                <div class="post-sumary row">
                    <a href="#" class="post-sumary-date text-center">
                        <span class="date-day">12</span>
                        <div class="date-month">feb</div>
                    </a>
                    <div class="post-sumary-content">
                        <h5 class="post-sumary-content-title">títol post</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, libero.</p>
                    </div>
                </div>
                <div class="post-sumary row">
                    <a href="#" class="post-sumary-date text-center">
                        <span class="date-day">12</span>
                        <div class="date-month">feb</div>
                    </a>
                    <div class="post-sumary-content">
                        <h5 class="post-sumary-content-title">títol post</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, libero.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="section-inner">
                <h2 class="headline text-center">Títol section 2</h2>
                <div class="post-sumary row">
                    <a href="#" class="date--beige post-sumary-date text-center">
                        <span class="date-day">12</span>
                        <div class="date-month">feb</div>
                    </a>
                    <div class="post-sumary-content">
                        <h5 class="post-sumary-content-title">títol post</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, libero.</p>
                    </div>
                </div>
                <div class="post-sumary row">
                    <a href="#" class="date--beige post-sumary-date text-center">
                        <span class="date-day">12</span>
                        <div class="date-month">feb</div>
                    </a>
                    <div class="post-sumary-content">
                        <h5 class="post-sumary-content-title">títol post</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, libero.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

<?php

get_footer();

?>