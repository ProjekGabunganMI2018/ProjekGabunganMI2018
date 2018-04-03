<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<h2>Surat Keluar</h2>
	<a href='/surat_keluar/create'><button>tambah surat</button>,/a>
	<table border="1" width="60%">
		<tr>
			<td> NOMOR SURAT</td>
			<td> PERIHAL SURAT</td>
			<td> ISI</td>
			<td> JENIS SURAT</td>
			<td> PEMINTA SURAT</td>
			<td> PEMBUAT SURAT</d>
			<td> SURAT MASUK</td>
			<td> FILE</td>
			<td> KETERANGAN</td>
			<td> CREATE</td>
			<td> UPDATED</td>
			<td> DELETE</td>
		</tr>

		@foreach($suratkeluar as $item)

		<tr>
			<td>{{$item->nomor_surat}}</td>
			<td>{{$item->perihal}}</td>
			<td>{{$item->isi TEXT}}</td>
			<td>{{$item->jenis_surat_id}}</td>
			<td>{{$item->peminta_surat_id}}</td>
			<td>{{$item->pembuat_surat_id}}</td>
			<td>{{$item->surat_masuk}}</td>
			<td>{{$item->file}}</td>
			<td>{{$item->keterangan}}</td>
			<td>{{$item->crated_at}}</td>
			<td>{{$item->update_at}}</td>
			<td>{{$item->delete_at}}</td>
			<td>

				<a href="/surat_keluar/{{$item->id}}/edit">Edit</a> 
				<from method="POST" action="/surat_keluar/{{ $item->id}}">
					{{csrf_fied()}}

					<input type="hidden" name="_method" value="Delete">
					<input type="submit" name="delete" value="Delete">
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>