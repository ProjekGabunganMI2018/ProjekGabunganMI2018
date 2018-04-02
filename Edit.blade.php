<html>
<body>

<h2>Form surat masuk</h2>
		<form action="/surat masuk/{{$surat masuk_->id}}" method="POST">
			<input type="hidden" name="_method" value="PATCH"/>
			@include('surat masuk')
		</form>

</body>
</html>