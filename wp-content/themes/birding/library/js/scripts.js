/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


function initPin() {
    TweenMax.to(".pin", 0.1, { scale: 1 });
}

function removePin() {
    jQuery("li#pin1, li#pin2, li#pin3, li#pin4, li#pin5, li#pin6").removeClass("active");
    TweenMax.to(".items-map li", 0.5, { scale: 1, alpha: 1 });
}

function eventPin(id, child, time) {
    removePin();
    jQuery(id).toggleClass("active");
    TweenMax.to(".items-map li:nth-child("+ child +")", time, { scale: 0.95, alpha: 0.6 });

    jQuery.each(_routes, function(key, route) {
        if (route.pin === id) {
            var galleries = '';

            jQuery('#route-galleries').html('');            
            jQuery('#route-checklist').attr('href', route.checklist);
            jQuery('#route-singing').attr('href', route.singing);
            jQuery('#route-endemic').attr('href', route.endemic);
            jQuery('#route-download').attr('href', route.download);
            jQuery('#route-count').text(route.count);
            jQuery('#route-shop').attr('href', route.shop);

            jQuery.each(route.gallery, function(key, gallery) {
                galleries +='<a href="'+ gallery.url +'?image='+ key +'" data-toggle="lightbox" data-gallery="example-gallery" class="pic-gallery" style="background-image: url('+ gallery.url +')"></a>';
            });

            jQuery('#route-galleries').html(galleries);
        }
    });
}

function mousePin(id) {
    TweenMax.to(".map", 1.2, { scale: 0.95, ease: Expo.easeOut });
    TweenMax.to(".float li.layer:nth-child(1)", 1.2, { rotation: 5 });
    TweenMax.to(".float li.layer:nth-child(3)", 1.2, { rotation: -3 });
    TweenMax.to(id, 0.1, { scale: 1.5 });
    initPin();
}

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

    

    wow = new WOW({
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {}
    });
    wow.init();

    jQuery('#nav-icon').click(function(){                    
        jQuery(this).toggleClass('open');
        jQuery('header .main-menu').slideToggle();
    });
    new UISearch( document.getElementById( 'sb-search' ) ); 
    
    jQuery("#owl-products").owlCarousel({     
        autoPlay: 6000,     
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
        itemsMobile : [640,1],  
        navigation : true,
        pagination : false,
        navigationText : [" "," "]
    });
    

    if (jQuery('#route-magestic').is('div')) {
        jQuery("#pin1, .items-map li:nth-child(1)").click(function() {
            eventPin("#pin1", 1, 0.5);
        });

        jQuery("#pin2, .items-map li:nth-child(2)").click(function() {
            eventPin("#pin2", 2, 0.5);
        });

        jQuery("#pin3, .items-map li:nth-child(3)").click(function() {
            eventPin("#pin3", 3, 1.2);
        });

        jQuery("#pin4, .items-map li:nth-child(4)").click(function() {
            eventPin("#pin4", 4, 0.5);
        });

        jQuery("#pin5, .items-map li:nth-child(5)").click(function() {
            eventPin("#pin5", 5, 0.5);
        });

        jQuery("#pin6, .items-map li:nth-child(6)").click(function() {
            eventPin("#pin6", 6, 0.5);
        });

        jQuery("#pin3").click(function() {
            jQuery("#pin2").toggleClass("active");
            jQuery("#pin1").removeClass("active");
            jQuery("#pin2").removeClass("active");
        });

        jQuery("#pin1, .items-map li:nth-child(1)").mouseover(function() {
            mousePin("#pin1");
        });

        jQuery("#pin2, .items-map li:nth-child(2)").mouseover(function() {
            mousePin("#pin2");
        });

        jQuery("#pin3, .items-map li:nth-child(3)").mouseover(function() {
            mousePin("#pin3");
        });

        jQuery("#pin4, .items-map li:nth-child(4)").mouseover(function() {
            mousePin("#pin4");
        });

        jQuery("#pin5, .items-map li:nth-child(5)").mouseover(function() {
            mousePin("#pin5");
        });

        jQuery("#pin6, .items-map li:nth-child(6)").mouseover(function() {
            mousePin("#pin6");
        });
        
        jQuery(".pin, .items-map li").mouseleave(function() {
            TweenMax.to(".map", 1.2, { scale: 1 });
            TweenMax.to(".float li.layer:nth-child(1), .float li.layer:nth-child(3)", 1.2, { rotation: 0 });
            TweenMax.to("#pin1, #pin2, #pin3, #pin4, #pin5, #pin6", 0.1, { scale: 1 });
        });

        jQuery(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            jQuery(this).ekkoLightbox();
        });
    }   

}); /* end of as page load scripts */
