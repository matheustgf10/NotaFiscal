<?php include("header.php");?>

<br>
<br>
<div class="ui grid container">
	<div class="ui piled segment">

		<div class="ui centered grid">
			<div class="column"></div>

			<div class="sixteen wide column">
				<h4 class="ui horizontal divider header"><i class="bar chart icon"></i>Gerar Nota Fiscal</h4>
			</div>

			<div class="sixteen wide column">
				<h4 class="ui header">Cliente:</h4>
			</div>

			<div class="ui form">
				<div class="fields">
						<div class="six wide field">
							<label>Nome:</label>
							<select class="ui search dropdown">
								<option value="MA">Matheus</option>
								<option value="MR">Maria</option>
								<option value="SA">Samuel</option>
								<option value="JO">João</option>
							</select>
						</div>

						<div class="two wide field">
							<label>Número:</label>                  
							<input type="text" name="number" maxlength="5">
						</div>
						<div class="field">
							<label>Data da venda:</label>
							<div class="ui calendar" id="">
								<div class="ui input left icon">
								  <i class="calendar icon"></i>
								  <input type="text" placeholder="01/01/2018" data-mask="00/00/0000">
								</div>
							</div>
						</div>
						<div class="four wide field">
							<label>Status:</label>
							<select class="ui dropdown">
								<option value="">Escolha</option>
								<option value="1">Venda</option>
								<option value="2">Orçamento</option>
							</select>
						</div>
				</div>
			</div>
		</div>
		
<!-- 		<div class="ui centered grid">
			<div class="fields">
				<div class="input_fields_wrap">
					<button class="add_field_button mini ui button"><i class="plus circle icon"></i></button>
					<div class="ui input">
						<input type="text" name="mytext[]">
					</div>
				</div>
			</div>
		</div>
 -->

			<br>
			<br>

			<table class="ui celled striped table">
				<thead>
					<th>Qt.</th>
					<th>Produto/Serviço</th>
					<th>Detalhe do Item</th>
					<th>Valor Unitário</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
					<tr>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td contenteditable="true"></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			
			<br>

			<div class="ui grid">			
				<div class="four column row">
					<div class="left floated column"></div>
					<div class="right floated column">
						<div class="ui form">
							<label><b>Total:</b></label>
							<div class="ui labeled disabled input">
								<div class="ui label">
									R$
								</div>
								<input type="text" placeholder="0.00">
							</div>
							<br>
							<br>
							<label><b>Desconto:</b></label>
							<div class="ui labeled input">
								<div class="ui label">
									R$
								</div>
								<input type="text" placeholder="0.00">
							</div>
						</div>
						<div class="">
							<br>

							<hr class="hr-line">
							<label><b>Total líquido:</b></label>
							<label>0,00</label>
							<hr class="hr-line">
						</div>
					</div>
				</div>
			</div>

			<br>

			<div class="ui form">
				<div class="field">
					<label>Observações:</label>
					<textarea></textarea>
				</div>

				<div class="field">
					<button class="ui right floated primary button">Gerar Nota</button>
				</div>
			</div>

			<br>

	</div>
</div>



<?php include("footer.php");?>