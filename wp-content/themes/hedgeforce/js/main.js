jQuery(document).ready(function(e) {
    
    $('#myCarousel').carousel({
        interval: 5000
    })

    jQuery(".carousel-inner .carousel-item:first").addClass("active");
    jQuery(".carousel-indicators li:first").addClass("active");

    $('#our-clients .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })

    // $('#trusted-by .owl-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     navText: [
    //         '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    //         '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    //     ],
    //     responsive:{
    //         0:{
    //             items:3
    //         },
    //         600:{
    //             items:4
    //         },
    //         1000:{
    //             items:5
    //         }
    //     }
    // })


    // $('#customers-say .owl-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     navText: [
    //         '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    //         '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    //     ],
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:2
    //         },
    //         1000:{
    //             items:2
    //         }
    //     }
    // })

    $(".megamenu-trigger").hover(function(){
        $(".megamenu").toggleClass("megamenuactive");
      });

	$(".hamburger").click(function(){
		// $("body").toggleClass("ah-99");
		// $("body").removeClass("ah-99-search");
		$(".top-nav-left").toggleClass("top-menu-active");
		// $(".search-button").removeClass("active");
		// $(".main-search-menu").removeClass("search-menu-active");

	});
});

// Toggle menu on scroll
jQuery(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 115) {
		jQuery("#header").addClass("header-fixed");
	}
	else {
		jQuery("#header").removeClass("header-fixed");
	}
});
// Toggle menu on scroll



//Hamburger animated menu
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function(hamburger) {
	hamburger.addEventListener("click", function() {
	  this.classList.toggle("is-active");
	}, false);
  });
}
//Hamburger animated menu