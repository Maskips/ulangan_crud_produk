<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Create Produk</title>
</head>
<body><br><br>
<center><b>B E L I</b></center>
<center><b>B A R A N G</b></center><br>

<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">
            
            <form action="prosess.php?aksi=tambah" method="POST">
              <div class="form-group">
                <label for=""><b>NAMA BARANG :</b></label>
                  <input type="text" class="form-control" name="nama" required><br>
              </div>
              <div class="form-group">
                <label for=""><b>KATEGORI :</b></label><br>
                  <select name="kategori" class="form-control" required><br>
                    <option>K A T E G O R I</option>
                    <option value="BAJU">1. BAJU </option>
                    <option value="BAJU BOLA">2. BAJU BOLA</option>
                    <option value="KAOS BIASA">3. KAOS BIASA</option>
                    <option value="KAOS POLOS">4. KAOS POLOS</option>
                  </select>
              </div><br>
              <div class="form-group">
                <label for=""><b>JUMLAH :</b></label>
                  <input type="number" class="form-control" name="jumlah" required><br>
              </div>    
              <div class="form-group">
                <label for=""><b>HARGA :</b></label><br>
                  <input type="number" class="form-control" name="harga" required><br>
              </div>
              <div class="form-group">
                <label for=""><b>DESKRIPSI :</b></label><br>
                  <textarea class="form-control" name="deskripsi" rows="4" cols="10" required></textarea><br>
              </div><br>
              <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary">B E L I</button>
                  <a href="indexx.php" class="btn btn-warning">K E M B A L I</a>
              </div>
            </form>

          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>