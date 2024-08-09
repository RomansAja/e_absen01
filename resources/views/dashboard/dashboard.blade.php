@extends('layouts.presensi')
@section('content')
    <style>
        .logout {
            position: absolute;
            color: black;
            font-size: 30px;
            text-decoration: none;
            right: 8px;
        }

        .logout:hover {
            color: blue;
        }

        #icontxt:hover {
            color: blue;
        }
    </style>
    <div class="section" id="user-section">
        <a href="/proseslogout" class="logout">
            <ion-icon name="exit-outline"></ion-icon>
        </a>
        <div id="user-detail">
            <div class="avatar">
                @if (!empty(Auth::guard('karyawan')->user()->foto))
                    @php
                        $path = Storage::url('uploads/karyawan/' . Auth::guard('karyawan')->user()->foto);
                    @endphp
                    <img src="{{ url($path) }}" alt="avatar" class="imaged w64 rounded" style="height:60px">
                @else
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
                @endif
            </div>
            <div id="user-info">
                <h3 id="user-name">{{ Auth::guard('karyawan')->user()->nama_lengkap }}</h3>
                <span id="user-role">{{ Auth::guard('karyawan')->user()->jabatan }}</span>
                <span id="user-role">({{ $cabang->nama_cabang }})</span>
                <p style="margin-top: 15px">
                    <span id="user-role">({{ $departemen->nama_dept }})</span>
                </p>
            </div>
        </div>
    </div>
    <div class="section" id="menu-section">
        <div class="card" id="cardltr">
            <div class="card-body text-center">
                <div class="list-menu">
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="/editprofile" class="warning" id="icontxt" style="font-size: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
                                </svg>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Profil</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="/presensi/izin" class="warning" id="icontxt" style="font-size: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 21h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4.5" />
                                    <path d="M16 3v4" />
                                    <path d="M8 3v4" />
                                    <path d="M4 11h16" />
                                    <path d="M19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 22a2 2 0 0 0 -2 -2h-2a2 2 0 0 0 -2 2" />
                                </svg>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Cuti</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="/presensi/histori" class="warning" id="icontxt" style="font-size: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M9 12h6" />
                                    <path d="M9 16h6" />
                                </svg>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Histori</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="" class="warning" style="font-size: 40px;" id="icontxt">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="menu-name">
                            Lokasi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-2" id="presence-section">
        <div class="todaypresence">
            <div class="row">
                <div class="col-6">
                    <div class="card" id="masuk">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    @if ($presensihariini != null)
                                        @if ($presensihariini->foto_in != null)
                                            @php
                                                $path = Storage::url('uploads/absensi/' . $presensihariini->foto_in);
                                            @endphp
                                            <img src="{{ url($path) }}" alt="" class="imaged w48">
                                        @else
                                            <ion-icon name="camera"></ion-icon>
                                        @endif
                                    @else
                                        <ion-icon name="camera"></ion-icon>
                                    @endif
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Masuk</h4>
                                    <span>{{ $presensihariini != null ? $presensihariini->jam_in : 'Belum Absen' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" id="pulang">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    @if ($presensihariini != null && $presensihariini->jam_out != null)
                                        @if ($presensihariini->foto_out != null)
                                            @php
                                                $path = Storage::url('uploads/absensi/' . $presensihariini->foto_out);
                                            @endphp
                                            <img src="{{ url($path) }}" alt="" class="imaged w48">
                                        @else
                                            <ion-icon name="camera"></ion-icon>
                                        @endif
                                    @else
                                        <ion-icon name="camera"></ion-icon>
                                    @endif
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Pulang</h4>
                                    <span>{{ $presensihariini != null && $presensihariini->jam_out != null ? $presensihariini->jam_out : 'Belum Absen' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="rekappresensi">
            <h3>Rekap Presensi Bulan {{ $namabulan[$bulanini] }} Tahun {{ $tahunini }}</h3>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center" style="padding: 12px 12px !important; line-height:0.8rem">
                            <span class="badge bg-danger"
                                style="position: absolute; top:3px; right:10px; font-size:0.6rem; z-index:999">{{ $rekappresensi->jmlhadir }}</span>
                            <ion-icon name="checkmark-done-outline" style="font-size: 1.6rem;"
                                class="text-primary mb-1">></ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Hadir</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center" style="padding: 12px 12px !important; line-height:0.8rem">
                            <span class="badge bg-danger"
                                style="position: absolute; top:3px; right:10px; font-size:0.6rem; z-index:999">
                                {{ $rekappresensi->jmlizin }}
                            </span>
                            <ion-icon name="newspaper-outline" style="font-size: 1.6rem;"
                                class="text-success mb-1"></ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Izin</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center" style="padding: 12px 12px !important; line-height:0.8rem">
                            <span class="badge bg-danger"
                                style="position: absolute; top:3px; right:10px; font-size:0.6rem; z-index:999">
                                {{ $rekappresensi->jmlsakit }}</span>
                            <ion-icon name="medkit-outline" style="font-size: 1.6rem;"
                                class="text-warning mb-1"></ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Sakit</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center" style="padding: 12px 12px !important; line-height:0.8rem">
                            <span class="badge bg-danger"
                                style="position: absolute; top:3px; right:10px; font-size:0.6rem; z-index:999">
                                {{ $rekappresensi->jmlcuti }}
                            </span>
                            <ion-icon name="calendar-outline" style="font-size: 1.6rem;"
                                class="text-danger mb-1">></ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Cuti</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="presencetab mt-2">
            <div class="tab-pane fade show active" id="pilled" role="tabpanel">
                <ul class="nav nav-tabs style1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            Bulan Ini
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            Leaderboard
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-2" style="margin-bottom:100px;">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <!--
                                                                                                                                                                                                                                                                                                                                <ul class="listview image-listview">
                                                                                                                                                                                                                                                                                                                                    @foreach ($historibulanini as $d)
    @php
        $path = Storage::url('uploads/absensi/' . $d->foto_in);
    @endphp
                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                        <div class="item">
                                                                                                                                                                                                                                                                                                                                            <div class="icon-box bg-primary">
                                                                                                                                                                                                                                                                                                                                                <ion-icon name="finger-print-outline"></ion-icon>
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                            <div class="in">
                                                                                                                                                                                                                                                                                                                                                <div>{{ date('d-m-Y', strtotime($d->tgl_presensi)) }}</div>
                                                                                                                                                                                                                                                                                                                                                <span class="badge badge-success">{{ $d->jam_in }}</span>
                                                                                                                                                                                                                                                                                                                                                <span class="badge badge-danger">{{ $presensihariini != null && $d->jam_out != null ? $d->jam_out : 'Belum Absen' }}</span>
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                    </li>
    @endforeach
                                                                                                                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                                                                                                            -->

                    @foreach ($historibulanini as $d)
                        @if ($d->status == 'h')
                            <div class="card mb-1" style="border : 1px solid blue">
                                <div class="card-body">
                                    <div class="historicontent">
                                        <div class="iconpresensi">
                                            <ion-icon name="finger-print-outline" style="font-size: 48px;"
                                                class="text-success"></ion-icon>
                                        </div>
                                        <div class="datapresensi">
                                            <h3 style="line-height: 3px">{{ $d->nama_jam_kerja }}</h3>
                                            <h4 style="margin:0px !important">
                                                {{ date('d-m-Y', strtotime($d->tgl_presensi)) }}</h4>
                                            <span style="color:green">{{ date('H:i', strtotime($d->jam_masuk)) }} -
                                                {{ date('H:i', strtotime($d->jam_pulang)) }}</span>
                                            <br>
                                            <span>
                                                {!! $d->jam_in != null ? date('H:i', strtotime($d->jam_in)) : '<span class="text-danger">Belum Scan</span>' !!}
                                            </span>
                                            <span>
                                                {!! $d->jam_out != null
                                                    ? '-' . date('H:i', strtotime($d->jam_out))
                                                    : '<span class="text-danger">- Belum Scan</span>' !!}
                                            </span>
                                            <br>
                                            @php
                                                //Jam Ketika dia Absen
                                                $jam_in = date('H:i', strtotime($d->jam_in));

                                                //Jam Jadwal Masuk
                                                $jam_masuk = date('H:i', strtotime($d->jam_masuk));

                                                $jadwal_jam_masuk = $d->tgl_presensi . ' ' . $jam_masuk;
                                                $jam_presensi = $d->tgl_presensi . ' ' . $jam_in;
                                            @endphp
                                            @if ($jam_in > $jam_masuk)
                                                @php
                                                    $jmlterlambat = hitungjamterlambat(
                                                        $jadwal_jam_masuk,
                                                        $jam_presensi,
                                                    );
                                                    $jmlterlambatdesimal = hitungjamterlambatdesimal(
                                                        $jadwal_jam_masuk,
                                                        $jam_presensi,
                                                    );
                                                @endphp
                                                <span class="danger">Terlambat {{ $jmlterlambat }}
                                                    ({{ $jmlterlambatdesimal }} Jam)
                                                </span>
                                            @else
                                                <span style="color:green">Tepat Waktu</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($d->status == 'i')
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="historicontent">
                                        <div class="iconpresensi">
                                            <ion-icon name="document-outline" style="font-size: 48px;"
                                                class="text-warning"></ion-icon>
                                        </div>
                                        <div class="datapresensi">
                                            <h3 style="line-height: 3px">IZIN - {{ $d->kode_izin }}</h3>
                                            <h4 style="margin:0px !important">
                                                {{ date('d-m-Y', strtotime($d->tgl_presensi)) }}</h4>
                                            <span>
                                                {{ $d->keterangan }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($d->status == 's')
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="historicontent">
                                        <div class="iconpresensi">
                                            <ion-icon name="medkit-outline" style="font-size: 48px;"
                                                class="text-primary"></ion-icon>
                                        </div>
                                        <div class="datapresensi">
                                            <h3 style="line-height: 3px">SAKIT - {{ $d->kode_izin }}</h3>
                                            <h4 style="margin:0px !important">
                                                {{ date('d-m-Y', strtotime($d->tgl_presensi)) }}</h4>
                                            <span>
                                                {{ $d->keterangan }}
                                            </span>
                                            <br>
                                            @if (!empty($d->doc_sid))
                                                <span style="color: blue">
                                                    <ion-icon name="document-attach-outline"></ion-icon> SID
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($d->status == 'c')
                            <div class="card mb-1">
                                <div class="card-body">
                                    <div class="historicontent">
                                        <div class="iconpresensi">
                                            <ion-icon name="document-outline" style="font-size: 48px;"
                                                class="text-info"></ion-icon>
                                        </div>
                                        <div class="datapresensi">
                                            <h3 style="line-height: 3px">CUTI - {{ $d->kode_izin }}</h3>
                                            <h4 style="margin:0px !important">
                                                {{ date('d-m-Y', strtotime($d->tgl_presensi)) }}</h4>
                                            <span class="text-info">
                                                {{ $d->nama_cuti }}
                                            </span>
                                            <br>
                                            <span>
                                                {{ $d->keterangan }}
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                    <ul class="listview image-listview">
                        @foreach ($leaderboard as $d)
                            <li>
                                <div class="item">
                                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>
                                            <b>{{ $d->nama_lengkap }}</b><br>
                                            <small class="text-muted">{{ $d->jabatan }}</small>
                                        </div>
                                        <span class="badge {{ $d->jam_in < '07:00' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $d->jam_in }}
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
