<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <h2>Form Dosen</h2>

        <form action="/dosen" method="post">
        {{csrf_field()}}
        Nip : <input type="text" name="nip"><br>
        Nama : <input type="text" name="nama"><br>
        Alamat : <input type="text" name="alamat"><br>
		Kontak : <input type="text" name="kontak"><br>
		Email : <input type="text" name="email"><br>
        <input type="submit" value="submit">                                                                               
        </form>
    </div>
    </body>
</html>