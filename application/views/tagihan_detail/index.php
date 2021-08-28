<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tagihan Detail Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tagihan_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Tagihan Master</th>
						<th>Status Pembayaran</th>
						<th>Id Santri</th>
						<th>Jumlah</th>
						<th>Id Pengurus</th>
						<th>Tanggal</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tagihan_detail as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['id_tagihan_master']; ?></td>
						<td><?php echo $t['status_pembayaran']; ?></td>
						<td><?php echo $t['id_santri']; ?></td>
						<td><?php echo $t['jumlah']; ?></td>
						<td><?php echo $t['id_pengurus']; ?></td>
						<td><?php echo $t['tanggal']; ?></td>
						<td>
                            <a href="<?php echo site_url('tagihan_detail/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tagihan_detail/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
