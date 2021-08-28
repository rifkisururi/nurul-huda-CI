<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Penguru Edit</h3>
            </div>
			<?php echo form_open('penguru/edit/'.$penguru['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="hak_akses" class="control-label"><span class="text-danger">*</span>Hak Akses</label>
						<div class="form-group">
							<select name="hak_akses" class="form-control">
								<option value="">select</option>
								<?php 
								$hak_akses_values = array(
									'1'=>'Admin',
									'2'=>'Bendahara',
								);

								foreach($hak_akses_values as $value => $display_text)
								{
									$selected = ($value == $penguru['hak_akses']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('hak_akses');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $penguru['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $penguru['nama']); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $penguru['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp1" class="control-label">No Hp1</label>
						<div class="form-group">
							<input type="text" name="no_hp1" value="<?php echo ($this->input->post('no_hp1') ? $this->input->post('no_hp1') : $penguru['no_hp1']); ?>" class="form-control" id="no_hp1" />
							<span class="text-danger"><?php echo form_error('no_hp1');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp2" class="control-label">No Hp2</label>
						<div class="form-group">
							<input type="text" name="no_hp2" value="<?php echo ($this->input->post('no_hp2') ? $this->input->post('no_hp2') : $penguru['no_hp2']); ?>" class="form-control" id="no_hp2" />
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