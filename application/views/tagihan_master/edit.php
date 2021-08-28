<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tagihan Master Edit</h3>
            </div>
			<?php echo form_open('tagihan_master/edit/'.$tagihan_master['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_tagihan" class="control-label"><span class="text-danger">*</span>Nama Tagihan</label>
						<div class="form-group">
							<input type="text" name="nama_tagihan" value="<?php echo ($this->input->post('nama_tagihan') ? $this->input->post('nama_tagihan') : $tagihan_master['nama_tagihan']); ?>" class="form-control" id="nama_tagihan" />
							<span class="text-danger"><?php echo form_error('nama_tagihan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $tagihan_master['jumlah']); ?>" class="form-control" id="jumlah" />
							<span class="text-danger"><?php echo form_error('jumlah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label"><span class="text-danger">*</span>Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tagihan_master['keterangan']); ?></textarea>
							<span class="text-danger"><?php echo form_error('keterangan');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>