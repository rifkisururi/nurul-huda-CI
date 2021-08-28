<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Santri Edit</h3>
            </div>
			<?php echo form_open('santri/edit/'.$santri['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_yayasan" class="control-label"><span class="text-danger">*</span>Yayasan</label>
						<div class="form-group">
							<select name="id_yayasan" class="form-control">
								<option value="">select yayasan</option>
								<?php 
								foreach($all_yayasan as $yayasan)
								{
									$selected = ($yayasan['id'] == $santri['id_yayasan']) ? ' selected="selected"' : "";

									echo '<option value="'.$yayasan['id'].'" '.$selected.'>'.$yayasan['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_yayasan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $santri['nama']); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $santri['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp1" class="control-label">No Hp1</label>
						<div class="form-group">
							<input type="text" name="no_hp1" value="<?php echo ($this->input->post('no_hp1') ? $this->input->post('no_hp1') : $santri['no_hp1']); ?>" class="form-control" id="no_hp1" />
							<span class="text-danger"><?php echo form_error('no_hp1');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp2" class="control-label">No Hp2</label>
						<div class="form-group">
							<input type="text" name="no_hp2" value="<?php echo ($this->input->post('no_hp2') ? $this->input->post('no_hp2') : $santri['no_hp2']); ?>" class="form-control" id="no_hp2" />
							<span class="text-danger"><?php echo form_error('no_hp2');?></span>
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