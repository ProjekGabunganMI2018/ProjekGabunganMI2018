    <li class="{{  Request::is('roles*')||Request::is('permissions*')||Request::is('user_role*')||Request::is('users*') ? 'active' : '' }} treeview">
        <a href="#">
            <i class="fa fa-cog"></i> <span>Pengaturan Role & User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('users*') ? 'active' : '' }}">
                <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
            </li>
            <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                <a href="{!! route('roles.index') !!}"><i class="fa fa-sun-o"></i><span>Roles</span></a>
            </li>

            {{-- <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
                <a href="{!! route('permissions.index') !!}"><i class="fa fa-spinner"></i><span>Permissions</span></a>
            </li> --}}

            <li class="{{ Request::is('user_role*') ? 'active' : '' }}">
                <a href="{!! route('user_role.index') !!}"><i class="fa fa-object-group"></i><span>User Role</span></a>
            </li>
        </ul>
    </li>

    <li class="{{  Request::is('jenis_surat*')||Request::is('asal_surat*') ? 'active' : '' }} treeview">
        <a href="#">
            <i class="	fa fa-cubes"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('jenis_surat*') ? 'active' : '' }}">
                <a href="{!! route('jenis_surat.index') !!}"><i class="fa fa-edit"></i><span>Jenis Surat</span></a>
            </li>

            <li class="{{ Request::is('asal_surat*') ? 'active' : '' }}">
                <a href="{!! route('asal_surat.index') !!}"><i class="fa fa-edit"></i><span>Asal Surat</span></a>
            </li>
        </ul>
    </li>


<li class="{{ Request::is('surat_masuk*') ? 'active' : '' }}">
    <a href="{!! route('surat_masuk.index') !!}"><i class="fa fa-edit"></i><span>Surat Masuk</span></a>
</li>

<li class="{{ Request::is('surat_keluar*') ? 'active' : '' }}">
<a href="{!! route('surat_keluar.index') !!}"><i class="fa fa-edit"></i><span>Surat Keluar</span></a>
</li>