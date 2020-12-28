<?php
require_once "../includes/header.php"
?>
<?php 
include "../includes/query.php";
?>
<?php 
include "../includes/variable.php";
?>
<?php 
include "../includes/function.php";
?>



<body class="city-page">
    <header class="header1">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Rumah<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/about.php">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../city-region.php">Kabupaten/Kota</a>
                </li>
              </ul>
            </div>    
            </div>
        </nav>
        <div class="container-2">
            <h1>Kualitas Air Kabupaten/Kota</h1>
            <hr>
            <p class="content-text-2">
              Pada laman ini anda akan disediakan tabel kualitas air dengan keterangan nomor stasiun, nama sungai,
              Kabupaten/Kota, <i>Water Quality Index</i> (WQI), dan Kualitas.
            </p>
            <div class="table">
                <div class="container mb-3 mt-3 ">
                    <table class="table table-bordered mydatatable styleswidth="100%">
                        <thead>
                            <tr class="thead-dark">
                                <th>Station No.</th>
                                <th>Nama Sungai</th>
                                <th>Kabupaten/Kota</th>
                                <th>WQI</th>
                                <th>Kualitas</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include '../includes/table.php'
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>
   

</body>

<?php 
    include "../includes/popup.php";
?>

<script src="../script.js"></script>

<?php 
require_once "../includes/footer.php";
?>

