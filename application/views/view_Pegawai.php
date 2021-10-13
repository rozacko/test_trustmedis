
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <h5>List Data Master Dokter</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up text-white"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" width="100%" id="main-table">
	                    <thead>
		                    <tr>
		                        <th width="5%">#</th>
		                        <!-- <th width="30%">Id Pegawai</th> -->
		                        <th width="20%">No Pegawai</th>
		                        <th width="35%">Nama</th>
		                        <th width="10%">Jenis Kelamin</th>
		                        <th width="20%">Pegawai SIP</th>
								<th width="10%">Action</th>								
		                    </tr>
	                    </thead>
	                    <tbody>
	                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>

<div class="modal inmodal" id="add_Pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Data Dokter</h4>
            </div>
            <div class="modal-body">
            	<div class="form-row">
            		<div class="form-group col">
            			<label>No Pegawai</label>
            			<input type="text" class="form-control" id="pegawai_nomor" name="pegawai_nomor" placeholder="No Pegawai">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Nama Pegawai</label>
            			<input type="text" class="form-control" id="pegawai_nama" name="pegawai_nama" placeholder="Nama">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Jenis Kelamin</label>
            			<select class="form-control" id="pegawai_jenis_kelamin" name="pegawai_jenis_kelamin">
            				<option value="" disabled selected>Pilih...</option>
            				<option value="L">Laki - laki</option>
            				<option value="P">Perempuan</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Pegawai SIP</label>
            			<input type="text" class="form-control" id="pegawai_sip" name="pegawai_sip" placeholder="nomor SIP">
            		</div>
            	</div>            	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_add_Pegawai()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="edit_Pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_edit_Pegawai"></h4>
            </div>
            <div class="modal-body">
            	<div class="form-row" style="display: none;">
            		<div class="form-group col">
            			<label>ID</label>
            			<input type="text" class="form-control" id="pegawai_id_edit" name="pegawai_id_edit" readonly="true">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Nomor Pegawai</label>
            			<input type="text" class="form-control" id="pegawai_nomor_edit" name="pegawai_nomor_edit" placeholder="...">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Nama Pegawai</label>
            			<input type="text" class="form-control" id="pegawai_nama_edit" name="pegawai_nama_edit" placeholder="...">
            		</div>
            	</div>            	            	
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Jabatan</label>
            			<select class="form-control" id="pegawai_jenis_kelamin_edit" name="pegawai_jenis_kelamin_edit">
            				<option value="" disabled selected>Pilih...</option>
            				<option value="L">Laki - laki</option>
            				<option value="Px">Perempuan</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Pegawai SIP</label>
            			<input type="text" class="form-control" id="pegawai_sip_edit" name="pegawai_sip_edit" placeholder="...">
            		</div>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_edit_Pegawai()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="confirm_delete_Pegawai_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_delete_Pegawai"></h4>
            </div>
            <div class="modal-body">
            	<div class="form-row" style="display: none;">
            		<div class="form-group col">
            			<label>ID</label>
            			<input type="text" class="form-control" id="id_delete" name="id_delete" placeholder="...">
            		</div>
            	</div>
            	<div>
            		<span>
            			Apakah anda yakin?
            		</span>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="save_delete_Pegawai()">Yes</button>
            </div>
        </div>
    </div>
