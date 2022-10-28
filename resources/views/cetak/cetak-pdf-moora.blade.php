<!DOCTYPE html>
<html>
<head>
	<title>Laporan Hasil Moora</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		h5{
			margin-top: -100px;
		}
	</style>
</head>
<body>
	<img src="{{('template/img/krw.png')}}" width="100px" class="img-thumbnail" alt="logo">
	<center>
		<h5>PEMERINTAH KABUPATEN KARAWANG</h4>
			<p style="margin-top: -10px;">DINAS PENDIDIKAN, PEMUDA DAN OLAHRAGA</p>
			<h5 style="margin-top: -10px;">SMP NEGERI 1 KUTAWALUYA</h5>
			<h6 style="margin-left: 47px;">Jl Raya Kutagandok No.110, Kutakarya, Kab.Karawang, Jawa barat 41352</h5>
			</center>
			<b><hr></b>
			<div class="card-header bg-success text-white text-center" style="height: 10px; border-radius: 20px;">
				<p style="margin-top: -10px;">Hasil Akhir Perhitungan Moora</p>
			</div>
			<table class='table table-bordered mt-3'>
				<thead class="text-center">
					<tr>
						<th>No</th>
						<th>Kode Alternatif</th>
						<th>Nama</th>
						<th>Nilai Akhir</th>
						

					</tr>
				</thead>
				<tbody class="text-center">
					<?php $no = 0; ?>
					@foreach ($cetak_moora as $no => $moora)
					<?php $no++;?>
					<tr>
						<td>{{$no}}</td>
						<td>{{$moora->alternatif->kode_alternatif}}</td>
						<td>{{$moora->siswa->nama_siswa}}</td>
						<td><?php  echo round($moora->alternatif->nilai_raport/sqrt($sum2)*0.25 + $moora->alternatif->extrakulikuler/sqrt($sum3)*0.1 + $moora->jumlah_sertifikat/sqrt($sum4)*0.05 +$moora->alternatif->sikap_ds/sqrt($sum5) * 0.05 +
							$moora->alternatif->sikap_ls/sqrt($sum5) * 0.05 + $moora->alternatif->prestasi_akademik/sqrt($sum7) * 0.2 + 
							$moora->alternatif->prestasi_non_akademik/sqrt($sum8) * 0.15 - $moora->alternatif->absensi/sqrt($sum1) * 0.15,4) ?></td>
							
						</tr>

						@endforeach




					</tbody>
				</table>
				<div>
					<div class="card text-center" style="width: 250px; float: right;">
						<div class="card-header">
							<p>Karawang,{{date("d-m-y")}}<span id="datepicker"></span></p>
						</div>
						<div class="card-body">

						</div>
						<div class="card-footer text-muted">
							<p>Kepala Sekolah</p>
						</div>
					</div>
				</div>
				<script>
					$( function() {
						$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

					} );
				</script>
				<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			</body>

			</html>