<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>AJAX, JSON E PHP</title>
        	
	</head>
	<body>
		<table border="1" width="500">
		    <thead>
		        <tr>
					<th>ID</th>
					<th>COD</th>
					<th>Nome</th>
					<th>Rua</th>
		            <th>Lado</th>
		            <th>Armario</th>
		            <th>Andar</th>
					<th>Quantidade</th>
					<th>Observação</th>
					<th>Ações</th>



		        </tr>
		    </thead>
		    <tbody id="tabela">
		    </tbody>
		</table>
	</body>
</html>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="ajax.js"></script>

<script>
$(document).ready(function(){
	$('#tabela').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../assets/php/help.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#tabela').append('<tr>'+'<td>'+dados[i].id+'</td>'+
										'<td>'+dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar+'</td>'+
										'<td>'+dados[i].nome+'</td>'+
										'<td>'+dados[i].n_rua+'</td>'+
										'<td>'+dados[i].lado+'</td>'+
										'<td>'+dados[i].n_armario+'</td>'+
										'<td>'+dados[i].n_andar+'</td>'+
										'<td>'+dados[i].quantidade+'</td>'+
										'<td>'+dados[i].observacao+'</td>'+

										'<td class="td-actions text-center">'+
															
											'<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal">'+
												'<i class="material-icons">add</i>'+
											'</button>'+

											'<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#saidaModal" data-whateverid = ' + dados[i].id + " " + ' data-whatevercod = ' +dados[i].id+ ' > '+
												'<i class="material-icons">remove</i>'+
											'</button>'+

											'<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#editModal"' + " " + 
											'data-whateverid ='+dados[i].id+ " " +
											'data-whatevercod ='+dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar + " " +
											'data-whatevernome ='+dados[i].nome+ " " +
											'data-whateverrua ='+dados[i].n_rua+ " " +
											'data-whateverlado ='+dados[i].lado+ " " +
											'data-whateverarmario ='+dados[i].n_armario+ " " +
											'data-whateverandar ='+dados[i].n_andar+ " " +
											'data-whateverquantidade ='+dados[i].quantidade+ " " +
											'data-whateverobservacao ='+dados[i].observacao +'>'+
											'</button>'+

											'<button type="button" rel="tooltip" class="btn btn-danger" onClick = "confirmDelIndexRua('+dados[i].id+')">'+
												'<i class="material-icons">delete</i>'+
											'</button>'+

										'</td>'+

									'</tr>');
			}
		}
	});
});
</script>