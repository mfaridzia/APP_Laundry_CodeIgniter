<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Tarif
						</h3>
					 </div>
					 <div class="panel-body">

					 	<form action="<?=base_url();?>tarif/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> Nama Pakaian </td>
					 				<td>:</td>
					 				<td> <input type="text" name="nmpakaian" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> Tarif </td>
					 				<td>:</td>
					 				<td> <input type="text" name="tarif" class="form-control" required> </td>
					 			</tr>
					 			<tr>
					 				<td> ID Jenis Laundry </td>
					 				<td>:</td>
					 				<td> 
					 					<select name="idjenislaundry" class="form-control" required>
					 						<?php
					 						foreach($jenlaundry as $j){
	                                       echo "<option value='".$j->idjenislaundry."'>".$j->nmjenislaundry."</option>";
												}
					 						?>
					 					</select>
					 				</td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="simpan" value="Tambah">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>