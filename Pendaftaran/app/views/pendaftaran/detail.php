<div class="container mt-5">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" value="<?= $data['pdf']['nama']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">NIM</label>
        <input type="number" class="form-control" value="<?= $data['pdf']['nim']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Fakultas</label>
        <input type="text" class="form-control" value="<?= $data['pdf']['fakultas']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Pilihan Lomba</label>
        <input type="text" class="form-control" value="<?= $data['pdf']['pil_lomba']; ?>"readonly>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Motivasi</label>
        <input  class="form-control" value="<?= $data['pdf']['motivasi']; ?>" readonly>
    </div>
    <a href="<?=BASEURL;?>/pendaftaran">
    <button type="button" class="btn btn-danger">Kembali</button>
    </a>
 
</div>
