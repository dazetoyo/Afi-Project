
</div><!-- .container -->

</div><!-- #content -->

<footer id="site-footer" class="site-footer bg-primary">
    <div class="container">
        <?php if(is_active_sidebar( 'sidebar-footer' )){ ?>

            <aside class="widget-area pb-0 mb-0" aria-label="<?php esc_attr_e( 'Footer', 'increase' ); ?>">
                <div class="row pt-3">
                    <?php dynamic_sidebar('sidebar-footer'); ?>
                </div>
            </aside><!-- .widget-area -->

        <?php } ?>

    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>




<!-- <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script> -->
<script src="/wp-content/themes/increaseestate/includes/scripts/SwupDebugPlugin.js"></script>
<script src="/wp-content/themes/increaseestate/includes/scripts/SwupGtmPlugin.js"></script>
<script src="/wp-content/themes/increaseestate/includes/scripts/SwupOverlayTheme.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="/wp-content/themes/increaseestate/includes/scripts/SwupGaPlugin.js"></script> -->

<script type="text/javascript">


// var swup = new Swup({
//         LINK_SELECTOR: 'a',
//         plugins: [new SwupDebugPlugin()],
//         debugMode: true,
//     });

// let color = {
//     color: '#04378c'
// };




let options = {
    // LINK_SELECTOR: 'a',

    // LINK_SELECTOR: 'a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup]), a[xlink\\:href]',


    linkSelector:


    'a[href^="' +
    window.location.origin +
    '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup]), a[xlink\\:href]',

    // LINK_SELECTOR: 'a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup]), a[xlink\\:href]',

    debugMode: true,
    //plugins: [new SwupGaPlugin()],
    // unregister event handler

    plugins: [new SwupGtmPlugin()],
    //    plugins: [new SwupOverlayTheme(color)],


};
const swup = new Swup(options);




