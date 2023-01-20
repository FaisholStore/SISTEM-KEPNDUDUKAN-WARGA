<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Orang Ngutang
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="?page=add-tagihan" class="btn btn-primary">
                    <i class="fa fa-edit"></i> Tambah Data</a>
                <a href="?page=add-acara" class="btn btn-primary ">
                    <i class="fa fa-print" aria-hidden="true"></i> </a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tagihan Bulan</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
              $no = 1;
			  $sql = $koneksi->query
			  ("SELECT * FROM tb_iuran i
			  INNER JOIN tb_kk k ON k.id_kk = i.id_kk ");
			  while ($data= $sql->fetch_assoc()) {
            ?>

                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $data['no_kk']; ?>-
                            <?php echo $data['kepala']; ?>
                        </td>
                        <td>
                            Kelurahan <?php echo $data['kelurahan']; ?>
                            RT
                            <?php echo $data['rt']; ?>/ RW
                            <?php echo $data['rw']; ?>.
                        </td>
                        <td>
                            <?php echo $data['tagihan_bulan']; ?>
                        </td>
                        <td>
                            Rp<?php echo $data['nominal']; ?>
                        </td>
                        <td>
                            <a href="?page=detail-tagihan&kode=<?php echo $data['id_iuran']; ?>" title="Detail"
                                class="btn btn-info btn-sm">
                                <i class="fa fa-user"></i>
                            </a>
                            <a href="?page=edit-tagihan&kode=<?php echo $data['id_iuran']; ?>" title="Ubah"
                                class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="?page=del-tagihan&kode=<?php echo $data['id_iuran']; ?>"
                                onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Lunas"
                                class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-credit-card"></i>
                                </>
                        </td>
                    </tr>

                    <?php
			 	}
					
            		?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- /.card-body -->