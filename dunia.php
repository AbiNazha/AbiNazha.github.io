<div class="row justify-content-md-center">
	<div class="col-md-auto" style="text-align: center; margin-bottom: 10px">
		<h5>Info persebaran COVID-19 skala DUNIA</h5>
		<p>Sumber data : Kementerian Kesehatan & JHU</p>
	</div>
</div>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-sm" style="overflow-x: auto;">
		<thead class="thead-light">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Negara</th>
			<th scope="col" style="text-align: center;">Positif</th>
			<th scope="col" style="text-align: center;">Sembuh</th>
			<th scope="col" style="text-align: center;">Meninggal</th>
			<th scope="col" style="text-align: center;">Update terakhir</th>
		</tr>
		</thead>
		<tbody>
			<?php $x = 1 ?>
			<?php foreach($data as $row): ?>
		  	<tr>
				<th scope="row"><?= $x++ ?></th>
				<td><?= $row['attributes']['Country_Region']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Confirmed']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Deaths']?></td>
				<td style="text-align: center;"><?= $row['attributes']['Recovered']?></td>
				<td style="text-align: center;"><?= date("d-M-Y G:i:s",substr($row['attributes']['Last_Update'], 0, 10))." WIB"?></td>
		    </tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
