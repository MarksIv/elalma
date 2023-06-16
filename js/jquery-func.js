 $(document).ready(function() {


/*---------------------------------------------------------------- One Page Navigation ----------------------------*/
	$('.nav').onePageNav({
	filter: ':not(.external)',
	scrollThreshold: 0.25,
	scrollOffset: 60,
	});
         
/*----------------------------------------------------- Form -------------------------*/
	$("#register").submit(function() {
		var elem = $(this);
		var urlTarget = $(this).attr("action");
		$.ajax({
			type : "POST",
			url : urlTarget,
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function() {
				elem.prepend("<div class='loading alert'>" + "<a class='close' data-dismiss='alert'>×</a>" + "Loading" + "</div>");
				//elem.find(".loading").show();
			},
			success : function(response) {
				elem.prepend(response);
				//elem.find(".response").html(response);
				elem.find(".loading").hide();
				elem.find("input[type='text'],input[type='email'],textarea").val("");
			}
		});
		return false;
	});         

/*--------------------------------------------------------------------------- Flexslider -------------------------------------*/
$('.flexheader').flexslider( {
  	animation: "slide",
  	directionNav: false,
  	direction: "vertical",
  	slideshowSpeed: 4000
  	
  });

/*------------------------------------------------------------------------------ GMaps ----------------------------*/
	if (typeof GMaps === "function") {
		var map;
		map = new GMaps({
			div: '#map',
			lat: 41.8902624,
			lng: 12.4923096,
			scrollwheel: false
		});

		map.addMarker({
			lat: 41.8902624,
			lng: 12.4923096,
			title: 'Contanct',
			infoWindow: {
				content: '15rd Avenue, New York,<br /> 156408, US<br /> <br /> Email: info@company.com <br /> Web: company.com'
			}
		});
	}



/*--------------------------------------------------------------------------- ToTop -------------------------------*/

	 $(window).scroll(function(){
		 if ($(this).scrollTop() > 100) {
			 $('.scrollup').fadeIn();
		 } else {
			 $('.scrollup').fadeOut();
		 }
	 }); 
 
	 $('.scrollup').click(function(){
		 $("html, body").animate({ scrollTop: 0 }, 600);
		 return false;
	 });
          



/*--------------------------------------------------------------------------- Parallax Effects -------------------------------*/	
	$('.parallax-bg1').parallax("10%", 0.2);
	$('.parallax-bg2').parallax("10%", 0.2);
	$('.parallax-bg3').parallax("20%", 0.2);
	$('.parallax-bg4').parallax("30%", 0.2);
	$('.parallax-bg5').parallax("40%", 0.2);



/*--------------------------------------------------------------------------- Lightbox images -------------------------------*/
	
	$("a.lightbox_image").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
	
	
	
/*--------------------------------------------------------------------------- Lightbox video frame -------------------------------*/	
	$("a.iframe").fancybox({
		'type'			:	'iframe', 
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});




/*--------------------------------------------------------------------------- Lightbox player frame -------------------------------*/	
	$("a.soundcloudplayer").fancybox({
		'type'			:	'iframe', 
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'height'		:	200, 
		'overlayShow'	:	false
	});




/*--------------------------------------------------------------------------- Tooltip--------------------------------------------*/
	
	if( $.fn.tooltip() ) {
		$('[class="tooltip_hover"]').tooltip();
	}





/*--------------------------------------------------------------------------- Twitter --------------------------------------------*/
    $('.twitterfeed').tweet({
        modpath: 'twitter/',
        username: "envato",
        count: 1,
        loading_text: 'Loading twitter feed...',
        template : function(data){            
            var d = new Date(data.tweet_time),
                container=$(".twitter");
            container.find(".username").html("@"+data.screen_name);
            container.find(".tweet").html(data.tweet_text);
            container.find(".date").html(d.getDate()+", "+get_month(d.getMonth())+" "+d.getFullYear());           
        }  
    });





/*--------------------------------------------------------------------------- Responsive Video -------------------------------*/	
	$("#video").fitVids();






		



});








