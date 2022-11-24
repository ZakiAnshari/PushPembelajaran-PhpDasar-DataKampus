<!-- general form elements disabled -->
<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content" >
  <div class="container-fluid">
  <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mahasiswa</h3>
      </div>
          <!-- /.card-header -->
                    <div class="card-body">
                      <form method="post" action="update/update_data.php" enctype="multipart/form-data" >
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Nama</label>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Nama"
                                name="nama"
                                value="<?php echo $view['nama']; ?>"
                              />
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Nama"
                                name="id"
                                value="<?php echo $view['id']; ?>" hidden
                              />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>NoBp</label>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="NoBp"
                                name="nobp"
                                value="<?php echo $view['nobp']; ?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Jurusan</label>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Jurusan"
                                name="jurusan"
                                value="<?php echo $view['jurusan']; ?>"
                              />
                            </div>
                          </div>
                          

                          <div class="col-sm-6">
                            <label class="form-label" for="customFile">Apload Foto</label>
                            <input type="file" name='foto' class="form-control" id="customFile" />
                          </div>

                          

                        </div>

                        <div class="row">
                            <div class="col-sm-10">
                            <img src="foto/<?php echo $view[
                                'foto'
                            ]; ?>" width="200px" class="rounded float-right">
                            </div>
                        </div>

                        <div class="row">
                        <button type="submit" class="btn btn-sm btn-info" >
                        Simpan
                        </button>

                        </div>
                      </form>
                    </div>
                    <!-- /.card-body -->
    </div>
  </div>
</section>
<!-- general form elements disabled -->