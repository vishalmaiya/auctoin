<?php

/**
 * Template name: Add Product
 * */
 if(isset($_POST['product_submit']) && $_POST['product_submit'] == "submit")
 {
    $title = $_POST['post_title'];
    $description = $_POST['post_content'];
    $base_price = $_POST['base_price'];
    $original_price = $_POST['original_price'];
    $condition = $_POST['condition'];
      $image = $_POST['image1'];
 
    $post = array(
    'post_content' => $description,
    'post_title' => $title,
    'post_status' => "publish",
    'post_type' => "auction"); 
    
    $postid = wp_insert_post( $post, $wp_error );  
 

            if (!function_exists('wp_generate_attachment_metadata')){
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                require_once(ABSPATH . "wp-admin" . '/includes/file.php');
                require_once(ABSPATH . "wp-admin" . '/includes/media.php');
            }
             if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                        return "upload error : " . $_FILES[$file]['error'];
                    }
                    $attach_id = media_handle_upload( $file, $postid );
                }   
            }
            if ($attach_id > 0){
                //and if you want to set that image as Post  then use:
                update_post_meta($postid,'_thumbnail_id',$attach_id);
            }
            
          $date = date('Y-m-d H:i:s');
    $currentDate = strtotime($date);
    $futureDate = $currentDate+(60*5);
     $expiredate = date("Y-m-d H:i:s", $futureDate);       
    update_post_meta($postid,"expire_time",$expiredate); 
    update_post_meta($postid,"start_time",$start_time); 
    update_post_meta($postid,"base_price",$base_price);
    update_post_meta($postid,"condition",$condition);
     wp_redirect( home_url() ); exit; 
 }
  get_header(); 
?>
<div id="core_padding">
    <div id="core_padding_inner">
	<div class=" container widecontainer core_section_top_container">
		<div class="row core_section_top_row wlt_main_2colsright">
 <div id="core_inner_wrap" class="clearfix">   
	<article class="col-md-12" id="core_middle_column"><div class="core_middle_wrap"><div id="core_ajax_callback"></div>	
<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12   adminedit2">
<form action="" method="post" enctype="multipart/form-data" onsubmit="return VALIDATE_FORM_DATA();" id="">
<input type="hidden" name="action" value="save">
<input type="hidden" name="packageID" value="0">
<div id="wlt_stepswizard" class="panel-group ">
<!--- STEP 2 --->
<div class="panel panel-default" id="panel_section2">
<div class="panel-heading">
                <span class="step-number">1</span>
                       <a href="#step1" class="astep1" data-parent="#wlt_stepswizard" data-toggle="collapse" aria-expanded="true">Listing Description</a>
            </div>
            <div id="step1" class="stepblock2 panel-collapse collapse in" aria-expanded="true">
              <div class="panel-body">
              <h1>Add Auction</h1>
<hr><div class="form-group clearfix" id="form-row-rapper-post_title"><label class="control-label col-md-12">Title <span class="required">*</span></label>
<div class="field_wrapper col-md-12">
    <input type="text" name="post_title" placeholder="" maxlength="255" id="form_post_title" class="form-control" tabindex="10" value="">
    </div>
    </div>
    <div class="form-group clearfix col-md-12" id="form-row-rapper-post_content">
<label class="control-label">Description <span class="required">*</span></label><div class="field_wrapper">
<textarea class="form-control" rows="10" name="post_content" id="form_post_content" tabindex="11"></textarea>            
 
