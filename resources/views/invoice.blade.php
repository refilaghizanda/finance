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
        <img src="{{ asset('/assets/img/logopelindobig.png') }}" alt="Logo" class="logo">
        <h2 class="title">PT. EDI INDONESIA<br>
            FORMULIR PENGAJUAN UANG MUKA
        </h2>
        <div class="date-container">
            <h4 class="date">
                <table>
                    <tr>
                        <td>Tanggal</td>
                        <td><span class="tanggal-cell">{{ date('d-m-Y') }}</span></td>
                    </tr>
                </table>
            </h4>
        </div>
        <h4 class="no-cek">Bukti Cek No. : </h4>
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

        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
            }

            .container {
                margin: 40px auto;
                width: 90%;
                padding: 20px;
                /* border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            }

            .logo {
                float: right;
                margin-top: 5px;
                display: block;
            }

            .title {
                text-align: center;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
                margin-top: 110px;
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
                padding: 5px;
                width: 100%;
            }


            .no-cek {
                text-align: left;
                margin-bottom: 20px;
            }

            .table {
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
