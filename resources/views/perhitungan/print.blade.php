<!DOCTYPE html>
<html lang="en">

<head>

    <title>Laporan Perhitungan {{ request()->get('tahun', date('Y')) }}</title>


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('template') }}/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('template') }}/plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('template') }}/css/style.css" />

    <!-- FAVICON -->
    <link href="{{ asset('template') }}/images/favicon.png" rel="shortcut icon" />
    <script src="{{ asset('template') }}/plugins/nprogress/nprogress.js"></script>
</head>

<body style="background-color: #FFF !important">

    <h3>Laporan Perhitungan {{ request()->get('tahun', date('Y')) }}</h3>
    <br>
    <table class="table table-hover table-compact table-bordered">
        <thead>
            <tr style="font-size: 12px">
                <th>Rangking</th>
                <th>Pegawai</th>
                <th>Preferensi(V)</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($pegawai->sortByDesc('preferensi') as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->preferensi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- JQuery JS --}}
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/plugins/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('template') }}/js/custom.js"></script>
</body>

</html>
