<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPKHARAN</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="/" class="menuaktif" >Home</a>
            <a href="/tentang">tentang</a>
           <!-- <a href="/profile">profil</a> -->
            <a href="/datamengaji">data mengaji</a>
            <a href="/rekap">rekap</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    </br>
    </br>

    <section class="home" id="home">

        <div class="content">
            <h3>program khatam al - qur'an</h3>
            <p>UNIVERSITAS JAMBI</p>
            <a href="{{ route('login') }}" class="btn">MASUK</a>

        </div>

    </section>

    <!-- home section ends -->

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
</body>

</html>