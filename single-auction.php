<?php
 get_header(); 
$post_id = get_the_ID();
setPostViews($post_id);
$post_view = getPostViews($post_id);
?>
<div id="core_padding">
    <div id="core_padding_inner">
	<div class=" container widecontainer core_section_top_container">
		<div class="row core_section_top_row wlt_main_2colsleft">
 <div id="core_inner_wrap" class="clearfix">   

<article class="col-md-12 col-sm-12" id="core_middle_column"><div class="core_middle_wrap"><div id="core_ajax_callback"></div>	
<a name="toplisting"></a>
<a name="toplisting"></a>
<div class="row" style="margin-top:10px;">
    <div class="col-md-6">
    <h1 style="margin-top:0px;"><a href="<?php echo get_the_permalink(); ?>"><span><?php echo get_the_title(); ?></span></a></h1> 
      </div>
<div  class="col-md-6 pull-left"  >
  <span id='timeleft_30971449416771686923'></span>
  <?php  
     $cudate = get_post_meta($post_id,"expire_time",true);
 
    $next_date = strtotime($cudate);
    $next_date = $next_date;
    $ndd = date("Y-m-d H:i:s",$next_date);
     ?>
			<script>
			jQuery(document).ready(function() {	
			 
			var dateStr = '<?php echo $ndd; ?>';
			var a=dateStr.split(' ');
			var d=a[0].split('-');
			var t=a[1].split(':');
			var date1 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);			 
			jQuery('#timeleft_30971449416771686923').countdown({until: date1, onExpiry: WLTvalidateexpiry3097, timezone: -5 });
			});
			function WLTvalidateexpiry3097(){
			   var  formDataa = "notify=email";
    var ajaxOpts2 = {
            type: "post",
            data : formDataa,
            url: "<?php echo $ajax_url; ?>",
            success: function(data) {
                 
            }
        };
    jQuery.ajax(ajaxOpts2);
    
			     var  formData = "post_id=<?php echo $post_id; ?>";
    var ajaxOpts = {
            type: "post",
            data : formData,
            url: "<?php echo $ajax_url; ?>",
            success: function(data) {
                location.reload();
            }
        };
    jQuery.ajax(ajaxOpts);
    
  
    
    
    
		 //jQuery('#timeleft_30971449416771686923').html("<span class='soldout'>SOLD OUT</span>"); 
           // jQuery(".pricebits").html("<span class='soldout'>SOLD OUT</span>");
       }
			</script>
            </div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<div class="singleimg text-center">
<?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );?>
<a href="<?php echo $thumb_url; ?>" data-gal="prettyPhoto">
<img src="<?php echo $thumb_url; ?>" alt="" class=" img-responsive">
</a></div> 
</div>

