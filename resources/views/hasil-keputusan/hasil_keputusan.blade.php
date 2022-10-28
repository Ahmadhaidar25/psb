@extends('layout.main')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	@if(auth()->user()->level == 'wali kelas')
	<h1 class="h3 mb-0 text-gray-800">Data Hasil Keputusan</h1>
	@elseif(auth()->user()->level == 'kesiswaan')
	<h1 class="h3 mb-0 text-gray-800">Data Hasil Akhir</h1>
	@endif

</div>

<div class="row align-items-start">
	<div class="col-2">
		<button  onclick="sum()" type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#moora">
			Lihat Keputusan Moora
		</button>
	</div>
	<div class="col-2">
		<button type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#smart">
			Lihat Keputusan Smart
		</button>
	</div>

	
</div>
<img src="{{url('template/img/rank.png')}}" class="rounded mx-auto d-block" alt="...">

<!-- Modal -->
<div class="modal fade" id="moora" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Data Hasil Perhitungan Moora</h5>
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<!-- Data Moora-->
				<div class="row">
					<div class="container-fluid">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
									
								</h6>
								<br>
								@if(auth()->user()->level=='wali kelas')
								<a href="{{url('/cetak-pdf/moora')}}" class="btn btn-warning">Cetak</a>
								@elseif(auth()->user()->level=='kesiswaan')
								<a href="{{url('/cetak-pdf/moora')}}" class="btn btn-warning">Cetak</a>
								<a href="{{url('excel-moora')}}" class="btn btn-success">Excel</a>
								@endif
							</div>
							<div class="card-body">
								
								<img src="{{url('template/rumus/rk_mo.jpeg')}}" class="img-fluid rounded-start" style="height: 60px;">
								<p>nah nilai akhir moora rumus nya Dimana untuk menentukan ranking dari hasil perhitungan Moora. Nilai Yi dapat menjadi positif atau negatif tergantung dari total maksimal (atribut yang menguntungkan) dalam matriks keputusan. Sebuah urutan peringkat dari Yi menunjukan pilihan terakhir. Dengan demikian alternatif terbaik memiliki nilai Yi tertinggi sedangkan alternatif terburuk memiliki nilai Yi terendah.</p>
								<div class="table-responsive">
									<table class="display table" id="table_moora" >
										<thead class="bg-primary text-white">
											<tr>
												<th>No</th>
												<th>Kode Alternatif</th>
												<th>Nama Siswa</th>
												<th>Nilai Akhir</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $no = 0; ?>
											@foreach ($hasil_moora as $rank=> $moora)
											<?php $no++?>

											<tr>
												
												
												<td>{{$no}}</td>
												<td>{{$moora->alternatif->kode_alternatif}}</td>
												<td>{{$moora->alternatif->siswa->nama_siswa}}</td>
												<td id="card">
													{{ round(
													$moora->alternatif->nilai_raport/sqrt($sum2) * 0.25 + 
													$moora->alternatif->extrakulikuler/sqrt($sum3) * 0.1 +
													$moora->alternatif->jumlah_sertifikat/sqrt($sum4) * 0.05 +
													$moora->alternatif->sikap_ds/sqrt($sum5) * 0.05 +
													$moora->alternatif->sikap_ls/sqrt($sum6) * 0.05 +
													$moora->alternatif->prestasi_akademik/sqrt($sum7) * 0.2 +
													$moora->alternatif->prestasi_non_akademik/sqrt($sum8) * 0.15 -
													$moora->alternatif->absensi/sqrt($sum1) * 0.15,4
													)
												}}
											</td>
											
										</tr>

										@endforeach

									</tbody>

									
                                  <tr>
                                  	 <td id="val"></td>
                                  </tr>
								</table>
								<br>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>

		</div>
	</div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="smart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Data Hasil Perhitungan Smart</h5>
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<!-- Data Smart-->
				<div class="row">
					<div class="container-fluid">



						<div class="card shadow mb-4 mt-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">

								</h6>
								<br>
								@if(auth()->user()->level=='wali kelas')
								<a href="{{url('/cetak-pdf/smart')}}" class="btn btn-warning">Cetak</a>
								@elseif(auth()->user()->level=='kesiswaan')
								<a href="{{url('/cetak-pdf/smart')}}" class="btn btn-warning">Cetak</a>
								<a href="{{url('/cetak-excel/smart')}}" class="btn btn-success">Excel</a>
								@endif

							</div>

							<img src="{{url('template/rumus/ut_bf.jpeg')}}" class="img-fluid rounded-start" style="height: 60px; width: 150px;">
							<p>
								rumus nilai akhirKeterangan :
								u(ai)	= nilai total untuk alternatif ke-i
								uj(ai)	= nilai utility kriteria ke-j untuk alternatif ke-i
								wj		= nilai bobot kriteria ke-j yang sudah ternormalisasi
							</p>
							<div class="card-body">
								<div class="table-responsive">
									<table class="display table" id="table_smart">
										<thead class="bg-primary text-white">
											<tr>
												<th>No</th>
												<th>Kode Alternatif</th>
												<th>Nama Siswa</th>
												<th>Nilai Akhir</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $no = 0; ?>
											@foreach ($utility as $u)
											<?php $no++?>
											<tr>
												<td>{{$no}}</td>
												<td>{{$u->alternatif->kode_alternatif}}</td>
												<td>{{$u->siswa->nama_siswa}}</td>
												<td>
													{{
														round(
														($max1-$u->alternatif->absensi)/($max1-$min1)*0.15 +
														($u->alternatif->nilai_raport-$min2)/($max2-$min2)*0.25+
														($u->alternatif->extrakulikuler-$min3)/($max3-$min3)*0.1+
														($u->alternatif->jumlah_sertifikat-$min4)/($max4-$min4)*0.05+
														($u->alternatif->sikap_ds-$min5)/($max5-$min5)*0.05+
														($u->alternatif->sikap_ls-$min6)/($max6-$min6)*0.05+
														($u->alternatif->prestasi_akademik-$min7)/($max7-$min7)*0.2+
														($u->alternatif->prestasi_non_akademik-$min8)/($max8-$min8)*0.15,4)
														
													}}
												</td>

												

											</tr>
											@endforeach


										</tbody>
									</table>

									<br>


								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>

			</div>
		</div>
	</div>
</div>




<script>
	  $(function() {

       var sum_total_data = 0;

       $("td #card").each(function(index,value){
         getEachRow = parseFloat($(this).text());
         sum_total_data += getEachRow
       });

       document.getElementById('val').innerHTML = sum_total_data;

});

	</script>

	@endsection

