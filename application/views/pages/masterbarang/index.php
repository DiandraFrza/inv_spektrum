<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tambah Barang</h1>
        <!-- Tombol kembali -->
        <a href="<?= base_url('/barang/create/') ?>" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah
            Barang</a>
    </div>
    <form action="<?= base_url('masterbarang') ?>" method="POST">
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Barang" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" placeholder="Type Barang" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="sn" class="col-sm-2 col-form-label">Serial Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sn" name="sn" placeholder="Serial Number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_pembelian" class="col-sm-2 col-form-label">Tanggal Pembelian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl_pembelian" name="tgl_pembelian" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_kalibrasi" class="col-sm-2 col-form-label">Tanggal Kalibrasi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl_kalibrasi" name="tgl_kalibrasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="kondisi_alat" class="col-sm-2 col-form-label">Kondisi Alat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kondisi_alat" name="kondisi_alat" placeholder="Kondisi Alat" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Alat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Alat" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('masterbarang/reset') ?>" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>
</div>
