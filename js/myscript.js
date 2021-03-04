function manage_cart(flight_id,type){
  

 
    
    jQuery.ajax({
      url:'manage_cart.php',
      type:'POST',
      data:'flight_id='+flight_id+'&type='+type,
      success:function(result){
        if(type=='remove' || type=='update'){
          window.location.href=window.location.href;
        }
       
        
        
        }
      });
    

}