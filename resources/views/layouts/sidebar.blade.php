<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ '/' }}">SIAKAD</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ '/' }}">SK</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li @php if(url()->current() == 'http://127.0.0.1:8000') { echo 'class="active"'; }
            else{ echo ''; } @endphp >
            <a href="{{ '/' }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dasbor</span></a>
        </li>
    </ul>
    <ul class="sidebar-menu">
        <li class="menu-header">Manajemen Data</li>
        <li @php if(url()->current() == 'http://127.0.0.1:8000/siswa') { echo 'class="nav-item dropdown active"'; }
            else{ echo 'class="nav-item dropdown"'; } @endphp >
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>Siswa</span></a>
            <ul class="dropdown-menu">
                <li @php if(url()->current() == 'http://127.0.0.1:8000/siswa') { echo 'class="active"';} @endphp >
                    <a class="nav-link" href="{{ ' /siswa ' }}">Data Siswa</a>
                </li>
            </ul>
        </li>
        <li @php if(url()->current() == 'http://127.0.0.1:8000/guru') { echo 'class="nav-item dropdown active"'; } else{
            echo 'class="nav-item dropdown"'; } @endphp >
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-users" aria-hidden="true"></i><span>Guru</span></a>
            <ul class="dropdown-menu">
                <li @php if(url()->current() == 'http://127.0.0.1:8000/guru') { echo 'class="active"';} @endphp >
                    <a class="nav-link" href="{{ ' /guru ' }}">Data Guru</a>
                </li>
            </ul>
        </li>
        <li @php if(url()->current() == 'http://127.0.0.1:8000/kelas') { echo 'class="nav-item dropdown active"'; }
            else{ echo 'class="nav-item dropdown"'; } @endphp >
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-chalkboard-teacher"></i><span>Kelas</span></a>
            <ul class="dropdown-menu">
                <li @php if(url()->current() == 'http://127.0.0.1:8000/kelas') { echo 'class="active"';} @endphp >
                    <a class="nav-link" href="{{ ' /kelas ' }}">Data Kelas</a>
                </li>
            </ul>
        </li>
        <li @php if(url()->current() == 'http://127.0.0.1:8000/mapel') { echo 'class="nav-item dropdown active"'; }
            else{ echo 'class="nav-item dropdown"'; } @endphp >
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-book" aria-hidden="true"></i><span>Mata Pelajaran</span></a>
            <ul class="dropdown-menu">
                <li @php if(url()->current() == 'http://127.0.0.1:8000/mapel') { echo 'class="active"';} @endphp >
                    <a class="nav-link" href="{{ ' /mapel ' }}">Data Mata Pelajaran</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
