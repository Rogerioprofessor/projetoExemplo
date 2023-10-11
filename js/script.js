$(document).ready(() => {
		
	$('#cliente').on('click', () => {
		console.log('Sucesso');
		$.post('cliente.php', data => { 
			$('#pagina').html(data)
		})
	})

	$('#vendedor').on('click', () => {
		$.post('vendedor.php', data => { 
			$('#pagina').html(data)
		})
	})

	//Chamada de relatórios

	//Relatório de cliente

	$('#relcliente').on('click', () => {
		$.post('consultacliente.php', data => { 
			$('#pagina').html(data)
		})
	})

	//Relatório de vendedor
	$('#relvendedor').on('click', () => {
		$.post('consultavendedor.php', data => { 
			$('#pagina').html(data)
		})
	})
	
})


	