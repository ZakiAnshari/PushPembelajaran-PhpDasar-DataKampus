<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Bp</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query(
                        $koneksi,
                        'SELECT * FROM tb_mahasiswa'
                    );
                    while ($mhs = mysqli_fetch_array($query)) {
                        $no++; ?>
                        <tr>
                          <td width='5%'><?php echo $no; ?></td>
                          <td><?php echo $mhs['nama']; ?></td>
                          <td><?php echo $mhs['nobp']; ?></td>
                          <td><?php echo $mhs['jurusan']; ?></td>
                          <td width='102vh'>
                            <a onclick="hapus_data(<?php echo $mhs[
                                'id'
                            ]; ?>)" class="btn btn-sm btn-danger" >Hapus</a> 
                            <a href="index.php?page=edit-data&& id=<?php echo $mhs[
                                'id'
                            ]; ?>" class="btn btn-sm btn-success" >Edit</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
                    <div class="modal-body">

                      <div class="form-row" >
                      <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required >
                        </div >

                        <div class="col">
                            <input type="text" class="form-control" placeholder="NoBp" name="nobp" required >
                        </div>
                        
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required >
                        </div>
                      
                    </div>
            </form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    
      
    

      <script>
        function hapus_data(data_id){
          // alert('ok');
          // window.location=("delete/hapus_data.php?id="+data_id);
          Swal.fire({
            title: 'Apakah Datanya Ingin Di Hapus..?',
            // showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Hapus Data',
            confirmButtonColor:'#CD5C5C',
            // denyButtonText: `Don't save`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location=("delete/hapus_data.php?id="+data_id);
            } 
          })
        }

      </script>