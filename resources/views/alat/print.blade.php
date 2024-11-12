<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alat</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
        }

        .kop-surat {
            text-align: center;
            margin-bottom: 20px;
        }

        .kop-surat img {
            width: 100px;
            height: auto;
            float: left;
            margin-right: 20px;
        }

        .kop-surat .header-text {
            display: inline-block;
            text-align: center;
            width: calc(100% - 140px);
        }

        .kop-surat .header-text h1 {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }

        .kop-surat .header-text p {
            font-size: 14px;
            margin: 5px 0;
            line-height: 1.2;
        }

        .divider {
            margin-top: 10px;
            margin-bottom: 20px;
            border: none;
            border-top: 2px solid black;
            border-bottom: 1px solid black;
            height: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        td:first-child {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="kop-surat">
        <img src="{{ public_path('img/logo.webp') }}" alt="Logo RSUD Bengkalis">
        <div class="header-text">
            <p>KEMENTERIAN KESEHATAN REPUBLIK INDONESIA</p>
            <h1>Rumah Sakit Umum Daerah "RSUD" Bengkalis</h1>
            <p>Alamat: Jl. Kelapapati Tengah No.90, Klp. Pati, Kec. Bengkalis, Kabupaten Bengkalis, Riau 28711</p>
            <p>Telepon: (+62766) 24566, Fax: (+62766) 800 1000</p>
        </div>
        <div style="clear: both;"></div>
        <hr class="divider">
    </div>

    <h3 style="text-align: center;">Daftar Alat dan Barang</h3>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Jenis Alat</th>
                <th>Tanggal Pengadaan</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alats as $alat)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $alat->jenis_alat }}</td>
                    <td>{{ $alat->tanggal_pengadaan }}</td>
                    <td>{{ $alat->merk }}</td>
                    <td>{{ $alat->harga }}</td>
                    <td>{{ $alat->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
