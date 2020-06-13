<!DOCTYPE html>
<!--Site edited by David M. Turner, Chairman of Communications 2016-2017 - Saint John's Lutheran Church Statesville, NC -->

<html class="js no-touch rgba multiplebgs borderradius js placeholder" lang="en-US" style="">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<TITLE>SJ – Gallery</TITLE> 

	<style>
	.galleria{ width: 700px; height: 400px; margin: auto;}
	.albums{
	list-style-type: none;
    margin-right: 90px;
	margin-left: 90px;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
	}
	.alist{
	   float: left;
	   font-weight: bold;
	   text-align: center;
	   min-width: 140px;
	}
	
    .alist a{
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}
	
	.alist a:hover:not(.active) {
	    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: #ccc;
}
	a.active {
    color: white;
    background-color: #4CAF50;
}
	.chosen{
		    background-color: #B0C4DE;
	}
	</style>
		

<LINK rel="stylesheet" id="risen-parent-style-css" href="./SaintJohns_files/style.css" type="text/css" media="all"/> 
<LINK rel="stylesheet" id="risen-style-css" href="./SaintJohns_files/style(1).css" type="text/css" media="all"/> 
<LINK rel="stylesheet" id="risen-base-style-css" href="./SaintJohns_files/style(2).css"  type="text/css" media="all"/>
<LINK id="google-fonts-css" href="./SaintJohns_files/css.css" 
rel="stylesheet" type="text/css" media="all"/> 
<LINK id="jetpack_css-css" href="./SaintJohns_files/jetpack.css" 
rel="stylesheet" type="text/css" media="all"/> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<SCRIPT src="./js/jquery.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/jquery-migrate.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/modernizr.custom.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/jquery.backstretch.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/superfish.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/supersubs.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/selectnav.min.js" type="text/javascript"></SCRIPT>


<script src="./galleria/galleria-1.5.1.min.js"></script>

<!--<script type="text/javascript" src="./SaintJohns_Gallery_files/js"></script>-->

<script type="text/javascript" src="./js/jquery.validate.min.js.download"></script>
<script type="text/javascript" src="./js/jquery.easing.js.download"></script>
<script type="text/javascript" src="./js/jquery.smooth-scroll.min.js.download"></script>
<script type="text/javascript" src="./js/jquery.prettyPhoto.modified.js.download"></script>
<script type="text/javascript" src="./js/jquery.fitvids.js.download"></script>

<script type="text/javascript">
/* <![CDATA[ */
var risen_wp = {"is_home":"1","current_protocol":"https","ie_unsupported_message":"You are using an outdated version of Internet Explorer. Please upgrade your browser to use this site.","ie_unsupported_redirect_url":"http:\/\/browsehappy.com\/","mobile_menu_label":"Menu","slider_enabled":"1","slider_slideshow":"1","slider_speed":"6000","lightbox_prev":"Prev","lightbox_next":"Next","lightbox_expand":"Expand","lightbox_close":"Close"};
/* ]]> */
</script>
<SCRIPT src="./js/main.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/webfont.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/colorpicker.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/demo.js" type="text/javascript"></SCRIPT>

