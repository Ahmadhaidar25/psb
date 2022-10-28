

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data hasil perhitungan moora.xls");
?>

<table>
	
	<tr style="background: green;">
		<th>No</th>
		<th>Kode Alternatif</th>
		<th>Nama Siswa</th>
		<th>Nilai Akhir</th>
		
		

	</tr>
	
	<?php $no = 0; ?>
	@foreach ($excel as $no => $moora)
	<?php $no++;?>
	<tr>
		<td>{{$no}}</td>
		<td>{{$moora->alternatif->kode_alternatif}}</td>
		<td>{{$moora->siswa->nama_siswa}}</td>
		<td><?php  echo $moora->alternatif->nilai_raport/sqrt($sum2)*0.25 + $moora->alternatif->extrakulikuler/sqrt($sum3)*0.1 + $moora->jumlah_sertifikat/sqrt($sum4)*0.05 +$moora->alternatif->sikap_ds/sqrt($sum5) * 0.05 +
		$moora->alternatif->sikap_ls/sqrt($sum5) * 0.05 + $moora->alternatif->prestasi_akademik/sqrt($sum7) * 0.2 + 
		$moora->alternatif->prestasi_non_akademik/sqrt($sum8) * 0.15 - $moora->alternatif->absensi/sqrt($sum1) * 0.15 ?></td>
		


	</tr>

	@endforeach
	
</table>

