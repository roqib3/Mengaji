
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
            <a href="/datamengaji">data mengaji</a>
            <a href="/rekap" class="menuaktif">rekap</a>
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

    <!-- rekap section start -->
    <section>

        <!-- rekap section starts  -->
        <section class="rekap" id="rekap">

            <h1 class="heading"> <span> rekap </span> mengaji </h1>
            <div class="kotak tabelrekap">
                <table>
                    <tr>
                        <th>File rekaman</th>
                        <th>Juz</th>
                        <th>Surah</th>
                        <th>Ayat</th>
                        <th>Aksi</th>
                    </tr>
                   
                    <?php if (!empty($data)) {
                        foreach ($data as $key) { ?>
                            <tr>
                                <td>
                                    <audio controls>
                                        <source src="publik/<?= $key['nim'] ?>/<?= $key['rekaman'] ?>" type="audio/mpeg">
                                    </audio>
                                </td>
                                <td><?= $key['juz'] ?></td>
                                <td><?= $key['surah'] ?></td>
                                <td><?= $key['ayat'] ?></td>
                                <td>
                                    <a href="editdatamengaji.php?id=<?= $key['id_ngaji'] ?>" class="tbl tedit">Edit</a>
                                    <a href="editdatamengaji.php?hapus=true&id=<?= $key['id_ngaji'] ?>" class="tbl thapus">Hapus</a>
                                </td>
                            </tr>
                        <?php }}else{ ?>
                            <tr>
                                <td colspan="5"> Belum ada rekaman</td>
                            </tr>
                    <?php } ?>

                </tabLe>
            </div>

        </section>

        <!-- rekap section ends -->

        <!-- footer section starts  -->

        <section class="footer">

            <div class="share">
                <p> Selalu ikuti perkembangan informasi mengenai Program Khatam Al-Quran Universitas Jambi melalui
                    website dan akun sosial media instagram </p>
                <a href="https://jami-assalam.unja.ac.id/" class="fas fa-globe">&nbsp; jami-assalam.unja.ac.id</a>
                <a href="https://www.instagram.com/jami_assalam_pkq_unja/" class="fab fa-instagram">&nbsp; pkq_unja</a>
            </div>

        </section>

        <!-- footer section ends -->