<!-- resources/views/registrasi.blade.php -->

<!DOCTYPE html>
<html>

<head>
	<title>Sipkharan</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

	<div class="kotak_registrasi">
		<p class="tulisan_registrasi">Registrasi</p>
		<div class="kotak">
			<form method="post" action="{{ route('registrasi.submit') }}" enctype="multipart/form-data">
				@csrf

				<!-- cek apakah terdapat pesan kesalahan, jika ada cetak -->
				@if (!empty($eror))
					<p class="notifm">{{ $eror }}</p>
				@endif

                <div class="inputan">
				<input type="text" name="nama_lengkap" class="form_registrasi" placeholder="Nama Lengkap" value="{{ $nama }}">
                </div>

				<div class="inputan">
					<input type="text" name="nim" class="form_registrasi" placeholder="Nim" value="{{ $nim }}">
				</div>

				<div class="inputan">
					<input type="text" name="program_studi" class="form_registrasi" placeholder="Program Studi" value="{{ $pst }}">
				</div>

				<div class="inputan">
					<input type="text" name="semester" class="form_registrasi" placeholder="Semester" value="{{ $sem }}">
				</div>

				<div class="inputan">
					<div class="file">
						Pas Foto <input type="file" class="form_registrasi" id="myFile" name="foto" accept="image/*">
					</div>
				</div>

				<div class="inputan">
					<input type="password" name="password" class="form_registrasi" placeholder="Password" value="{{ $pw }}">
				</div>

				<button type="submit" name="regis" class="tombol_registrasi"  class= "link" href="{{ route('login') }}">REGISTER</button>
				<br />
				<br />
			</form>
		</div>
	</div>

</body>

</html>

