/*----- MOBILE_MENU_START -----*/
$(".header-menu-icon-NIPLp").click(function() {
	$(".header-menu-icon-NIPLp .menu-toggle-btn-hp").toggleClass("open");
	$(".LP-navigation-NIPhp").toggleClass("LP-navigation-open-NIPhp");
	
});

$(".mobile-menu-icon-hp").click(function() {
	$(".menu-toggle-btn-hp").toggleClass("open");
	//$(".navigation-CChp").toggleClass("navigation-open");
	$(".navigation-NIPhp").slideToggle();
	$("body").toggleClass("hide-scroll");
});
/*----- MOBILE_MENU_END -----*/


// $(".optiscroll").optiscroll({ forceScrollbars: true })

$('.navbar-nav .nav-link').on("click",function(){
    $('.navigation-main-hp .navbar > ul > li').addClass('active');
    });
/*----- FIX_HEADER_START -----*/
$(function(){
	// Check the initial Poistion of the Sticky Header
	//var stickyHeaderTop = $('#fixedHeader').offset().top-1;
	var stickyHeaderTop = 0;
	$(window).scroll(function(){
		var width=$(window).width();
		if( $(window).scrollTop() > stickyHeaderTop ) {
			if($('body').hasClass("fix-header") == false)
			{
				$("#header").css("margin-top","0px");
				$('body').addClass('fix-header');
				$("#header").animate({marginTop: "0px"},800);
				
			}
			if($('body').hasClass("fix-header") == true)
			{
				$("#header").css("display","block");
			}
		} else {
			$("#header").css("display","block");
			$('body').removeClass('fix-header');
			$("#header").css("margin-top","");
		}
	});
});
/*----- FIX_HEADER_END -----*/

$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
});

$(document).ready(function() {
    // Hide all <p> tags initially
    $('.navbar-nav .nav-item p').hide();

    function animateFly(item, destination, callback) {
        let offset = item.offset();
        let clone = item.clone().appendTo('body');
        clone.addClass('fly');
        clone.css({
            top: offset.top,
            left: offset.left,
            width: item.width(),
            height: item.height()
        });

        let targetOffset = destination.offset();
        targetOffset.top += destination.children().length * item.outerHeight(true);

        setTimeout(function() {
            clone.css({
                top: targetOffset.top,
                left: targetOffset.left
            });

            setTimeout(function() {
                clone.remove();
                item.appendTo(destination).removeClass('fly');
                if (callback) callback();
            }, 500);
        }, 100);
    }

    // Move clicked navbar item to optional-menu and others
    $('.navbar-nav .nav-item').click(function() {
        let clickedItem = $(this);

        // Move all other items except the clicked item to the optional-menu one by one
        $('.navbar-nav .nav-item').not(clickedItem).each(function(index) {
            let currentItem = $(this);
            setTimeout(function() {
                animateFly(currentItem, $('.optional-menu ul'), function() {
                    currentItem.find('p').hide();
                });
            }, index * 200); // Stagger animations
        });

        // Show the <p> tag of the clicked item after others have moved
        setTimeout(function() {
            clickedItem.find('p').show();
        }, ($('.navbar-nav .nav-item').length - 1) * 200 + 600); // Ensure this delay is longer than the animation duration
    });

    // Move clicked optional-menu item back to navbar-nav
    $(document).on('click', '.optional-menu .nav-item', function() {
        let clickedItem = $(this);

        // Hide all <p> tags
        $('.navbar-nav .nav-item p').hide();

        // Move the clicked item back to the navbar-nav
        animateFly(clickedItem, $('.navbar-nav'), function() {
            clickedItem.find('p').show(); // Show <p> tag after animation ends
        });

        // Move the currently displayed item in navbar-nav to optional-menu
        let currentNavItem = $('.navbar-nav .nav-item').first();
        animateFly(currentNavItem, $('.optional-menu ul'));
    });
});




