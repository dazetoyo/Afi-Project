<?php /* Template Name: Tipuri Apartamente */ ?>
<?php get_header(); ?>

<main id="swup" class="transition-fade">

    <div class="full-width despre-afi"></div>


    <div class="container my-5 ">
        <div class="row border-bottom border-secondary pb-5">

            <div class="col-12 font-weight-bold h3 mb-5 text-uppercase">
                <?php the_title(); ?>
            </div>

            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="font-weight-light h2 mb-5">
                    <?php the_field('left_subtitle')?>

                </div>
                <div class="text-muted">
                    <?php the_field('left_text')?>

                </div>
            </div>


            <div class="col-12 col-md-6 ">

                <div class="font-weight-light h2 mb-5">
                    <?php the_field('right_subtitle')?>

                </div>
                <div class="text-muted">
                    <?php the_field('right_text')?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="text-muted my-5">
                    Pentru a raspunde mai bine dorintelor tale, AFI City a fost proiectat sa ofere tipuri diferite de apartamente dintre care sa poti alege si pe care sa le transformi in spatiul tau personal:
                </div>
            </div>


            <div class="col-12">

                <div class="row mt-3">

                    <?php while ( have_rows('apartamente_repeater') ) : the_row(); ?>




                        <div class="col-6 col-md-3 mb-3">
                            <a href="<?php the_sub_field('link_apartament'); ?>">
                                <div class="text-center afi-border-secondary">
                                    <img src="<?php the_sub_field('imagine_apartament'); ?>" alt="<?php the_sub_field('titlu_apartament') ?>">

                                </div>
                                <div class="h3 text-center my-4">
                                    <?php the_sub_field('titlu_apartament') ?>
                                </div>
                                <div class="text-muted text-center">
                                    <?php the_sub_field('subtitlu_apartament'); ?>
                                </div>
                            </a>
                        </div>


                    <?php endwhile; ?>


                </div>

            </div>
        </div>





    </div>

    <style media="screen">

    .despre-afi {
        min-height: 50px;
        background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
        background-size:cover;
        background-repeat:no-repeat;
        background-position: bottom;
        height: 50vh;
    }

    .afi-border-secondary{
        padding-top:15px;
        margin:0 10px;
        max-width:420px;
    }

    .locatie {
        padding-top: 25px;
        margin-bottom: -50px;
        display: flex;
        justify-content: center;
    }

    .afi-border-secondary:before,
    .afi-border-secondary:after{
        width: 30%;
    }

    /* menu */
    li.menu-item > a {
        color: #58585a !important;

    }

    li.menu-apartamente > a,
    li.dropdown-apartamente > a{
        color:#013D8C !important;
        transition:0.2s !important;

    }

    @media (max-width: 1800px) {
        .afi-border-secondary{
            margin:25px 0 !important;
            max-width:none !important;
        }
    }

    </style>

    <?php get_footer(); ?>


    <main>
