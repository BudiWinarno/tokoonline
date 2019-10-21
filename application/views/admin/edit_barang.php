<div class="contianer ml-3 mr-3">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach($barang as $brg): ?>
        <form action="<?= base_url(). 'admin/data_barang/update'; ?>" method="post">
            
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_barang" class="form-control" value="<?= $brg->id_barang ?>" >
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $brg->keterangan ?>" >
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $brg->kategori ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $brg->harga ?>">
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" name="stock" id="stock" class="form-control" value="<?= $brg->stock ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>