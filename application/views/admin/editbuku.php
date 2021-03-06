<div class="main-panel">
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <i class="fas fa-book-open text-dark"></i> Edit Buku
            </div>
          </div>
          <?php foreach ($buku as $b){ ?>
          <div class="row">
            <div class="col-md-6">
            <form action="<?php echo base_url().'admin/update_buku' ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label><i class="fas fa-list text-dark"></i> Kategori</label>
                <select name="id_kategori" class="form-control">
                  <option value="<?php echo $b->id_kategori; ?>"><?php echo $b->nama_kategori; ?></option>
                  <?php foreach ($kategori as $k) { ?>
                    <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                  <?php } ?>
                </select>
                <?php echo form_error('id_kategori'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-book text-dark"></i> Judul Buku</label>
                <input type="hidden" name="id" value="<?php echo $b->id_buku; ?>">
                <input type="text" name="judul_buku" class="form-control" value="<?php echo $b->judul_buku; ?>">
                <?php echo form_error('judul_buku'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-user text-dark"></i> Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="<?php echo $b->pengarang; ?>">
                <?php echo form_error('pengarang'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-building text-dark"></i> Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="<?php echo $b->penerbit; ?>">
                <?php echo form_error('penerbit'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-calendar-alt text-dark"></i> Tahun Terbit</label>
                <input type="date" name="thn_terbit" class="form-control" value="<?php echo $b->thn_terbit; ?>">
                <?php echo form_error('thn_terbit'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-info-circle text-dark"></i> Status Buku</label>
                <select name="status" class="form-control">
                  <option <?php if($b->status_buku == "1"){echo "selected='selected'";} echo $b->status_buku; ?> value="1">Tersedia</option>
                  <option <?php if($b->status_buku == "0"){echo "selected='selected'";} echo $b->status_buku; ?> value="0">Sedang dipinjam</option>
                </select>
                <?php echo form_error('status'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-image text-dark"></i> Gambar</label><br>
                <?php
                if(isset($b->gambar)){
                  echo '<input type="hidden" name="old_pict" value="'.$b->gambar.'">';
                  echo '<img src="'.base_url().'assets/upload/'.$b->gambar.'" width="30%">';
                  }
                  ?>
                  <br>
                <input name="foto" type="file" class="form-control">
              </div>


            <!-- Butuh Perbiakan di tombol -->
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary btn-sm">
            		<input type="button" value="Kembali" class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
                </div>
            </form>
          </div>
          </div>
            <?php } ?>
          </div>
        </div>
      </div>
