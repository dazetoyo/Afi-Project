<?php /* Template Name: Stadiul constructiei */ ?>
<?php get_header(); ?>


<main id="swup" class="transition-fade">

    <div class="full-width stadiul-afi"></div>

    <div class="container">
        <div class="h3 letter-spacing-heading font-weight-bold mt-5">
            STADIUL CONSTRUCTIEI
        </div>

        <div>

            <?php

            $images = get_field('stadiul_constructiilor_gallery');

            $img_count =  count( $images );

            // $test = esc_html($image['caption']);

            //
            // echo '<pre>';
            // print_r($test);
            // echo '</pre>';

            //
            //
            // $test = "test";
            // $echo_test = print($test);

            // echo $img_count;
            ?>





            <div id="stadiul" class="small-12 column">
                <div class="loading-bar__wrapper">




                    <div class="labels">



                        <?php

                        if( $images ): ?>

                        <?php foreach( $images as $image ): ?>

                                <a class="stadiul-fancybox" data-fancybox="gallery-homepage" data-no-swup href="<?php echo $image['url']; ?>" data-thumb="<?php echo $image['url']; ?>">

                                <div style="background: url('<?php echo esc_url($image['sizes']['large']);?>'); background-size:cover;
                                background-position:center;
                                width:100%;
                                height:500px;
                                ">
                            </div>

                            <?php // $test[] = esc_html($image['caption']); ?>




                        </a>


                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <pre>
                <?php print_r($test); ?>
            </pre>

            <?php
            //
            // $test[] = esc_html($image['caption']);


            function myFunction(){
                global $images; // <-- This states we are using the $arr defined globally.
                foreach($images as $image){
                    echo "<div class='loading-bar-bullet'>";
                    echo "<div class='loading-bar-caption'>";
                    echo $image['caption'];
                    echo "</div>";
                    echo '</div>';
                }
            }

            ?>

            <div class="loading-bar my-5">

                <?php   echo myFunction();  ?>

                <?php  // echo str_repeat("<div class='loading-bar-bullet position-relative'>". myFunction() ."</div>", $img_count);?>


            </div>


        </div>
    </div>
</div>


<div class="text-muted h4">
    <p>Am inceput lucrarile la ansamblul residential AFI City, din Bucurestii Noi.</p>
</div>

<div class="text-muted h4">
    <p>Pentru ca stim cat de important este pentru tine sa stii tot timpul stadiul constructiei noului tau camin, aici vei gasi poze cu cele 2 constructii care se dezvolta in Faza 1: 190 apartamente, 228 locuri de parcare supraterane.</p>
</div>









</div>





<style media="screen">

.stadiul-afi {
    min-height: 50px;
    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
    background-size:cover;
    background-repeat:no-repeat;
    background-position: bottom;
    height: 50vh;
}

#site-footer{
    margin-top: 100px;
}


/* menu */
li.menu-item > a {
    color: #58585a !important;

}

li.menu-stadiul > a {
    color:#013D8C !important;
    transition:0.2s !important;
}


/* timeline gallery */

.loading-bar__wrapper {
    background: #fff;
    border-radius: 5px;
    /* padding: 60px 60px 30px; */
    /* box-shadow: 0 8px 10px rgba(223, 230, 241, 0.5); */
    z-index: 99;
}
.loading-bar__wrapper label {
    display: block;
    font-size: 0.9rem;
    margin-bottom: 12px;
    font-style: italic;
    font-weight: bold;
    color: #04378c;
}
.loading-bar {
    background: #04378c;
    height: 8px;
    border-radius: 100px;
    justify-content: space-around;
}
.loading-bar-bullet::before {
    content: "";
    display: block;
    background: #445058;
    height: 16px;
    width: 16px;
    border-radius: 100px;
    z-index: 999;
    margin-top: -4px;
    border: 5px solid white;
    cursor: pointer;
}

.slick-current.loading-bar-bullet::before {
    height: 20px;
    width: 20px;
    margin-top: -3px;
    margin-left: 0;
    border: 3px solid white;
    z-index: 99999999;
}

.labels {
    margin-top: 50px;
    text-align: center;
}

.loading-bar-caption {
    display:none;
}

button.slick-next.slick-arrow{
    height: 50px;
    width: 50px;
    background: url(/wp-content/uploads/2019/11/slider-right.svg);
    background-size: cover;
    right:0;


}

/* .slick-prev:before, .slick-next:before{
background:url(/wp-content/uploads/2019/11/slider-left.svg);
} */

button.slick-prev.slick-arrow{
    background: url(/wp-content/uploads/2019/11/slider-left.svg);
    background-size: cover;
    height: 50px;
    width: 50px;
    z-index: 99;
    left: 0;
}

.slick-prev:before, .slick-next:before{
    font-size:0px !important;
}

.qb-button {
    display: inline-block;
    background: #04378c;
    border-radius: 100px;
    padding: 5px 15px;
    margin-bottom: 15px;
    color: #445058;
    font-size: 0.9rem;
    font-weight: bold;
    cursor: pointer;
}

.qb-button:hover {
    color: #000;
}



</style>


<script type="text/javascript">
//
// jQuery(document).ready(function() {
//     jQuery(".loading-bar").slick({
//         centerMode: true,
//         // centerPadding: "80px",
//         dots: false,
//         infinite: false,
//         speed: 300,
//         slidesToShow: 6,
//         slidesToScroll: 3,
//         focusOnSelect: true,
//         asNavFor: ".labels"
//     });
//
//     jQuery(".labels").slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         infinite: false,
//         arrows: false,
//         fade: true,
//         draggable: false,
//         asNavFor: ".loading-bar"
//     });
// });



</script>
<?php get_footer(); ?>
</main>
