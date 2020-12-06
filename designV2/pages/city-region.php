<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <title>City/Region</title>
</head>
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
        </nav
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
                        <tr>
                            <td class="stasion_name">1230</td>
                            <td class="river_name">Kaliurang</td>
                            <td class="location">Sleman</td>
                            <td class="water_index">43.1</td>
                            <td class="quality_index">Good</td>
                        </tr>
                        <tr>
                            <td class="stasion_name">1230</td>
                            <td class="river_name">Kaliurang</td>
                            <td class="location">Sleman</td>
                            <td class="water_index">43.1</td>
                            <td class="quality_index">Bad</td>
                        </tr>
                        <tr>
                            <td class="stasion_name">1230</td>
                            <td class="river_name">Kaliurang</td>
                            <td class="location">Sleman</td>
                            <td class="water_index">43.1</td>
                            <td class="quality_index">Normal</td>
                        </tr>
                        <tr>
                            <td class="stasion_name">1230</td>
                            <td class="river_name">Kaliurang</td>
                            <td class="location">Sleman</td>
                            <td class="water_index">43.1</td>
                            <td class="quality_index">Bad</td>
                        </tr>
                        <tr>
                            <td class="stasion_name">1230</td>
                            <td class="river_name">Kaliurang</td>
                            <td class="location">Sleman</td>
                            <td class="water_index">43.1</td>
                            <td class="quality_index">Good</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('.mydatatable').DataTable();
</script>
</html>