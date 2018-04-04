<html>
<body>

<h2>Form user</h2>
		<form action="/user/{{$user_->id}}" method="POST">
			<input type="hidden" name="_method" value="PATCH"/>
			@include('user')
		</form>

</body>
</html>