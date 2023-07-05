<?= $this->include('template/header_view'); ?>

<div class="container pt-5">
    <a href="<?= base_url('warga/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Warga</h4>
        </div>
         <div class="card-body">
            <div class="table-responsive-xl">
                <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr class="bg-light">
                    <th class="text-center">No</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Warga</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No.Rumah</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
            </tr>
            </thead>
                    <tbody>
                        <?php $no=1; foreach($getwarga as $isi){?>
                            <tr>
            <tr>
                        <td class="text-center"><?=$no; ?></td>
                        <td class="text-center"><?= $isi['nik'];?></td>
                        <td class="text-center"><?= $isi['id'];?></td>
                        <td class="text-center"><?= $isi['nama']; ?></td>
                        <td class="text-center"><?= $isi['kelamin']; ?></td>
                        <td class="text-center"><?= $isi['alamat']; ?></td>
                        <td class="text-center"><?= $isi['no_rumah']; ?></td>
                        <td class="text-center"><?= $isi['status']; ?></td>
                <td>
                <a href="<?= base_url('warga/edit/'.$isi['id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('warga/hapus/'.$isi['id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data Warga ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                </td>
            </tr>
            <?php $no++;}?>
            </tbody>  
                </table>
              
            </div>
        </div>
    </div>
</div>
<br>
<?= $this->include('template/footer_view'); ?>