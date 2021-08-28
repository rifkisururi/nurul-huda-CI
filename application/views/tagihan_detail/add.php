<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tagihan Detail Add</h3>
            </div>
            <?php echo form_open('tagihan_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_tagihan_master" class="control-label"><span class="text-danger">*</span>Tagihan Master</label>
						<div class="form-group">
							<select name="id_tagihan_master" class="form-control">
								<option value="">select tagihan_master</option>
								<?php 
								foreach($all_tagihan_master as $tagihan_master)
								{
									$selected = ($tagihan_master['id'] == $this->input->post('id_tagihan_master')) ? ' selected="selected"' : "";

									echo '<option value="'.$tagihan_master['id'].'" '.$selected.'>'.$tagihan_master['nama_tagihan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_tagihan_master');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_pembayaran" class="control-label">Status Pembayaran</label>
						<div class="form-group">
							<select name="status_pembayaran" class="form-control">
								<option value="">select</option>
								<?php 
								$status_pembayaran_values = array(
									'0'=>'Belum dibayar',
									'1'=>'Sudah dibayar',
								);

								foreach($status_pembayaran_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status_pembayaran')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_santri" class="control-label"><span class="text-danger">*</span>Santri</label>
						<div class="form-group">
							<select name="id_santri" class="form-control">
								<option value="">select santri</option>
								<?php 
								foreach($all_santri as $santri)
								{
									$selected = ($santri['id'] == $this->input->post('id_santri')) ? ' selected="selected"' : "";

									echo '<option value="'.$santri['id'].'" '.$selected.'>'.$santri['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_santri');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label">Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_pengurus" class="control-label">Id Pengurus</label>
						<div class="form-group">
							<input type="text" name="id_pengurus" value="<?php echo $this->input->post('id_pengurus'); ?>" class="form-control" id="id_pengurus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label"><span class="text-danger">*</span>Tanggal</label>
						<div class="form-group">
							<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
							<span class="text-danger"><?php echo form_error('tanggal');?></span>
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