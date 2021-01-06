<<<<<<< HEAD
$( document ).ready(function() {
    $('#add-to-cart1').click(function( e ){
   	     var product_id=$(this).data('product_id');
	     var quantity=$('#quantity').val();
	     $.ajax({
	            url:'{{route("api.add_to_cart1")}}',
	            method:'POST',
	            data:{product_id : product_id,quantity:quantity},
	            success:function(resp){           
	               if(resp.success == true){
	               
	                 $('#cart-count').html(resp.count);
	                 $('#total1').html(resp.total +' đ');
	                 $("#cart_items").load(" #cart_items > *");
	                 $("#cart").load(" #cart > *");
	                 $("#sub_total").load(" #sub_total > *");
	                 alert('Thêm giỏ hàng thành công');
	               }else{
	                 alert('Thêm giỏ hàng không thành công');
	               }
	            }
	        });
    });
});
=======
>>>>>>> origin/main
