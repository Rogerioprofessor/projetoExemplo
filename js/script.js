$(document).ready(() => {
		
	$('#formulario').on('click', () => {
		console.log('Sucesso');
		$.post('formulario.html', data => { 
			$('#pagina').html(data)
		})
	})

	$('#form').on('click', () => {
		$.post('form.php', data => { 
			$('#pagina').html(data)
		})
	})
	
})


	