function init() {

        AOS.init();

    	tippy('.increase-imagemap-tooltip',
            {
                followCursor: true,
                arrow: false,
            }
        );

    // increaseBuildingTextBG();


    if (document.querySelector('#slickkk')) { // verifica daca id-ul exista pentru a initializa functia
        jQuery('.slider-for').slick({ //initializeaza slick
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }



    if (document.querySelector('#stadiul')) {
        jQuery(".loading-bar").slick({
            centerMode: true,
            // centerPadding: "80px",
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 3,
            focusOnSelect: true,
            asNavFor: ".labels"
        });

        jQuery(".labels").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            arrows: false,
            fade: false,
            draggable: false,
            asNavFor: ".loading-bar"
        });
    }

    if (document.querySelector('#single-fancybox')) {
        jQuery('.single-fancybox').fancybox({
            loop : true,
            transitionDuration : 100,
            animationDuration : 500,
            animationEffect : "fade",
            buttons : [
                'slideShow',
                'fullScreen',
                'thumbs',
                //'share',
                'download',
                //'zoom',
                'close'
            ],
            slideShow : {
                autoStart : false,
                speed     : 1600,
            },
            thumbs : {
                autoStart : true
            },
        });


    };



    if (document.querySelector('#slickkk')) {
        jQuery('.home-fancybox').fancybox({
            loop : true,

            transitionDuration : 100,
            animationDuration : 500,
            animationEffect : "fade",
            buttons : [
                'slideShow',
                'fullScreen',
                'thumbs',
                //'share',
                'download',
                //'zoom',
                'close'
            ],
            slideShow : {
                autoStart : false,
                speed     : 1600,
            },
            thumbs : {
                autoStart : true
            },
            // afterClose: function() {
            //        scrollTop: jQuery("#slickkk").offset().top
            //
            //   },


        });
    };



    if (document.querySelector('#stadiul')) {
        jQuery('.stadiul-fancybox').fancybox({
            loop : true,

            transitionDuration : 100,
            animationDuration : 500,
            animationEffect : "fade",
            buttons : [
                'slideShow',
                'fullScreen',
                'thumbs',
                //'share',
                'download',
                //'zoom',
                'close'
            ],
            slideShow : {
                autoStart : false,
                speed     : 1600,
            },
            thumbs : {
                autoStart : true
            },
            // afterClose: function() {
            //        scrollTop: jQuery("#slickkk").offset().top
            //
            //   },


        });
    };



    if (document.querySelector("#map-en")) {




        var placesEn={

            buildings:{
                // label:'<label class="checkbox-label">AFI CITY PHASE 1</label>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked:true,
                icon: '/wp-content/uploads/2019/12/Afi-Logo-Map.svg',
                items: [
                    ['• &nbsp; Bulevardul Laminorului nr 166B <br /> • &nbsp; AFi City - Cladire 1', 44.498020, 26.034247],
                    //              ['• &nbsp; Bulevardul Laminorului nr 166B <br /> • &nbsp; AFi City - Cladire 2', 44.497079, 26.035063]
                ]
            },
            transport: {
                label: '<div class="state p-danger"><label><p class="inline-margin">Transport</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked: false,
                icon: '/wp-content/uploads/2019/12/transport-1.svg',
                items: [
                    ['Metrou 1 Mai', 44.470569, 26.050593],
                    ['Metrou Jiului', 44.482589, 26.0408398],
                    ['Metrou Parc Bazilescu', 44.4872791, 26.03719],
                    ['Metrou Laminorului', 44.495559, 26.031556],
                    ['Metrou Straulesti', 44.502424, 26.025614],
                    ['45', 44.477111, 26.044786],
                    ['24', 44.483519, 26.040703],
                    ['24', 44.483903, 26.040835],
                    ['331', 44.484011, 26.041622],
                    ['422, 697', 44.482768, 26.029752],
                    ['112, 460, 697', 44.495504, 26.031211],
                    ['331, 460', 44.488863, 26.051135],
                    ['112, 331', 44.485740, 26.055254],
                    ['112, 331', 44.485648, 26.058173]
                ]
            },
            educatie: {
                label: '<div class="state p-danger"><label><p class="inline-margin">Educație</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked: false,
                icon: '/wp-content/uploads/2019/12/educatie.svg',
                items: [
                    ['Scoala Gimnaziala Sfantul Nicolae', 44.466452, 26.055678],
                    ['Scoala Europeana', 44.483390, 26.058808],
                    ['Scoala Eric', 44.503319, 26.056442],
                    ['Liceul Nicolae Iorga', 44.464852, 26.070356],
                    ['Scoala Aletheea', 44.509810, 26.042324],

                    ['Scoala Gimnaziala 181', 44.4944182, 26.0260732],
                    ['Scoala Gimnaziala 179', 44.4893025, 26.0392925],
                    ['Scoala Speciala pentru Surzi', 44.4864641, 26.0433426],
                    ['Scoala Gimnaizala 192', 44.485627, 26.032768],
                    ['Scoala Gimnaizala 178', 44.4843131, 26.0553401],
                    ['Scoala Nicolae Grigorescu', 44.488946, 26.052106],
                    ['SNSPA', 44.4740934, 26.0592138],
                    ['Universitatea Romano-Americana', 44.4733903, 26.0654908],
                    ['Universitatea de Agricultura si Medicina Veterinara', 44.4710846, 26.0711976],
                    ['Liceul Teoretic Constantin Brancoveanu', 44.4830361, 26.0495882],

                    ['Gradinita Franklin', 44.491067, 26.045267],
                    ['Gradinita Karin\'s Kids Academy', 44.467175, 26.061906],
                    ['HÄNSEL UND GRETEL KINDERGARTEN', 44.466489, 26.070346],
                    ['GRĂDINIŢA LITTLE ONE', 44.473911, 26.052830],
                    ['Gradinita nr. 47', 44.4919243, 26.0307653],
                    ['Apple Tree Kindergarten & Afterschool', 44.490661, 26.036138],
                    ['Gradinita Chitzi Bush', 44.4919948, 26.0433926],
                    ['Gradinita Ursuletul', 44.4902, 26.0379],
                ]
            },
            relaxare: {
                label: '<div class="state p-danger"><label><p class="inline-margin">Timp liber</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked: false,
                icon: '/wp-content/uploads/2019/12/timpliber.svg',
                items: [
                    ['Parc Bazilescu', 44.488549, 26.034620],
                    ['Parc Herăstrău', 44.469731, 26.083297],
                    ['Parc Mogoșoaia', 44.5247094, 26.0026364],
                    ['Lacul Grivița', 44.5071643, 26.0327357],
                    ['Lacul Străulești', 44.5042831, 26.0151745],

                    ['Teatrul Masca', 44.4387717, 26.0303718],

                    ['Barka Saffron', 44.465980, 26.068072],
                    ['Berăria H', 44.477517, 26.076108],
                    ['Seoul', 44.469381, 26.071672],
                    ['Hora', 44.484140, 26.058601],
                    ['Gelsomino', 44.491889, 26.026725],
                    ['Celebration Garden', 44.481249, 26.044353],
                    ['Vecchia Napoli', 44.466533, 26.053534],
                    ['Pizzeria posibilita Me Gusta', 44.497004, 26.038206],
                    ['Jerry’s Pizza', 44.497112, 26.029663],
                    ['Tasty Box', 44.497868, 26.029038],
                    ['Astrodom', 44.467390, 26.069982]
                ]
            },
            sanatate: {
                label: '<div class="state p-danger"><label><p class="inline-margin">Sănătate</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked: false,
                icon: '/wp-content/uploads/2019/12/sanatate.svg',
                items: [
                    ['Elias', 44.467316, 26.074323],
                    ['Medlife Grivitei', 44.465267, 26.054446],
                    ['Medical Center Arca Life', 44.4850147, 26.0531652],
                    ['Policlinica Pajura', 44.4832415, 26.0534012],

                    ['Medcenter', 44.497577, 26.008132],
                ]
            },
            shopping: {
                label: '<div class="state p-danger"><label><p class="inline-margin">Shopping</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked: false,
                icon: '/wp-content/uploads/2019/12/shopping-1.svg',
                items: [
                    ['Carrefour', 44.493441, 26.015590],
                    ['Lidl', 44.492268, 26.033209],
                    ['Colloseum Retail Park', 44.493441, 26.015590],
                    ['Selgros', 44.503083, 26.078775],
                    ['Mega Image', 44.480579, 26.071107],
                    ['Mega Image', 44.502866, 26.069390],
                    ['Mega Image', 44.484496, 26.030311],
                    ['Mega Image', 44.485005, 26.040109],
                    ['Mega Image', 44.478451, 26.045111],
                    ['Mega Image', 44.459585, 26.067668],
                    ['Metro', 44.505002, 26.026406],
                    ['Metro', 44.513694, 26.083913],
                    ['Penny Market', 44.482150, 26.042050],
                    ['Profi Market', 44.484956, 26.055440],
                    ['Profi Market', 44.484467, 26.047372],

                    ['Baneasa Shopping City', 44.506881, 26.090025],
                ]
            },
            benzinarie:{
                label:'<div class="state p-danger"><label><p class="inline-margin">Benzinărie</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked:false,
                icon: '/wp-content/uploads/2019/12/benzinarii.svg',
                items: [
                    ['OMV', 44.496555, 26.030595],
                    ['OMV', 44.490677, 26.017034],
                    ['OMV', 44.494473, 26.087415],
                    ['OMV', 44.494479, 26.031415],

                    ['Lukoil', 44.495991, 26.063178],
                    ['Lukoil', 44.487174, 26.057857],
                    ['Lukoil', 44.479213, 26.044467],
                    ['Lukoil', 44.505908, 26.080859],

                    ['Petrom', 44.486429, 26.046012],
                    ['Petrom', 44.489858, 26.080001],
                    ['Petrom', 44.482020, 26.098025],
                    ['Petrom', 44.482020, 26.098025],
                ]
            },
            fitness:{
                label:'<div class="state p-danger"><label><p class="inline-margin">Fitness</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked:false,
                icon: '/wp-content/uploads/2019/12/fitness.svg',
                items: [
                    ['Fitness Zone', 44.493624, 26.033241],
                    ['Vitality Club', 44.480331, 26.062682],
                    ['Neby Fitness Baneasa', 44.491219, 26.077705],
                ]
            },
            bricolaj:{
                label:'<div class="state p-danger"><label><p class="inline-margin">Brico</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked:false,
                icon: '/wp-content/uploads/2019/12/brico.svg',
                items: [
                    ['Bricostore', 44.514055, 26.083979],
                    ['Dedeman', 44.504490, 26.084399],
                    ['Leroy Merlin', 44.490361, 26.015409],
                    ['Ikea', 44.506314, 26.084993],
                    ['JYSK', 44.493292, 26.016415]
                ]
            },
            banca:{
                label:'<div class="state p-danger"><label><p class="inline-margin">Bănci</p></label></div>',
                //the category may be default-checked when you want to
                //uncomment the next line
                checked:false,
                icon: '/wp-content/uploads/2019/12/map-banci.svg',
                items: [
                    ['Cec Bank', 44.485395, 26.039719 ],
                    ['Cec Bank', 44.493416, 26.079716 ],
                    ['Cec Bank', 44.484531, 26.039988 ],

                    ['ING Bank', 44.486290, 26.039133 ],
                    ['ING Bank', 44.493699, 26.079817 ],
                    ['ING Bank', 44.488005, 26.093378 ],
                    ['ING Bank', 44.463385, 26.073294 ],

                    ['Libra Bank', 44.481698, 26.035356 ],
                    ['Libra Bank', 44.480444, 26.035320 ],

                    ['Raiffeisen Bank', 44.470748, 26.051042 ],
                    ['Raiffeisen Bank', 44.482778, 26.041436 ],

                    ['Banca Transilvania', 44.470870, 26.050227],
                    ['Banca Transilvania', 44.480486, 26.035287],
                    ['Banca Transilvania', 44.486240, 26.038756],

                    ['Credit Europe Bank', 44.486674, 26.038271],

                    ['BCR', 44.496806, 26.030339],

                    ['BRD', 44.486348, 26.038597]

                ]
            },
        },
        map = new google.maps.Map(
            document.getElementById('map-en'),
            {
                zoom: 14,
                center: new google.maps.LatLng(44.496699, 26.033714),

                styles:

                [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            }

        ),
        infowindow = new google.maps.InfoWindow(),

        // a  div where we will place the buttons




        ctrl=jQuery(' <div class="map-height c-height letter-spacing-regular" /> ').css({background:'rgba(0,159,227,0.6)',
        padding:'20px',
        margin:'2px',
        textAlign:'center',
        borderRadius: '4px',
        marginTop:'100px',
        marginLeft: '-100px'
    });
    ctrl.append(jQuery('<div id="ascunde-mobil" class="d-block d-sm-none h4 text-light">ascunde filtre</div>'));

    //now loop over the categories
    jQuery.each(placesEn,function(c,category){
        var building = '';
        var disabled = '';
        if(c === 'buildings'){
            building = 'building';
            disabled = 'disabled';
        }
        //a checkbox fo the category

        var cat = jQuery('<input>', {
            type: 'checkbox',
            class: 'ttteee',

        }).change(function () {
            jQuery(this).data('goo').set('map', (this.checked) ? map : null);
        })





        //create a data-property with a google.maps.MVCObject
        //this MVC-object will do all the show/hide for the category
        .data('goo', new google.maps.MVCObject)
        .prop('checked', !!category.checked)

        //this will initialize the map-property of the MVCObject
        .trigger('change')

        //label for the checkbox
        .appendTo(jQuery('<div/>').css({
            whiteSpace: 'nowrap',
            textAlign: 'left',
            float: 'left',
            width: '100%',
            margin: '0 0 10px 10px',
            position: 'relative'
        }).addClass("pretty p-default p-smooth p-bigger").appendTo(ctrl))
        .after(category.label);


        if(disabled){
            jQuery(cat).attr("disabled", true);
        }

        //loop over the items(markers)
        jQuery.each(category.items, function (m, item) {
            // if (item[3]) {
            //     var icon = item[3];
            //
            // } else {
            //     var icon = category.icon;
            // }

            if (item[4] && item[5]){
                var scaledSize= new google.maps.Size(item[4], item[5])
            }
            else {
                var scaledSize= new google.maps.Size(70, 70)
            }

            if (item[3]) {
                var icon = {
                    scaledSize: scaledSize,
                    url: item[3]
                }
            } else {
                var icon = {
                    scaledSize: scaledSize,
                    url: category.icon
                }
            }


            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(item[1], item[2]),
                title: item[0],
                icon: icon,
                animation: google.maps.Animation.DROP

                //icon: category.icon
            }

        );




            //bind the map-property of the marker to the map-property
            //of the MVCObject that has been stored as checkbox-data
            marker.bindTo('map', cat.data('goo'), 'map');
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent(item[0]);
                infowindow.open(map, this);

            });
        });
    });


    //show all-button
    ctrl.append(jQuery('<input>',{type:'button',value:'ARATĂ TOATE PINURILE'})
    .click(function(){
        jQuery(this).parent().find('input[type="checkbox"]')
        .prop('checked',true).trigger('change');
    }));
    // ctrl.append(jQuery('<br/>'));

    //clear all-button
    ctrl.append(jQuery('<input>',{type:'button',value:'ASCUNDE TOATE PINURILE'})
    .click(function(){
        jQuery(this).parent().find('input[type="checkbox"]:not(".building")')
        .prop('checked',false).trigger('change');
    }));


    //use the buttons-div as map-control
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(ctrl[0]);


} // map