<div id="textarea_feedback" style="font-size: 12px;  color: #999;  padding-top: 5px;"> 
<i class="glyphicon glyphicon-tasks"></i> Minimum of 200 characters.   </div>
</div></div>
</div>
</div>
</div>
<!--- STEP 2 --->
<!--- STEP 5 --->
<div class="panel panel-default" id="panel_section5">
<div class="panel-heading">
                <span class="step-number">2</span>
                                <a href="#step2" class="astep2 collapsed" data-parent="#wlt_stepswizard" data-toggle="collapse" aria-expanded="false">Listing Details</a>
            </div>
            <div id="step2" class="stepblock5 panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
              <input type="hidden" name="custom[auction_type]" id="form_auction_type" value="1"><div class="form-group clearfix" id="form-row-rapper-price_current">
              <label class="control-label col-md-4">Original Price <span class="required">*</span></label>
              <div class="field_wrapper col-md-8"><div class="input-group col-md-4">
			<input type="number" name="original_price" maxlength="255" id="form_price_current" class="form-control" tabindex="14" value="0">
			<span class="input-group-addon">$</span></div> <p class="description">This is the original price.</p></div>
            
            </div><div class="form-group clearfix" id="form-row-rapper-price_reserve">
                <label class="control-label col-md-4">Base Price <span class="required">*</span></label>
                <div class="field_wrapper col-md-8">
                <div class="input-group col-md-4">
    			<input type="number" name="base_price" maxlength="255" id="form_price_reserve" class="form-control" tabindex="15" value="0">
    			<span class="input-group-addon">$</span>
                </div>
             </div></div>
                <div class="form-group clearfix" id="form-row-rapper-condition">
                <label class="control-label col-md-4">Condition</label>
                    <div class="field_wrapper col-md-8">
                    <select name="condition" tabindex="16" id="form_condition" class="form-control" style="max-width: 242px;">
                            <option value="new">New</option>
                            <option value="used">Used</option>
                    </select>
                    </div>
                </div>
            
          
  
  
             <script type="text/javascript"> 
             function ValidateCoreRegFields(){ 
                var cus14 = document.getElementById("form_price_current");
					  if(cus14.value == '-------'){
						alert('Please complete all fields.');
						cus14.style.border = 'thin solid green';
						cus14.focus();
						colAll(); jQuery('.stepblock5').collapse('show');
						return false;
					}
					if(cus14.value == ''){
						alert('Please complete all fields.');
						cus14.style.border = 'thin solid green';
						cus14.focus();
						colAll(); jQuery('.stepblock5').collapse('show');
						return false;
					} var cus15 = document.getElementById("form_price_reserve");
					  if(cus15.value == '-------'){
						alert('Please complete all fields.');
						cus15.style.border = 'thin solid green';
						cus15.focus();
						colAll(); jQuery('.stepblock5').collapse('show');
						return false;
					}
					if(cus15.value == ''){
						alert('Please complete all fields.');
						cus15.style.border = 'thin solid green';
						cus15.focus();
						colAll(); jQuery('.stepblock5').collapse('show');
						return false;
					} }</script> 
</div>
</div>
</div>
<!--- STEP 5 --->
<!--- STEP 4 --->
<div class="panel panel-default" id="panel_section4">
<div class="panel-heading">
                <span class="step-number">3</span>
                                <a href="#step3" class="astep3  collapsed" data-parent="#wlt_stepswizard" data-toggle="collapse" aria-expanded="false">Listing Attachments</a>
            </div>
            <div id="step3" class="stepblock4 panel-collapse collapse " aria-expanded="false">
              <div class="panel-body">
              <div class="form-group clearfix" id="form-row-rapper-image"><label class="control-label col-md-12"></label><div class="field_wrapper col-md-12">           
            <div class="row uploadiconbox">         
            <div class="col-md-3"><a href="javascript:void(0);" onclick="enableUploadForm('.jpg/.gif/.png');" class="c1">
            <span><i class="fa fa-file-image-o"></i></span> add images</a> </div>
            </div>            
            <hr>
            You can select up to jpg/png image file.        
    <script>			 
			function enableUploadForm(vv){
				jQuery('.allowed').html(vv);
				jQuery('.uploadiconboxform').show();						
			}
			</script>                     
            <div class="uploadiconboxform well">
            <div class="allowed">jpeg/ gif</div>
            	<input   type="file" name="image2" class="fileinput" id="fileupload0" tabindex="18"> 
   
                </div>
                </div></div></div> 
</div>
</div>
</div>
<!--- STEP 4 --->
<!--- STEP 6 --->

<!--- STEP 6 --->
<div class="savebuttonarea">
    <hr>
    <div id="enhancementscopy" style="display:none;"><div></div></div>
        <a class="btn btn-default pull-right hidden-xs" href="<?php echo get_site_url(); ?>">Cancel</a>
        <input type="hidden" name="product_submit" value="submit" />
    <input type="submit" class="btn btn-primary" id="MainSaveBtn" value="Submit listing"></button>
    <div class="clearfix"></div>
    <hr>
</div>
 <!-- END STEPS FORM DATA -->
