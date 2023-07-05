<?= $this->include('template/header_view'); ?>

<<div class="container p-5">
    <a href="<?= base_url('warga');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Warga</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('warga/update');?>">
            <div class="form-group">
                    <label for="">ID</label>
                    <input type="int" name="id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="varchar" name="nik" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Warga</label>
                    <input type="varchar" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="kelamin" style="margin-left: 58px;" >
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="varchar" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nomor rumah</label>
                    <input type="text" name="no_rumah" class="form-control" required>
                </div>
                <div class="form-group">
                        <select class="form-control select2" name="status">
                            <option value="" disabled selected>--Pilih Status--</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        </div>
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>

<?= $this->include('template/footer_view'); ?>