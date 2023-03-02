<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li class="side-wrap">
            <ul class="collapsible">
                <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                <li>
                    <a href="/dashboard" class="collapsible-header"><i class="material-icons">dashboard</i><span
                            class="hide-menu"> Dashboard</span></a>
                </li>
                @if (auth()->user()->role != 'tamu')
                    <li>
                        <a href="/printBeritaAcara" class="collapsible-header"><i class="material-icons">print</i><span
                                class="hide-menu"> Berita Acara</span></a>
                        {{-- <div class="collapsible-body">
                                <ul>
                                    <li><a href="/printBeritaAcara"><i class="material-icons">adjust</i><span class="hide-menu">Berita Acara</span></a></li>
                                    <!-- <li><a href="/exportAbsen"><i class="material-icons">adjust</i><span class="hide-menu">Data Siswa</span></a></li> -->
                                    <li><a href="/siswaSemua"><i class="material-icons">adjust</i><span class="hide-menu">Data Siswa</span></a></li>
                                </ul>
                            </div> --}}
                    </li>
                    <li>
                        <a href="/absen" class="collapsible-header"><i class="material-icons">timer</i><span
                                class="hide-menu"> Siapkan Ruang</span></a>
                    </li>
                    <li>
                        <a href="/siswaSemua" class="collapsible-header"><i class="material-icons">class</i><span
                                class="hide-menu"> Absensi </span></a>
                    </li>
                    @if (auth()->user()->role == 'admin')
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i
                                    class="material-icons">class</i><span class="hide-menu"> Data Master</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/siswa" class="collapsible-header"><i
                                                class="material-icons">adjust</i><span class="hide-menu"> Siswa
                                            </span></a></li>
                                    <li><a href="/guru" class="collapsible-header"><i
                                                class="material-icons">adjust</i><span class="hide-menu"> Guru
                                            </span></a></li>
                                    <li><a href="/jurusan" class="collapsible-header"><i
                                                class="material-icons">adjust</i><span class="hide-menu"> Jurusan
                                            </span></a></li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    @if (auth()->user()->role == 'admin')
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i
                                    class="material-icons">s</i><span class="hide-menu"> Setting</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="/lainnya"><i class="material-icons">adjust</i><span
                                                class="hide-menu">Sett Link</span></a></li>
                                    <li><a href="/ruangan"><i class="material-icons">adjust</i><span
                                                class="hide-menu">Ruangan</span></a></li>
                                    <li><a href="/mapel"><i class="material-icons">adjust</i><span
                                                class="hide-menu">Mapel</span></a></li>
                                    <li><a href="/waktu"><i class="material-icons">adjust</i><span
                                                class="hide-menu">Waktu</span></a></li>
                                </ul>
                            </div>
                        </li>
                    @endif
                @endif

            </ul>
        </li>
    </ul>
</aside>
