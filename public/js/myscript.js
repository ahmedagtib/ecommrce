$(document).ready(function(){
	
  var qty  = $('#qte').val();
  var moins  = $('#moins');
  var plus = $('#plus');

 moins.on('click',function(){
 	
       qty=parseInt(qty);
       if(qty <= 0){
       	$('#moins').addcalss('disabled');
       }
    $('#qte').val(qty-=1); 
  });
 plus.on('click',function(){
 	
    qty=parseInt(qty);
    $('#qte').val(qty+=1);
  
 });


});