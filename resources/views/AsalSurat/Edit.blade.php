<html>
<body>

<h2>Form Asal Surat</h2>
<form action="/AsalSurat/{{$list_asalsurat->id}}" method="post" >
    <input type="hidden" name="_method" value="PATCH"/>
    @include('AsalSurat.form')
</form>

</body>
</html>