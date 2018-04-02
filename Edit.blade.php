<html>
<body>

<h2>Form Disposisi</h2>
		<form action="/disposisi/{{$data_->id}}" method="POST">
			<input type="hidden" name="_method" value="PATCH"/>
			@include('disposisi')
		</form>

</body>
</html>