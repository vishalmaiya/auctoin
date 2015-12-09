<?php
get_header();
?>
<section class="sbg1">
<div class="overwrap">
<div class="container">
    <div class="title-lines">
        <h2>Online Auction System</h2>
    </div>
    <div id="car1" class="owl-carousel wlt_search_results grid_style ">
    
<?php

 $args = array(
            "post_type" => "auction",
            "post_status" => "publish",
            "page_per_post" => "6"
            );           
      
      $the_query2 = new WP_Query( $args );
// The Loop
if ( $the_query2->have_posts() ) :
while ( $the_query2->have_posts() ) : $the_query2->the_post();
$post_id1 = get_the_ID(); 
$thumb_url2 = wp_get_attachment_url( get_post_thumbnail_id($post_id1) );

?>
<div class="itemdata icons itemid3097  item-3097 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='#' data-gal='prettyPhoto[ppt_gal_3097]'><span class='fa fa-camera'></span></a>
                    <a href='#'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="<?php echo $thumb_url2; ?>" alt="fallback-no-image-3097" class="wlt_thumbnail img-responsive" /></div>
            <a href='<?php echo $thumb_url2; ?>' data-gal='prettyPhoto[ppt_gal_3097]'></a> 
    <div class="content">  
    <h3><a href="<?php echo get_the_permalink(); ?>" ><span ><?php echo get_the_title(); ?></span></a> 
    <span id='wlt_star_6377433795353097' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433795353097').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3097', score, 'wlt_star_6377433795353097');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$<?php echo get_field("base_price"); ?></b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right">   <span class="bids"><?php echo get_number_of_bids(get_the_ID()); ?> bids</span>    </div>
    </div>
 	<div class="line1"></div> 
     
        <span id='timeleftss_<?php echo get_the_ID(); ?>'></span>
		 <?php
               $cudate1 = get_post_meta($post_id,"expire_time",true); 
    $next_dateaa = strtotime($cudate1);
  

    $ndd2 = date("Y-m-d H:i:s",$next_dateaa); 
    $current_timea = strtotime(date("Y-m-d H:i:s"));
    if($next_dateaa > $current_timea)
    {
        ?>
        <span id='timeleft_<?php echo get_the_ID(); ?>'></span>
        <?php
    }else
    {
        ?>
       
        <?php
    }
    ?> 
			<script>
			jQuery(document).ready(function() {		
			 //2016-01-04 15:11:19
			var dateStr ='<?php echo $ndd2; ?>';
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
		//	jQuery('#timeleftss_<?php echo get_the_ID(); ?>').countdown({until: date1, onExpiry: WLTvalidateexpiry3106, timezone: -5 });
             
			});
			
			</script>
    </div>
    </div> 
</div>
 <?php
 
endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
      
    ?>        
          
          

    </div> 
    <script>
    jQuery(document).ready(function() { 
      jQuery("#car1").owlCarousel({ items : 4, autoPlay : true, rtl: true  }); 
    });
    </script> 
</div>
</div>
</section>
</div> 
<div id="core_padding">
    <div id="core_padding_inner">
	<div class=" container widecontainer core_section_top_container">
		<div class="row core_section_top_row wlt_main_2colsright">
 <div id="core_inner_wrap" class="clearfix">   
	<article class="col-md-12" id="core_middle_column"><div class="core_middle_wrap"><div id="core_ajax_callback"></div>	
    <div class="title-lines">
        <h2>Amazing Deals Online Now!</h2>
        <h3>Bid on your favourite product.</h3>
    </div> 
    <div class="tabstyle1"> 
      <ul class="nav nav-tabs hidden-xs" role="tablist">
      <li class="pull-right"><a href="<?php echo get_site_url(); ?>/add-product/" class="btn btn-success">Add Auction</a></li>
        <li role="presentation" class="active"><a href="#t1" aria-controls="t1" role="tab" data-toggle="tab">Auction List</a></li>
        
      </ul>
    </div>
    <div class="tab-content" style="margin-top:20px;">
        <div role="tabpanel" class="tab-pane active" id="t1">   
            <div class="row wlt_search_results grid_style" >
            
            
 <?php
 $args = array(
            "post_type" => "auction",
            "post_status" => "publish",
            );           
      
      $the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();
