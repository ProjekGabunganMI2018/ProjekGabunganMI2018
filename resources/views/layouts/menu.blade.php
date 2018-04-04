<li class="{{ Request::is('jenisSurats*') ? 'active' : '' }}">
    <a href="{!! route('jenisSurats.index') !!}"><i class="fa fa-edit"></i><span>Jenis Surats</span></a>
</li>

<li class="{{ Request::is('asalSurats*') ? 'active' : '' }}">
    <a href="{!! route('asalSurats.index') !!}"><i class="fa fa-edit"></i><span>Asal Surats</span></a>
</li>

<li class="{{ Request::is('suratKeluars*') ? 'active' : '' }}">
    <a href="{!! route('suratKeluars.index') !!}"><i class="fa fa-edit"></i><span>Surat Keluars</span></a>
</li>

<li class="{{ Request::is('suratMasuks*') ? 'active' : '' }}">
    <a href="{!! route('suratMasuks.index') !!}"><i class="fa fa-edit"></i><span>Surat Masuks</span></a>
</li>

