<?php
    include '../db_produk.php';
    $produk = new Produk();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Show Produk</title>
</head>
<body>
    <?php
        foreach ($produk->show($_GET['id']) as $data) {  
            $id       = $data['id'];
            $nama     = $data['nama'];
            $kategori = $data['kategori'];
            $jumlah   = $data['jumlah'];
            $harga    = $data['harga'];
            $deskripsi= $data['deskripsi'];
        }      
    ?>

<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">            
            
    <center><legend><b>SHOW PRODUK</b></legend></center><br><br>
        <table>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>NAMA BARANG</b></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>KATEGORI</b></label>
                <div class="col-sm-10">
                <input type="text" name="kategori" class="form-control" cols="21" value="<?php echo $kategori; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>JUMLAH</b></label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>HARGA</b></label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>DESKRIPSI</b></label>
                <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" readonly><?php echo $deskripsi; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <a href="indexx.php" class="btn btn-warning">K E M B A L I</a>
                </div>
            </div>
        </table>
            <br>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>