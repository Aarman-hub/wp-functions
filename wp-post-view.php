<?php
//Post view count

if ( ! function_exists( 'an_post_view_count' ) ) :    
/**     * get the value of view.     */ 
function an_post_view_count($postID) {   
$count_key = 'wpb_post_views_count';    
$count = get_post_meta($postID, $count_key, true);    
if($count ==''){        
$count = 1;        
delete_post_meta($postID, $count_key);        
add_post_meta($postID, $count_key, '1');    
} else {        
$count++;        
update_post_meta($postID, $count_key, $count);    
}
}
endif; 


an_post_view_count(get_the_ID()); 
?>

  <li > <i class="fa fa-eye"></i>                            
<?php                             
if ( get_post_meta( get_the_ID() , 'wpb_post_views_count', true) == '') {                                 echo '0' ;                            
} else { 
echo get_post_meta( get_the_ID() , 'wpb_post_views_count', true); };                            ?>                             
</li>
