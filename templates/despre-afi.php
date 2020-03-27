<?php /* Template Name: Despre afi */ ?>
<?php get_header(); ?>

<main id="swup" class="transition-fade">

<div class="full-width despre-afi"></div>


<div class="container my-5">
    <div class="row">

        <div class="col-12 font-weight-bold h3 mb-5 text-uppercase">
            <?php the_title() ?>
        </div>

        <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="font-weight-bold h3">
                        <?php echo the_field('left_title') ?>

                </div>
                <div class="font-weight-light h2 mb-5">
                        <?php echo the_field('left_subtitle') ?>

                </div>
                <div class="text-muted">

                    <?php echo the_field('left_text') ?>

                </div>
        </div>


        <div class="col-12 col-md-6 ">
                <div class="font-weight-bold h3">
                    <?php echo the_field('right_title') ?>

                </div>
                <div class="font-weight-light h2 mb-5">
                    <?php echo the_field('right_subtitle') ?>

                </div>
                <div class="text-muted">
                    <?php echo the_field('right_text') ?>

                </div>
        </div>
    </div>
</div>

<?php

if( get_field('adauga_sectiune_imagini') == 'true' ) { ?>



<div class="mt-5 mx-3 px-3 pb-5 mb-5">
    <div class="row d-flex justify-content-center">

        <div class="col-12  col-lg-3 afi-border-secondary ">
            <div style="
                    min-height: 50px;
                    background-image: url('<?php echo the_field('imagine_sectiune_col1') ?>');
                    background-size:cover;
                    background-repeat:no-repeat;
                    background-position: bottom;
                    height: 50vh;
                    margin-left:15px;
                    margin-right:15px;">

            </div>
            <div class="locatie h4 font-weight-bold text-center">
                <?php echo the_field('text_sectiune_col1') ?>


            </div>
        </div>

        <div class="col-12  col-lg-3 afi-border-secondary ">
            <div style="
                    min-height: 50px;
                    background-image: url('<?php echo the_field('imagine_sectiune_col2') ?>');
                    background-size:cover;
                    background-repeat:no-repeat;
                    background-position: bottom;
                    height: 50vh;
                    margin-left:15px;
                    margin-right:15px;">

            </div>
            <div class="locatie h4 font-weight-bold text-center">
                <?php echo the_field('text_sectiune_col2') ?>

            </div>
        </div>

        <div class="col-12 col-lg-3 afi-border-secondary ">
            <div style="
                    min-height: 50px;
                    background-image: url('<?php echo the_field('imagine_sectiune_col3') ?>');
                    background-size:cover;
                    background-repeat:no-repeat;
                    background-position: bottom;
                    height: 50vh;
                    margin-left:15px;
                    margin-right:15px;">

            </div>
            <div class="locatie h4 font-weight-bold text-center">
                <?php echo the_field('text_sectiune_col3') ?>

            </div>
        </div>

        <div class="col-12  col-lg-3 afi-border-secondary ">
            <div style="
                    min-height: 50px;
                    background-image: url('<?php echo the_field('imagine_sectiune_col4') ?>');
                    background-size:cover;
                    background-repeat:no-repeat;
                    background-position: bottom;
                    height: 50vh;
                    margin-left:15px;
                    margin-right:15px;">

            </div>
            <div class="locatie h4 font-weight-bold text-center">
                <?php echo the_field('text_sectiune_col4') ?>

            </div>
        </div>




    </div>
</div>
 <?php } ?>


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

        li.menu-despre-afi > a {
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
