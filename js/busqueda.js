$(document).ready(function(){
	//		load(1);
		});

		function load(page){
			var q= $("#q").val();
			var parametros={'action':'ajax','page':page,'q':q};
			$("#loader").fadeIn('slow');
			$.ajax({
				data: parametros,
				url:'./ajax/busqueda.php',
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./images/loader.gif">');
			  },
				success:function(data){
					$(".mostrar").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}