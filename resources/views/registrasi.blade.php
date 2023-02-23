<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Indonesia Event Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex min-vh-100 col-md-4 align-items-center mb-5 mt-5 justify-content-center">

      <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="text-center">Form Registrasi Peserta Silatnas Rental Indonesia 2023</h4>
        <p class="text-center">Mohon lengkapi informasi data di bawah ini untuk kebutuhan registasi peserta dan untuk kebutuhan akomodasi peserta bisa di transfer ke nomor rekening : BCA Digital - 008335125205 a.n  Pandu Aribowo Perdana Kusuma</p>
        <div class="form-group mb-3">
          @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
          @endif
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputEmail1">Asal Daerah</label>
          <input type="text" name="asal_daerah" class="form-control" placeholder="jawaban anda" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger">@error('asal_daerah'){{ $message }}@enderror</span>
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputPassword1">Nama Panjang</label>
          <input type="text" name="nama_panjang" class="form-control" placeholder="jawaban anda" id="exampleInputPassword1">
          <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
        </div>
        <div class="row mb-2">
          <div class="form-group col">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="jawaban anda" id="exampleInputPassword1">
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
          </div>
          <div class="form-group col">
            <label for="exampleInputPassword1">Nomor Telepon</label>
            <input type="number" name="nomor_telepon" class="form-control" placeholder="jawaban anda" id="exampleInputPassword1">
            <span class="text-danger">@error('nomor_telepon'){{ $message }}@enderror</span>
          </div>
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputPassword1">Nama Perusahaan</label>
          <input type="text" name="nama_perusahaan" class="form-control" placeholder="jawaban anda" id="exampleInputPassword1">
          <span class="text-danger">@error('nama_perusahaan'){{ $message }}@enderror</span>
        </div>
        <div class="form-group mb-2">
          <label for="exampleInputPassword1">Logo Perusahaan</label>
          <input type="file" name="logo_perusahaan" class="form-control" placeholder="jawaban anda" id="exampleInputPassword1">
          <span class="text-danger">@error('logo_perusahaan'){{ $message }}@enderror</span>
        </div>
        <div class="form-group mb-2">
          <label for="exampleFormControlTextarea1">Sebutkan Produk Usaha dari Anda</label>
          <p class="form-text">(Mohon di isi dengan jenis-jenis produk perusahaan Anda)</p>
          <textarea name="produk" class="form-control" placeholder="jawaban anda" id="exampleFormControlTextarea1" rows="3"></textarea>
          <span class="text-danger">@error('produk'){{ $message }}@enderror</span>
        </div>
        <div class="form-group mb-2">
          <label for="exampleFormControlSelect1">Apakah Anda akan menghadiri Silatnas Rental Indonesia?</label>
          <select name="apakah_anda_akan_menghadiri" class="form-control" placeholder="jawaban anda" id="exampleFormControlSelect1">
            <option value="" selected disabled>Pilih</option>
            <option value="Iya, Saya akan hadir">Iya, Saya akan hadir</option>
          </select>
          <span class="text-danger">@error('apakah_anda_akan_menghadiri'){{ $message }}@enderror</span>
        </div>
        <div class="form-group mb-3">
          <label for="exampleFormControlSelect1">Berapa orang dari tim Anda yang akan menghadiri Silatnas Rental Indonesia?</label>
          <select name="berapa_orang" class="form-control" placeholder="jawaban anda" id="exampleFormControlSelect1">
            <option value="" selected disabled>Pilih</option>
            <option value="1">1 Orang (Anda saja)</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
            <option value="4">4 Orang</option>
            <option value="5">5 Orang</option>
          </select>
          <span class="text-danger">@error('berapa_orang'){{ $message }}@enderror</span>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>