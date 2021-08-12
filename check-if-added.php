<?php

  function check_if_added_to_cart($item_id,$con,$user_id){
    $sql="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
    $query_result = mysqli_query($con,$sql) or die(mysqli_error($con));
    $rows = mysqli_num_rows($query_result);
    
    if ($rows >= 1){
      return 1;
    }
    else{
      return 0;
    }

  }
?>
