<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Buku <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Data Buku</h3>
            <?php if (empty($buku)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table id="tabelku" class="table display">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE</th>
                        <th class="text-center" scope="col">JUDUL</th>
                        <th class="text-center" scope="col">PENULIS</th>
                        <th class="text-center" scope="col">PENERBIT</th>
                        <th class="text-center" scope="col">TAHUN</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $u) : ?>
                    <tr>
                        <td class="text-center"><?= $u->kode ?></td>
                        <td class="text-center"><?= $u->judul ?></td>
                        <td class="text-center"><?= $u->penulis ?></td>
                        <td class="text-center"><?= $u->penerbit ?></td>
                        <td class="text-center"><?= $u->tahun ?></td>
                        
                        <td class="text-center">
                            <a href="" class="badge badge-success float-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->



                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                        Tambah Data Buku
                    </button>
                   
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<script>
...
</script>