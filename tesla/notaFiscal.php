<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/app.css">
	<link rel="stylesheet" type="text/css" href="lib/css/nota-fiscal.css">	
</head>
<body id="body">
	<div class="container">
		<div class="row">

			<div class="col-md-2">
				<h5>17/05/2018</h5>
			</div>
			<div class="col-md-offset-10" align="right">
				<h5>Venda <b>2</b></h5>
			</div>

		</div>
		<div class="row">
			<hr class="hr-line">
			<!-- <div id="container"> -->
			<div class="media">
				<div id="">
						<img class="" id="logo" src="bin/user.png" alt="...">
				</div>
				<div class="media-body" id="">
					<!-- <div class="row"> -->
						<div class="col-md-4">
							<h4 class="media-heading"><b>GDIESEL</b></h4>
						</div>
						<div class="col-md-offset-10">
							<h4 class="media-heading"><b>8896477142</b></h4>
						</div>
					<!-- </div> -->
					<p style="font-size: 12px;"><b>Avenida Padre Cícero, 4680 - CASA A - Muriti - Crato - CE - CEP: 63132-022</b> <br> GEORGE COSTA DA CRUZ 80179258320 <br> CNPJ: 24.959.866/0001-92</p>
				</div>
			<!-- </div> -->
			</div>


			<hr class="hr-line">

			<div class="row">
				<div id="box">
					<h4><b>Amazon Temper</b></h4>
				</div>
			</div>
					

			<br>
			<br>
			<br>
			<table class="table">
				<thead>
					<th>Qt.</th>
					<th>Produto/Serviço</th>
					<th>Detalhe do Item</th>
					<th>Valor Unitário</th>
					<th>Subtotal</th>
				</thead>

				<tbody>
						<tr>
							<td>1</td>
							<td>Correia do alternador</td>
							<td></td>
							<td>55,00</td>
							<td>55,00</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Óleo mobil 15w 40</td>
							<td></td>
							<td>18,00</td>
							<td>54,00</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Filtro de Diesel</td>
							<td></td>
							<td>65,00</td>
							<td>65,00</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Filtro de Rocal</td>
							<td></td>
							<td>65,00</td>
							<td>65,00</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Anti Ferrugem</td>
							<td></td>
							<td>13,00</td>
							<td>26,00</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Serviço Mecânico</td>
							<td>Correias e Troca de Filtros</td>
							<td>300,00</td>
							<td>300,00</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><b>Total</b></td>
							<td>565,00</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><b>Valor líquido</b></td>
							<td>565,00</td>
						</tr>
					<?php 
						// for(int $i = 0; $i < $itens->length; $i++){
						// 	echo "<td>".$item[$i]['quantidade']."</td>";
						// 	echo "<td>".$item[$i]['produto']."</td>";
						// 	echo "<td>".$item[$i]['detalhe']."</td>";
						// 	echo "<td>".$item[$i]['valorUnitario']."</td>";
						// 	echo "<td>".$item[$i]['subtotal']."</td>";
						//   } 
							// echo "<tr>";
						 //  	echo "<td>15</td>";
						 //  	echo "<td>Serviço Mecânico</td>";
						 //  	echo "<td>Correias e Troca de Filtros</td>";
						 //  	echo "<td>300,00</td>";
						 //  	echo "<td>300,00</td>";
						 //  	echo "</tr>";
						 //  	echo "<tr>";
						 //  	echo "<td></td>";
						 //  	echo "<td></td>";
						 //  	echo "<td></td>";
						 //  	echo "<td>Total</td>";
						 //  	echo "<td><b>300,00</b></td>";
						 //  	echo "</tr>";
						 //  	echo "<tr>";
						 //  	echo "<td></td>";
						 //  	echo "<td></td>";
						 //  	echo "<td></td>";
						 //  	echo "<td>Valor líquido</td>";
						 //  	echo "<td>300,00</td>";
						 //  	echo "</tr>";


					?>
				</tbody>
			</table>

			<h5><b>Condição de pagamento:</b></h5>
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<thead>
							<th>Nº</th>
							<th>Vencimento</th>
							<th>Valor (R$)</th>

							<tbody>
								<tr>
									<td>1º</td>
									<td>27/05/2018</td>
									<td>565,00</td>
								</tr>
							</tbody>	
						</thead>
					</table>
				</div>
			</div>

			<hr class="hr-line"><br><hr class="hr-line">

			<div class="row">
				<div class="col-md-6">
					<h5><b>Observações:</b></h5>
					<p><b>SINOTRUK - OAJ - 0004</b></p>
				</div>
					
			</div>


		</div>
	</div>

			<div class="container">

				<div class="row">
					<div class="col-md-offset-10">
						<button class="btn btn-primary" id="button">Imprimir</button>
					</div>
				</div>
			</div>

	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="lib/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#button').click(function() {
				$('#button').hide('true');
				
				if($('#button').hide()){
					window.print();
				}
				
				$('#body').load("notaFiscal.php");
				return false;
			});
		});
	</script>
</body>
</html>