<script type="text/javascript">
jQuery(document).ready(function($) {
	var dt = new Date();
	var m = dt.getMonth() + 1;
	var dy = dt.getDate();
	var y = dt.getFullYear();
	var color = "#6a8fab";

	if (screen.width > 80) { // mobile performance - no full image background if device not capable of showing media query width 480px
		if (m == 7 && dy == 4){
			color = '#ff0c00';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/fireworks.jpg');
	}else if (m == 10 && dy == 31){
			color = '#ff9400';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/pumpkin.jpg');
	}else if (m == 11){
			if (dy > 19 && dy < 27){
				if (dt.getDay() == 4){
			color = '#995901';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/thanksgiving.jpg');
				}else{
					jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
				}
			}else{
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
			}
	}else if (m == 12 && dy == 25){
			color = '#016000';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/christmas.jpg');
	}else if (m == 1 && dy == 1){
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/newyear.jpeg');
			color = '#00137f';
	}else if (m == 2 && dy == 14){
			color = '#af0f0f';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/valentine.jpg');
	}else if (y == 2018){
				if (m == 4 && dy ==1){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}			
	}else if (y == 2019){
				if (m == 4 && dy ==21){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2020){
				if (m == 4 && dy ==12){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2021){
				if (m == 4 && dy ==4){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2022){
				if (m == 4 && dy ==17){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
						}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2023){
				if (m == 4 && dy ==9){
				color = '#f7aaed';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (m == 6 && dy ==14){
				color = '#04147a';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/flag.jpg');}
			else{
		jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
		 }
	}
	if (screen.width < 800){
	$('.galleria').css({'width': '315px', 'height': '180px'});
	}
	document.getElementById("menuStyle").innerHTML = '<style type="text/css"> a, .resurrect-list-icons a:hover, .flex-caption a {color: ' + color +';} #header-menu, #footer-bottom, .flex-caption, .flex-control-nav li a.active, #home-row-widgets .widget-image-title, #page-header h1, .sidebar-widget-title {background-color: ' + color + ';}</style>';
});


if (screen.width < 800){
	$('.galleria').css({'width': '315px', 'height': '180px'});
	}
</script>
<a id = "menuStyle"></a>
<style type="text/css">

a, .resurrect-list-icons a:hover, .flex-caption a {
	color: #6a8fab;
}

body, input, textarea, select, .multimedia-short h1, #cancel-comment-reply-link, .accordion-section-title, .staff header h1 a {
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}

#header-menu-links, .flex-caption, #home-row-widgets .widget-image-title, #page-header h1, h1.sidebar-widget-title, a.button, a.comment-reply-link, a.comment-edit-link, a.post-edit-link, .nav-left-right a, input[type=submit] {
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}

.heading, .page-title, .post-content h1, .post-content h2, .post-content h3, .post-content h4, .post-content h5, .post-content h6, .author-box h1, .staff header h1, .location header h1, #reply-title, #comments-title, .home-column-widgets-title, .ppt, #tagline, #intro {
	font-family: 'Shadows Into Light Two', Georgia, 'Bitstream Vera Serif', 'Times New Roman', Times, cursive;
}
</style>
<script type="text/javascript">
/* <![CDATA[ */

// jQuery.browser.mobile (http://detectmobilebrowser.com/)
// Updated Nov 18, 2013 (Version: Sep 9, 2013)
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

// For preview purposes, break out of ThemeForest frame on mobile devices
// Also on IE 9+ as frame prevents theme from working properly
if ((jQuery.browser.mobile || Modernizr.touch || (jQuery.browser.msie && parseInt(jQuery.browser.version) >= 9)) && top.location != self.location) {
	top.location = self.location;
}

/* ]]> */
</script>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	</head>

<body class="page page-id-331 page-template page-template-tpl-gallery-categories page-template-tpl-gallery-categories-php">

<!-- Container Start -->

	<div id="container">
	<div id="container-inner">

<!-- Header Start -->

<header id="header">
	<div id="header-inner">
	<div id="header-content">
	<div id="logo" class="has-hidpi-logo">
	
<a href="index.html"><IMG id="logo-regular" alt="Saint John's" src="./SaintJohns_files/logo2.png">
	
	<IMG id="logo-hidpi" alt="Risen" src="./SaintJohns_files/logo2.png">
</a></div>

<div id="top-right">
<div id="top-right-inner">
<div id="top-right-content">
<div id="tagline"><p>Connecting Growing Serving</div>


  <UL class="risen-list-font-icons" id="header-icons">
  <li><a  href="https://www.facebook.com/stjohnsnalc/"  target ="_blank"><img src = "./SaintJohns_files/facebook.jpg" title="Facebook" type="" media=""></a></li>
  <li><a href="https://www.youtube.com/channel/UCiF-JRUppMAjaiLM2z9TMRg"  target="_blank"> <img src = "./SaintJohns_files/youtube.jpg" title="YouTube"></a></li>
  </UL>
</div></div></div></div></div>

<!-- Menu Start -->

<nav id="header-menu">
<div id="header-menu-inner">

<ul id="header-menu-links" class="sf-menu"><li id="menu-item-983" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-983">
	 <a href="index.php">Home</a></li>
<li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-984"><a href="./index.php#publications">News</a>
<ul class="sub-menu">
	<li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="./index.php#publications">Publications</a></li>
</ul>
</li>

</li>
<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-990"><a href="SaintJohns_Gallery.php">Gallery</a>
<ul class="sub-menu">
	<li id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-991"><a href="SaintJohns_Gallery.php#churchtour">Church Tour</a>
</li>
	<li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-risen_gallery menu-item-has-children menu-item-1012"><a href="SaintJohns_Gallery.php#worship">Worship</a>
</li>
	<li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a href="SaintJohns_Gallery.php#congregation">Congregation</a></li>
	<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a href="SaintJohns_Gallery.php#youthgroup">Youth Group</a></li>
</ul>
</li>
<li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-996"><a href="SaintJohns_Events.php">Events</a>
<ul class="sub-menu">
	<li id="menu-item-1017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1017"><a href="SaintJohns_Events.php">Upcoming Events</a></li>
	<li id="menu-item-1018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1018"><a href="https://calendar.google.com/calendar/embed?src=stjohnsluth740%40gmail.com&ctz=America/New_York" target="blank">Calendar</a></li>
</ul>
</li>
<li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997"><a href="SaintJohns_Location.php">Location</a></li>
<li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="SaintJohns_People.php">Our People</a></li>
<li id="menu-item-982" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-982"><a href="./SaintJohns_Visit.php">Visit Us</a>
</li>
<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-990"><a>More</a>
<ul class="sub-menu">
	<li id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-991"><a href="http://www.thenalc.org" target = "blank">NALC Homepage</a>
</li>
<!--THE NALC TOOK DOWN THIER DEVOTIONAL...COMMENTING OUT THIS CODE <?php
$ch = curl_init(); 
	$month = date('F');
	$day = date('j');
	$year = date('Y');
	$NALCwebsite = 'http://thenalc.org/nalc-devotions-' . $month . '-' . $day . '-' . $year . '/';
	
	//checks to see if the NALC devotional target is valid. If so, create a menu link to it.
	curl_setopt($ch, CURLOPT_URL, $NALCwebsite); 
	curl_setopt($ch, CURLOPT_HEADER, 1); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$data = curl_exec($ch); 
	curl_close($ch); 
		
	$parsedData = preg_split("/\\r\\n|\\r|\\n/", $data);
		if ($data != NULL){
			
	echo '<li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-risen_gallery menu-item-has-children menu-item-1012"><a href="' .$NALCwebsite.'" target = "blank">Daily Devotional</a>';
		}
?>-->
	
</li>
	<li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a href="http://carolinasnalc.org/" target = "blank">Carolinas Mission District</a></li>
	<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a href="http://onlinelutheranbiblestudy.weebly.com/bible-studies.html" target="blank">Bible Studies</a></li>

</ul>	
	<div class="clear"></div>
	</div>
    <div id="header-menu-bottom"></div>
    </nav>
<!-- Menu End -->
</header>
<!-- Header End -->

<div class="breadcrumbs"><a href="index.php">Home</a> &gt; <a href="SaintJohns_Gallery.php">Photo &amp; Video Gallery</a></div>

<div id="content">
<div id="content-inner">

<section>
<header>
	<h1 class="page-title">Photo Gallery</h1>
</header>


	<div id="gallery-categories">
	
<article>
	<header>
		<h1 class="gallery-categories-title" id = "churchtour"><a>Church Tour</a></h1>
		
		<ul class = "albums">
		<li class = "alist chosen"><a><b>Church Tour</b></a></li> 
		<li class = "alist"><a href = "#worship">Worship</a></li> 
		<li class = "alist"><a href = "#congregation">Congregation</a></li> 
	    <li class = "alist"><a href = "#youthgroup">Youth Group</a></li>
		</ul>
</header>

		<div class="galleria">
		<img src="./SaintJohns_Gallery_files/Gallery/Tour/church.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/sign.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/doors.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/inside.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/inside1.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/inside3.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/turnback.jpg">	

		<img src="./SaintJohns_Gallery_files/Gallery/Tour/WHDoor.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/hall1.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/hall2.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/choir.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/study.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/nursery.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/meeting.jpg">			
		
		<img src="./SaintJohns_Gallery_files/Gallery/Tour/smallroom.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/library.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/poffice.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/office.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/visitors.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/hall3.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Tour/bulletin.jpg">			
		
		<img src="./SaintJohns_Gallery_files/Gallery/Tour/gathering.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/parking1.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Tour/parking2.jpg">	
</div>

												
					</article>

									
										
					<article>
						
						<header>

							<h1 class="gallery-categories-title"  id = "worship"><a>Worship</a></h1>
	<ul class = "albums">
		<li class = "alist"><a href = "#churchtour">Church Tour</a></li> 
		<li class = "alist chosen"><a><b>Worship</b></a></li> 
		<li class = "alist"><a href = "#congregation">Congregation</a></li> 
	    <li class = "alist"><a href = "#youthgroup">Youth Group</a></li>
		</ul>
		</header>
									<div class="galleria">
        <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship2.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship3.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship4.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship5.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship6.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship7.jpg">		
		<img src="./SaintJohns_Gallery_files/Gallery/Worship/Worship8.jpg">
</div>					
								
					</article>

									
										
					<article>
						
						<header>

							<h1 class="gallery-categories-title" id =
							"congregation"><a>Congregation</a></h1>
					
		
<ul class = "albums">
		<li class = "alist"><a href = "#churchtour">Church Tour</a></li> 
		<li class = "alist"><a href = "#worship">Worship</a></li> 
		<li class = "alist chosen"><a><b>Congregation</b></a></li> 
	    <li class = "alist"><a href = "#youthgroup">Youth Group</a></li>
		</ul>
						</header>
										<div class="galleria">
		<img src="./SaintJohns_Gallery_files/Gallery/congregation/cong1.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong2.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong3.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong4.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong5.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong6.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong7.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong8.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/congregation/cong9.jpg">	
</div>			
												
					</article>

									
										
					<article>
						
						<header>

							<h1 class="gallery-categories-title" id = "youthgroup"><a>Youth Group</a></h1>
					
<ul class = "albums">
		<li class = "alist"><a href = "#churchtour">Church Tour</a></li> 
		<li class = "alist"><a href = "#worship">Worship</a></li> 
		<li class = "alist"><a href = "#congregation">Congregation</a></li> 
	    <li class = "alist chosen"><a><b>Youth Group</b></a></li>
		</ul>
						</header>
<div class="galleria">
		<img src="./SaintJohns_Gallery_files/Gallery/Youth/youth1.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth2.jpg">
        <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth3.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth4.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth5.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth6.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth7.jpg">		
		<img src="./SaintJohns_Gallery_files/Gallery/Youth/youth8.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth9.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth10.jpg">
	    <img src="./SaintJohns_Gallery_files/Gallery/Youth/youth11.jpg">			
</div>							
												
												
					</article>

								
			</div>
			
						
		</section>
		
	</div>

</div>

			

			<!-- Footer Start -->
			
			<footer id="footer">

				<div id="footer-left">
				
					<ul id="footer-menu-links" class="menu"><li id="menu-item-901" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-901"><a href="index.php">Home</a></li>
<li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1000"><a href="./index.php#publications">News</a></li>
<li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998"><a href="SaintJohns_Events.php">Events</a></li>
<li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a href="SaintJohns_People.php">People</a></li>
<li id="menu-item-999" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-999"><a href="SaintJohns_Visit.php">Visit Us</a></li></ul>

<UL class="risen-list-font-icons" id="footer-icons">
  <li><a  href="https://www.facebook.com/stjohnsnalc/"target ="_blank"><img src = "./SaintJohns_files/facebook.jpg" title="Facebook" type="" media=""></a></li>
  <li><a href="https://www.youtube.com/channel/UCiF-JRUppMAjaiLM2z9TMRg" target="_blank"> <img src = "./SaintJohns_files/youtube.jpg" title="YouTube"></a></li></ul>		
  
	<div class="clear"></div>
	</div>			
				
	<div id="footer-right">
				
	<ul id="footer-contact">
		<li><SPAN class="footer-icon church"></SPAN> 740 North Center St. - Statesville, NC 28677</li>
  <li><SPAN class="footer-icon phone"></SPAN> (704)873-0222</li>
    <li>stjohnsluth740@gmail.com</li>
						
					</ul>						
				</div>
				
				<div class="clear"></div>
				
			</footer>
			
			<div id="footer-bottom"></div>
			
			<!-- Footer End -->

		</div>
	
	</div>
	
	<!-- Container End -->
<SCRIPT src="./js/devicepx-jetpack.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/hoverIntent.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/wp-embed.min.js" type="text/javascript"></SCRIPT>
	
<script type="text/javascript" src="./js/devicepx-jetpack.js.download"></script>
<script type="text/javascript" src="./js/hoverIntent.min.js.download"></script>
<script type="text/javascript" src="./js/comment-reply.min.js.download"></script>
<script>
(function() { 
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.js');
    Galleria.run('.galleria');
}());
</script>	
</body></html>