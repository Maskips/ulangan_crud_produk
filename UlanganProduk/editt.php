<?php
    include '../db_produk.php';
    $produk = new Produk();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Edit Produk</title>
</head>
<body>
    <?php
        foreach ($produk->edit($_GET['id']) as $data) {
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

            <form action="prosess.php?aksi=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <center><legend><b>EDIT PRODUK</b></legend></center><br> 
                    <table>
                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><b>NAMA BARANG</b></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><b>KATEGORI</b></label>
                            <div class="col-sm-10">
                            <select name="kategori" class="form-control">
                                <option value="BAJU TIDUR" <?php if ($kategori == "BAJU TIDUR") { ?> selected <?php } ?>>BAJU TIDUR</option>
                                <option value="BAJU BOLA"  <?php if ($kategori == "BAJU BOLA")  { ?> selected <?php } ?>>BAJU BOLA</option>
                                <option value="KAOS BIASA" <?php if ($kategori == "KAOS BIASA") { ?> selected <?php } ?>>KAOS BIASA</option>
                                <option value="KAOS POLOS" <?php if ($kategori == "KAOS POLOS") { ?> selected <?php } ?>>KAOS POLOS</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><b>JUMLAH</b></label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><b>HARGA</b></label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"><b>DESKRIPSI</b></label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi"><?php echo $deskripsi; ?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-success" name="save" value="S I M P A N">
                                    <a href="indexx.php" class="btn btn-warning">K E M B A L I</a>
                                </div>
                            </div>
                        </div>
                    </table>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>