// jQuery("select").click(function() {
//   var open = jQuery(this).data("isopen");
//   if(open) {
//     window.location.href = jQuery(this).val()
//   }
//   //set isopen to opposite so next time when use clicked select box
//   //it wont trigger this event
//    jQuery(this).data("isopen", !open);
// });


window.scroll(0, 0);


} // END init()

 AOS.init();

jQuery("body").on("click", "#ascunde-mobil", function(event){

    jQuery(".map-height").toggle(); // toggle collapse
    jQuery("#map-en").append(jQuery('<div id="arata-mobil" class="map-height c-height letter-spacing-regular">arată filtre</div>'));


});


jQuery("body").on("click", "#arata-mobil", function(event){

    jQuery(".map-height").toggle(); // toggle collapse
    jQuery("#arata-mobil").hide(); // toggle collapse




});


jQuery( "#menu-meniu-ro > li.no-dropdown > a " ).on( "click", function() {
    jQuery("#header-menu").removeClass("show");
    jQuery(".nav-icon").attr("aria-expanded","false");
});

    jQuery( ".dropdown-menu > li > a " ).on( "click", function() {
        jQuery("#header-menu").removeClass("show");
        jQuery(".nav-icon").attr("aria-expanded","false");

    });





jQuery(window).resize(function() {

    var width = jQuery(document).width();
    if (width < 900) {
        // alert('Less than 960');
        jQuery( "#menu-meniu-ro > li.no-dropdown > a " ).on( "click", function() {
            jQuery("#header-menu").removeClass("show");
        });

        jQuery( ".dropdown-menu > li > a " ).on( "click", function() {
            jQuery("#header-menu").removeClass("show");
        });
    }
});


