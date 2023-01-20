<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_iuran WHERE id_iuran='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Acara
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Acara Kegiatan</label>
                <div class="col-sm-4">
                    <select name="id_kk" id="id_kk" class="form-control select2bs4" required>
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
                <label class="col-sm-2 col-form-label">Acara</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="acara" name="acara" placeholder="Acara" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="detail" name="detail acara" placeholder="Detail Acara"
                        required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Waktu & Tanggal</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Waktu & Tanggal"
                        required>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-info">
            <a href="?page=data-tagihan" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_acara SET 
		id_acara='".$_POST['id_acara']."',
		detail_acara='".$_POST['detail_acara']."',
		tanggal='".$_POST['tanggal']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-acara';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-acara';
        }
      })</script>";
    }}