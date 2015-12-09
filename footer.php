<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


<!-- [WLT] FRAMRWORK // FOOTER -->

<p id="back-top" style="display: none;"> <a href="#top"><span></span></a> </p>

<footer id="footer">
	
    <div id="footer_content">
    
        <div class="container">
        
            <div class="row clearfix">
          
                                    
            </div>
       
       </div>
   
   </div>
   
   <div id="footer_bottom">
   
   <div class="container">
    
    <div class="row clearfix">
    
    
   	 <div class="pull-left copybit"> &COPY; Copyright 2015 - Online Auction System -ENCS 691K Project </div>   
            
             
        
    </div> 
    
    </div>
    
    </div>

</footer>
<div id="freeow" class="freeow freeow-top-right"></div>
 
</div>

 
<div id="core_footer_ajax"></div>
  
		
 
<!-- My Location Modal -->
<div class="modal fade" id="MyLocationModal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content">
<div class="modal-body">	  
	  
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	
	<h3 class="modal-title">Where are you now?</h3>
			
	<p>Set your location by clicking on the map below or typing in your address below.</p>
			
	<hr>
	
	<div id="wlt_google_mylocation_map" style="height:300px; width:100%;"></div>

</div>

<div class="modal-footer">
        
		
	<form method="post" action="#" name="mylocationsform" id="mylocationsform">
	<input type="hidden" name="updatemylocation" value="1">
	<input type="hidden" name="log" value="" id="mylog">
	<input type="hidden" name="lat" value="" id="mylat">
	<input type="hidden" name="country" value="GB" id="myco">
	<input type="hidden" name="zip" value="" id="myzip">
				 
				
				<div class="row" id="addressbox">
				
					<div class="col-md-10 col-xs-8">
					
					<input type="text" placeholder="Enter your physical location here." onchange="getAddressLocation(this.value);" name="myaddress" id="myaddress" class="form-control input-lg" tabindex="14" value="">
					
					</div>
					
					<div class="col-md-2 col-xs-4">
					
					<button type="button" class="btn btn-lg">GO</button>
					
					</div>
				
				</div>
				
				<div class="clearfix"></div>		 
				
				<div id="savemylocationbox" style="display:none">
				
				<div style="border-top:1px solid #ddd; padding-top:10px; padding-bottom:10px; margin-top:10px; margin-left:-15px; margin-right:-15px;"></div>
				
				<button class="btn btn-info btn-lg col-md-12" id="updatelocation">Update My Location</button>
				
				</div>
				
		</form>
</div>


    </div>
  </div>
</div>
<script>jQuery(document).ready(function(){ getCurrentLocation() ; });  </script><script type="text/javascript" src="http://at1.wlthemes.com/wp-includes/js/jquery/ui/core.min.js?ver=1a51be8d493df7a738600175d62df7f3"></script>
<script type="text/javascript" src="http://at1.wlthemes.com/wp-includes/js/jquery/ui/widget.min.js?ver=1a51be8d493df7a738600175d62df7f3"></script>
<script type="text/javascript" src="http://at1.wlthemes.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1a51be8d493df7a738600175d62df7f3"></script>
<script type="text/javascript" src="http://at1.wlthemes.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1a51be8d493df7a738600175d62df7f3"></script>
<script type="text/javascript" src="http://at1.wlthemes.com/wp-content/themes/AT/framework/js/core.ajax.js?ver=1a51be8d493df7a738600175d62df7f3"></script>
<script type="text/javascript" src="http://at1.wlthemes.com/wp-content/themes/AT/framework/js/core.jquery.js?ver=1a51be8d493df7a738600175d62df7f3"></script>

 

<script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{(function() { for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }})()}catch(e){}</script></body>

<?php wp_footer(); ?>

</body>
</html>
