<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/ediibaru.png">
    <link rel="icon" type="image/png" href="../assets/img/ediibaru.png">
    <title>
        FINANCE-EDII
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>

<body>
    <div class="container" id="download-content">
        <img src="{{ asset('/assets/img/logopelindo.png') }}" alt="Logo" class="logo">
        <h2 class="title">PT. EDI INDONESIA<br>
            FORMULIR PENGAJUAN UANG MUKA
        </h2>
        <h4 class="date">Tanggal: {{ date('d-m-Y') }}</h4>
        <h4 class="terbilang">Jumlah uang yang dikeluarkan sebesar Rp.
            ________________________________________________________________</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No Bukti</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Kegiatan</th>
                    <th>Nominal</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($data as $kaskecil)
                    <tr>
                        <td>{{ $kaskecil->no_bukti }}</td>
                        <td>{{ date('d-m-Y', strtotime($kaskecil->tanggal)) }}</td>
                        <td>{{ $kaskecil->kategori }}</td>
                        <td>{{ $kaskecil->keterangan }}</td>
                        <td>Rp {{ number_format($kaskecil->nominal_transaksi, 0, '.', '.') }}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
            }

            .container {
                width: 60%;
                margin: 40px auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .logo {
                float: right;
                margin-top: 10px;
                display: block;
            }

            .title {
                text-align: center;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 30px;
                margin-top: 80px;
            }

            .date {
                text-align: right;
                margin-bottom: 20px;
            }

            .terbilang {
                text-align: center;
                margin-bottom: 20px;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
            }

            .table th,
            .table td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }

            .table th {
                background-color: #f0f0f0;
            }
        </style>
    </div>
    {{-- <button id="download-button">Download Content</button>
    <script>
        const downloadContentDiv = document.getElementById('download-content');
        const contentToDownload = downloadContentDiv.innerHTML;
        const blob = new Blob([contentToDownload], {
            type: 'pdf'
        });
        const downloadLink = document.createElement('a');
        downloadLink.href = URL.createObjectURL(blob);
        downloadLink.download = 'downloaded-content.pdf'; // Set the desired filename
        const downloadButton = document.getElementById('download-button');
        downloadButton.addEventListener('click', () => {
            downloadLink.click();
        });
    </script> --}}
</body>

</html>
