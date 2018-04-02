
		{{csrf_field()}}

		SURAT MASUK:<input type = "text" name = "SURAT MASUK" value="{{$disposisi->surat_masuk}}"><br>
		PEMBUAT SURAT:<input type = "text" name = "PEMBUAT SURAT"  value="{{$disposisi->pembuat_disposisi}}"><br>
		PENERIMA SURAT:<input type = "text" name = "PENERIMA SURAT"  value="{{$disposisi->penerima_disposisi}}"><br>
		ASAL DISPOSISI:<input type = "text" name = "ASAL DISPOSISI"  value="{{$disposisi->asal_disposisi}}"><br>
		KETERANGAN:<input type = "text" name = "KETERANGAN"  value="{{$disposisi->keterangan}}"><br>

		<input type="submit" value="submit">
	
