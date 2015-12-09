<?php
/** Template name: Register Template 
 * */
 get_header(); 
 ?>
 
 <div id="core_padding_inner">
	<div class=" container widecontainer core_section_top_container">
		<div class="row core_section_top_row wlt_main_2colsright">
 <div id="core_inner_wrap" class="clearfix">    
	<article class="col-md-12" id="core_middle_column"><div class="core_middle_wrap"><div id="core_ajax_callback"></div>	
<div class="row" style="margin-top: 25px;"><div class="col-md-6">
<div class="panel panel-default" id="login_box" > 
<div class="panel-heading">Register</div>
	<?php echo do_shortcode("[custom-register-form]"); ?> 
</div>    
</div><div class="col-md-6">
    <div class="panel panel-default" id="login_registerbox">
      <div class="panel-body text-center">
            <h3>Already User?</h3> 
            <a href="<?php echo get_site_url(); ?>/wp-login.php?action=login" class="btn btn-large btn-primary">Login</a>
        </div>
     
    </div>
</div>
</div>
       </div></article>
    </div>
    </div>
	</div>
	</div>
 <?php echo get_footer(); ?>