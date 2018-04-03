<html>
<head>
</head>
<body>

<h1 align="center"> TABEL JENIS SURAT </h1>
<a style="text-align:center" href='/JenisSurat/create'><button>Tambah Data</button></a>

<table align="center" border="1" width="60%">
    <tr>
        <th>Nama</th>
        <th>Format Surat</th>
        <th>Keterangan</th>

        <th>ACTION</th>

    </tr>

    @foreach($list_jenissurat as $item)

        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->format_surat}}</td>
            <td>{{$item->keterangan}}</td>
            
            <td>
                <a href="/JenisSurat/{{$item->id}}">show</a>
                <a href="/JenisSurat/{{$item->id}}/edit">Edit</a> ||

                <form method="post" action="/JenisSurat/{{$item->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete">
                    <input type="submit" name="delete" value="Delete"/>

                </form>
            </td>
        </tr>
    @endforeach


</table>



</body>
</html>