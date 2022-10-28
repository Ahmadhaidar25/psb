<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{url('template/login/fonts/icomoon/style.css')}}">

        <link rel="stylesheet" href="{{url('template/login/css/owl.carousel.min.css')}}">
        <link href="{{url('template/img/logo.ico')}}" rel="icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('template/login/css/bootstrap.min.css')}}">

        <!-- Style -->
        <link rel="stylesheet" href="{{url('template/login/css/style.css')}}">
        <link rel="stylesheet" href="{{url('bootstrap/bootstrap.css')}}">
        <script type="text/javascript" src="{{url('template/js/bootstrap.js')}}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <title>Login</title>
    </head>
    <body>

        
        <div class="container">
            <div class="btn-group mt-3" role="group" aria-label="Basic radio toggle button group">
              <a href="{{url('tentang')}}" class="btn btn-primary"><i class="bi bi-info-circle"></i>&nbsp;Tentang</a>
              &nbsp;

              <a href="{{url('bantuan')}}" class="btn btn-primary"><i class="bi bi-megaphone"></i>&nbsp;Bantuan</a>



          </div>
      </div>

      <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('template/img/4.png'); margin-top: -58px;"></div>
        <div class="contents order-2 order-md-1">

          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <div class="mb-4">
                  <h3>Silahkan Login</h3>
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <form action="{{url('post-login')}}" method="post">
                @csrf
                <div class="form-group first">
                    <label for="username">Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" autofocus>
                    @if($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control inputPassword {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                    @if($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif


                </div>

                <div class="d-flex mb-5 align-items-center">
                    <div class="form-check">
                        
                    </div>
                    <span class="ml-auto"><a href="" class="forgot-pass" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Akun</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

                <span class="d-block text-center my-4 text-muted">Copyright &copy; Sistem Pendukung Keputusan <script> document.write(new Date().getFullYear()); </script></span>


            </form>
        </div>
    </div>
</div>
</div>


</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Register Akun</h5>

            </div>
            <form action="{{url('post-register')}}" method="post">
                <div class="modal-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" id="recipient-name">

                    @if($errors->has('nama'))
                    <span class="invalid-feedback">{{ $errors->first('nama') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="recipient-name">
                    @if($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Password:</label>
                    <input type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="recipient-name">

                    @if($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-check">
                    <input class="form-check-input {{ $errors->has('jk') ? ' is-invalid' : '' }}" type="radio" value="L" name="jk" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Laki-Laki
                    </label>

                    @if($errors->has('jk'))
                    <span class="invalid-feedback">{{ $errors->first('jk') }}</span>
                    @endif
                </div>
                <div class="form-check">
                    <input class="form-check-input {{ $errors->has('jk') ? ' is-invalid' : '' }}" type="radio" name="jk" value="P" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Perempuan
                    </label>

                    @if($errors->has('jk'))
                    <span class="invalid-feedback">{{ $errors->first('jk') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Level:</label>
                    <select class="form-control {{ $errors->has('level') ? ' is-invalid' : '' }}" name="level">
                        <option value="">--Pilih Level--</option>
                        <option value="wali kelas">Wali Kelas</option>
                        <option value="kesiswaan">Kesiswaan</option>
                    </select>
                    @if($errors->has('level'))
                    <span class="invalid-feedback">{{ $errors->first('level') }}</span>
                    @endif
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
</div>
</div>
<!--<div class="shadow p-3 mb-5 bg-body rounded mt-3">
    <span>Sistem Penunjang Keputusan Pemilihan Siswa Berprestasi dengan Metode MOORA & SMART<br>
        Pengembang : Mutiara Sri Rusmanti
        Pembimbing 1: Dedih, M.Kom | Pembimbing 2: Wahyudi, S.Kom., M.M<br>
    STMIK Horizon Karawang - © Copyleft 2022</span> 
</div>-->



<script>
  $(document).ready(function() {
    $('.show-password').click(function() {
        if ($(this).is(':checked')) {
            $('.inputPassword').attr('type', 'text');
        } else {
            $('.inputPassword').attr('type', 'password');
        }
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{url('template/login/js/popper.min.js')}}"></script>
<script src="{{url('template/login/js/bootstrap.min.js')}}"></script>
<script src="{{url('template/login/js/main.js')}}"></script>
</body>
@include('sweetalert::alert')
</html>