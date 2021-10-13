
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <h5>List Data Master Poliklinik</h5>
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
		                        <th width="20%">Unit Kode</th>
		                        <th width="65%">Nama</th>
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

<div class="modal inmodal" id="add_Poli_klinik_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Data Poliklinik</h4>
            </div>
            <div class="modal-body">
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Unit Kode</label>
            			<input type="text" class="form-control" id="unit_kode" name="unit_kode" placeholder="Ex : MTA, JTG" onkeyup="this.value = this.value.toUpperCase()">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Unit Nama</label>
            			<input type="text" class="form-control" id="unit_nama" name="unit_nama" placeholder="Ex : POLI MATA" onkeyup="this.value = this.value.toUpperCase()">
            		</div>
            	</div>          	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_add_Poli_klinik()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="edit_Poli_klinik_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_edit_Poli_klinik"></h4>
            </div>
            <div class="modal-body">
            	<div class="form-row" style="display: none;">
            		<div class="form-group col">
            			<label>ID</label>
            			<input type="text" class="form-control" id="unit_id_edit" name="unit_id_edit" readonly="true">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Unit Kode</label>
            			<input type="text" class="form-control" id="unit_kode_edit" name="unit_kode_edit" placeholder="Ex : MTA, JTG" onkeyup="this.value = this.value.toUpperCase()">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Unit Nama</label>
            			<input type="text" class="form-control" id="unit_nama_edit" name="unit_nama_edit" placeholder="Ex : POLI MATA" onkeyup="this.value = this.value.toUpperCase()">
            		</div>
            	</div>            	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_edit_Poli_klinik()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="confirm_delete_Poli_klinik_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_delete_Poli_klinik"></h4>
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
                <button type="button" class="btn btn-danger" onclick="save_delete_Poli_klinik()">Yes</button>
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
									add_Poli_klinik();
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
						url:"<?=base_url('Poli_klinik/get_data')?>",
						type:'GET',
						dataSrc : function(json){
							var return_data = new Array()
							$.each(json['response'], function(i, item){
								var button = '' +
									'<div class="btn-group">' +
										'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_Poli_klinik(\''+item["unit_id"]+'\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
										'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_Poli_klinik(\''+item["unit_id"]+'\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
									'</div>'
								return_data.push({
									'no'        : (i+1),
									'unit_kode'	: item['unit_kode'],
									'unit_nama' : item['unit_nama'],
									'action'    : button
								})
							})
							return return_data
						}
					},
					columns : [
						{data : 'no'},
						{data : 'unit_kode'},
						{data : 'unit_nama'},
						{data : 'action'}
					]
				});
	    }

	    function add_Poli_klinik(){
	    	$('#add_Poli_klinik_mdl').modal('show');
	    }

	    function save_add_Poli_klinik(){
	    	var unit_kode = $('#unit_kode').val();
	    	var unit_nama = $('#unit_nama').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Poli_klinik/save_add',
	            data: {
	               unit_kode: unit_kode,
	               unit_nama: unit_nama,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#add_Poli_klinik_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function edit_Poli_klinik(id) {
		   $.ajax({
		      type: 'GET',
		      url: '<?php echo base_url() ?>Poli_klinik/get_data_by_id/' + id,
		      dataType: 'json',
		      success: function(data) {

		    	$('#unit_id_edit').val(data.unit_id);
		    	$('#unit_kode_edit').val(data.unit_kode);
		    	$('#unit_nama_edit').val(data.unit_nama);

		        $('#header_edit_Poli_klinik').html('Edit Data Poliklinik <span class="text-info">'+data.unit_nama+'</span>');
		        $('#edit_Poli_klinik_mdl').modal("show");
		      }
		   });

		}

	    function save_edit_Poli_klinik(){
	    	var unit_id_edit = $('#unit_id_edit').val();
	    	var unit_kode_edit = $('#unit_kode_edit').val();
	    	var unit_nama_edit = $('#unit_nama_edit').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Poli_klinik/save_edit',
	            data: {
					unit_id : unit_id_edit,
					unit_kode : unit_kode_edit,
					unit_nama : unit_nama_edit,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#edit_Poli_klinik_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function confirm_delete_Poli_klinik(id) {

			$('#id_delete').val(id);

		    $('#header_delete_Poli_klinik').html('Confirm Delete Data Poli_klinik');

			$('#confirm_delete_Poli_klinik_mdl').modal('show');

		}

	    function save_delete_Poli_klinik(){
	    	var id = $('#id_delete').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Poli_klinik/save_delete',
	            data: {
	               id: id,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#confirm_delete_Poli_klinik_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

    </script>