$post_id = get_the_ID(); 
$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
 ?>
 <div class="itemdata icons itemid3106 col-md-3 col-sm-4 col-xs-12  item-3106 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/13.jpg' data-gal='prettyPhoto[ppt_gal_3106]'>
                    <span class='fa fa-camera'></span></a>
                    <a href='<?php echo get_permalink(); ?>/'>
                    <span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="<?php echo $thumb_url; ?>" alt="fallback-no-image-3106" class="wlt_thumbnail img-responsive" /></div>
            <a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/13.jpg' data-gal='prettyPhoto[ppt_gal_3106]'></a> 
    <div class="content">  
    <h3><a href="<?php echo get_the_content(); ?>" ><span ><?php echo get_the_title(); ?></span></a> 
    </span>
		 </h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$<?php echo get_field("base_price"); ?></b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> 
    <span class="bids"><?php echo get_number_of_bids(get_the_ID()); ?> bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    
    
    <?php  
      $cudate = get_post_meta($post_id,"expire_time",true); 
    $next_date = strtotime($cudate);
  

    $ndd = date("Y-m-d H:i:s",$next_date); 
    $current_time = strtotime(date("Y-m-d H:i:s"));
    if($next_date > $current_time)
    {
        ?>
        <span id='timeleft_<?php echo get_the_ID(); ?>'></span>
        <?php
    }else
    {
        ?>
        <span class="soldout">Sold out</span>
        <?php
    }
      ?>
      
			<script>
			jQuery(document).ready(function() {		
			 //2016-01-04 15:11:19
			var dateStr ='<?php echo $ndd; ?>';
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_<?php echo get_the_ID(); ?>').countdown({until: date1, onExpiry: WLTvalidateexpiry3106, timezone: -5 });
             
			});
			
			</script>
    </div>
    </div> 
</div>
 
 <?php
 
endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
      
    ?>        
            
            
 
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="t3">   
            <div class="row wlt_search_results grid_style">
