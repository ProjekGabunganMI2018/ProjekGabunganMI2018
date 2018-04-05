<li class="{{ Request::is('surat_masuk*') ? 'active' : '' }}">
    <a href="{!! route('surat_masuk.index') !!}"><i class="fa fa-edit"></i><span>Surat Masuk</span></a>
</li>

<li class="{{ Request::is('surat_keluar*') ? 'active' : '' }}">
<a href="{!! route('surat_keluar.index') !!}"><i class="fa fa-edit"></i><span>Surat Keluar</span></a>
</li>

<li class="{{ Request::is('asal_surat*') ? 'active' : '' }}">
    <a href="{!! route('asal_surat.index') !!}"><i class="fa fa-edit"></i><span>Asal Surat</span></a>
</li>

<li class="{{ Request::is('jenis_surat*') ? 'active' : '' }}">
    <a href="{!! route('jenis_surat.index') !!}"><i class="fa fa-edit"></i><span>Jenis Surat</span></a>
</li>