//  jQuery(window).resize(function() {
//   if (jQuery(window).width() < 960) {
//      alert('Less than 960');
//       jQuery( "#menu-meniu-ro > li > a " ).on( "click", function() {
//         jQuery(".d-lg-none > button.btn.btn-outline-dark").click();
//       });
//
//   }
//  else {
//     alert('More than 960');
//  }
// });
//
//
// var eventFired = 0;
//
// if (jQuery(window).width() < 960) {
//     alert('Less than 960');
//      jQuery( "#menu-meniu-ro > li > a " ).on( "click", function() {
//        jQuery(".d-lg-none > button.btn.btn-outline-dark").click();
//      });
//
// }
// else {
//     alert('More than 960');
//     eventFired = 1;
// }
//
// jQuery(window).on('resize', function() {
//     if (!eventFired) {
//         if (jQuery(window).width() < 960) {
//             alert('Less than 960 resize');
//              jQuery( "#menu-meniu-ro > li > a " ).on( "click", function() {
//                jQuery(".btn.btn-outline-dark").click();
//              });
//         } else {
//             alert('More than 960 resize');
//         }
//     }
// });






init();

swup.on('contentReplaced', init);






jQuery(function () {
    var $win = jQuery(window);
    $win.scroll(function () {
        if ($win.scrollTop() == 0)
        {
            jQuery("#masthead").removeClass("background-white-top");
            jQuery("ul#menu-meniu-ro > li > a").removeClass("color-white-top");
        }
        else {
            jQuery("#masthead").addClass("background-white-top");
            jQuery("ul#menu-meniu-ro > li > a").addClass("color-white-top");
        }
    });
});





</script>
</body>
</html>
