<div class="container">
<div class="card">
  <div class="card-header">
    Featured
  </div>

  <?php foreach($barang as $brg) : ?>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" alt="">
        </div>
        <div class="col-md-8 ml-5">
        <table class="table">
            <thead>
                <tbody>
                <tr>
                    <td>Nama Barang : <?= $brg->nama_brg ?></td>
                </tr>
                </tbody>
            </thead>
        </table>
        </div>
    </div>
  </div>
  <?php endforeach ?>
</div>
</div>