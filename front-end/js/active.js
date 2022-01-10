
$(document).ready(function (){
	
	
jQuery('#mobile-menu').meanmenu({
	meanScreenWidth: "767",
	meanMenuContainer: '.mobile-menu',
});	
	
$('.slider-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})	

$('.latestProject-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
		750:{
            items:2
        },
		992:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

$('.blog-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('.client-active').owlCarousel({
    loop:true,
    nav:false,
	
	navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
		
		 480:{
            items:1
        },
        768:{
            items:3
        },
		992:{
            items:5
        },
        1200:{
            items:6
        }
    }
})

})

