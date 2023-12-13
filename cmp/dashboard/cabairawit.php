<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Harga Cabai Rawit</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofpX4MP9z/70Xb5p5ElUnQV+p0soN4p4" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- ***************************** Head Starts Here *********************************-->
    <div class="head-cover">
        <header id="menu-jk" class="container-fluid">
            <div class="container">
                <div class="row head-ro">
                    <div class="col-md-3 logo">
                        <img src="assets/images/logo.png" alt="">


                        <a class="d-md-none small-menu" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">

                            <i class="fas d-lg-none  fa-bars"></i>
                        </a>
                    </div>
                    <div id="collapseExample" class="col-md-9  nav">
                        <ul>
                            <li><a href="../">Home</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Harga Cabai Rawit</h2>
            </div>
        </div>
    </div>



    <section class="container-fluid pt-0 about-coo">
        <div class="container">

            <div class="row about-row">
                <div class="col-md-5 about-img">
                    <img src="assets/images/kartun/cabair.png" alt="">
                </div>
                <div class="col-md-6 about-text">
                    <h1>Harga Cabai Rawit Di Wilayah Kota Medan</h1>
                    <p>Cabai rawit merupakan tanaman holtikultura (sayuran) yang buahnya dimanfaatkan untuk keperluan aneka pangan. Cabai rawit digunakan sebagai bumbu dapur, yakni sebagai bahan penyadap berbagai masakan, antara lain sambal, saus, aneka sayur, acar, lalap, asinan dan produk-produk makanan kaleng.</p>
                    <div class="about-featur">
                        <?php

                        $varFile3 = "../integrasi/commoditys_month_old.json";
                        $dataJSON = file_get_contents($varFile3);

                        $data3 = json_decode($dataJSON, true);

                        //echo "<pre>";
                        //print_r($data3);
                        //echo "</pre>";

                        ?> <!-- Untuk menampilkan isi data JSON -->

                        <table id="tabelbawah" class="table nowrap" style="width:100%; font-size:small">
                            <p>Harga di:
                                <?= $data3['districts'] ?><br>
                                Periode:
                                <?= $data3['month'] ?>
                            </p>
                            <thead>
                                <tr>
                                    <td>
                                        <?= $data3['header']['0'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['1'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['2'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['3'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['4'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['5'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['6'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['7'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['8'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['9'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['10'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['11'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['12'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['13'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['14'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['15'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['16'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['17'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['18'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['19'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['20'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['21'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['22'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['23'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['24'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['25'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['26'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['27'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['28'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['29'] ?>
                                    </td>
                                    <td>
                                        <?= $data3['header']['30'] ?>
                                    </td>
                                </tr>
                            </thead>

                            <?php for ($i = 28; $i < 29; $i++) : ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $data3['table'][$i]['00'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['01'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['02'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['03'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['04'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['05'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['06'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['07'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['08'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['09'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['10'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['11'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['12'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['13'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['14'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['15'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['16'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['17'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['18'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['19'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['20'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['21'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['22'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['23'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['24'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['25'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['26'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['27'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['28'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['29'] ?>
                                        </td>
                                        <td>Rp.
                                            <?= $data3['table'][$i]['30'] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endfor ?>

                        </table>
                        <p style="font-style: italic; font-size: 12px;"> *Data di atas diambil dari <a href="https://hargapangan.sumutprov.go.id/tabel-harga" style="text-decoration: none;" target="_blank">website harga pangan Sumatera Utara</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--********************************* Footer Starts Here ********************************************-->


    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-3 about">
                    <h2>About Us</h2>
                    <p>PKM Riset Eksakta Pendanaan 2023</p>

                    <div class="foot-address">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="addet">
                            STMIK Pelita Nusantara
                        </div>
                    </div>
                    <div class="foot-address">
                        <div class="icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="addet">
                            e-mail: pkmriseteksakta_pn@gmail.com<br>
                            IG : pkmre_pelitanusantara
                        </div>
                    </div>
                    <div class="foot-address">
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="addet">
                            +62 877-7681-1315 <br>
                        </div>
                    </div>
                </div>
            </div>
    </footer>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
    new DataTable('#tabelbawah', {

        scrollX: true

    });
</script>

</html>