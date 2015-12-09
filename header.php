<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
// $pid = get_the_ID();
// if(!is_user_logged_in() && $pid != 82 && $pid != 88 )
// {
//    wp_redirect("http://auctionvm.androidash.com/login/");
//    exit();
// }
 

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
<title> AT1</title> 
<meta name="viewport" content="width=device-width, initial-scale=1" /><link rel='stylesheet' id='bootstrap-css'  href='<?php echo get_site_url(); ?>/wp-content/themes/twentyfifteen/css/css.bootstrap.css?ver=1a51be8d493df7a738600175d62df7f3' type='text/css' media='all' />
<link rel='stylesheet' id='wlt_core-css'  href='<?php echo get_site_url(); ?>/wp-content/themes/twentyfifteen/css/css.core.css' type='text/css' media='all' />
<link rel='stylesheet' id='wlt_core_extra-css'  href='<?php echo get_site_url(); ?>/wp-content/themes/twentyfifteen/css/style_childtheme.css?ver=1a51be8d493df7a738600175d62df7f3' type='text/css' media='all' />
<link rel='stylesheet' id='wlt_child-theme2-css'  href='<?php echo get_site_url(); ?>/wp-content/themes/twentyfifteen/style.css?ver=1a51be8d493df7a738600175d62df7f3' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery.js?ver=1a51be8d493df7a738600175d62df7f3'></script>
<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1a51be8d493df7a738600175d62df7f3'></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>
<body class="home blog logged-in wlt_auction_theme core_auction_theme" >
<div class="page-wrapper  demomode" id="listing_styles">
<script>
	(function($)
	{
		jQuery(document).ready(function() { 
	 
	// Selector (MODULE #2)
	jQuery('.demo_changer .PatternChanger a').click(function(){
		var bgBgCol = jQuery(this).attr('href');
		jQuery('.demo_changer .PatternChanger a').removeClass('current');
		jQuery('body').css({backgroundColor:'#ffffff'});
		jQuery(this).addClass('current');
		jQuery('body').css({backgroundImage:'url(' + bgBgCol + ')'});
		if (jQuery(this).hasClass('bg_t')){
			jQuery('body').css({backgroundRepeat:'repeat', backgroundPosition:'50% 0', backgroundAttachment:'scroll'});
		} else {
			jQuery('body').css({backgroundRepeat:'repeat', backgroundPosition:'50% 0', backgroundAttachment:'scroll'});
		}
		return false;
	});
	jQuery('.widthswitch').click(function(){
	var w = jQuery(this).attr('data-rel');
	if(w == 1){ // boxed layout
		jQuery(this).addClass('current');
		jQuery('.page-wrapper').addClass('container');
		jQuery('#core_breadcrumbs .container').addClass('container-fluid').removeClass('container');
		jQuery('.core_section_top_container').addClass('container-fluid').removeClass('container');
		jQuery('#footer .container').addClass('container-fluid').removeClass('container');
		jQuery('#core_header').removeClass('container').addClass('container-fluid');
		jQuery('#core_menu_wrapper .container').removeClass('container').addClass('container-fluid');
		jQuery('#core_header_navigation .container').removeClass('container').addClass('container-fluid');
	} else if(w == 2){ // wide layout
		jQuery(this).addClass('current');
		jQuery('.page-wrapper').removeClass('container');	
		jQuery('.core_section_top_container .container-fluid').addClass('container');
		jQuery('#core_header').addClass('container');
		jQuery('#core_header_navigation .container-fluid').addClass('container');
		jQuery('#core_menu_wrapper .container-fluid').addClass('container');
		jQuery('#core_padding .container-fluid').addClass('container');
		jQuery('#footer .container-fluid').addClass('container');
		jQuery('#core_breadcrumbs .container-fluid').addClass('container').removeClass('container-fluid');
	} else if(w == 3){ // boxed content
		jQuery(this).addClass('current');
		jQuery('body').removeClass('container-fluid').addClass('container').removeClass('cold');
		jQuery('.container').addClass('cold').removeClass('container').removeClass('container-fluid');		
		jQuery('#core_header .container').removeClass('container').addClass('container-fluid');
	} else if(w == 4){ // wide content
		jQuery(this).addClass('current');
		jQuery('.cold').removeClass('container-fluid').addClass('container').removeClass('cold');
	}
	return false;
	});
	function ChangeLogo(logoid) { 	
		jQuery('#logoicon').attr("src", logoid);
		createCookie('logoicon', logoid, 365);
	}
	function ChangeHeader(hid) {  
		jQuery('.overlay').css("background-image", "url(" + hid + ")");  
		createCookie('hid', hid, 365);
	}
	function ChangeLogoTxt(txt, type){
		if(type == 1){
			jQuery('#core_logo .main').html(txt);
		} else{ 
			jQuery('#core_logo .submain').html(txt);
		}
		jQuery('#txt' + type).val(txt);
		createCookie('txt' + type, txt, 365);
	}
	function ChangeHome(id){
		jQuery('#homelayoutid').val(id);
		document.changehome.submit();
	}
!function(o){var n="hemiIntro";o[n]=function(t){var e=this,s={debug:!1,steps:[],startFromStep:0,backdrop:{element:o("<div>"),"class":"hemi-intro-backdrop"},popover:{template:'<div class="popover hemi-intro-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'},buttons:{holder:{element:o("<div>"),"class":"hemi-intro-buttons-holder"},next:{element:o("<button>Next</button>"),"class":"btn btn-primary"},finish:{element:o("<button>Finish</button>"),"class":"btn btn-primary"}},welcomeDialog:{show:!1,selector:null},scroll:{anmationSpeed:500},currentStep:{selectedClass:"hemi-intro-selected"},init:function(){},onLoad:function(){},onStart:function(){},onBeforeChangeStep:function(){},onAfterChangeStep:function(){},onShowModalDialog:function(){},onHideModalDialog:function(){},onComplete:function(){}};e.options=o.extend(!0,s,t),e.options.init(e);var =e.options.startFromStep,p=null,l=null;e.backdrop=e.options.backdrop.element.clone().addClass(e.options.backdrop["class"]),e.options.onLoad(e),e.start=function(){if(e.options.onStart(e),e.options.welcomeDialog.show){var t=o(e.options.welcomeDialog.selector);t.length>0?(t.on("show.bs.modal",function(){e.options.onShowModalDialog(e,t)}),t.on("hidden.bs.modal",function(){e.options.onHideModalDialog(e,t),e.backdrop.appendTo("body"),a(i)}),t.modal("show")):(u(n+":","Modal '"+e.options.welcomeDialog.selector+"' not found"),e.backdrop.appendTo("body"),a(i))}else e.backdrop.appendTo("body"),a(i)},e.next=function(){e.options.steps[i+1]?a(i+1):e.finish()},e.prev=function(){a(0>i-1?i:i-1)},e.finish=function(){c()},e.goToStep=function(o){a(o)};var a=function(t){if(e.options.steps[t]){var s=e.options.steps[t];o(s.selector).length>0?(r(),p=o(s.selector),i=t,l=s,e.options.onBeforeChangeStep(e,s),p.addClass(e.options.currentStep.selectedClass),d(function(){var n,i=o(e.options.popover.template),l="id"+Math.random().toString(30).slice(2),a=e.options.buttons.holder.element.clone().addClass(e.options.buttons.holder["class"]);e.options.steps[t+1]?(n=e.options.buttons.next.element.clone(),n.addClass(e.options.buttons.next["class"]).addClass(l),a.append(n)):(n=e.options.buttons.finish.element.clone(),n.addClass(e.options.buttons.finish["class"]).addClass(l),a.append(n));var r=o("<div>").append(s.content);s.showButtons!==!1&&r.append(a.get(0).outerHTML),p.popover({content:r.get(0).outerHTML,html:!0,trigger:"manual",placement:s.placement,template:i.get(0).outerHTML}).popover("show"),p.on("shown.bs.popover",function(){e.options.onAfterChangeStep(e,s),o("."+l).on("click",function(){e.options.steps[t+1]?e.next():e.finish()})})})):u(n+":","Step element not found: ",s)}else u(n+":","Step not found")},r=function(){null!==p&&(p.removeClass(e.options.currentStep.selectedClass),p.popover("destroy"))},c=function(){r(),e.backdrop.remove(),e.options.onComplete(e)},d=function(n){if("function"!=typeof n&&(n=o.noop()),l.scrollToElement!==!1){var t=20;l.offsetTop&&(t=l.offsetTop);var s=!1;o("html, body").animate({scrollTop:p.offset().top-t},e.options.scroll.anmationSpeed,function(){s===!1&&(n(),s=!0)})}else n()},u=function(){e.options.debug&&console.log.apply(console,arguments)};return e}}(jQuery);
</script>
<div class="header_wrapper">
    <header id="header">
<div class="overlay">
    <div id="core_header_navigation" class="hidden-xs">
        <div class="container">
        </div>
    </div>
    <div id="core_header_wrapper">
        <div class="container header_style2" id="core_header">
            <div class="row">
                <div class="col-md-4 col-sm-12" id="core_logo">
                    <a href="<?php echo get_site_url(); ?>" title="AT1">
                        <div class='logowrapper'><span class='main'>Auction System</span> 
                        <span class='submain'>ENCS 691K Project</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-8 col-sm-12">
                    <nav class="navbar hidden-xs">
                        <div class="container-fluid">
                            <div class="menu-aaa-container">
                                <ul id="menu-aaa" class="nav navbar-nav">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home"><a href="<?php echo get_site_url(); ?>"><span>Home</span></a>
                                    </li>
                                     <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home"><a href="<?php echo get_site_url(); ?>/add-product"><span>Add Product</span></a>
                                    </li>
                                    <?php if(is_user_logged_in()){ ?>
       
		<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>/my-account/"><span>My Account</span></a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo wp_logout_url(); ?>"><span>Logout</span></a></li>
           <?php }else{ ?> 
<li class="menu-item menu-item-type-post_type menu-item-object-page">
<a href="<?php echo get_site_url(); ?>/login/"><span>Login</span>
</a></li>
           <?php } ?>
            
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>contact-6/"><span>Contact</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- [WLT] FRAMRWORK // MOBILE MENU -->
    <div class="container-fluid visible-xs" id="core_smallmenu">
        <div class="row">
            <div id="wlt_smalldevicemenubar">
                <a href="javascript:void(0);" class="b1" data-toggle="collapse" data-target=".wlt_smalldevicemenu">Website Navigation <span class="glyphicon glyphicon-align-justify"></span></a>
                <div class="wlt_smalldevicemenu collapse">
                    <ul id="menu-aaa-2" class="">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home"><a href="<?php echo get_site_url(); ?>"><span>Home</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>how-it-works/"><span>How it works?</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>advertising/"><span>Advertising</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown"><a href="<?php echo get_site_url(); ?>sample-page/"><span>Sample Page</span></a>
                            <ul class="smalldevice_dropmenu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>sample-page/"><span>Sample Page</span></a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>example-css/"><span>Example CSS</span></a>
                                </li>
                                <!--.dropdown-->
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>my-account/"><span>My Account</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>blog/"><span>Blog</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo get_site_url(); ?>contact-6/"><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    </header>
    
    <?php if(!is_home()) {
        ?>
         
<div class="page-wrapper  demomode" id="listing_styles">
 
     
<script>
 
	
	(function($)
	{
		jQuery(document).ready(function() { 
		
			jQuery('.styleswitch').click(function()
			{
				switchStylestyle(this.getAttribute("data-rel"));
				return false;
			});
			var c = readCookie('style');
			if (c){ switchStylestyle(c); }else{ ChangeDemoImages(''); }
			
			 
			var t1 = readCookie('txt1');
			if (t1) ChangeLogoTxt(t1, 1);
			
			var t2 = readCookie('txt2');
			if (t2) ChangeLogoTxt(t2, 2);
			 
			var li = readCookie('logoicon');
			if (li) ChangeLogo(li);
			
			var donedemo = readCookie('donedemo');
			
			if(donedemo != "yes"){
			
				jQuery(function () {
					var intro = jQuery.hemiIntro({
						steps: [
							{
								selector: ".demo-icon",
								placement: "bottom",
								content: "<h4>More Demo Options!! </h4> <p>You can view more options by clicking here.</p> <p>Don't miss the admin area demo!</p>",
							},							 
						],
						onComplete: function (plugin) {
						createCookie('donedemo', "yes", 1);
						}
					}
					
					
					);
					intro.start();
				});
			
		}
			
			
		});
	
		function switchStylestyle(styleName)
		{
			jQuery('link[rel*=style][title]').each(function(i) 
			{
			
			
				this.disabled = true;
				if (this.getAttribute('title') == styleName) this.disabled = false;
			});
			createCookie('style', styleName, 365); 
			ChangeDemoImages(styleName);
		}
	})(jQuery);
	
	
	function ChangeDemoImages(styleName){ 
	 
	
	}
	
	
	function createCookie(name,value,days)
	{
		if (days)
		{
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	function readCookie(name)
	{
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++)
		{
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	function eraseCookie(name)
	{
		createCookie(name,"",-1);
	}

	// DEMO Swticher Base
	jQuery('.demo_changer .demo-icon').click(function(){
		if(jQuery('.demo_changer').hasClass("active")){
			jQuery('.demo_changer').animate({"left":"-400px"},function(){
				jQuery('.demo_changer').toggleClass("active");
			});						
		}else{
			jQuery('.demo_changer').animate({"left":"0px"},function(){
				jQuery('.demo_changer').toggleClass("active");
			});			
		} 
	});
 

	// Selector (MODULE #2)
	jQuery('.demo_changer .PatternChanger a').click(function(){
		var bgBgCol = jQuery(this).attr('href');
		jQuery('.demo_changer .PatternChanger a').removeClass('current');
		jQuery('body').css({backgroundColor:'#ffffff'});
		jQuery(this).addClass('current');
		jQuery('body').css({backgroundImage:'url(' + bgBgCol + ')'});
		if (jQuery(this).hasClass('bg_t')){
			jQuery('body').css({backgroundRepeat:'repeat', backgroundPosition:'50% 0', backgroundAttachment:'scroll'});
		} else {
			jQuery('body').css({backgroundRepeat:'repeat', backgroundPosition:'50% 0', backgroundAttachment:'scroll'});
		}
		return false;
	});
	
	
	jQuery('.widthswitch').click(function(){
	var w = jQuery(this).attr('data-rel');
 
	if(w == 1){ // boxed layout
		jQuery(this).addClass('current');
		jQuery('.page-wrapper').addClass('container');
		jQuery('#core_breadcrumbs .container').addClass('container-fluid').removeClass('container');
		jQuery('.core_section_top_container').addClass('container-fluid').removeClass('container');
		jQuery('#footer .container').addClass('container-fluid').removeClass('container');
		jQuery('#core_header').removeClass('container').addClass('container-fluid');
		jQuery('#core_menu_wrapper .container').removeClass('container').addClass('container-fluid');
		jQuery('#core_header_navigation .container').removeClass('container').addClass('container-fluid');
		
		 
		 
	} else if(w == 2){ // wide layout
		jQuery(this).addClass('current');
		jQuery('.page-wrapper').removeClass('container');	
		jQuery('.core_section_top_container .container-fluid').addClass('container');
		jQuery('#core_header').addClass('container');
		jQuery('#core_header_navigation .container-fluid').addClass('container');
		jQuery('#core_menu_wrapper .container-fluid').addClass('container');
		jQuery('#core_padding .container-fluid').addClass('container');
		jQuery('#footer .container-fluid').addClass('container');
		jQuery('#core_breadcrumbs .container-fluid').addClass('container').removeClass('container-fluid');
					
	} else if(w == 3){ // boxed content
		jQuery(this).addClass('current');
		jQuery('body').removeClass('container-fluid').addClass('container').removeClass('cold');
		jQuery('.container').addClass('cold').removeClass('container').removeClass('container-fluid');		
		jQuery('#core_header .container').removeClass('container').addClass('container-fluid');
		
		
	} else if(w == 4){ // wide content
		jQuery(this).addClass('current');
		jQuery('.cold').removeClass('container-fluid').addClass('container').removeClass('cold');
	}
	
	return false;
	});
	
	function ChangeLogo(logoid) { 	
		jQuery('#logoicon').attr("src", logoid);
		
		createCookie('logoicon', logoid, 365);
	
	}
	
	function ChangeHeader(hid) {  
		jQuery('.overlay').css("background-image", "url(" + hid + ")");  
		
		createCookie('hid', hid, 365);
	
	}
	
	function ChangeLogoTxt(txt, type){
		
		if(type == 1){
			jQuery('#core_logo .main').html(txt);
		} else{ 
			jQuery('#core_logo .submain').html(txt);
		}
		jQuery('#txt' + type).val(txt);
		createCookie('txt' + type, txt, 365);
	}
	
	function ChangeHome(id){
		 
		jQuery('#homelayoutid').val(id);
		document.changehome.submit();
		
	}
 
!function(o){var n="hemiIntro";o[n]=function(t){var e=this,s={debug:!1,steps:[],startFromStep:0,backdrop:{element:o("<div>"),"class":"hemi-intro-backdrop"},popover:{template:'<div class="popover hemi-intro-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'},buttons:{holder:{element:o("<div>"),"class":"hemi-intro-buttons-holder"},next:{element:o("<button>Next</button>"),"class":"btn btn-primary"},finish:{element:o("<button>Finish</button>"),"class":"btn btn-primary"}},welcomeDialog:{show:!1,selector:null},scroll:{anmationSpeed:500},currentStep:{selectedClass:"hemi-intro-selected"},init:function(){},onLoad:function(){},onStart:function(){},onBeforeChangeStep:function(){},onAfterChangeStep:function(){},onShowModalDialog:function(){},onHideModalDialog:function(){},onComplete:function(){}};e.options=o.extend(!0,s,t),e.options.init(e);var i=e.options.startFromStep,p=null,l=null;e.backdrop=e.options.backdrop.element.clone().addClass(e.options.backdrop["class"]),e.options.onLoad(e),e.start=function(){if(e.options.onStart(e),e.options.welcomeDialog.show){var t=o(e.options.welcomeDialog.selector);t.length>0?(t.on("show.bs.modal",function(){e.options.onShowModalDialog(e,t)}),t.on("hidden.bs.modal",function(){e.options.onHideModalDialog(e,t),e.backdrop.appendTo("body"),a(i)}),t.modal("show")):(u(n+":","Modal '"+e.options.welcomeDialog.selector+"' not found"),e.backdrop.appendTo("body"),a(i))}else e.backdrop.appendTo("body"),a(i)},e.next=function(){e.options.steps[i+1]?a(i+1):e.finish()},e.prev=function(){a(0>i-1?i:i-1)},e.finish=function(){c()},e.goToStep=function(o){a(o)};var a=function(t){if(e.options.steps[t]){var s=e.options.steps[t];o(s.selector).length>0?(r(),p=o(s.selector),i=t,l=s,e.options.onBeforeChangeStep(e,s),p.addClass(e.options.currentStep.selectedClass),d(function(){var n,i=o(e.options.popover.template),l="id"+Math.random().toString(30).slice(2),a=e.options.buttons.holder.element.clone().addClass(e.options.buttons.holder["class"]);e.options.steps[t+1]?(n=e.options.buttons.next.element.clone(),n.addClass(e.options.buttons.next["class"]).addClass(l),a.append(n)):(n=e.options.buttons.finish.element.clone(),n.addClass(e.options.buttons.finish["class"]).addClass(l),a.append(n));var r=o("<div>").append(s.content);s.showButtons!==!1&&r.append(a.get(0).outerHTML),p.popover({content:r.get(0).outerHTML,html:!0,trigger:"manual",placement:s.placement,template:i.get(0).outerHTML}).popover("show"),p.on("shown.bs.popover",function(){e.options.onAfterChangeStep(e,s),o("."+l).on("click",function(){e.options.steps[t+1]?e.next():e.finish()})})})):u(n+":","Step element not found: ",s)}else u(n+":","Step not found")},r=function(){null!==p&&(p.removeClass(e.options.currentStep.selectedClass),p.popover("destroy"))},c=function(){r(),e.backdrop.remove(),e.options.onComplete(e)},d=function(n){if("function"!=typeof n&&(n=o.noop()),l.scrollToElement!==!1){var t=20;l.offsetTop&&(t=l.offsetTop);var s=!1;o("html, body").animate({scrollTop:p.offset().top-t},e.options.scroll.anmationSpeed,function(){s===!1&&(n(),s=!0)})}else n()},u=function(){e.options.debug&&console.log.apply(console,arguments)};return e}}(jQuery);
</script>
 


 <div id="core_padding"> 	    
    <!-- FRAMRWORK // BREADCRUMBS --> 
	 
	<div id="core_breadcrumbs" class="clearfix">
	<div class="container">
		<div class="row"> 
	
            
         <?php if(is_user_logged_in()){ ?>
       
			<ul class="breadcrumb pull-left">  
    			 <li><a href="<?php echo get_site_url(); ?>" class="bchome">Home</a></li>
                 <li><a href="#">My Account</a></li>
			</ul>	 
			<ul class="breadcrumb pull-right">
                <li class=""><a href="<?php echo get_site_url(); ?>/my-account-27/" class="ua1 ">Dashboard</a></li>
                <li class="hidden-sm hidden-xs"><a href="<?php echo get_site_url(); ?>/?s=&amp;" class="ua3 ">My Favorites (0)</a></li>
                <li class="hidden-sm hidden-xs"><a href="<?php echo wp_logout_url(); ?>" class="ua4 ">Logout</a></li>
            </ul> 
           <?php }else{ ?> 
		      <ul class="breadcrumb pull-left">  
        			<li> <a href="<?php echo get_site_url(); ?>" class="bchome">Home</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/login">Login</a></li>
		  	 </ul>
           <?php } ?>
		</div>
	</div> 
	</div>
    </div>
        <?php
    } ?>