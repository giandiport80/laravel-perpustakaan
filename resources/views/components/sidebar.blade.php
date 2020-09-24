<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <span class="mdi mdi-library-books mdi-24px text-white"></span>
                <span class="brand-name">Libary 7</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="@if(request()->is('home')) active @endif">
                    <a class="sidenav-item-link" href="{{ route('home') }}">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Master Data</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            @if(auth()->user()->role === 'admin')
                            <li @if(request()->is('kategori')) class="active" @endif>
                                <a class="sidenav-item-link" href="{{ route('kategori.index') }}">
                                    <span class="nav-text">Kategori</span>
                                </a>
                            </li>
                            @endif

                            <li @if(request()->is('buku')) class="active" @endif>
                                <a class="sidenav-item-link" href="{{ route('buku.index') }}">
                                    <span class="nav-text">Buku</span>
                                </a>
                            </li>

                            <li @if(request()->is('pinjam')) class="active" @endif>
                                <a class="sidenav-item-link" href="{{ route('pinjam.index') }}">
                                    <span class="nav-text">Peminjaman</span>
                                </a>
                            </li>

                            @if(auth()->user()->role === 'admin')
                            <li @if(request()->is('pengembalian')) class="active" @endif>
                                <a class="sidenav-item-link" href="{{ route('pengembalian.index') }}">
                                    <span class="nav-text">Pengembalian</span>
                                </a>
                            </li>
                            @endif

                            @if(auth()->user()->role === 'admin')
                            <li @if(request()->is('anggota')) class="active" @endif>
                                <a class="sidenav-item-link" href="{{ route('anggota.index') }}">
                                    <span class="nav-text">Anggota</span>
                                </a>
                            </li>
                            @endif

                        </div>
                    </ul>
                </li>

                <li class="@if(request()->is('logout')) active @endif">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>

    </div>
</aside>
