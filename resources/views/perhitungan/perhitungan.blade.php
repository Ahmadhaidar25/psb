@extends('layout.main')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	@if(auth()->user()->level == 'wali kelas')
	<h1 class="h3 mb-0 text-gray-800">Lihat Hasil Perhitungan</h1>
	@elseif(auth()->user()->level == 'kesiswaan')
	<h1 class="h3 mb-0 text-gray-800">Lihat Data Hasil Akhir</h1>
	@endif

</div>

<div class="row">
	<div class="container-fluid">
		
		<div class="row justify-content-start">
			<div class="col-2">

				<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#moora" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">Hasil Moora</button>
			</div>
			<div class="col-2">
				<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#smart">Hasil Smart</button>
			</div>
		</div>

		<img src="{{url('template/img/lihat.png')}}" class="rounded mx-auto d-block" alt="...">


		<!-- Modal -->
		<div class="modal fade" id="moora" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Data Hasil Perhitungan Moora</h5>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
					</div>
					<div class="modal-body">
						<div class="card shadow mb-4  mt-3" id="moora">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">

								</h6>

							</div>
							<div class="card-body">
								<form id="calx_form">
									<div class="card-header py-3 bg-primary">
										<h6 class="m-0 font-weight-bold text-white text-center">
											Menentukan Kriteria Dan Alternatif
										</h6>

									</div>
									<br>
									<div class="table-responsive">
										<table class="display table" id="table_id">
											<thead>
												<tr>
													<th>Kode Alternatif</th>	
													<th>Nama Siswa</th>

													<th>C001</th>
													<th>C002</th>

													<th>C003</th>
													<th>C004</th>

													<th>C005</th>
													<th>C006</th>

													<th>C007</th>
													<th>C008</th>


												</tr>
											</thead>
											<tbody>
												@foreach($alternatif as $al)
												<tr>
													<td>{{$al->kode_alternatif}}</td>
													<td>{{$al->siswa->nama_siswa}}</td>
													<td>{{$al->absensi}}</td>
													<td>{{$al->nilai_raport}}</td>
													<td>{{$al->extrakulikuler}}</td>
													<td>{{$al->jumlah_sertifikat}}</td>
													<td>{{$al->sikap_ds}}</td>
													<td>{{$al->sikap_ls}}</td>
													<td>{{$al->prestasi_akademik}}</td>
													<td>{{$al->prestasi_non_akademik}}</td>
												</tr>
												@endforeach




											</tbody>
										</table>
										<br>


										<div class="card-header py-3 bg-primary">

											<h6 class="m-0 font-weight-bold text-white text-center">
												Menghitung Akar Kuadrat
											</h6>

										</div>
										<br>
										<div class="table-responsive">
											<table class="table" id="akar">
												<thead>
													<tr>
														<th>Nama Siswa</th>
														<th>Kode Alternatif</th>
														<th>C001</th>
														<th>C002</th>

														<th>C003</th>
														<th>C004</th>

														<th>C005</th>
														<th>C006</th>

														<th>C007</th>
														<th>C008</th>

													</tr>
												</thead>
												<tbody>
													@foreach ($akar as $ak)
													<tr>
														<td>{{$ak->alternatif->kode_alternatif}}</td>
														<td>{{$ak->siswa->nama_siswa}}</td>
														<td>{{$ak->absensi}}</td>
														<td>{{$ak->nilai_raport}}</td>
														<td>{{$ak->extrakulikuler}}</td>
														<td>{{$ak->jumlah_sertifikat}}</td>
														<td>{{$ak->sikap_ds}}</td>
														<td>{{$ak->sikap_ls}}</td>
														<td>{{$ak->prestasi_akademik}}</td>
														<td>{{$ak->prestasi_non_akademik}}</td>
													</tr>
													@endforeach

												</tbody>



												<thead class="bg-secondary text-white">
													<tr>


														<th>Total &nbsp;=</th>
														<th></th>
														<th>{{$sum1}}</th>
														<th>{{$sum2}}</th>
														<th>{{$sum3}}</th>
														<th>{{$sum4}}</th>
														<th>{{$sum5}}</th>
														<th>{{$sum6}}</th>
														<th>{{$sum7}}</th>
														<th>{{$sum8}}</th>




													</tr>
												</thead>
												<thead class="bg-secondary text-white" id="a">
													<tr>
														<th>Akar =</th>

														<th></th>

														<th>{{round(sqrt($sum1),4)}}</th>
														<th>{{round(sqrt($sum2),4)}}</th>
														<th>{{round(sqrt($sum3),4)}}</th>
														<th>{{round(sqrt($sum4),4)}}</th>
														<th>{{round(sqrt($sum5),4)}}</th>
														<th>{{round(sqrt($sum6),4)}}</th>
														<th>{{round(sqrt($sum7),4)}}</th>
														<th>{{round(sqrt($sum8),4)}}</th>

													</tr>
												</thead>
											</table>
										</div>





										<div class="card-header py-3 bg-primary mt-3">
											<h6 class="m-0 font-weight-bold text-white text-center">
												Normalisasi Bobot Kriteria
											</h6>

										</div>
										<img src="{{url('template/rumus/kb.jpeg')}}" class="img-fluid rounded-start" style="height: 60px;">
										<br>
										<div class="table-responsive">
											<table class="display table" id="bobot">
												<thead>
													<tr>
														<th>Kode Kriteria</th>	
														<th>Nama Kriteria</th>
														<th>Jenis</th>
														<th>Bobot</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($kriteria as $a)
													<tr>
														<td>{{$a->kode_kriteria}}</td>
														<td>{{$a->nama_kriteria}}</td>
														<td>{{$a->jenis}}</td>
														<td>{{$a->bobot}}</td>
													</tr>
													@endforeach


												</tbody>
											</table>
										</div>




										<div class="card-header py-3 bg-primary mt-3">
											<h6 class="m-0 font-weight-bold text-white text-center">
												Matriks Normalisasi
											</h6>

										</div>

										<img src="{{url('template/rumus/mt_mo.jpeg')}}" class="img-fluid rounded-start" style="height: 60px;">
										<p>Matriks normalisasi moora Keterangan :
											Xij	  = Matriks alternatif j pada kriteria i
											i	  = 1, 2, 3,…, n adalah nomor urutan atribut atau kriteria
											j	  = 1, 2, 3,…, m adalah nomor urutan atribut alternatif
											X*ij = Matriks Normalisasi alternatif j pada kriteria i
										</p>
										<div class="table-responsive">
											<br>
											<table class="display table" id="matrix">
												<thead>



													<tr>
														<th>Kode Alternatif</th>	
														<th>Nama Siswa</th>
														<th>C001</th>
														<th>C002</th>

														<th>C003</th>
														<th>C004</th>

														<th>C005</th>
														<th>C006</th>

														<th>C007</th>
														<th>C008</th>



													</tr>



												</thead>
												<tbody>


													@foreach($matrix as $mt)
													<tr>
														<td>{{$mt->kode_alternatif}}</td>
														<td>{{$mt->siswa->nama_siswa}}</td>
														<td>{{round($mt->absensi/sqrt($sum1),4)}}</td>
														<td>{{round($mt->nilai_raport/sqrt($sum2),4)}}</td>
														<td>{{round($mt->extrakulikuler/sqrt($sum3),4)}}</td>
														<td>{{round($mt->jumlah_sertifikat/sqrt($sum4),4)}}</td>
														<td>{{round($mt->sikap_ds/sqrt($sum5),4)}}</td>
														<td>{{round($mt->sikap_ls/sqrt($sum6),4)}}</td>
														<td>{{round($mt->prestasi_akademik/sqrt($sum7),4)}}</td>
														<td>{{round($mt->prestasi_non_akademik/sqrt($sum8),4)}}</td>
													</tr>
													@endforeach






												</tbody>

											</table>
										</div>



										<br>


										<div class="card-header bg-primary">
											<h6 class="m-0 font-weight-bold text-white text-center">
												Optimasi
											</h6>

										</div>
										<img src="{{url('template/rumus/op_mo.jpeg')}}" class="img-fluid rounded-start" style="height: 60px;">
										<p>
											rumus moora optimasi Keterangan :
											Xij	= Matriks Normalisasi
											Wj	= Nilai Bobot
										</p>
										<br>
										<div class="table-responsive">
											<table class="display table mt-3" id="optimasi">
												<thead> 
													<tr>
														<th>Kode Alternatif</th>	
														<th>Nama Siswa</th>
														<th>C001</th>
														<th>C002</th>

														<th>C003</th>
														<th>C004</th>

														<th>C005</th>
														<th>C006</th>

														<th>C007</th>
														<th>C008</th>

													</tr>
												</thead>
												<tbody>

													@foreach($optimasi as $optimasi)
													<tr>
														<td>{{$optimasi->kode_alternatif}}</td>
														<td>{{$optimasi->siswa->nama_siswa}}</td>
														<td>{{round($optimasi->absensi/sqrt($sum1) * 0.15,4)}}</td>

														<td>{{round($optimasi->nilai_raport/sqrt($sum2) * 0.25,4)}}</td>
														<td>{{round($optimasi->extrakulikuler/sqrt($sum3) * 0.1,4)}}</td>
														<td>{{round($optimasi->jumlah_sertifikat/sqrt($sum4) * 0.05,4)}}</td>
														<td>{{round($optimasi->sikap_ds/sqrt($sum5) * 0.05,4)}}</td>
														<td>{{round($optimasi->sikap_ls/sqrt($sum6) * 0.05,4)}}</td>
														<td>{{round($optimasi->prestasi_akademik/sqrt($sum7) * 0.2,4)}}</td>
														<td>{{round($optimasi->prestasi_non_akademik/sqrt($sum8) * 0.15,4)}}</td>

													</tr>


													@endforeach



												</tbody>
											</table>

										</div>
									</div>
								</form>
							</div>



						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="smart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Data Hasil Perhitungan Smart</h5>
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<!-- Data Smart-->
				<div class="row">
					<div class="container-fluid">



						<div class="card shadow mb-4 mt-4 filterDiv cars smart" id="smart">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">

								</h6>

							</div>
							<div class="card-body">

								<div class="card">

									<div class="card-body">
										<div class="card-header bg-primary text-white text-center">
											<h5>Menentukan Kriteria Dan Alternatif</h5>
										</div>
										<br>
										<div class="table-responsive">
											<table class="display table" id="alternatif">
												<thead>
													<tr>

														<th>Kode Alternatif</th>
														<th>Nama Siswa</th>

														<th>C001</th>
														<th>C002</th>

														<th>C003</th>
														<th>C004</th>

														<th>C005</th>
														<th>C006</th>

														<th>C007</th>
														<th>C008</th>

													</tr>
												</thead>
												<tbody>
													@foreach ($utility as $u)

													<tr>
														<td>{{$u->alternatif->kode_alternatif}}</td>
														<td>{{$u->siswa->nama_siswa}}</td>
														<td>{{$u->absensi}}</td>
														<td>{{$u->nilai_raport}}</td>
														<td>{{$u->extrakulikuler}}</td>
														<td>{{$u->jumlah_sertifikat}}</td>
														<td>{{$u->sikap_ds}}</td>
														<td>{{$u->sikap_ls}}</td>
														<td>{{$u->prestasi_akademik}}</td>
														<td>{{$u->prestasi_non_akademik}}</td>
													</tr>
													@endforeach

												</tbody>
												<thead>
													<tr class="bg-secondary text-white">
														<th>Min</th>
														<th></th>

														<th>{{$min1}}</th>
														<th>{{$min2}}</th>
														<th>{{$min3}}</th>
														<th>{{$min4}}</th>
														<th>{{$min5}}</th>
														<th>{{$min6}}</th>
														<th>{{$min7}}</th>
														<th>{{$min8}}</th>

													</tr>
													<tr class="bg-secondary text-white">
														<th>Max</th>
														<th></th>

														<th>{{$max1}}</th>
														<th>{{$max2}}</th>
														<th>{{$max3}}</th>
														<th>{{$max4}}</th>
														<th>{{$max5}}</th>
														<th>{{$max6}}</th>
														<th>{{$max7}}</th>
														<th>{{$max8}}</th>
													</tr>
												</thead>
											</table>
										</div>
									</div>
								</div>
								<br>


								<div class="card">

									<div class="card-body">
										<div class="card-header bg-primary text-white text-center">
											<h5>Normalisasi Bobot Kriteria</h5>
										</div>
										<br>
										<div class="table-responsive">
											<table class="display table" id="bobot_smart">
												<thead>
													<tr>
														<th>Kode Kriteria</th>	
														<th>Nama Kriteria</th>
														<th>Bobot</th>
														<th>Jenis</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($kriteria as $k)
													<tr>
														<td>{{$k->kode_kriteria}}</td>
														<td>{{$k->nama_kriteria}}</td>
														<td>{{$k->bobot}}</td>
														<td>{{$k->jenis}}</td>
													</tr>
													@endforeach


												</tbody>
											</table>
										</div>
									</div>
								</div>
								<br>

								<div class="card">

									<div class="card-body">
										<div class="card-header bg-primary text-white text-center">
											<h5>Utility</h5>
										</div>
										<div class="row">
											<div class="col">
												<img src="{{url('template/rumus/ut.jpeg')}}" class="img-fluid rounded-start" style="height: 60px;">
												<p>Keterangan :
													Rumus Cost
													ui(ai)	= nilai utility kriteria ke-i untuk alteratif ke-i
													Cmax	= nilai kriteria maksimal
													Cmin	= nilai kriteria minimal
													Cout	= nilai kriteria alternatif ke-i
												</p>

											</div>

											<div class="col">
												<img src="{{url('template/rumus/benefit-ut.jpeg')}}" class="img-fluid rounded-start mt-2" style="height: 60px;">
												<p>Keterangan :
													Rumus Benefit
													ui(ai)	= nilai utility kriteria ke-i untuk alteratif ke-i
													Cmax	= nilai kriteria maksimal
													Cmin	= nilai kriteria minimal
													Cout	= nilai kriteria alternatif ke-i
												</p>
											</div>
										</div>
										
										<br>
										<div class="table-responsive">
											<table class="display table" id="utility">
												<thead >
													<tr>


														<th>Kode Alternatif</th>
														<th>Nama Siswa</th>

														<th>C001</th>
														<th>C002</th>

														<th>C003</th>
														<th>C004</th>

														<th>C005</th>
														<th>C006</th>

														<th>C007</th>
														<th>C008</th>


													</tr>
												</thead>
												<tbody>
													@foreach ($utility as $u)
													<tr>
														<td>{{$u->alternatif->kode_alternatif}}</td>
														<td>{{$u->siswa->nama_siswa}}</td>
														<td>{{round(($max1-$u->absensi)/($max1-$min1),4)}}</td>
														<td>{{round(($u->nilai_raport-$min2)/($max2-$min2),4)}}</td>
														<td>{{round(($u->extrakulikuler-$min3)/($max3-$min3),4)}}</td>
														<td>{{round(($u->jumlah_sertifikat-$min4)/($max4-$min4),4)}}</td>
														<td>{{round(($u->sikap_ds-$min5)/($max5-$min5),4)}}</td>
														<td>{{round(($u->sikap_ls-$min6)/($max6-$min6),4)}}</td>
														<td>{{round(($u->prestasi_akademik-$min7)/($max7-$min7),4)}}</td>
														<td>{{round(($u->prestasi_non_akademik-$min8)/($max8-$min8),4)}}</td>

													</tr>
													@endforeach


												</tbody>
											</table>
										</div>
									</div>
								</div>
								<br>



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


<!-- Data Moora-->












@endsection