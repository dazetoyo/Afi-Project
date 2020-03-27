<?php /* Template Name: Finisaje */ ?>
<?php get_header(); ?>




<main id="swup" class="transition-fade">



<div class="full-width despre-afi transition-swipe"></div>

<div class="container my-5">
    <div class="row">

      <div class="col-12 col-md-6">
          <div class="h2 font-weight-bold letter-spacing-heading text-uppercase">
              <?php the_field('finisaje_title') ?>


          </div>
          <div class="font-weight-bold">
              <?php the_field('finisaje_subtitle') ?>

          </div>
      </div>

        <div class="col-6">

        </div>

    </div>

    <div class="row mt-3">
      <div class="col-6">
           <div class="h4 text-muted">
                <?php the_field('finisaje_sub_title_text_left') ?>

            </div>
      </div>
      <div class="col-6">
           <div class="h4 text-muted">
               <?php the_field('finisaje_sub_title_text_right') ?>

            </div>
      </div>
    </div>


    <div class="row mt-3">
        <div class="col-6 col-md-3 mb-3">
            <div class="text-center afi-border-secondary">
                <img src=" <?php the_field('finisaj_1') ?>" alt="">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="text-center afi-border-secondary">
                <img src="<?php the_field('finisaj_2') ?>" alt="">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="text-center afi-border-secondary">
                <img style="padding-top: 45px;
    padding-bottom: 45px;" src="<?php the_field('finisaj_3_') ?>" alt="">
            </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
            <div class="text-center afi-border-secondary">
                <img style="padding-top: 45px;
    padding-bottom: 45px;"src="<?php the_field('finisaj_4') ?>" alt="">
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-md-3 mb-3">
            <div class="h4 text-muted">
                <?php the_field('finisaj_text_1') ?>

            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="h4 text-muted">
                    <?php the_field('finisaj_text_2') ?>

            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="h4 text-muted">
                    <?php the_field('finisaj_text_3') ?>

            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="h4 text-muted">
                    <?php the_field('finisaj_text_4') ?>

            </div>
        </div>
    </div>


        <div class="row mt-3">
          <div class="col-6 col-md-3 mb-3">
               <div class="h4 text-muted">
                       <?php the_field('finisaj_content_5') ?>

                </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
               <div class="text-center afi-border-secondary">
                      <img src=" <?php the_field('finisaj_5') ?>" alt="">

                </div>
                <div class="h4 text-muted mt-3">
                    <?php the_field('finisaj_text_5') ?>

            </div>
          </div>
        </div>

        <div class="row mt-3 ">
            <div class="col-12 h2 font-weight-light">
                  <?php the_field('finisaje_content_title') ?>

            </div>
        </div>

        <div class="row no-gutters text-muted h4">

            <div class="col-12 col-md-4 mb-3 ">
                <div class="row afi-border-secondary mx-1">
                  <div class="col-6">

                          <img src="<?php the_field('finisaj_box_img_1') ?>" alt="">
                  </div>
                  <div class="col-6 d-flex align-items-center">
                      <?php the_field('finisaj_box_text_1') ?>

                  </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <div class="row afi-border-secondary mx-1">
                  <div class="col-6">
                          <img src="<?php the_field('finisaj_box_img_2') ?>" alt="">
                  </div>
                  <div class="col-6 d-flex align-items-center">
                       <?php the_field('finisaj_box_text_2') ?>

                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="row afi-border-secondary mx-1">
                  <div class="col-6">
                          <img src="<?php the_field('finisaj_box_img_3') ?>" alt="">
                  </div>
                  <div class="col-6 d-flex align-items-center">
                       <?php the_field('finisaj_box_text_3') ?>

                  </div>
                </div>
            </div>

        </div>

        <div class="row mt-3">
          <div class="col-12 col-md-5 text-muted h4">
              <ul class="pl-3">
                   <?php the_field('finisaj_subtext') ?>
              </ul>
          </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-7">
                <div class="row afi-border-secondary mx-1">
                  <div class="col-6 text-center">
                          <img src=" <?php the_field('finisaj_box_img_4') ?>" alt="">
                  </div>
                  <div class="col-6 d-flex align-items-center text-muted h4">
                      <ul>
                          <?php the_field('finisaj_box_text__5') ?>

                      </ul>
                  </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 h2 font-weight-light">
                 <?php the_field('finisaje_content_title_bottom') ?>

            </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 text-muted h4">
                   <?php the_field('finisaje_content_left') ?>

          </div>
            <div class="col-12 col-md-6 text-muted h4">
                     <?php the_field('finisaje_content_right') ?>

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

        .h4 {
            line-height:1.6;
        }

        /* menu */
        li.menu-item > a {
            color: #58585a !important;

        }

        li.menu-finisaje > a {
            color:#013D8C !important;
            transition:0.2s !important;

        }

</style>
<?php get_footer(); ?>


<main>
