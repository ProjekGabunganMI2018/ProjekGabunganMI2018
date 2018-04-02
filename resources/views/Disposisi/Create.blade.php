<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Asal Surat</h2>

<form action="/AsalSurat" method="post">
    {{csrf_field()}}
    Nama : <input type="text" name="nama"><br>
    Instansi : <input type="text" name="instansi"><br>
    Kontak : <input type="text" name="kontak"><br>
    Alamat : <input type="text" name="alamat"><br>
    Keterangan : <input type="text" name="keterangan"><br>
    <input type="submit" value="submit">
</form>
</div>
</body>
</html>