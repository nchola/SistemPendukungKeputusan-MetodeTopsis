<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <img src="{{ asset('template') }}/images/logo.png" alt="Mono">
                <span class="brand-name">SPMFI</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                @if (session('auth')->role == 'Kepala Manajer')
                    <li>
                        <a class="sidenav-item-link" href="{{ route('users.index') }}">
                            <i class="mdi mdi-account"></i>
                            <span class="nav-text">Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('pegawai.index') }}">
                            <i class="mdi mdi-account-group"></i>
                            <span class="nav-text">Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('perhitungan.index') }}">
                            <i class="mdi mdi-calculator"></i>
                            <span class="nav-text">Perhitungan</span>
                        </a>
                    </li>
                @elseif(session('auth')->role == 'HRD')
                    <li>
                        <a class="sidenav-item-link" href="{{ route('kriteria.index') }}">
                            <i class="mdi mdi-tag"></i>
                            <span class="nav-text">Kriteria</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('sub_kriteria.index') }}">
                            <i class="mdi mdi-tag-multiple"></i>
                            <span class="nav-text">Sub Kriteria</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('pegawai.index') }}">
                            <i class="mdi mdi-account-group"></i>
                            <span class="nav-text">Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('penilaian.index') }}">
                            <i class="mdi mdi-star"></i>
                            <span class="nav-text">Penilaian</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('perhitungan.index') }}">
                            <i class="mdi mdi-calculator"></i>
                            <span class="nav-text">Perhitungan</span>
                        </a>
                    </li>
                @elseif(session('auth')->role == 'Pegawai')
                    <li>
                        <a class="sidenav-item-link" href="{{ route('perhitungan.index') }}">
                            <i class="mdi mdi-calculator"></i>
                            <span class="nav-text">Perhitungan</span>
                        </a>
                    </li>
                @endif
                {{-- <li>
                    <a class="sidenav-item-link" href="{{ route('users.index') }}">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Rangking</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</aside>
