
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <h5>List Data Diagnosa</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up text-white"></i>
                    </a>
                </div>
            </div>
            <br><br>
            <div class="form-row">
                <div class="form-group col">
                    <label>Nama Kota</label>
                    <select class="form-control" id="pasien_kota" name="pasien_kota">
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
                                <th width="20%">Nama Kota</th>
                                <th width="35%">Diagnosa</th>
		                        <th width="20%">Jumlah</th>
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
            getdatakota();
			getdatadiagnosa();
			getMainTable();
        });

        $('#pasien_kota').on('change', function() {
            getMainTable();          
        });
        $('#diagnosa_kode').on('change', function() {
            getMainTable();          
        });

        function getdatakota(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Report2/get_data_kota',
	            method : "POST",
	            async : true,
	            dataType : 'json',
	            success: function(data){
	                 
	                var html = '';
	                var i;
	                for(i=0; i<data.length; i++){
	                    html += '<option value='+data[i].kota_kode+'>'+data[i].kota_kode+'</option>';
	                }
                    $('#pasien_kota').html(html);
	            }
	        });
        }

        function getdatadiagnosa(){
        	$.ajax({
	            url : '<?php echo base_url() ?>Report2/get_data_diagnosa',
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
            var pasien_kota = $('#pasien_kota').val() == null ? 'ALL' : $('#pasien_kota').val();
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
							{extend: 'pdf', title: 'DATA REPORT POLI-DIAGNOSA'},
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
						url:'<?=base_url("Report2/get_data/")?>' + pasien_kota + '/' + diagnosa_kode,
						type:'GET',
						dataSrc : function(json){
							var return_data = new Array()
							$.each(json['response'], function(i, item){								
								return_data.push({
									'no'    : (i+1),
                                    'kota': item['kota'],
                                    'diagnosa': item['diagnosa'],
									'jumlah': item['jumlah'],
								})
							})
							return return_data
						}
					},
					columns : [
						{data : 'no'},
                        {data : 'kota'},
						{data : 'diagnosa'},
						{data : 'jumlah'}
					]
				});
	    }	    
    </script>