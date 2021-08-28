<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Santri Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('santri/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Yayasan</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Hp1</th>
						<th>No Hp2</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($santri as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['id_yayasan']; ?></td>
						<td><?php echo $s['nama']; ?></td>
						<td><?php echo $s['email']; ?></td>
						<td><?php echo $s['no_hp1']; ?></td>
						<td><?php echo $s['no_hp2']; ?></td>
						<td>
                            <a href="<?php echo site_url('santri/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('santri/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
