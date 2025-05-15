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
    <title> </title>
</head>

<body>
    <div class="container" id="download-content">
        <img src="{{ asset('/assets/img/logopelindobig.png') }}" alt="Logo" class="logo">
        <h2 class="title">PT. EDI INDONESIA<br>
            FORMULIR PENGELUARAN BANK
        </h2>
        <table class="jumlah">
            <thead>
                <tr>
                    <td>Tanggal</td>
                    <th>{{ date('d-m-Y') }}</th>
                </tr>
            </thead>
        </table>
        
        <p class="no-cek">Bukti Cek No. : </p>
        <h4 class="text-cek">Pengeluaran Untuk Keperluan / Kegiatan :</h4>

        <table class="list">
            <thead>
                <tr>
                    <td>1 </td>
                    <th><span class="list-cell1"></span></th>
                    <th><span class="list-cell2">Rp. </span></th>
                </tr>
                <tr>
                    <td><br>2 </td>
                    <th><span class="list-cell1"><br></span></th>
                    <th><span class="list-cell2"><br>Rp. </span></th>
                </tr>
                <tr>
                    <td><br>3 </td>
                    <th><span class="list-cell1"><br></span></th>
                    <th><span class="list-cell2"><br>Rp. </span></th>
                </tr>
                <tr>
                    <td><br>4 </td>
                    <th><span class="list-cell1"><br></span></th>
                    <th><span class="list-cell2"><br>Rp. </span></th>
                </tr>
                <tr>
                    <td><br>5 </td>
                    <th><span class="list-cell1"><br></span></th>
                    <th><span class="list-cell2"><br>Rp. </span></th>
                </tr>
                <tr>
                    <td><br>6 </td>
                    <th><span class="list-cell1"><br></span></th>
                    <th><span class="list-cell2"><br>Rp. </span></th>
                </tr>
            </thead>
        </table>

        <table class="jumlah">
            <thead>
                <tr>
                    <td>JUMLAH</td>
                    <th></th>
                </tr>
            </thead>
        </table>

        <table class="terbilang">
            <thead>
                <tr>
                    <th><br>Terbilang : </th>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>PLT Kadiv Finance & Risk Management</th>
                    <th>Kadep Finance & Budgeting</th>
                    <th>Kepala Divisi</th>
                    <th>Pemohon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><br><br><br><br>Dine Maria Katmawati</td>
                    <td><br><br><br><br>Dedy Yuhendra</td>
                    <td><br><br><br><br>Eri Setiawan</td>
                    <td><br><br><br><br>Imam Ashari</td>
                </tr>
            </tbody>
        </table>

        <h4 class="text-setuju">Menyetujui</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>Direktur Utama</th>
                    <th>Direktur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><br><br><br><br>E. Helmi Wantono</td>
                    <td><br><br><br><br>Urip Nurhayat</td>
                </tr>
            </tbody>
        </table>

        <table class="last">
            <thead>
                <tr>
                    <th>Surabaya,<br>Penerima Uang/Cek</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><br><br><br><br>Finna Yuliana</td>
                    <td><br><br><br><br></td>
                </tr>
            </tbody>
        </table>

        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
            }

            .container {
                margin: auto;
                width: 90%;
                padding: 20px;
                /* border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            }

            .logo {
                float: right;
                display: block;
            }

            .title {
                text-align: center;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 5px;
                margin-top: 90px;
            }

            .date-container {
                display: flex;
                justify-content: flex-end;
            }

            .date td {
                text-align: right;
                margin-bottom: 20px;
                /* border-collapse: collapse;
                border: 1px solid; */
                padding: 5px;
            }

            .tanggal-cell {
                text-align: right;
                margin-bottom: 20px;
                border-collapse: collapse;
                border: 1px solid;
                padding: 7px;
                width: 100%;
            }


            .no-cek {
                text-align: left;
                margin-bottom: 20px;
            }

            .jumlah {
                margin-top: 20px;
                margin-bottom: 20px;
                width: 30%;
                border-collapse: collapse;
                border: 1px solid;
                text-align: left;
                float: right;
            }

            .list-container {
                text-align: right;
            }

            .terbilang {
                margin-top: 20px;
                width: 100%;
                border-collapse: collapse;
                border: 1px solid;
                text-align: left;
            }

            table.list {
                border-bottom: 1px solid;
            }

            table.list th,
            table.list td {
                border-bottom: 1px solid #000000;
                /* adjust the border style and color to your liking */
                padding: 8px;
                /* add some padding to make the cells more readable */
            }

            .list {
                margin-top: 20px;
                width: 100%;
                border-collapse: collapse;;
                text-align: ;
            }

            .list th {
                text align: left;
                border-bottom: 1px solid #000000;
            }

            th span.list-cell1 {
                font-weight: normal;
                border-bottom: none;
            }

            th span.list-cell2 {
                font-weight: normal;
                text-align: left;
                float: left;
            }

            .text-setuju {
                text-align: center;
            }

            .table {
                margin-top: 20px;
                width: 100%;
                border-collapse: collapse;
                border: 1px solid;
            }

            .table th,
            .table td {
                border: 1px solid;
                padding: 10px;
                text-align: center;
                width: 0%;
            }

            .table th {
                background-color: #f0f0f0;
            }

            .last {
                margin-top: 20px;
                width: 100%;
                border-collapse: collapse;
                border: 1px solid;
            }

            .last th,
            .last td {
                border: 1px solid;
                padding: 10px;
                text-align: center;
                width: 0%;
            }

            .last th {
                background-color: #f0f0f0;
                text-align: left;
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
