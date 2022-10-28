

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data hasil perhitungan smart.xls");
?>

<table>
	
	<tr style="background: green;">
		<th>No</th>
		<th>Kode Alternatif</th>
		<th>Nama Siswa</th>
		<th>Nilai Akhir</th>
		
		

	</tr>
	
	<?php $no = 0; ?>
	@foreach ($excel_smart as $u)
	<?php $no++?>
	<tr>
		<td>{{$no}}</td>
		<td>{{$u->alternatif->kode_alternatif}}</td>
		<td>{{$u->siswa->nama_siswa}}</td>
		<td>
			{{($u->absensi/$max1-$min1 * 0.15)+
			(($max2-$u->nilai_raport)/($max2-$min2)*0.25) + 
			(($max3-$u->extrakulikuler)/($max3-$min3)*0.1) + 
			(($max4-$u->jumlah_sertifikat)/($max4-$min4)*0.05) +
			(($max5-$u->sikap_ds)/($max5-$min5)*0.05)+
			(($max6-$u->sikap_ls)/($max6-$min6)*0.05) + 
			(($max7-$u->prestasi_akademik)/($max7-$min7)*0.2) + 
			(($max8-$u->prestasi_non_akademik)/($max8-$min8)*0.15)}}
		</td>
		

	</tr>
	@endforeach
	
</table>

