<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi - ::.Cloud dataMaPo.::</title>

    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>




</head>

<body class="bg-body-secondary">


    <nav class="navbar navbar-expand-lg shadow p-3 mb-5 bg-body rounded" style="position: sticky; width: 100%; top: 0; z-index: 1000;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../dashboard/assets/images/logo.png" alt="logo cloud" width="40" height="34">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container ">
        <div class="row">
            <div class="col" style="margin-top: 10px; border-radius: 5px;">
                <br>
                <h1 style="font-weight: bold; color: #0dc0a0; font-size: 50px;">INTEGRASI DATA</h1>
                <hr>
                <p>
                    PaaS mengintegrasikan berbagai sistem operasi dan aplikasi pengguna. Komponen perangkat lunak web API secara otomatis memperbarui data antara klien dan server. Langkah akhir platform dihosting pada Cloud Integrator sebagai penyedia layanan profesional mengintegrasikan berbagai aplikasi, data mengintegrasikan berbagai aplikasi, data, dan sistem dengan solusi berbasis cloud.
                </p>

            </div>
            <div class="col">
                <img src="../dashboard/assets/images/blog/b3.png" alt="gambar cloud" style="width: 400px; margin-left:100px">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col" style="margin-top: 30px;">
                <?php

                $varFile = "indonesiaHigh.json";
                $dataJSON = file_get_contents($varFile);

                $data = json_decode($dataJSON, true);
                ?>

                <?php

                $varFile2 = "get-data-list.json";
                $dataJSON = file_get_contents($varFile2);

                $data2 = json_decode($dataJSON, true);
                ?>

                <h5 style="text-align: center; font-size:small">Perbandingan Harga Barang Kebutuhan Pokok Sumatera Utara (Kota Medan)</h5>

                <table id="example" class="table table-striped" style="width:100%; font-size:small">
                    <thead>
                        <tr>
                            <td>Komoditas</td>
                            <td>Satuan</td>
                            <td><?= $data2['data'][0]['date_2'] ?></td>
                            <td><?= $data2['data'][0]['date_1'] ?></td>
                            <td>(%)</td>
                        </tr>
                    </thead>

                    <?php foreach ($data2['data'] as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?= $row['commodity_name'] ?></td>
                                <td><?= $row['measurement'] ?></td>
                                <td>Rp.<?= $row['price_2'] ?></td>
                                <td>Rp.<?= $row['price_1'] ?></td>
                                <td><?= $row['percent_change']  ?>%</td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>


                </table>
                <p style="font-style: italic; font-size: 12px;"> *Data di atas diambil dari <a href="https://sp2kp.kemendag.go.id/" style="text-decoration: none;" target="_blank">Sistem Pemantauan Pasar dan Kebutuhan Pokok
                        Kementerian Perdagangan RI</a>
                </p>
            </div>

            <div class="col" style="margin: 30px 10px 30px 100px; ">
                <div class="teks" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;">
                    <p style="text-align: end;">Data pangan Sumatera Utara tersebar pada beberapa website. Analis data dapat mengotomatiskan dan mengoptimalkan proses. Analitik data terotomatisasi dengan penggunaan sistem komputer untuk menjalankan tugas analitik dengan sedikit atau bahkan tanpa intervensi manusia.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col" style="margin-top: 40px;">
                <?php

                $varFile3 = "commoditys_month_old.json";
                $dataJSON = file_get_contents($varFile3);

                $data3 = json_decode($dataJSON, true);

                // echo "<pre>";
                // print_r($data3);
                // echo "</pre>";
                // 
                ?> <!-- Untuk menampilkan isi data JSON -->


                <h5 style="text-align: center; font-size:medium">Harga Komoditas Pangan</h5>

                <table id="tabelbawah" class="table nowrap" style="width:100%; font-size:small">
                    <p>Harga di: <?= $data3['districts'] ?><br>
                        Periode: <?= $data3['month'] ?></p>
                    <thead>
                        <tr>
                            <td><?= $data3['header']['0'] ?></td>
                            <td><?= $data3['header']['1'] ?></td>
                            <td><?= $data3['header']['2'] ?></td>
                            <td><?= $data3['header']['3'] ?></td>
                            <td><?= $data3['header']['4'] ?></td>
                            <td><?= $data3['header']['5'] ?></td>
                            <td><?= $data3['header']['6'] ?></td>
                            <td><?= $data3['header']['7'] ?></td>
                            <td><?= $data3['header']['8'] ?></td>
                            <td><?= $data3['header']['9'] ?></td>
                            <td><?= $data3['header']['10'] ?></td>
                            <td><?= $data3['header']['11'] ?></td>
                            <td><?= $data3['header']['12'] ?></td>
                            <td><?= $data3['header']['13'] ?></td>
                            <td><?= $data3['header']['14'] ?></td>
                            <td><?= $data3['header']['15'] ?></td>
                            <td><?= $data3['header']['16'] ?></td>
                            <td><?= $data3['header']['17'] ?></td>
                            <td><?= $data3['header']['18'] ?></td>
                            <td><?= $data3['header']['19'] ?></td>
                            <td><?= $data3['header']['20'] ?></td>
                            <td><?= $data3['header']['21'] ?></td>
                            <td><?= $data3['header']['22'] ?></td>
                            <td><?= $data3['header']['23'] ?></td>
                            <td><?= $data3['header']['24'] ?></td>
                            <td><?= $data3['header']['25'] ?></td>
                            <td><?= $data3['header']['26'] ?></td>
                            <td><?= $data3['header']['27'] ?></td>
                            <td><?= $data3['header']['28'] ?></td>
                            <td><?= $data3['header']['29'] ?></td>
                            <td><?= $data3['header']['30'] ?></td>
                        </tr>
                    </thead>

                    <?php foreach ($data3['table'] as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?= $row['00'] ?></td>
                                <td>Rp.<?= $row['01'] ?></td>
                                <td>Rp.<?= $row['02'] ?></td>
                                <td>Rp.<?= $row['03'] ?></td>
                                <td>Rp.<?= $row['04'] ?></td>
                                <td>Rp.<?= $row['05'] ?></td>
                                <td>Rp.<?= $row['06'] ?></td>
                                <td>Rp.<?= $row['07'] ?></td>
                                <td>Rp.<?= $row['08'] ?></td>
                                <td>Rp.<?= $row['09'] ?></td>
                                <td>Rp.<?= $row['10'] ?></td>
                                <td>Rp.<?= $row['11'] ?></td>
                                <td>Rp.<?= $row['12'] ?></td>
                                <td>Rp.<?= $row['13'] ?></td>
                                <td>Rp.<?= $row['14'] ?></td>
                                <td>Rp.<?= $row['15'] ?></td>
                                <td>Rp.<?= $row['16'] ?></td>
                                <td>Rp.<?= $row['17'] ?></td>
                                <td>Rp.<?= $row['18'] ?></td>
                                <td>Rp.<?= $row['19'] ?></td>
                                <td>Rp.<?= $row['20'] ?></td>
                                <td>Rp.<?= $row['21'] ?></td>
                                <td>Rp.<?= $row['22'] ?></td>
                                <td>Rp.<?= $row['23'] ?></td>
                                <td>Rp.<?= $row['24'] ?></td>
                                <td>Rp.<?= $row['25'] ?></td>
                                <td>Rp.<?= $row['26'] ?></td>
                                <td>Rp.<?= $row['27'] ?></td>
                                <td>Rp.<?= $row['28'] ?></td>
                                <td>Rp.<?= $row['29'] ?></td>
                                <td>Rp.<?= $row['30'] ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>

                </table>
                <p style="font-style: italic; font-size: 12px;"> *Data di atas diambil dari <a href="https://hargapangan.sumutprov.go.id/tabel-harga" style="text-decoration: none;" target="_blank">website harga pangan Sumatera Utara</a>
                </p>
            </div>
        </div>

        <div class="row mt-4" style="height: 50px; background-color: #064980;">
        </div>
        <div class="row bg-light" style=" padding: 30px;">
            <h5 class="text-muted" style=" font-size: medium; text-align:center;">Copyright &copy; 2023 PKM-RE Pelita Nusantara</h5>
        </div>
        <div class="row" style=" height:30px; background-color: #064980;">

        </div>
    </div>


</body>


<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "searching": false // Aktifkan fitur pencarian

        });
    });
</script>

<script>
    new DataTable('#tabelbawah', {

        scrollX: true

    });
</script>

</html>