
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPKHARAN</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="/">home</a>
            <a href="/tentang">tentang</a>
           <!-- <a href="/profile">profile</a> -->
            <a href="/datamengaji" class="menuaktif">data mengaji</a>
            <a href="/rekap">rekap</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

    </header>

    <!-- header section ends -->

    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

    <!-- section starts  -->

    <section class="datamengaji" id="data">

        <h1 class="heading"> <span> data </span> mengaji </h1>
        <div class="kotak">
            <form action="{{ route('data-mengaji.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- rekaman -->
                <div class="inputan">
                    <label for="rekaman">Input Rekaman</label><br>
                    <input type="file" name="rekaman" id="rekaman" accept="audio/*">
                </div>
                <!-- juz -->
                <div class="inputan">
                    <label for="juz">Juz</label><br>
                    <input type="text" name="juz" id="juz">
                </div>
                <!-- surah -->
                <div class="inputan">
                    <label for="surah">Surah</label><br>
                    <input type="text" name="surah" id="surah">
                </div>
                <!-- ayat -->
                <div class="inputan">
                    <label for="ayat">Ayat</label><br>
                    <input type="text" name="ayat" id="ayat">
                </div>
                <input type="submit" name="rekap" value="Simpan" class="tbl tsimpan">
            </form>
        </div>

    </section>

    <!-- section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <p> Selalu ikuti perkembangan informasi mengenai Program Khatam Al-Quran Universitas Jambi melalui website
                dan akun sosial media instagram </p>
            <a href="https://jami-assalam.unja.ac.id/" class="fas fa-globe">&nbsp; jami-assalam.unja.ac.id</a>
            <a href="https://www.instagram.com/jami_assalam_pkq_unja/" class="fab fa-instagram">&nbsp; pkq_unja</a>
        </div>

    </section>

    <!-- footer section ends -->