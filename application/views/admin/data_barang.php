<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_barang">Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOCK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php $no=1; foreach($barang as $brg): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $brg->nama_brg ?></td>
                <td><?= $brg->keterangan ?></td>
                <td><?= $brg->kategori ?></td>
                <td><?= $brg->harga ?></td>
                <td><?= $brg->stock ?></td>
                <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
                <td><?= anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>')?></td>
                <td><?= anchor('admin/data_barang/hapus/' .$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" name="stock" id="stock" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar Produk</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>