</div>



    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/toastr/toastr.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){

			getMainTable();

        });

	    function getMainTable(){
			var tahun = $('#tahun').val();
			var bulan = $('#bulan').val();
			// alert(tahun+'-'+bulan);
			var role_id = 1;
			var oTable = $('#main-table').DataTable({
					processing: true,
					select: true,
					destroy: true,
					searching: true,
					lengthChange: true,
					pageLength: 10,
					responsive: true,
					dom: '<"html5buttons"B>lTfgitp',
					buttons: {
						buttons: [
							{
								text: '<i class="fa fa-plus-square"></i>&ensp;Tambah Data',
								action: function ( e, dt, node, config ) {
									add_Pegawai();
								}
							},
						],
						dom: {
							button: {
								tag: "button",
								className: "btn btn-primary btn-sm"
							},
							buttonLiner: {
								tag: null
							}
						}
					},
					ajax:{
						url:"<?=base_url('Pegawai/get_data')?>",
						type:'GET',
						dataSrc : function(json){
							var return_data = new Array()
							$.each(json['response'], function(i, item){
								var button = '' +
									'<div class="btn-group">' +
										'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_Pegawai(\''+item["pegawai_id"]+'\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
										'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_Pegawai(\''+item["pegawai_id"]+'\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
									'</div>'
								return_data.push({
									'no'        : (i+1),
									'pegawai_nomor'	: item['pegawai_nomor'],
									'pegawai_nama'  : item['pegawai_nama'],
									'pegawai_jenis_kelamin'		: item['pegawai_jenis_kelamin'],
									'pegawai_sip'     : item['pegawai_sip'],
									'action'    : button
								})
							})
							return return_data
						}
					},
					columns : [
						{data : 'no'},
						{data : 'pegawai_nomor'},
						{data : 'pegawai_nama'},
						{data : 'pegawai_jenis_kelamin'},
						{data : 'pegawai_sip'},
						{data : 'action'}
					]
				});
	    }

	    function add_Pegawai(){
	    	$('#add_Pegawai_mdl').modal('show');
	    }

	    function save_add_Pegawai(){
	    	var pegawai_nomor = $('#pegawai_nomor').val();
	    	var pegawai_nama = $('#pegawai_nama').val();
	    	var pegawai_jenis_kelamin = $('#pegawai_jenis_kelamin').val();
	    	var pegawai_sip = $('#pegawai_sip').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Pegawai/save_add',
	            data: {
	               pegawai_nomor: pegawai_nomor,
	               pegawai_nama: pegawai_nama,
	               pegawai_jenis_kelamin: pegawai_jenis_kelamin,
	               pegawai_sip: pegawai_sip
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#add_Pegawai_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function edit_Pegawai(id) {
		   $.ajax({
		      type: 'GET',
		      url: '<?php echo base_url() ?>Pegawai/get_data_by_id/' + id,
		      dataType: 'json',
		      success: function(data) {

		    	$('#pegawai_id_edit').val(data.pegawai_id);
		    	$('#pegawai_nomor_edit').val(data.pegawai_nomor);
		    	$('#pegawai_nama_edit').val(data.pegawai_nama);
		    	$('#pegawai_jenis_kelamin_edit').val(data.pegawai_jenis_kelamin).change();
		    	$('#pegawai_sip_edit').val(data.pegawai_sip);

		        $('#header_edit_Pegawai').html('Edit Data Pegawai <span class="text-info">'+data.pegawai_nama+'</span>');
		        $('#edit_Pegawai_mdl').modal("show");
		      }
		   });

		}

	    function save_edit_Pegawai(){
	    	var pegawai_id = $('#pegawai_id_edit').val();
	    	var pegawai_nomor = $('#pegawai_nomor_edit').val();
	    	var pegawai_nama = $('#pegawai_nama_edit').val();
	    	var pegawai_jenis_kelamin = $('#pegawai_jenis_kelamin_edit').val();
	    	var pegawai_sip = $('#pegawai_sip_edit').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Pegawai/save_edit',
	            data: {
					pegawai_id : pegawai_id,
					pegawai_nomor : pegawai_nomor,
					pegawai_nama : pegawai_nama,
					pegawai_jenis_kelamin : pegawai_jenis_kelamin,
					pegawai_sip : pegawai_sip,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#edit_Pegawai_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function confirm_delete_Pegawai(id) {

			$('#id_delete').val(id);

		    $('#header_delete_Pegawai').html('Confirm Delete Data Pegawai');

			$('#confirm_delete_Pegawai_mdl').modal('show');

		}

	    function save_delete_Pegawai(){
	    	var id = $('#id_delete').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Pegawai/save_delete',
	            data: {
	               id: id,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#confirm_delete_Pegawai_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

    </script>