<html>
<body>

<h2>Form surat keluar</h2>
		<form action="/surat keluar/{{$suratkeluar->id}}" method="POST">
			<input type="hidden" name="_method" value="PATCH"/>
			@include('suratkeluar')
		</form>

</body>
</html>