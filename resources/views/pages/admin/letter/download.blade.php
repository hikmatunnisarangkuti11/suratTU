<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #receipt {
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin: 30px auto 0 auto;
            width: 500px;
            background: #fff;
            height: 800px;
        }

        #header {

            display: flex;
            align-items: flex-start;
            /* flex-direction: column;  */
        }

        img {
            width: 120px;
            margin-right: 20px;
            /* Menyesuaikan jarak antara gambar dan teks */
        }

        #left-column {
            flex: 1;
        }

        #right-column {
            flex: 1;
        }

        #left-column h2 {
            margin-top: 0;
            margin-bottom: 10px;
            border-bottom: 3px solid black;
            padding-bottom: 5px;
        }

        #left-column p {
            margin: 0;
        }

        #right-column p {
            margin: 5px;
            text-align: right;

        }

        hr {
            border-bottom: 3px solid black;
            padding-bottom: 5px;

        }
    </style>
</head>

<body>
    <div id="receipt">
        <div id="header">
            <img src="img/wikrama-logo.png" alt="logo">
            <div id="left-column">
                <h2 style="margin-top: 15px;">SMK WIKRAMA BOGOR</h2>
                <p>Bisnis dan Manajemen<br>Teknologi Informasi dan Komunikasi<br>Pariwisata</p>
            </div>
            <div id="right-column" style="margin-top: 15px; margin-right: 10px;">
                <p>Jl. Raya Wangun Kel. Sindangsari Bogor</p>
                <p>Telp/Faks:(0251)8242411</p>
                <p>e-mail: prohumasi@smkwikrama.sch.id</p>
                <p>website: www.smkwikrama.sch.id</p>
            </div>
        </div>
        <div class="content">
            <hr>
            <p><strong>Tanggal Keluar:</strong> {{ $item->letter_date }}</p>
            <p><strong>No: </strong> {{$item->letter_no }}</p>
            <p><strong>Klasifikasi Surat:</strong> {{ $item->letter_type }}</p>
            <p></p>
            <br>
            <br>
            <br>
            {{-- <p><strong>Penerima Surat:</strong>
                @foreach ($letterType->recipientsUsers as $recipient)
                <li>{{ $recipient->name }}</li>
                @endforeach
            </p> --}}
            {{-- <p><strong>Notulis:</strong>@foreach ($letterType->recipientsUsers as $recipient)
            <li>{{ $recipient->name }}</li>
            @endforeach</p> --}}
            <br>
            <br>
            <br>
            <p>Hormat Kami,</p>
            <p>Kepala SMK WIKRAMA Bogor</p>
            <br>
            <br>
            <br>
            <p>(..........................)</p>
        </div>
    </div>
</body>

</html>