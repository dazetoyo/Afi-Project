<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>


<main id="swup" class="transition-fade">

<div class="full-width contact-afi"></div>

    <div class="container">

        <div class="row">
        <div class="col-12 col-md-2"></div>
          <div class="col-12 col-md-10">
              <div class="h3 text-primary my-5 letter-spacing-heading font-weight-bold text-uppercase">
                <?php the_title() ?>
              </div>
          </div>
        </div>

        <div class="row">

            <div class="col-2 ">

            </div>
            <div class="col-12 col-md-4">
                <div class=" h4 text-primary font-weight-bold letter-spacing-regular mb-5">
                    <?php the_field('contact_text'); ?>
                </div>
                <div class=" text-muted h4 ">
                    <?php the_field('contact_program'); ?>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <?php echo do_shortcode( '[contact-form-7 id="5" title="Formular de contact 1"]' ) ?>
            </div>
        </div>

    </div>



<style media="screen">

        .contact-afi {
            min-height: 50px;
            background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
            background-size:cover;
            background-repeat:no-repeat;
            background-position: top;
            height: 50vh;
        }

        #site-footer{
            margin-top: 100px;
        }

        input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required,
        select.wpcf7-form-control.wpcf7-select{
            width: 100%;
            border: 1px solid #a5a5a5 !important;
            padding: 10px;




        }

        select.wpcf7-form-control.wpcf7-select{
             color: #013d8c !important;
             	background: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0Ljk1IDEwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9LmNscy0ye2ZpbGw6IzQ0NDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmFycm93czwvdGl0bGU+PHJlY3QgY2xhc3M9ImNscy0xIiB3aWR0aD0iNC45NSIgaGVpZ2h0PSIxMCIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIxLjQxIDQuNjcgMi40OCAzLjE4IDMuNTQgNC42NyAxLjQxIDQuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTIiIHBvaW50cz0iMy41NCA1LjMzIDIuNDggNi44MiAxLjQxIDUuMzMgMy41NCA1LjMzIi8+PC9zdmc+) no-repeat 95% 50%;
             	-moz-appearance: none;
             	-webkit-appearance: none;
             	appearance: none;


        }

        textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required{
            width: 100%;
            max-height: 150px;
            padding: 10px;
            border: 1px solid #a5a5a5 !important;

        }

        span.wpcf7-list-item-label {
            font-size: 12px;
            color:#a5a5a5;
        }

        span.wpcf7-list-item{
            margin:0;
        }

        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
          color: #013d8c;
          opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
          color: #013d8c;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
          color: #013d8c;
        }

        input.wpcf7-form-control.wpcf7-submit {
            background: #013d8c;
            color: white;
            padding: 16px 61px;
        }

        /* menu */
        li.menu-item > a {
            color: #58585a !important;

        }

        li.menu-contact > a {
            color:#013D8C !important;
            transition:0.2s !important;
        }


</style>
<?php get_footer(); ?>
</main>
