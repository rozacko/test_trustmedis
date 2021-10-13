
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <h5>List Data Kunjungan</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up text-white"></i>
                    </a>
                </div>
            </div>
            <br><br>
            <div class="form-row">
            	<div class="form-group col">
                    <label>Tanggal Masuk : </label>
                    <input class="form-control" value="<?php echo date('Y-m-d'); ?>" type="date" id="date" name="date">
                </div>
                <div class="form-group col">
                    <label>Poli</label>
                    <select class="form-control" id="unit_kode" name="unit_kode">
                        <option value="" disabled selected>Pilih...</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Cara Bayar</label>
                    <select class="form-control" id="bayar_id" name="bayar_id">
                        <option value="" disabled selected>Pilih...</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Diagnosa</label>
                    <select class="form-control" id="diagnosa_kode" name="diagnosa_kode">
                        <option value="" disabled selected>Pilih...</option>
                    </select>
                </div>                
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" width="100%" id="main-table">
	                    <thead>
		                    <tr>
		                        <th width="5%">#</th>
                                <th width="10%">Poli</th>
                                <th width="20%">Nama Pasien</th>
                                <th width="10%">Alamat</th>
                                <th width="10%">Cara Bayar</th>
                                <th width="25%">Diagnosa</th>
		                        <th width="10%">Dokter</th>
		                        <th width="20%">Tanggal Masuk</th>
		                        <th width="20%">Tanggal Pulang</th>
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
        	// $('#datePicker').val(new Date().toDateInputValue());           
            getdatapoli();
            getdatabayar();
			getdatadiagnosa();
			getMainTable();
        });

        $('#date').on('change', function() {
            getMainTable();          
        });
        $('#unit_kode').on('change', function() {
            getMainTable();          
        });
        $('#bayar_id').on('change', function() {
            getMainTable();          
        });
        $('#diagnosa_kode').on('change', function() {
            getMainTable();          
        });

        function getdatapoli(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Report3/get_data_poli',
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
	            }
	        });
        }

        function getdatabayar(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Report3/get_data_bayar',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].bayar_kode+'>'+data[i].bayar_nama+'</option>';
	                }
                    $('#bayar_id').html(html);
	            }
	        });
        }

        function getdatadiagnosa(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Report3/get_data_diagnosa',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].diagnosa_kode+'>'+data[i].diagnosa_kode+' - '+data[i].diagnosa_name+'</option>';
	                }
                    $('#diagnosa_kode').html(html);	                
	            }
	        });
        }
      
	    function getMainTable(){	    	
            var date = $('#date').val() == null ? 'ALL' : $('#date').val();
			var unit_kode = $('#unit_kode').val() == null ? 'ALL' : $('#unit_kode').val();
			var bayar_id = $('#bayar_id').val() == null ? 'ALL' : $('#bayar_id').val();
			var diagnosa_kode = $('#diagnosa_kode').val() == null ? 'ALL' : $('#diagnosa_kode').val();
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
							{extend: 'pdf', title: 'DATA KUNJUNGAN POLI-DIAGNOSA'},
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
						url:'<?=base_url("Report3/get_data/")?>' + date + '/' + unit_kode + '/' + bayar_id + '/' + diagnosa_kode,
						type:'GET',
						dataSrc : function(json){
							var return_data = new Array()
							$.each(json['response'], function(i, item){								
								return_data.push({
									'no'    	: (i+1),
                                    'poli'		: item['poli'],
                                    'nama'		: item['nama'],
                                    'kota'		: item['kota'],
                                    'bayar'		: item['bayar'],
                                    'diagnosa'	: item['diagnosa'],
									'dokter'	: item['dokter'],
									'masuk'		: item['masuk'],
									'pulang'	: item['pulang'],
								})
							})
							return return_data
						}
					},
					columns : [
						{data : 'no'},
						{data : 'poli'},
						{data : 'nama'},
						{data : 'kota'},
						{data : 'bayar'},
						{data : 'diagnosa'},
						{data : 'dokter'},
						{data : 'masuk'},
						{data : 'pulang'}
					],
					rowsGroup: [
				      'first:nama',
				      'second:nama'
				    ],
				});
	    }	    
    </script>