<html>
<body>

<h2>Form Jenis Surat</h2>
<form action="/JenisSurat" method="post" >

    {{csrf_field()}}
    nama   : <input type="text" name="nama" ><br>
    format surat  : <input type="text" name="format_surat" ><br>
    keterangan	: <input type="text" name="keterangan"  ><br>
    


    <input type="submit" value="Submit">


</form>

</body>
</html>