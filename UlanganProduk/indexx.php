<?php
    include '../db_produk.php';
    $db = new DBproduk();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Index CRUD Produk</title>
</head>
<body>
<br>
<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-20">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">

  <center><a href="createe.php">BELI BARANG</a></center><br><br>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KATEGORI BARANG</th>
            <th>JUMLAH BARANG</th>
            <th>HARGA BARANG</th>
            <th>DESKRIPSI</th>
            <th>SUB TOTAL</th>
            <th align="center" colspan="3">C R U D</th>
        </tr>
        <?php
            $produk = new Produk();
            $no = 1;
            $total = $jumlah*$harga;
            foreach ($produk->index() as $data) {
                $total += $data['subtotal'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td align="center"><?php echo $data['jumlah']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['deskripsi']; ?></td>
            <td align="center"><?php echo $data['subtotal']; ?></td>
            <td><a class="btn btn-primary" href="showw.php?id=<?php echo $data['id']; ?>&aksi=show">SHOW</a></td>
            <td><a class="btn btn-success" href="editt.php?id=<?php echo $data['id']; ?>&aksi=edit">EDIT</a></td>
            <td><a class="btn btn-danger" href="prosess.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm"('Yakin Slur?...');>DELETE</a></td>
        </tr>
        <?php 
            } 
        ?>
    </table>
            <table class="table">
                <tr>
                    <th>TOTAL BAYAR : Rp.<?php echo $total; ?></th>
                </tr>
            </table>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>