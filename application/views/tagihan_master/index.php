<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tagihan Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tagihan_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama Tagihan</th>
						<th>Jumlah</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tagihan_master as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['nama_tagihan']; ?></td>
						<td><?php echo $t['jumlah']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tagihan_master/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tagihan_master/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
