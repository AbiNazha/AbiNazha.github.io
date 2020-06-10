<div class="row justify-content-md-center">
	<div class="col-md-auto" style="text-align: center; margin-bottom: 10px">
		<h5>Info persebaran COVID-19 skala INDONESIA</h5>
		<p>Sumber data : Kementerian Kesehatan & JHU</p>
	</div>
</div>

<div class="table-responsive">
	<table id="table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="overflow-x: auto;">
		<thead class="thead-light">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Provinsi</th>
			<th scope="col" style="text-align: center;">Positif</th>
			<th scope="col" style="text-align: center;">Sembuh</th>
			<th scope="col" style="text-align: center;">Meninggal</th>
		</tr>
		</thead>
		<tbody>
			<?php $x = 1 ?>
			<?php foreach($data as $row): ?>
		  	<tr>
				<th scope="row"><?= $x++ ?></th>
				<td><?= $row['attributes']['Provinsi']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Kasus_Posi']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Kasus_Semb']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Kasus_Meni']?></td>
		    </tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
