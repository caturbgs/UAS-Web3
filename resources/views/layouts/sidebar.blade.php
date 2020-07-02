<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ '/home' }}">SIAKAD</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ '/home' }}">SK</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::is('home*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ '/home' }}"><i class="fas fa-home" aria-hidden="true"></i><span>Dasbor</span></a>
        </li>
    </ul>
    <ul class="sidebar-menu">
        <li class="menu-header">Manajemen Data</li>
        <li class="{{ Request::is('siswa*') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user" aria-hidden="true"></i><span>Siswa</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('siswa') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ ' /siswa ' }}">Data Siswa</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('guru*') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users" aria-hidden="true"></i><span>Guru</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('guru') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ ' /guru ' }}">Data Guru</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('kelas*') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i><span>Kelas</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('kelas') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ ' /kelas ' }}">Data Kelas</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('mapel*') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book" aria-hidden="true"></i><span>Mata Pelajaran</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('mapel') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ ' /mapel ' }}">Data Mata Pelajaran</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('eskul*') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-basketball-ball    "></i><span>Ekstrakulikuler</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('eskul') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ ' /eskul ' }}">Data Ekstrakulikuler</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="sidebar-menu">
        <li class="menu-header">Manajemen User</li>
        <li class="{{ Request::is('user*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ '/user' }}"><i class="fas fa-user-edit"></i><span>User</span></a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-success btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
