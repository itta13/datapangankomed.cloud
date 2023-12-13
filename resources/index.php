<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - ::.Cloud dataMaPo.::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                <h1 style="font-weight: bold; color: #0dc0a0; font-size: 50px;">RESOURCES</h1>
                <hr>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium obcaecati labore architecto amet minima a, quos ratione assumenda. Repudiandae explicabo inventore quasi enim sunt necessitatibus? Laboriosam nulla expedita sed hic! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere illo saepe id commodi voluptatem sit tempora numquam pariatur in beatae reiciendis dolore quis, deserunt ipsam velit! Maxime praesentium adipisci rerum.
                </p>
            </div>

            <div class="col">
                <img src="../dashboard/assets/images/blog/b3.png" alt="gambar cloud" style="width: 400px; margin-left:100px">
            </div>
        </div>

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

        <div class="row mt-4" style="height: 50px; background-color: #064980;">
        </div>
        <div class="row bg-light" style=" padding: 30px;">
            <h5 class="text-muted" style=" font-size: medium; text-align:center;">Copyright &copy; 2023 PKM-RE Pelita Nusantara</h5>
        </div>
        <div class="row" style=" height:30px; background-color: #064980;">

        </div>
    </div>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</html>