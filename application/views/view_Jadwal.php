
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <h5>List Data Master Jadwal</h5>
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
		                        <th width="20%">Klinik</th>
		                        <th width="10%" align="center">Senin</th>
		                        <th width="10%" align="center">Selasa</th>
		                        <th width="10%" align="center">Rabu</th>
		                        <th width="10%" align="center">Kamis</th>
		                        <th width="10%" align="center">Jumat</th>
		                        <th width="10%" align="center">Sabtu</th>
		                        <th width="10%" align="center">Minggu</th>
								<th width="10%" align="center">Action</th>								
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

<div class="modal inmodal" id="add_Jadwal_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Data Jadwal</h4>
            </div>
            <div class="modal-body">
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Nama Poli</label>
            			<select class="form-control" id="unit_kode" name="unit_kode">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<div class="form-group col">
            			<label>Nama Dokter</label>
            			<select class="form-control" id="pegawai_nomor" name="pegawai_nomor">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Senin</label>
            		<div class="form-group col">
            			<select class="form-control" id="v1_1" name="v1_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v1_2" name="v1_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Selasa</label>
            		<div class="form-group col">
            			<select class="form-control" id="v2_1" name="v2_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v2_2" name="v2_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Rabu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v3_1" name="v3_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v3_2" name="v3_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Kamis</label>
            		<div class="form-group col">
            			<select class="form-control" id="v4_1" name="v4_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v4_2" name="v4_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Jumat</label>
            		<div class="form-group col">
            			<select class="form-control" id="v5_1" name="v5_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v5_2" name="v5_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Sabtu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v6_1" name="v6_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v6_2" name="v6_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Minggu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v7_1" name="v7_1">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v7_2" name="v7_2">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_add_Jadwal()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="edit_Jadwal_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_edit_Jadwal"></h4>
            </div>
            <div class="modal-body">
            	<div class="form-row" style="display: none;">
            		<div class="form-group col">
            			<label>ID</label>
            			<input type="text" class="form-control" id="jadwal_id_edit" name="jadwal_id_edit" readonly="true">
            		</div>
            	</div>
            	<div class="form-row">
            		<div class="form-group col">
            			<label>Nama Poli</label>
            			<select class="form-control" id="unit_kode_edit" name="unit_kode_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<div class="form-group col">
            			<label>Nama Dokter</label>
            			<select class="form-control" id="pegawai_nomor_edit" name="pegawai_nomor_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Senin</label>
            		<div class="form-group col">
            			<select class="form-control" id="v1_1_edit" name="v1_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v1_2_edit" name="v1_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Selasa</label>
            		<div class="form-group col">
            			<select class="form-control" id="v2_1_edit" name="v2_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v2_2_edit" name="v2_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Rabu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v3_1_edit" name="v3_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v3_2_edit" name="v3_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Kamis</label>
            		<div class="form-group col">
            			<select class="form-control" id="v4_1_edit" name="v4_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v4_2_edit" name="v4_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Jumat</label>
            		<div class="form-group col">
            			<select class="form-control" id="v5_1_edit" name="v5_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v5_2_edit" name="v5_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Sabtu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v6_1_edit" name="v6_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v6_2_edit" name="v6_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>
            	<div class="form-row">
            		<label>Minggu</label>
            		<div class="form-group col">
            			<select class="form-control" id="v7_1_edit" name="v7_1_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            		<label>s/d</label>            		
            		<div class="form-group col">
            			<select class="form-control" id="v7_2_edit" name="v7_2_edit">
            				<option value="" disabled selected>Pilih...</option>
            			</select>
            		</div>
            	</div>      	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_edit_Jadwal()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="confirm_delete_Jadwal_mdl" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="header_delete_Jadwal"></h4>
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
                <button type="button" class="btn btn-danger" onclick="save_delete_Jadwal()">Yes</button>
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
			getdatapoli();
			getdatadokter();
			getdatajam();
        });
        function getdatapoli(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Jadwal/get_data_poli',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].unit_kode+'>'+data[i].unit_nama+'</option>';
	                }
	                $('#unit_kode').html(html);
	                $('#unit_kode_edit').html(html);
	            }
	        });
        }

        function getdatadokter(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Jadwal/get_data_dokter',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].pegawai_nomor+'>'+data[i].pegawai_nama+'</option>';
	                }
	                $('#pegawai_nomor').html(html);
	                $('#pegawai_nomor_edit').html(html);
	            }
	        });
        }

        function getdatajam(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Jadwal/get_data_jam',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].ID+'>'+data[i].DESCRIPTION+'</option>';
	                }

	                for(i=1; i<=7; i++){
	                	$('#v'+i+'_1').html(html);
	                	$('#v'+i+'_2').html(html);
	                	$('#v'+i+'_1_edit').html(html);
	                	$('#v'+i+'_2_edit').html(html);
	                }
	                
	            }
	        });
        }
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
								text: '<i class="fa fa-plus-square"></i>&ensp;Tambah Data &ensp;',
								action: function ( e, dt, node, config ) {
									add_Jadwal();
								}
							},
							{extend: 'pdf', title: 'DATA JADWAL DOKTER RS TRUSMEDIKA SURABAYA'},
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
						url:"<?=base_url('Jadwal/get_data')?>",
						type:'GET',
						dataSrc : function(json){
							var return_data = new Array()
							$.each(json['response'], function(i, item){
								var button = '' +
									'<div class="btn-group">' +
										'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_Jadwal(\''+item["jadwal_id"]+'\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
										'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_Jadwal(\''+item["jadwal_id"]+'\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
									'</div>'
								return_data.push({
									'no'    : (i+1),
									'klinik': item['klinik'],
									'v1' 	: item['v1'],
									'v2' 	: item['v2'],
									'v3' 	: item['v3'],
									'v4' 	: item['v4'],
									'v5' 	: item['v5'],
									'v6' 	: item['v6'],
									'v7' 	: item['v7'],
									'action': item['action'] == 1 ? button : ''
								})
							})
							return return_data
						}
					},
					columns : [
						{data : 'no'},
						{data : 'klinik'},
						{data : 'v1'},
						{data : 'v2'},
						{data : 'v3'},
						{data : 'v4'},
						{data : 'v5'},
						{data : 'v6'},
						{data : 'v7'},
						{data : 'action'}
					]
				});
	    }

	    function add_Jadwal(){            
			$('#add_Jadwal_mdl').modal('show');
	    }

	    function save_add_Jadwal(){
	    	var unit_kode = $('#unit_kode').val();
	    	var pegawai_nomor = $('#pegawai_nomor').val();
	    	var v1 = $('#v1_1').val()+'-'+$('#v1_2').val();
	    	var v2 = $('#v2_1').val()+'-'+$('#v2_2').val();
	    	var v3 = $('#v3_1').val()+'-'+$('#v3_2').val();
	    	var v4 = $('#v4_1').val()+'-'+$('#v4_2').val();
	    	var v5 = $('#v5_1').val()+'-'+$('#v5_2').val();
	    	var v6 = $('#v6_1').val()+'-'+$('#v6_2').val();
	    	var v7 = $('#v7_1').val()+'-'+$('#v7_2').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Jadwal/save_add',
	            data: {
	               unit_kode: unit_kode,
	               pegawai_nomor: pegawai_nomor,
	               v1: v1,
	               v2: v2,
	               v3: v3,
	               v4: v4,
	               v5: v5,
	               v6: v6,
	               v7: v7,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#add_Jadwal_mdl').modal('hide');
	    				getMainTable();
	    				getdatapoli();
						getdatadokter();
						getdatajam();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function edit_Jadwal(id) {
		   $.ajax({
		      type: 'GET',
		      url: '<?php echo base_url() ?>Jadwal/get_data_by_id/' + id,
		      dataType: 'json',
		      success: function(data) {

		    	$('#jadwal_id_edit').val(data.jadwal_id);
		    	$('#unit_kode_edit').val(data.unit_kode).change();;
		    	$('#pegawai_nomor_edit').val(data.pegawai_nomor).change();
		    	$('#v1_1_edit').val(data.v1_1);$('#v1_2_edit').val(data.v1_2);
		    	$('#v2_1_edit').val(data.v2_1);$('#v2_2_edit').val(data.v2_2);
		    	$('#v3_1_edit').val(data.v3_1);$('#v3_2_edit').val(data.v3_2);
		    	$('#v4_1_edit').val(data.v4_1);$('#v4_2_edit').val(data.v4_2);
		    	$('#v5_1_edit').val(data.v5_1);$('#v5_2_edit').val(data.v5_2);
		    	$('#v6_1_edit').val(data.v6_1);$('#v6_2_edit').val(data.v6_2);
		    	$('#v7_1_edit').val(data.v7_1);$('#v7_2_edit').val(data.v7_2);

		        $('#header_edit_Jadwal').html('Edit Data Jadwal <span class="text-info">'+data.unit_kode+'</span>');
		        $('#edit_Jadwal_mdl').modal("show");
		      }
		   });

		}

	    function save_edit_Jadwal(){
	    	var jadwal_id_edit = $('#jadwal_id_edit').val();
	    	var unit_kode_edit = $('#unit_kode_edit').val();
	    	var pegawai_nomor_edit = $('#pegawai_nomor_edit').val();
	    	var v1_edit = $('#v1_1_edit').val()+'-'+$('#v1_2_edit').val();
	    	var v2_edit = $('#v2_1_edit').val()+'-'+$('#v2_2_edit').val();
	    	var v3_edit = $('#v3_1_edit').val()+'-'+$('#v3_2_edit').val();
	    	var v4_edit = $('#v4_1_edit').val()+'-'+$('#v4_2_edit').val();
	    	var v5_edit = $('#v5_1_edit').val()+'-'+$('#v5_2_edit').val();
	    	var v6_edit = $('#v6_1_edit').val()+'-'+$('#v6_2_edit').val();
	    	var v7_edit = $('#v7_1_edit').val()+'-'+$('#v7_2_edit').val();


	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Jadwal/save_edit',
	            data: {
					jadwal_id: jadwal_id_edit,
					unit_kode: unit_kode_edit,
					pegawai_nomor: pegawai_nomor_edit,
					v1: v1_edit,
					v2: v2_edit,
					v3: v3_edit,
					v4: v4_edit,
					v5: v5_edit,
					v6: v6_edit,
					v7: v7_edit,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#edit_Jadwal_mdl').modal('hide');
	    				getMainTable();
	    				getdatapoli();
						getdatadokter();
						getdatajam();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

		function confirm_delete_Jadwal(id) {

			$('#id_delete').val(id);

		    $('#header_delete_Jadwal').html('Confirm Delete Data Jadwal');

			$('#confirm_delete_Jadwal_mdl').modal('show');

		}

	    function save_delete_Jadwal(){
	    	var id = $('#id_delete').val();

	        $.ajax({
	            type: "POST",
	            url: '<?php echo base_url() ?>Jadwal/save_delete',
	            data: {
	               id: id,
	            },
	            success: function(data) {
	               	console.log(data);
	               	if (data == 1) {
	        			toastr.success('Data berhasil diperbarui','Success');
	    				$('#confirm_delete_Jadwal_mdl').modal('hide');
	    				getMainTable();
	               	} else {
	                     toastr.error("Data gagal diperbarui", 'Failed');
	               	}
	            }
	        });

	    }

    </script>