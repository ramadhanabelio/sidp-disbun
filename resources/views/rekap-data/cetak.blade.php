<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Survey Pemilik Kebun</title>
    <link href="{{ public_path('assets/img/favicon.png') }}" rel="icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .container {
            margin: 0 auto;
            width: 90%;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 15%;
            margin-bottom: 10px;
        }

        .header h4,
        .header h5 {
            margin: 0;
            line-height: 1.5;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid black;
            padding: 5px;
        }

        .table th {
            text-align: left;
            width: 50%;
        }

        .table-header {
            background-color: #d1e7dd;
            text-align: center;
            font-weight: bold;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/img/logo.png') }}" alt="Logo Bengkalis">
            <h4>DINAS PERKEBUNAN</h4>
            <h4>KABUPATEN BENGKALIS</h4> <br>
            <h4>PENDATAAN</h4>
            <h4>SURVEY PERKEBUNAN RAKYAT</h4>
            <h4>TAHUN 2024</h4>
        </div>

        <!-- Header Keterangan Pemilik Kebun -->
        <div class="table-header">KETERANGAN PEMILIK KEBUN</div>

        <table class="table">
            {{-- <tr>
                <th>Nomor Urut Responden</th>
                <td>{{ $pemilikKebun->nomor_urut }}</td>
            </tr> --}}
            <tr>
                <th>Nomor KTP</th>
                <td>{{ $pemilikKebun->nomor_ktp }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $pemilikKebun->nama }}</td>
            </tr>
            <tr>
                <th>Tempat / Tanggal Lahir</th>
                <td>{{ $pemilikKebun->tempat_tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Umur</th>
                <td>{{ $pemilikKebun->umur }} tahun</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $pemilikKebun->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pemilikKebun->alamat }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{ $pemilikKebun->provinsi }}</td>
            </tr>
            <tr>
                <th>Kabupaten/Kota</th>
                <td>{{ $pemilikKebun->kabupaten_kota }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>{{ $pemilikKebun->kecamatan }}</td>
            </tr>
            <tr>
                <th>Desa/Kelurahan</th>
                <td>{{ $pemilikKebun->desa_kelurahan }}</td>
            </tr>
            <tr>
                <th>Status dalam rumah tangga</th>
                <td>{{ $pemilikKebun->status_dalam_rumah_tangga }}</td>
            </tr>
            <tr>
                <th>Jumlah anggota rumah tangga</th>
                <td>{{ $pemilikKebun->jumlah_anggota_rumah_tangga }}</td>
            </tr>
            <tr>
                <th>Ijazah tertinggi yang dimiliki</th>
                <td>{{ $pemilikKebun->ijazah_tertinggi }}</td>
            </tr>
            <tr>
                <th>Pekerjaan selain memiliki kebun</th>
                <td>{{ $pemilikKebun->pekerjaan }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
