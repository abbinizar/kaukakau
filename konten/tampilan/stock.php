<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Beranda</title>

    <link href="aset/css/bootstrap.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="aset/css/font-awesome-animation.css" rel="stylesheet"/>
    <link href="aset/css/style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Kaukakau</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Profil</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <div class=" ">
                    <img src="img/logo.png" class="img-circle center-block" width="100" height="100">
                    <h4 class="text-center">Manager</h4>
                </div>
                <li><a href="awal.php">Beranda</a></li>
                <li><a href="forecast.php">Demand Forecast <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="stock.php">Stock</a></li>
                <li><a href="penjadwalan.php">Penjadwalan</a></li>
                <li><a href="toko.php">Daftar toko</a></li>
            </ul>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Tabel Ketersediaan barang</h1>

            <div class="row">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input_data_stock">
                    Tambah
                </button>
            </div>


            <div>
                <form>
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <label for="emailAdress" class="control-label">Tanggal</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="judul" placeholder="Tipe" name="Tipe">
                        </div>
                    </div>
                    <div>

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipe Barang</th>
                                <th scope="col">Tersedia</th>
                                <th scope="col">Peramalan</th>
                                <th scope="col">Safety</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>XX1</td>
                                <td>112</td>
                                <td>113</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>XX2</td>
                                <td>113</td>
                                <td>114</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>XX3</td>
                                <td>112</td>
                                <td>113</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-11 col-sm-1">
                            <button type="submit" class="btn btn-primary"><a href="Details.html">Details</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'konten/elemen/modal.php'; ?>

<script src="aset/js/jquery.min.js"></script>
<script src="aset/js/bootstrap.js"></script>
<script src="aset/js/custom.js"></script>
</body>
</html>