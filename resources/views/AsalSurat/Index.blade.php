<html>
<head>
</head>
<body>

<h1 align="center"> TABEL ASAL SURAT </h1>
<a style="text-align:center" href='/AsalSurat/create'><button>Tambah Data</button></a>

<table align="center" border="1" width="60%">
    <tr>
        <th>Nama</th>
        <th>Instansi</th>
        <th>Keterangan</th>
        <th>Kontak</th>
        <th>Alamat</th>
        <th>Keterangan</th>

        <th>ACTION</th>

    </tr>

    @foreach($list_asalsurat as $item)

        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->instansi}}</td>
            <td>{{$item->keterangan}}</td>
            <td>{{$item->kontak}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->keterangan}}</td>

            <td>
                <a href="/AsalSurat/{{$item->id}}">show</a>
                <a href="/AsalSurat/{{$item->id}}/edit">Edit</a> ||

                <form method="post" action="/AsalSurat/{{$item->id}}">
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