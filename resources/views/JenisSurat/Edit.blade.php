<html>
<body>

<h2>Form Jenis Surat</h2>
<form action="/JenisSurat/{{$list_jenissurat->id}}" method="post" >
    <input type="hidden" name="_method" value="PATCH"/>
    @include('JenisSurat.form')
</form>

</body>
</html>