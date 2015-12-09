<?php
/** Template name: Login Template 
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
<div class="panel-heading">Login</div>
	<div class="panel-body"> 
        <?php if(isset($_GET['action']) && $_GET['action'] == "register"){
    ?>
     	<?php echo do_shortcode("[custom-register-form]"); ?> 
        
    <?php }else {?>
    
		<?php echo do_shortcode("[custom-login-form]"); ?> 
   <?php }?>
	</div>
</div>    
</div><div class="col-md-6">
    <div class="panel panel-default" id="login_registerbox">
    <?php if(isset($_GET['action']) && $_GET['action'] == "register"){
    ?>
       <div class="panel-body text-center">
            <h3>Already User?</h3> 
            <a href="<?php echo get_site_url(); ?>/wp-login.php?action=login" class="btn btn-large btn-primary">Login</a>
        </div>
        
    <?php }else {?>
       <div class="panel-body text-center">
            <h3>New to our website?</h3>
            <p>Get started now. It's fast and easy.</p>
            <a href="<?php echo get_site_url(); ?>/register" class="btn btn-large btn-primary">Register</a>
           <span style="text-align: center; margin: 0 auto; display: table; margin-top: 25px;">   <?php echo do_shortcode('[miniorange_social_login theme="default"]') ?></span>
        </div>
      
    <?php }?>
     
    </div>
</div>
</div>
       </div></article>
    </div>
    </div>
	</div>
	</div>
 <?php echo get_footer(); ?>