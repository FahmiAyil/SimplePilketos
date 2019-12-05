<!DOCTYPE html>
<html>
  <head>
    <title>Pemilihan Ketua OSIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body style="background-color: #57832e; height: 100vh; width:100%;">
    <div style="color: white; width: 30%; margin: 0 auto; text-align:center; padding-top: 20vh !important">
      <h1 style="color: #e7cf3b; font-size: 40px; font-weight: 500">E - PILKETOS</h1>
      <h2 style="font-size: 30px; font-weight: 500">Pemilihan <br> Ketua OSIS SMK NEGERI 1 SINGOSARI Tahun 2019</h2>
      <div style="background-color: #3c78b6; margin: 40px 0 20px 0; border-radius: 5px">
        <h3 style="font-size: 30px; font-weight: 400; padding: 20px 0">Kode Token Anda</h3>
        <form style="width: 90%; margin: 0 auto;" action="/pilih" method="POST">
          {{ csrf_field() }}
          <input class="input is-normal" name="nik" type="text" placeholder="Masukkan token anda ...">
          <input class="button is-warning" style="background-color: #ffc81b !important; width: 100%; margin: 20px 0;" type="submit" value="Pilih">
        </form>
      </div>
      <a href="/hasil" style="color: white; text-decoration: none;">Lihat Hasil</a>
    </div>
  </body>
</html>