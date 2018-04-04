		{{csrf_fied()}}

		nomor_surat:<input type = "text" name = "nomor_surat" value="{{$surat_keluar->nomor_surat}}"><br>
		perihal:<input type = "text" name = "perihal" value="{{surat_keluar->perihal"}}><br>
		isi:<input type = "text" name = "isi" value= "{{surat_keluar->isi"}}><br>
		jenis_surat_id:<input type = "text" name = "{{surat_keluar->jenis_surat_id"}}><br>
		peminta_surat_id:<input type = "text" name = "{{surat_keluar->peminta_surat_id"}}><br>
		surat_masuk_id:<input type = "text" name = "{{surat_keluar->pembuat_surat_id"}}><br>
		surat_masuk_id:<input type = "text" name = "{surat_keluar->surat_masuk_id"}}><br>
		file:<input type = "text" name = "{{surat_keluar->file"}}><br>
		keterangan:<input type = "text" name = "{{surat_keluar->keterangan"}}><br>
		create_at:<input type = "text" name = "{{surat_keluar->create_at"}}><br>
		update_at:<input type = "text" name ="{{surat_keluar->update_at"}}><br>
		delete_at:<input type = "text" name ="{{surat_keluar->delete_at"}}><br>

		<input type+"submit" value="submit"