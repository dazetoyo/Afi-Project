<?php /* Template Name: Location Map */ ?>
<?php get_header(); ?>

<main id="swup" class="transition-fade">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />





<div class="full-width despre-afi"></div>


<div class="container my-5">

    <div class="row">

        <div class="col-12 font-weight-bold h3 mb-5 text-uppercase">
            <?php the_title() ?>
        </div>

        <div class="col-12 col-md-12 mb-5 mb-md-0">
            <div class="font-weight-light h2 mb-5">
                <?php the_field('locatie_subtitle') ?>
            </div>

        </div>

        <div class="col-12 col-md-6 mb-5 mb-md-0">
            <div class="text-muted">
                    <?php the_field('locatie_main_text') ?>

            </div>
        </div>


        <div class="col-12 col-md-6 ">


            <div class="row">
                <div class="col-12 col-md-6">
                        <?php the_field('locatie_lista') ?>

                </div>
                <div class="col-12 col-md-6">
                    <a target="_blank" href="https://www.waze.com/ul?ll=44.49525800%2C26.03132090&navigate=yes"><div class=" d-block text-center z-index-max afi-border-secondary py-5">
                        <div class="text-primary letter-spacing-heading  font-weight-bold h4 pb-3">

                            <?php the_field('waze_text') ?>
                            </div>
                            <i class="deschide-harta">
                                <img src="/wp-content/uploads/2019/12/Waze.svg" alt="">
                            </i>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>



</div>

<div style="height:640px;" id="map-en" class="my-5"></div>

<div class="container">


<div class="row no-gutters text-muted h4">
        <?php while ( have_rows('locatie_repeater_icons') ) : the_row(); ?>

                    <div class="col-12 col-lg-4 mb-3">
                        <div class="row afi-border-secondary mx-1">
                          <div class="col-6">
                                  <img src="<?php the_sub_field('icon') ?>" alt="">
                          </div>
                          <div class="col-6 d-flex flex-column align-items-center ">
                              <div class="h4 font-weight-bold text-left w-100">
                                  <?php the_sub_field('titlu') ?>
                              </div>

                              <?php the_sub_field('subtitlu') ?>

                          </div>
                        </div>
                    </div>



        <?php endwhile; ?>






</div>




<style media="screen">

.c-height {

    height: 456px;
    padding: 20px !important;

}

.map-height {
    width: 300px;
    left: 20% !important;
    overflow: hidden;
    /* top: 0 !important; */
    top: unset !important;
    bottom: -2px !important;
    transition: all 0.3s ease-in-out;
    padding: 0 !important;
    color: white;
    font-weight: bold;
    font-size: 12px;
    line-height: 1.5;
    /* margin: 35px 2px !important; */
    background: #04378c !important;
    padding: 20px !important;

}

.map-height > div > label {
    margin-left:10px;
    display: unset;
}


input[type="button"] {
    margin-left:10px;
    background: white;
    border: none;
    font-weight: bold;
    font-size: 12;
    padding: 10px 19px;
    color:#04378c;
    display:block;
    margin-bottom:10px;
}

#arata-mobil{
    height:50px;
    position:absolute;
    margin: 100px 2px 2px -100px;
    position: absolute;
    text-align:center;
}

#ascunde-mobil,
#arata-mobil {
    cursor:pointer;
}


:focus {
    outline: 0;
}

.pretty input:checked~.state.p-danger label:after, .pretty.p-toggle .state.p-danger label:after {
    background-color: #04378b !important;

}

.pretty .state label:before {
    border-color: #ffffff;
    background: white;

}

.inline-margin{
    margin-left: 10px;
    font-size: 14px;
    font-weight: bold;
    display: inline;
}
.pretty.p-default.p-smooth.p-bigger{
    margin-bottom: 20px !important;
}

input[type="button"] {
    cursor: pointer;
}



.despre-afi {
    min-height: 50px;
    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
    background-size:cover;
    background-repeat:no-repeat;
    background-position: top;
    height: 50vh;
}

ul.location-list > li {
    list-style-image: url(/wp-content/uploads/2019/12/location-list-icon.svg);
}




.deschide-harta {
    margin-bottom: -65px;

    transition:0.2s;
    transition-timing-function: ease-in;
    display:block;
}

    /* menu */
    li.menu-item > a {
        color: #58585a !important;

    }

    li.menu-locatie > a {
        color:#013D8C !important;
        transition:0.2s !important;

    }
</style>



    	<!-- <script async defer
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyCPgSANbgS3XqI0_84hZze85t0OGHAaSWM&callback=initMap">
        </script>   -->



<?php   get_footer(); ?>
</main>