<div class="col-md-6">

            
<div id="auctionbidform">

            
<ul class="list-group">
  <li class="list-group-item item1"></li>
    <li class="list-group-item item1">
 
    <strong>ID: #90<?php echo get_the_ID(); ?> </strong>   </li>
    
    <li class="list-group-item item1">
     <i class="fa fa-search bidhistoryicon"></i>
    		
	 
    Bids: <strong>
    <span id="number_of_bids"><?php echo get_number_of_bids($post_id); ?></span>   
    </strong>  
        <span class="pull-right">
		<small>Highest</small>:  <i class="fa fa-user"></i> <a href="http://at1.wlthemes.com/author/demo/">demo</a>	
		</span>
    </li>	
    <li class="list-group-item item3">
    <span class="pull-right"> <i class="fa fa-line-chart"></i> &nbsp;
    <span style="float: right;" id="post_view">
    <?php echo $post_view; ?>
    </span> </span>
    Condition: <strong><?php echo ucfirst(get_field("condition")); ?></strong>
    </li>
    <li class="list-group-item item4">
    <div class="row">
    <div class="col-md-7">
    Seller: <i class="fa fa-user"></i> <strong>
    <a style="text-decoration:underline;" href="">
    <?php
     $posta = get_post( $post_id );
     $authid = $posta->post_author;
    echo get_the_author_meta( "first_name", $authid );
    echo " ". get_the_author_meta( "last_name", $authid );
     ?></a> </strong>
    </div>
        <div class="col-md-5">
 
    </div>
    </div>
    </li>
    <li class="list-group-item item4">
    Posted: <strong><?php echo get_the_date( $format, $post_id ); ?></strong> 
    </li>
      <li class="list-group-item pricebits">     
      <div class="row">
          <div class="col-md-6">
            Base Price: <strong> $<?php echo get_field("base_price"); ?></strong>
            <span class="current_price"></span>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-6 text-right makebidhere">
          <?php if(is_user_logged_in()){
            ?>
              <button class="btn btn-primary btn-lg" href="javascript:void(0);" onclick="jQuery('.biddingbox').show();">Make Bid</button>             
        
            <?php
            
          }
          else
          {
            echo "you have to sing-in first for bid here";
          }
          ?>
          </div>
      </div>        
       </li>
              <li class="list-group-item">
              <span class="winner_price">
        <pre> <i class="fa fa-check-square-o"></i> Current max bid is $<span id="current_max_price"><?php echo get_maxprice($post_id); ?></span></pre>       </li>
    </span>   <li class="list-group-item biddingbox" style="display: none;">
       <span class="label label-default pull-right" onclick="jQuery('.biddingbox').hide();">Hide Form</span>
        <form method="post" action="" class="row clearfix" onsubmit="return CheckBidding();">
        <input type="hidden" name="post_id" value="<?php echo get_the_ID(); ?>">
        <input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>" />
		<input type="hidden" name="auction_action" value="newbid">
		<input type="hidden" name="bidtype" value="bid"> 
        <input type="hidden" name="hidden_cp" id="hidden_cp" value="<?php echo get_maxprice_should($post_id); ?> "> 
         <div class="col-md-12">
         <h4>Enter your <b>max</b> bid</h4>
         </div>
         <div class="col-md-6">         
         	<div class="input-group">
			<input type="text" class="form-control input-lg" id="bid_amount" name="bidamount" placeholder="<?php echo get_nextbid_price($post_id); ?>"> 
			<span class="input-group-addon">$</span>
			</div>          
        </div>        
        <div class="col-md-2">        
        	<button class="btn btn-lg btn-primary" type="submit">Confirm Bid</button>        
        </div>
        </form>
        <script>
		function CheckBidding(){		
			var bidprice = jQuery('#bid_amount').val();
			var ecp = jQuery('#hidden_cp').val();	
			var ecp = Math.round(parseFloat(ecp)*100)/100;
			var bidprice = Math.round(parseFloat(bidprice)*100)/100;
			if(jQuery.isNumeric(bidprice) && bidprice > ecp){	
				return true;
			}else{
			alert('Please bid greater than. $'+ecp+'');
			return false;
			}
		};
        </script>
        <hr>
   
        </li>       
      
        <li class="list-group-item buynowbox" style="display:none;">
            <span class="label label-default pull-right" onclick="jQuery('.buynowbox').hide();">Hide Form</span>
           <h4>Buy Now</h4>          
            <p>By making a bid you confirm to our website terms and conditions</p>
            <textarea></textarea>
            <hr>
            <form method="post" action="" name="buynowform" id="buynowform">
            <input type="hidden" name="auction_action" value="buynow">
            <div class="text-center"><button class="btn btn-lg btn-primary" type="submit">Confirm Bid</button></div>
            </form> 
       </li>
</ul>
</div>
</div>
</div>
<hr>
<div class="panel panel-default">
	<div class="panel-heading">Description </div>
	<div class="panel-body">
            <div class="core_post_content"> 
            <?php echo get_the_content($post_id); ?>
</div>
           
	</div>
</div> 
<?php
$ajax_url = get_template_directory_uri() . '/ajax.php';
?>
 
 <script>
 function tick() {

 // var city_id = $(".feed-selected-city").attr('id');

 var usertrm = '<?php echo $useterm; ?>';
 var userid = '<?php echo $user_ID; ?>';

    // $("#cityfeed").html("<div class='feed-loading'>The feed is loading ...</div>");
    var  formData = "post_id=<?php echo $post_id; ?>";
    var ajaxOpts = {
            type: "post",
            data : formData,
            url: "<?php echo $ajax_url; ?>",
            success: function(data) {
                var obj = JSON.parse(data);
                jQuery('.current_price').html(obj.bid_amount);
                jQuery('#number_of_bids').html(obj.number_of_bids);
                jQuery('#post_view').html(obj.post_view); 
                jQuery('#current_max_price').html(obj.max_bid); 
                 jQuery('#hidden_cp').val(obj.max_bid);
                  jQuery('#bid_amount').attr('placeholder',obj.get_nextbid_price);
                  var has_sold = obj.sold_out;
                  if(has_sold == 1)
                  {
                        jQuery(".countdown_show3").html("<span class='soldout'>Sold Out</span>");
                        jQuery(".makebidhere").html("<span class='soldout'>Sold Out</span>");
                        var winner = "Winner Price: <span class='winner-price'>$ "+obj.winner_price+"</span><br/>";
                         winner += "Winner Name: <span class='winner-name'> "+obj.winner_name+"</span><br/>";
                           jQuery(".winner_price").html(winner);
                        
                  }
            }
        };
    jQuery.ajax(ajaxOpts);
    setTimeout('tick()',3000);
    }

jQuery(document).ready(function() {
    tick();
});
    </script>
    
    
<style>
.singleimg {
        margin: 0 auto;
    display: table;
    text-align: center;
}</style>
	<script> 
	jQuery(document).ready(function() { 
	  jQuery("#wlt_shortcode_related").owlCarousel({ items : 3, autoPlay : true,  }); 
	});
	 </script>
        <style>#editlistingbox{ display:none;}</style>	
       </div></article>
    </div>
    </div>
	</div>
	</div> 
</div>
<?php echo get_footer(); ?>
