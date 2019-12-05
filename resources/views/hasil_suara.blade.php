<!DOCTYPE html>
<html>
  <head>
    <title>Hasil Pemilihan Ketua OSIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body style="color: lightgrey; background-color: #57832e; height: 100vh; width:100%; text-align:center">
    <div style="padding-top: 5vh; margin-bottom: 30px;">
      <h1 style="color: #e7cf3b; font-size: 40px; font-weight: 500">HASIL E - PILKETOS</h1>
      <table border="1" style="border:1px solid lightgrey; margin: 0 auto; min-width: 300px;">
        <tr>
          <th style="padding: 10px 5px; width: 70%; color: white;">NIK</th>
          <th style="padding: 10px 5px; color: white;">Pemilih</th>
        </tr>
        @foreach($suara as $s)
        <tr>
          <td style="padding: 10px 5px">{{ $s->nik }}</td>
          <td style="padding: 10px 5px">{{ $s->total }}</td>
        </tr>
        @endforeach
      </table>
    </div>
    <a href="/" style="color: white; text-decoration: none;"><< Kembali</a>
  </body>
</html>