$( document ).ready(function() {
	$("form", this).on("submit", function(e){
		e.preventDefault();
		window.open('gracias.php','_self')
	});

	// 	const params = new Proxy(new URLSearchParams(window.location.search), {
    //         get: (searchParams, prop) => searchParams.get(prop),
    //     });

	// 	var error = false;
	// 	var msj = "";
	// 	var nombre = $("input[name='nombre']", this).val();
	// 	var apellido = $("input[name='apellido']", this).val();
	// 	var telefono = $("input[name='telefono']", this).val();
	// 	var correo = $("input[name='correo']", this).val();
	

	// 	if(!error && nombre.length <= 2){ error = true;	msj = "El campo nombre es requerido";	}
	// 	if(!error && apellido.length <= 2){ error = true;	msj = "El campo apellido es requerido";	}
	// 	if(!error && telefono.length <= 8){ error = true;	msj = "El campo telefono es requerido";	}
	// 	if(!error && correo.length <= 5){ error = true;	msj = "El campo correo es requerido";	}

		
	// 	if(!error){

	// 		formActions(true);

	// 		var data = {};
	// 		data.nombre = nombre;
	// 		data.apellido = apellido;
	// 		data.telefono = telefono;
	// 		data.correo = correo;

	// 		data.utm_id = params.utm_id ? params.utm_id : "";
    //         data.utm_campaign = params.utm_campaign ? params.utm_campaign : "";
    //         data.utm_source = params.utm_source ? params.utm_source : "";
    //         data.utm_medium = params.utm_medium ? params.utm_medium : "";
    //         data.utm_content = params.utm_content ? params.utm_content : "";
    //         data.utm_term = params.utm_term ? params.utm_term : "";
			
	// 		$.ajax({
	// 			url: "_send.php",
	// 			type: "POST",
	// 			data: data,
    //     		dataType: "JSON",
	// 			error: function(e){
	// 				console.log(e);
	// 				formActions(false);
	// 			},
	// 			success: function(result){
	// 				formActions(false);
	// 				if(result.estatus) {
	// 					$('form').each(function() { this.reset() });
	// 				} else {
	// 					alert ('Ha ocurrido un error al enviar la forma de contacto, intenta mas tarde');
	// 				}
	// 			}
	// 		});
	// 	} else {
	// 		alert(msj);
	// 	}
	// });

	// // valida que este llenos los datos requeridos
	// $("button").click(function(){
    //     $("input").addClass("invalid");
    // });

// });


// function formActions(block) {
// 	$('input, select, button, a, textarea, checkbox').each(function () {
// 		$(this).attr('disabled', block);
// 	});
// }