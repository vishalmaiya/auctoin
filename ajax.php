<?php 
require_once('../../../wp-load.php');
$post_id = $_POST['post_id'];
 
$cudate = get_post_meta($post_id,"expire_time",true);
$next_date = strtotime($cudate);
 
$ndd = date("Y-m-d H:i:s",$next_date);
$current_time = strtotime(date("Y-m-d H:i:s"));
$data['sold_out'] = null;
if($next_date <= $current_time)
{
    $max_price = get_maxprice($post_id);
    if($max_price == 0)
    {
        $next_new_time = $next_date + (60*5);
        $new_date  = date("Y-m-d H:i:s",$next_new_time);
         update_post_meta($post_id,"expire_time",$new_date);
    }
    else
    {
        update_post_meta($post_id,"sold_out","yes");
       
       $win_data = get_winner_data($post_id);
       $win_user_id = $win_data['uid'];
       $msg = "You win product with your bid ".$win_data['price'];
       $headers = 'From: Online Auction <info@androidash.com>' . "\r\n";
       $attachments = ""; 
       $data['sold_out'] = 1;
       $data['winner_price'] = $win_data['price'];
      $data['winner_uid'] = $win_data['uid'];
      $data['winner_name'] = get_the_author_meta( "first_name", $win_user_id )." ". get_the_author_meta( "last_name", $win_user_id );
    }
}
 
 
  $data['max_bid_userid'] = 1; 
$data['number_of_bids'] = get_number_of_bids($post_id);
$data['max_bid'] = get_maxprice($post_id);
$data['get_nextbid_price'] = get_nextbid_price($post_id);
$data['post_view'] = getPostViews($post_id);
 
 

echo json_encode($data);
?>    

 