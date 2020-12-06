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



<body class="second-page">
    <header class="header2">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="city-region.php">City/Region</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="intro">
            <h2>City/Region Tables</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officiis, consectetur laborum ipsum vero aliquid suscipit voluptatibus vel fuga? Itaque dicta incidunt rerum at aut obcaecati, blanditiis quae officiis accusantium quas neque alias voluptatum quidem architecto error. Nobis, cumque harum?</p>
        </div>
        <div class="table">
            <div class="container mb-3 mt-3 ">
                <table class="table table-bordered mydatatable styleswidth="100%">
                    <thead>
                        <tr class="thead-dark">
                            <th>Station No.</th>
                            <th>River Name</th>
                            <th>City/Region</th>
                            <th>WQI</th>
                            <th>Quality</th>
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
</body>


<?php 
require_once "../includes/footer.php";
?>

