
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Formulir Pendaftaran Lomba</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="
						<?= BASEURL;?>/Pendaftaran/tambah" method="post">
                        <input type="hidden" name="id" id="id" autocomplete="off">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim"autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <input type="text" class="form-control" id="fakultas" name="fakultas"autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="pil_lomba" class="form-label">Lomba</label>
                            <select class="form-select" aria-label="Default select example" id="pil_lomba" name="pil_lomba">
                                <option selected>--Pilih Lomba--</option>
                                <option value="MTQ">MTQ</option>
                                <option value="Adzan">Adzan</option>
                                <option value="Sholawat">Sholawat</option>
                                <option value="Ceramah">Ceramah</option>
                                <option value="Hafalan Juz 30">Hafalan Juz 30</option>
                                <option value="Kaligrafi">Kaligrafi</option>
                            </select>
                         
                        </div>
                        <div class="mb-3">
                                <label for="motivasi">Motivasi</label>
                                <textarea class="form-control" id="motivasi" rows="5" name="motivasi"autocomplete="off"></textarea>
                            </div>
                     </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">kembali</button>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="">
<div class="row">
                <div class="col-lg-6"> <?php Flasher::flash(); ?> </div>
            </div>
            <div class="row mb-4">
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal"> Menanambahkan peserta lomba </button>
            </div>
            </div>
            <div class="row mb-4">
            <div class="col-lg-6">
            <form action="<?= BASEURL;?>/pendaftaran/cari" method="post">
            <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Peserta" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="button-addon2" id="tombolCari">Cari</button>
            </div>
            </form>
            </div>
            </div>
  <div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Fakultas</th>
            <th>Pilihan Lomba</th>
            <th>Motivasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $no=1;
        foreach ($data['pdf'] as $pdf) :?> 
          <tr>
            <td>
            <?=$no++?> 
            </td>
            <td>
            <?=$pdf['nama']?> 
            </td>
            <td>
            <?=$pdf['nim']?> 
            </td>
            <td>
            <?=$pdf['fakultas']?> 
            </td>
            <td>
            <?=$pdf['pil_lomba']?> 
            </td>
            <td>
            <?=$pdf['motivasi']?> 
            </td>
            <td>
            <a href="
                                <?=BASEURL;?>/pendaftaran/detail/<?=$pdf['id'];?>" class="badge bg-primary  ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </a>

                            <a href="<?=BASEURL;?>/pendaftaran/ubah/
                                <?=$pdf['id'];?>" class="badge bg-success  ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="
                                <?=$pdf['id'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                            </a>
            
                            <a href="<?=BASEURL;?>/pendaftaran/hapus/<?=$pdf['id'];?>" class="badge bg-danger ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </a>
                            
                         
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>