<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Tagihan
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Anggota-Yang ngutang</label>
                <div class="col-sm-4">
                    <select name="id_kk" id="id_kk" class="form-control" required>
                        <option selected="selected">- Penduduk -</option>
                        <?php
                        $query = "select * from tb_kk";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
                        <option value="<?php echo $row['id_kk'] ?>">
                            <?php echo $row['kepala'] ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Bulan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tagihan_bulan" name="tagihan_bulan"
                        placeholder="Contoh: Januari-Maret" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Nominal"
                        required>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=data-tagihan" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO tb_iuran (id_kk, tagihan_bulan, nominal) VALUES (
            '".$_POST['id_kk']."',
            '".$_POST['tagihan_bulan']."',
            '".$_POST['nominal']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-tagihan';
          }
      })</script>";
      }
	  else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
		{
          window.location = 'index.php?page=add-tagihan';
          }
      }
	
	  )</script>";

	  
    }
}