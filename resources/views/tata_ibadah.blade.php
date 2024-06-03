<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Ibadah HKBP Cengkareng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            margin: 30px;
        }

        table{
            border: 3px solid #000000;

        }

        body {
            border: 3px solid #000000;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .content-frame {
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .title-frame {
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        td {
            font-size: medium;
        }

        .nomor {
            font-weight: 500;
            text-align: center;
            width: 3%;
        }

        .colon {
            font-weight: bold;
            text-align: center;
            width: 2%;
        }

        .content {
            text-align: left;
            width: 30%;
        }

        .title {
            text-align: left;
            width: 20%;
            font-weight: 500;
        }

        /* Ganti warna background secara bergantian */
        .table tbody tr:nth-child(even) {
            background-color: #ececec;
        }

        th, td {
        padding: 10px;
        border-bottom: 2px solid black; /* Mengatur ketebalan garis bawah */
        border-top: 2px solid black; /* Mengatur ketebalan garis atas */
        border-left: 2px solid black; /* Mengatur ketebalan garis kiri */
        border-right: 2px solid black; /* Mengatur ketebalan garis kanan */
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="title-frame">
            <h1 class="text-center">Tata Ibadah HKBP Parparean</h1>
            <h2 class="text-center">{{$tata_ibadah->ibadah->nama_ibadah}}</h2>
            <h3 class="text-center">HKBP Parparean Jl. Raja Sipakko Porsea</h3>
            <p class="text-center">Minggu, {{$tata_ibadah->ibadah->tanggal_ibadah}}</p>
        </div>
        <div class="content-frame">

            <table class="table table-sm table-bordered">

                <tbody>
                    <tr>
                        <td class="nomor">01</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu1}}</td>
                        <td class="nomor">10</td>
                        <td class="title">Mangh. hap</td>
                        <td class="colon">:</td>
                        <td class="content">Agenda</td>
                    </tr>
                    <tr>
                        <td class="nomor">02</td>
                        <td class="title">Votum</td>
                        <td class="colon">:</td>
                        <td class="content">Agenda</td>
                        <td class="nomor">11</td>
                        <td class="title">Koor</td>
                        <td class="colon">:</td>
                        <td>Pagi: {{$tata_ibadah->koor1}} <br> Siang: {{$tata_ibadah->koor2}} </td>
                    </tr>
                    <tr>
                        <td class="nomor">03</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu2}}</td>
                        <td class="nomor">12</td>
                        <td class="title">Tingting</td>
                        <td class="colon">:</td>
                        <td class="content">Parhalado</td>
                    </tr>
                    <tr>
                        <td class="nomor">04</td>
                        <td class="title">Patik</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->patik}}</td>
                        <td class="nomor">13</td>
                        <td class="title">Koor</td>
                        <td class="colon">:</td>
                        <td class="content">Pagi: {{$tata_ibadah->koor3}} <br> Siang: {{$tata_ibadah->koor4}} </td>
                    </tr>
                    <tr>
                        <td class="nomor">05</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu3}}</td>
                        <td class="nomor">14</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu4}}</td>
                    </tr>
                    <tr>
                        <td class="nomor">06</td>
                        <td class="title">Manopoti Dosa</td>
                        <td class="colon">:</td>
                        <td class="content">Agenda</td>
                        <td class="nomor">15</td>
                        <td class="title">Jamita</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->jamita}}</td>
                    </tr>
                    <tr>
                        <td class="nomor">07</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu5}}</td>
                        <td class="nomor">16</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu6}}</td>
                    </tr>
                    <tr>
                        <td class="nomor">08</td>
                        <td class="title">Epistel</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->epistel}}</td>
                        <td class="nomor">17</td>
                        <td class="title">Ende Pelean</td>
                        <td class="colon">:</td>
                        <td class="content">BE.102:1.. &ensp; BL.407</td>
                    </tr>
                    <tr>
                        <td class="nomor">09</td>
                        <td class="title">Marende</td>
                        <td class="colon">:</td>
                        <td class="content">{{$tata_ibadah->lagu7}}</td>
                        <td class="nomor">18</td>
                        <td class="title">Tangiang Panutup</td>
                        <td class="colon">:</td>
                        <td class="content">Pandita</td>
                    </tr>
                    
                    <!-- Tambahkan 11 baris lagi sesuai kebutuhan -->
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>