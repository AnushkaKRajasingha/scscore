(function($){
	$(document).ready(function(){
		$('#woopriceop_loop_reset').click(function(){
			console.log($(this).data('productid'));		
			
			$action = 'woopriceop_wooporesetloop';
			$.post(
					ajaxurl +"?action="+$action,
					{				
						productid : $(this).data('productid')
					},
					function( response ) {
						$('#num_priceposition').html('0');
					}
				);
			
		});
	});
})(jQuery)