<div class="itemdata icons itemid3106 col-md-3 col-sm-4 col-xs-12  item-3106 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/13.jpg' data-gal='prettyPhoto[ppt_gal_3106]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-13/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/13.jpg" alt="fallback-no-image-3106" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/13.jpg' data-gal='prettyPhoto[ppt_gal_3106]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-13/" ><span >Example Item 13</span></a> <span id='wlt_star_6377433796793106' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433796793106').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3106', score, 'wlt_star_6377433796793106');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$475</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">0 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_31061449416772005278'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-10-10 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_31061449416772005278').countdown({until: date1, onExpiry: WLTvalidateexpiry3106, timezone: 0 });
			});
			function WLTvalidateexpiry3106(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3106', 'timeleft_31061449416772005278');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3103 col-md-3 col-sm-4 col-xs-12  item-3103 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/10.jpg' data-gal='prettyPhoto[ppt_gal_3103]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-10/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/10.jpg" alt="fallback-no-image-3103" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/10.jpg' data-gal='prettyPhoto[ppt_gal_3103]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-10/" ><span >Example Item 10</span></a> <span id='wlt_star_6377433796883103' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433796883103').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3103', score, 'wlt_star_6377433796883103');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$415</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">1 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_31031449416772026383'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-11 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_31031449416772026383').countdown({until: date1, onExpiry: WLTvalidateexpiry3103, timezone: 0 });
			});
			function WLTvalidateexpiry3103(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3103', 'timeleft_31031449416772026383');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3102 col-md-3 col-sm-4 col-xs-12  item-3102 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/9.jpg' data-gal='prettyPhoto[ppt_gal_3102]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-9/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/9.jpg" alt="fallback-no-image-3102" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/9.jpg' data-gal='prettyPhoto[ppt_gal_3102]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-9/" ><span >Example Item 9</span></a> <span id='wlt_star_6377433796973102' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433796973102').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3102', score, 'wlt_star_6377433796973102');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$195</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">0 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_31021449416772047803'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-10 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_31021449416772047803').countdown({until: date1, onExpiry: WLTvalidateexpiry3102, timezone: 0 });
			});
			function WLTvalidateexpiry3102(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3102', 'timeleft_31021449416772047803');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3100 col-md-3 col-sm-4 col-xs-12  item-3100 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/7.jpg' data-gal='prettyPhoto[ppt_gal_3100]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-7/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/7.jpg" alt="fallback-no-image-3100" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/7.jpg' data-gal='prettyPhoto[ppt_gal_3100]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-7/" ><span >Example Item 7</span></a> <span id='wlt_star_6377433797043100' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433797043100').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 3,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3100', score, 'wlt_star_6377433797043100');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$310</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">3 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_31001449416772064016'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-08 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_31001449416772064016').countdown({until: date1, onExpiry: WLTvalidateexpiry3100, timezone: 0 });
			});
			function WLTvalidateexpiry3100(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3100', 'timeleft_31001449416772064016');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3099 col-md-3 col-sm-4 col-xs-12  item-3099 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/6.jpg' data-gal='prettyPhoto[ppt_gal_3099]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-6/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/6.jpg" alt="fallback-no-image-3099" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/6.jpg' data-gal='prettyPhoto[ppt_gal_3099]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-6/" ><span >Example Item 6</span></a> <span id='wlt_star_6377433797123099' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433797123099').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3099', score, 'wlt_star_6377433797123099');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$231</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">0 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_30991449416772087902'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-07 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_30991449416772087902').countdown({until: date1, onExpiry: WLTvalidateexpiry3099, timezone: 0 });
			});
			function WLTvalidateexpiry3099(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3099', 'timeleft_30991449416772087902');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3098 col-md-3 col-sm-4 col-xs-12  item-3098 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/5.jpg' data-gal='prettyPhoto[ppt_gal_3098]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-5/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/5.jpg" alt="fallback-no-image-3098" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/5.jpg' data-gal='prettyPhoto[ppt_gal_3098]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-5/" ><span >Example Item 5</span></a> <span id='wlt_star_6377433797213098' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433797213098').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3098', score, 'wlt_star_6377433797213098');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$302</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">1 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_30981449416772103510'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-06 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_30981449416772103510').countdown({until: date1, onExpiry: WLTvalidateexpiry3098, timezone: 0 });
			});
			function WLTvalidateexpiry3098(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3098', 'timeleft_30981449416772103510');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3097 col-md-3 col-sm-4 col-xs-12  item-3097 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/4.jpg' data-gal='prettyPhoto[ppt_gal_3097]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-4/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/4.jpg" alt="fallback-no-image-3097" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/4.jpg' data-gal='prettyPhoto[ppt_gal_3097]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-4/" ><span >Example Item 4</span></a> <span id='wlt_star_6377433797293097' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433797293097').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3097', score, 'wlt_star_6377433797293097');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$344</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">2 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_30971449416772116961'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-05 15:11:20'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_30971449416772116961').countdown({until: date1, onExpiry: WLTvalidateexpiry3097, timezone: 0 });
			});
			function WLTvalidateexpiry3097(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3097', 'timeleft_30971449416772116961');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
<div class="itemdata icons itemid3096 col-md-3 col-sm-4 col-xs-12  item-3096 col-xs-12" >
<div class="thumbnail clearfix"> 
   <div class='galleryframe frame'>
			<div class='overlay-gallery'>
				<div class='lbox'>
					<a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/3.jpg' data-gal='prettyPhoto[ppt_gal_3096]'><span class='fa fa-camera'></span></a><a href='http://at1.wlthemes.com/listing/example-item-3/'><span class='fa fa-search'></span></a>
				</div>
			</div> 
			<img  src="http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/3.jpg" alt="fallback-no-image-3096" class="wlt_thumbnail img-responsive" /></div><a href='http://at1.wlthemes.com/wp-content/themes/template_at_one/img/p/3.jpg' data-gal='prettyPhoto[ppt_gal_3096]'></a> 
    <div class="content">  
    <h3><a href="http://at1.wlthemes.com/listing/example-item-3/" ><span >Example Item 3</span></a> <span id='wlt_star_6377433797373096' class='wlt_starrating pull-right'></span>
				<script type='text/javascript'>jQuery(document).ready(function(){ 
				jQuery('#wlt_star_6377433797373096').raty({
				path: 'http://at1.wlthemes.com/wp-content/themes/AT/framework/img/rating/',
				score: 0,size: 16, click: function(score, evt) {			 
					WLTSaveRating('at1.wlthemes.com', '3096', score, 'wlt_star_6377433797373096');
				}}); }); </script></h3>
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6"> <b>$501</b>  </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <span class='wlt_shortcode_category'><a href="http://at1.wlthemes.com/listing-category/example-category-1/" rel="tag">Example Category 1</a></span> <span class="bids">1 bids</span>    </div>
    </div>
 	<div class="line1"></div> 
    <span class='wlt_shortcode_excerpt' >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ</span>
    <span id='timeleft_30961449416772136542'></span>
			<script>
			jQuery(document).ready(function() {		
			var dateStr ='2016-01-04 15:11:19'
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_30961449416772136542').countdown({until: date1, onExpiry: WLTvalidateexpiry3096, timezone: 0 });
			});
			function WLTvalidateexpiry3096(){ jQuery('#auctionbidform').hide(); setTimeout(function(){ CoreDo('at1.wlthemes.com/?core_aj=1&action=validateexpiry&pid=3096', 'timeleft_30961449416772136542');  }, 1000);  }
			</script>
    </div>
    </div> 
</div>
            </div>
        </div>
    </div>
        <script>
    jQuery(document).ready(function() { 
        setTimeout(function(){equalheight('.grid_style .thumbnail');  }, 2000); 
        jQuery('.nav-tabs a').on( "click", function() {
        setTimeout(function(){equalheight('.grid_style .thumbnail');  }, 1000); 
        });
    });
     </script>
<div class="searchme">
<div class="container-fluid"><div class="row">
        <div class="col-md-7">
            <h5>Search Website</h5>
            <p>Please enter a search description for your item.</p>
        </div>
        <div class="col-md-5">
                <form method="get" action="http://at1.wlthemes.com/">
                <input type="text" name="s" value="" placeholder="Keyword or phrase.."> <button type="submit">Search</button>    
                </form>          
        </div>
    </div></div>
</div>
       </div></article>
    </div>
    </div>
	</div>
	</div> 
</div>
<!-- [WLT] FRAMRWORK // FOOTER -->
<?php echo get_footer();  ?>