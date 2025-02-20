<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export PDF - Laporan Transaksi</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Laporan Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>No Polisi</th>
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>Tgl Pesan</th>
                <th>Total</th>
                <th>Lama</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaksi as $data)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $data->mobil->nopolisi }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->tgl_pesan }}</td>
                    <td class="text-right">{{ number_format($data->total, 0, ',', '.') }}</td>
                    <td>{{ $data->lama }} hari</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center fw-bold">Data Laporan Belum Ada!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