</div></form>
<script type="application/javascript">
function colAll(){
jQuery('#step1').removeClass("in");
jQuery('#step2').removeClass("in");
jQuery('#step3').removeClass("in");
jQuery('#step4').removeClass("in");
jQuery('#step5').removeClass("in");
jQuery('#step6').removeClass("in");
}
function VALIDATE_FORM_DATA(){
// USER REGISTRATION VALIDATION
// IMAGE UPLOADS
// LISTING DESCRIPTION VALIDATION
var de1 	= document.getElementById("form_post_title");
if(de1.value == ''){
	alert('Please complete all fields.');
	de1.style.border = 'thin solid red';
	de1.focus();
	colAll(); jQuery('.stepblock2').collapse('show');
	return false;
}
// MIN CHARACTERS FOR LISTING LENGHT
var de3 = document.getElementById("form_post_content");
 
if(de3.value == ''){
	alert('Please complete all fields.');
	de3.style.border = 'thin solid red';
	de3.focus();
	colAll(); jQuery('.stepblock2').collapse('show');
	return false;
}
// GET THE ENHANCEMENT FORM DATA
var newform2 = jQuery('#enhancementsblock .checkbox').clone(); //Clone form 1
jQuery('#enhancementscopy div').replaceWith(newform2);
jQuery('html,body').scrollTop(0);
// VALIDATE CUSTOM FIELDS
var formresult = ValidateCoreRegFields();  
if(formresult == false){
return false;
}
// LOAD IN DISPLAY UNIT
jQuery('#wlt_stepswizard').hide();
jQuery('#mediauploadblock').hide();
jQuery('#core_saving_wrapper').show();
}
</script> 
<script type="text/javascript" src="http://at1.wlthemes.com/wp-content/themes/AT/framework/js/up/nicEdit.js"></script>
<script type="application/javascript">
function listingenhancement(id,price){
	// DISABLE CHECK
	jQuery("#"+id).attr("disabled", true);
	// ADD CHECK CLASS
	jQuery("."+id+'_b').toggleClass("sel");
	// CURRENT PRICE
	var current_amount_total = jQuery("#listingprice").text();	
	var current_amount_total = current_amount_total.replace(".00", "");
	//var current_amount_total = current_amount_total.replace(".", "");
	var current_amount_total = current_amount_total.replace(",", "");
	// WORK OUT PRICES
	if(document.getElementById(id).checked == true){
		newtotal = parseFloat(current_amount_total)+price;
	}else{
		newtotal = parseFloat(current_amount_total)-price;
	}
	newtotal = Math.round(newtotal*100)/100;
	newtotal = newtotal.toFixed(2);	
	jQuery("#listingprice").text(newtotal);
	if(id == 'exh3'){	 	
		toggleHTML();
	}
	// REMOVE DISABLE
	setTimeout(function(){ jQuery("#"+id).removeAttr("disabled");   }, 1000);	 
}
 var area1, htmlenabled;
 function toggleHTML() {
        if(!area1) {
			area1 = new nicEditor({ buttonList : ['bold','italic',
'underline',
'left',
'center',
'right',
'justify',
'ol',
'ul',
'strikethrough',
'removeformat',
'indent',
'outdent',
'hr',
'image',
'forecolor',
'bgcolor',
'link' ,
'unlink' ,
'fontSize', 
'fontFamily', 
'fontFormat']}).panelInstance('form_post_content',{hasPanel : true});
htmlenabled = true;
        } else {
            // REMOVE
			area1.removeInstance('form_post_content');
            area1 = null;
			// STRIP HTML TAGS
			var html = jQuery("#form_post_content").text();
			var div = document.createElement("div");
			jQuery("#form_post_content").innerHTML = div;
        }
  	}  
jQuery(document).ready(function(){
    jQuery('.astep2, .astep1').live('click', function(e) {	
        	if(htmlenabled) { toggleHTML(); toggleHTML(); } 
    });
    form_price_current
     jQuery("#form_price_current").change(function(){
        
        });
    jQuery("#form_price_reserve").change(function(){
        var original_price = jQuery("#form_price_current").val();
         var price_reserve = jQuery("#form_price_reserve").val(); 
        if(price_reserve != null)
        {
            if(price_reserve > original_price)
            {
                alert("Base Price should be less than original price");
                jQuery("#form_price_reserve").val("");
                jQuery("#form_price_reserve").focus();
            }
        }
    });
});
</script> 
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="http://eonasdan.github.io/bootstrap-datetimepicker/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="http://eonasdan.github.io/bootstrap-datetimepicker/scripts/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
 
    jQuery('#datetimepicker1').datetimepicker({
         'showTimepicker': true
    });
  });
</script>

<!-- SAVING SPINNER -->
<div id="core_saving_wrapper" style="display:none;">
<div class="alert alert-warning">
<img src="http://at1.wlthemes.com/wp-content/themes/AT/framework/img/loading.gif" style="float:left; padding-right:30px;width:80px;">
<h1 style="padding-top:0px;margin-top:0px;">Saving Your Changes</h1>
<p>This may take a few minutes so please wait...</p>
<div class="clearfix"></div>
</div>
</div>
    </div>
</div>
       </div></article>
    </div>
    </div>
	</div>
	</div> 
 
<?php get_footer(); ?>