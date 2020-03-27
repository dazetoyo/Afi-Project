<?php get_header(); ?>

<main id="swup" class="transition-fade">

    <div class="full-width despre-afi mb-5"></div>



    <div class="container">


        <div class="h2 mb-5 d-flex justify-content-center justify-content-lg-between pl-3 text-uppercase">
            <?php echo single_term_title(); ?>
        </div>


        <div class="row d-flex justify-content-center ">
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'template-parts/apartments/archive', 'content' ); ?>

            <?php endwhile; ?>
        </div>

</div>
<?php

$terms = get_the_terms( get_the_ID(), 'increase_rooms' );
if( ! empty( $terms ) ) :
    foreach( $terms as $term ) :
        $images = get_field('galerie_detalii', $term);
        if( $images ): ?>
        <p class="h4 text-uppercase font-weight-bold text-primary mb-5 text-center mt-5 letter-spacing-regular">Vezi galerie</p>
        <div id="slickkk" class="slider-for mb-5">

            <?php foreach( $images as $image ): ?>
                <div  class="slick-container" >

                    <a class="home-fancybox" data-fancybox="gallery-homepage" data-no-swup href="<?php echo $image; ?>" data-thumb="<?php echo $image; ?>">
                        <div  class="slick-item" style="background:url(<?php echo $image; ?>);
                        background-size:cover;
                        background-position:center;
                        height:300px;
                        margin:0 10px;">
                    </div>
                </a>

            </div>
        <?php endforeach; ?>
    </div>
    <div class="slider-nav"> </div>
<?php endif;
endforeach;
endif;
?>



















<style media="screen">

.despre-afi {
    min-height: 50px;
    background-image: url('<?php echo $image; ?>');
    background-size:cover;
    background-repeat:no-repeat;
    background-position: bottom;
    height: 50vh;
}




.sold-out-badge{
    position: absolute;
    padding: 21px 6px;
    font-size: 12px;
    font-weight: bold;
}
.mw-350{
    max-width:350px;
}
.index-header{
    z-index:999;
}

.legenda-index{
    margin-top:-150px;
    z-index: 999;
}
.increase-imagemap-wrap.increase-imagemap-building.mb-5{
    margin-top:-200px;
}



/* slick */

.slick-list{
    margin-left:25px;
    margin-right:25px;
}

.line-height-24{
    line-height:24px;
}

button.slick-next.slick-arrow{
    height: 50px;
    width: 50px;
    background: url('/wp-content/uploads/2019/11/slider-right.svg');
    background-size: cover;
    right:25px;

}

/* .slick-prev:before, .slick-next:before{
background:url(/wp-content/uploads/2019/11/slider-left.svg);
} */

button.slick-prev.slick-arrow{
    left: 25px;
    background: url('/wp-content/uploads/2019/11/slider-left.svg');
    background-size: cover;
    height: 50px;
    width: 50px;
    z-index:99;
}
.slick-prev:before, .slick-next:before{
    font-size:0px !important;
}

.localizare-width{
    max-width:400px;
}




</style>

<?php get_footer(); ?>
</main>
