<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link   rel= "shortcut icon"   href= "/ibdnew/PUBLIC/img/logo.png">
  <title>IBD-数据录入/新增药品</title>

  <!-- ========== Css Files ========== -->
  <link href="/ibdnew/PUBLIC/css/root.css" rel="stylesheet">  
  <link href="/ibdnew/PUBLIC/css/bd.styles.css" rel="stylesheet">  
  <link href="/ibdnew/PUBLIC/css/autocomplete_style.css" rel="stylesheet"> 
 <style>
.exp{ float:left; width:400px;   solid: #F0F}
.exp1{ float:left; width:200px;   solid: #F0F}
.exp2{ float:right; width:200px;   solid: #F0F}
.exp3{ float:left;}
</style>
  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="/ibdnew/PUBLIC/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<?php
 require("./PUBLIC/php/top.php"); ?>
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<?php
 require("./PUBLIC/php/sidebar.php"); ?>
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->

<div class="content"> 
 <!-- Start Row -->
	<div class="row">
		<div class="wrapper">
			 
				<div class="demo" id="demo-one"> 
					<div class="form-group"> 
						<nav class="subnav tabs">
							<ul>  
								<li class= "btn btn-light active"><a href="#panel-1">添加药品</a></li>
								<li class= "btn btn-light active"><a href="#panel-4">用药信息</a></li>
								<li class="btn btn-light"><a href="#panel-2">药品信息</a></li> 
								<li class="btn btn-light"><a href="#panel-3">新建药品</a></li> 
							</ul>
						</nav>
					</div>
					<div class="Apanels">
						<div class="Apanel" id="panel-1">
							<div class="col-md-12">
								<div class="panel panel-default"> 
									<div class="panel-title">
										新增药品
										<ul class="panel-tools">
											<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
											<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
											<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
										</ul>
									</div>

									<div class="panel-body">
										<form class="form-horizontal"> 
											<div class="form-group"> 
												<label for="cnum" class="col-sm-1 control-label form-label" >病历号</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="cnum" value="<?php echo ($cnum); ?>">
												</div>   
												
											</div> 
											<div class="form-group"> 
												<label for="med_name" class="col-sm-1 control-label form-label">药名</label>
												<div class="col-sm-5">
													<input type="text" class="form-control form-control-radius" id="med_name">
												</div>
											</div>
										
											<div class="form-group">
												<label for="med_way" class="col-sm-1 control-label form-label">用药方式</label>
												<div class="col-sm-3">
													<select class="selectpicker" id="med_way">
														<option>口服</option>
														<option>输液</option>
														<option>皮下</option>
														<option>肌注</option>
														<option>皮内</option>
														<option>鼻饲</option>
														<option>雾化</option>
														<option>静推</option>
														<option>舌下</option>
														<option>小壶</option>
														<option>灌注</option>
														<option>静脉泵入</option>
													</select>
												</div>
                                                <label for="med_times" class="col-sm-1 control-label form-label">用药频率</label>
                                                <div class="col-sm-3">
                                                    <select class="selectpicker" id="med_times">
                                                        <option>晨1次</option>
                                                        <option>早晚各1次</option>
                                                        <option>早中晚各1次</option>
                                                        <option>睡前1次</option>
                                                        <option>一日4次</option>
                                                        <option>每小时1次</option>
                                                        <option>每小时2次</option>
                                                        <option>每小时3次</option>
                                                        <option>每小时4次</option>
                                                        <option>每小时6次</option>
                                                        <option>每小时8次</option>
                                                        <option>每12小时1次</option>
                                                        <option>中午1次</option>
                                                        <option>每周1次</option>
                                                        <option>每周2次</option>
                                                        <option>每周3次</option>
                                                        <option>每周4次</option>
                                                        <option>每周5次</option>
                                                        <option>即刻</option>
                                                        <option>2周1次</option>
                                                        <option> 隔日1次</option>
                                                        <option>每周2次</option>
                                                        <option>下午4点1次</option>
                                                        <option>3天1次</option>
                                                    </select>
                                                </div>
												<label for="med_dose" class="col-sm-1 control-label form-label">单次剂量</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_dose">
												</div>
												<!--<label for="med_times" class="col-sm-1 control-label form-label">次数/天</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_times">
												</div> -->
											</div>
											<div class="form-group">
												<label for="med_stime" class="col-sm-1 control-label form-label">开始时间</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_stime"  >
												</div>
												<label for="med_sptime" class="col-sm-1 control-label form-label">结束时间</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_sptime"  >
												</div> 
											</div>

											</br>
											<div style=" text-align:center;">
												<a href="javascript:save()" class="btn btn-rounded btn-default">保存</a>
											</div> 
											</br>
											</br>
											</br>
											</br> 
										</form>  
									</div>

								</div>
							</div>
						</div><!-- .Apanel -->
		
						<div class="Apanel" id="panel-2">
								<div class="col-md-12">
							  <div class="panel panel-default">
								<div class="panel-title">
								  DAtaTables
								</div>
								<div class="panel-body table-responsive">

									<table id="example0" class="table display">
										<thead>
											<tr>
												<th>药名</th>
												<th>商品名</th>
												<th>厂家</th>
												<th>剂型</th>
												<th>药品规格</th>
												<th>用药方式</th>
												<th>所属类</th> 
											</tr>
										</thead>
									 
										<tfoot>
											<tr>
												<th>药名</th>
												<th>商品名</th>
												<th>厂家</th>
												<th>剂型</th>
												<th>药品规格</th>
												<th>用药方式</th>
												<th>所属类</th>	 
											</tr>
										</tfoot>
									 
										<tbody>
											<?php if(is_array($med_data)): foreach($med_data as $key=>$vo): ?><tr>
												<td><?php echo ($vo['med_name']); ?></td>
												<td><?php echo ($vo['pro_name']); ?></td>
												<td><?php echo ($vo['factory']); ?></td>
												<td><?php echo ($vo['med_type']); ?></td>
												<td><?php echo ($vo['specification']); ?></td> 
												<td><?php echo ($vo['way']); ?></td> 
												<td><?php echo ($vo['belong']); ?></td>  
											</tr><?php endforeach; endif; ?>  
										</tbody>
									</table>


								</div>

							  </div>
							</div>
						</div><!-- .panel -->
						
						<div class="Apanel" id="panel-4">
								<div class="col-md-12">
							  <div class="panel panel-default">
								<div class="panel-title">
								  表格
								</div>
								<div class="panel-body table-responsive">

									<table id="example1" class="table display">
										<thead>
											<tr>
												<th>病例号</th>
												<th>药品名</th>
												<th>单次剂量</th>
												<th>次数/天</th>
												<th>用药方式</th>
												<th>开始时间</th>
												<th>结束时间</th>
											</tr>
										</thead>
									 
										<tfoot>
											<tr>
												<th>病例号</th>
												<th>药品名</th>
												<th>单次剂量</th>
												<th>次数/天</th>
												<th>用药方式</th>
												<th>开始时间</th> 
												<th>结束时间</th>
											</tr>
										</tfoot>
									 
										<tbody>
                                        <?php if(is_array($addMedecine)): foreach($addMedecine as $key=>$items): if(is_array($items)): foreach($items as $key=>$vo): ?><tr>
                                                    <td><?php echo ($vo['cnum']); ?></td>
                                                    <td><?php echo ($vo['med_name']); ?></td>
                                                    <td><?php echo ($vo['med_dose']); ?></td>
                                                    <td><?php echo ($vo['med_times']); ?></td>
                                                    <td><?php echo ($vo['med_way']); ?></td>
                                                    <td><?php echo ($vo['med_stime']); ?></td>
                                                    <td><?php echo ($vo['med_sptime']); ?></td>
                                                </tr><?php endforeach; endif; endforeach; endif; ?>
										</tbody>
									</table>


								</div>

							  </div>
							</div>
						</div><!-- .panel -->
						

					    <div class="Apanel" id="panel-3">
								<div class="col-md-12">
								<div class="panel panel-default"> 
									<div class="panel-title">
										添加药品信息
										<ul class="panel-tools">
											<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
											<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
											<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
										</ul>
									</div>

									<div class="panel-body">
										<form class="form-horizontal">  										
											<div class="form-group">   
												<label for="nmed_belong" class="col-sm-1 control-label form-label">新建药品归属类</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nmed_belong">
												</div> 
												<a href="javascript:create_classname()" class="btn btn-rounded btn-default">确认新建</a> 
											</div>	
											<div class="form-group">  
												<label for="nmed_name" class="col-sm-1 control-label form-label">药名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nmed_name">
												</div> 
                                                <label for="med_belong" class="col-sm-1 control-label form-label">药品归属</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_belong">
												</div> 
												<label for="npro_name" class="col-sm-1 control-label form-label">商品名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="npro_name">
												</div> 
												
											</div>
										
											<div class="form-group"> 
												<label for="nmed_type"class="col-sm-1 control-label form-label">剂型</label> 
												<div class="col-sm-3">
													<select class="selectpicker" id="nmed_type">
														  <option>片剂</option>
														  <option>栓剂</option>
														  <option>颗粒</option>
														  <option>溶液</option>
														  <option>灌肠液</option>
														  <option>注射液</option>
														  <option>胶囊</option>
														  <option>粉剂</option>
														  <option>乳剂</option>
														  <option>混悬液</option>
														  <option>散</option>
													</select>
												</div>
												<label for="nspecification" class="col-sm-1 control-label form-label">药品规格</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nspecification">
												</div>
												<label for="nmed_way" class="col-sm-1 control-label form-label">用药方式</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nmed_way">
												</div> 
												
												 
												
											</div> 
                                             <label for="nfactory" class="col-sm-1 control-label form-label">厂家</label>
                                            <div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nfactory">
												</div>
											</br>
											<div style=" text-align:center;">
												<a href="javascript:new_save()" class="btn btn-rounded btn-default">保存</a>
											</div> 
											</br>
											</br>
											</br>
											</br> 
										</form>  
									</div>

								</div>
							</div>
						</div><!-- .panel -->
					</div>
				</div>
			 
		</div> 

	</div>
  <!-- End Row -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-12 text-left">
  Copyright &copy; 2018.ibd医疗数据管理 All rights reserved.
  </div>
</div>
</div>
<?php
 require("./PUBLIC/php/sidepanel.php"); ?>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/jquery.min.js"></script>
<script src="/ibdnew/PUBLIC/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/plugins.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/flot-chart/flot-chart-plugin.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/easypiechart/easypiechart-plugin.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/ibdnew/PUBLIC/js/sparkline/sparkline-plugin.js"></script>
<script src="/ibdnew/PUBLIC/js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="/ibdnew/PUBLIC/js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="/ibdnew/PUBLIC/js/rickshaw/rickshaw-plugin.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/moment/moment.min.js"></script>
<script src="/ibdnew/PUBLIC/js/sweet-alert/sweet-alert.min.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery-1.9.1.min.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery.autocomplete.min.js"></script> 
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-ethnic.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-province.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-medicine.js"></script>
<script src="/ibdnew/PUBLIC/js/datatables/datatables.min.js"></script>
  <script src="/ibdnew/PUBLIC/js/medicine/bd.ui.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/bootstrap-select/bootstrap-select.js"></script>
  <script type="text/javascript" src="/ibdnew/PUBLIC/js/laydate/laydate.js"></script>
  <script>
   $(document).ready(function() {
   laydate.render({elem:'#med_sptime',calendar: true,})
	laydate.render({elem:'#med_stime',calendar: true,})
   $('#example0').DataTable();
	$('#example1').DataTable();
} );   
	function check()
	{  
		
		if ($('#cnum').val() == "")
		{
			swal('未输入病历号');
			return false;
		} 
		if ($('#med_dose').val() == "")
		{
			swal('未输入单次剂量');
			return false;
		} if ($('#med_stime').val() == "")
		{
			swal('未输入起始时间');
			return false;
		} if ($('#med_times').val() == "")
		{
			swal('未输入每天服用次数');
			return false;
		} 
		//swal($('input[name="type"]:checked').val());
		return true;
	}
	function save()
	{	
		var cnum = $('#cnum').val();
		var med_name = $('#med_name').val();
		var med_dose = $('#med_dose').val();
		var med_times = $('#med_times').selectpicker('val') ;
		var med_stime = $('#med_stime').val(); 
		var med_sptime = $('#med_sptime').val();   
	    var med_way = $('#med_way').selectpicker('val') ;
        var pro_name = '';
        var specification = '';
        med_name = med_name.replace('[','');
        med_name = med_name.replace(']','');
        med_name = med_name.split(' ');

		if(med_name.length == 3){
             pro_name = med_name[1];
             specification = med_name[2];
		}else{
            specification  = med_name[1];
		}
		med_name = med_name[0];

		if (!check())
		{
			return; 
		}
		//var ifconfirm=confirm("病历号: "+cnum+" 药名: "+med_name+" 商品名："+pro_name+"药品规格："+specification+""+"剂型："+med_type+" 剂量: "+med_dose+" 次数: "+med_times+" 起始时间："+med_stime+
			//	" 停药时间："+med_sptime);
		swal({  
            title:'',
			text:  '<p><div class="exp"><div class="exp1"> <label class="exp3"> 病历号：'+cnum+'</label></div><div class="exp2"><label class="exp3">药名：  '+med_name+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">商品名：'+pro_name+'</label></div><div class="exp2"><label class="exp3">药品规格： '+specification+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">用药方式：'+med_way+'</label></div><div class="exp2"><label class="exp3">剂量： '+med_dose+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">次数： '+med_times+'</label></div><div class="exp2"><label class="exp3">起始时间：'+med_stime+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">停药时间：'+med_sptime+'</label></div></div></p>' ,
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:false
         },
         function(isConfirm){
           $.ajax({
				type:'post',
				url:'/ibdnew/index.php/Medicine/save_Medicine',
				data:'&cnum='+cnum+'&med_name='+med_name+'&pro_name='+pro_name+'&med_dose='+med_dose+'&med_times='+med_times+'&med_stime='+med_stime
               +'&med_sptime='+med_sptime+'&specification='+specification+'&med_way='+med_way,
               success : function success(data)
						{
							if (data.status == "failed")
							  swal("添加药物失败",data.reason,'error');
							else  {
								swal("成功添加药品");
							}
						},
				error : function error()
				{
					swal('数据发送失败','','error');
				}
			});
         }
         ); 
		   
	}
	function new_check(){
		if($('#med_belong').val() == ""){
			swal('未输入药品所属类');
			return false;
		}
		if($('#nmed_name').val() == ""){
			swal('未输入药品的名称')
			return false;
		} return true;
	}
	function new_save()
	{	
		var med_belong = $('#med_belong').val();
		var nmed_name = $('#nmed_name').val();
		var npro_name = $('#npro_name').val();
		var nfactory = $('#nfactory').val();
		var nspecification = $('#nspecification').val();
		var nmed_type = $('#nmed_type').val();
		var nmed_way = $('#nmed_way').val();
		if (!new_check())
		{
			return; 
		}  
		swal({  
            title:'',
			text:  '<p><div class="exp"><div class="exp1"> <label class="exp3"> 药名：'+nmed_name+'</label></div><div class="exp2"><label class="exp3">归属类：'+ med_belong+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">商品名：'+npro_name+'</label></div><div class="exp2"><label class="exp3">厂家：'+nfactory+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">药品规格：'+nspecification+'</label></div><div class="exp2"><label class="exp3">药品剂型：'+nmed_type+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">用药方式：'+nmed_way+'</label></div></div></p>' ,
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:false
         },
         function(isConfirm){
            $.ajax({
				type:'post',
				url:'/ibdnew/index.php/Medicine/save_nMedicine',
				data:'&belong='+med_belong+'&med_name='+nmed_name+'&pro_name='+npro_name+
				'&factory='+nfactory+'&specification='+nspecification+'&med_type='+nmed_type+'&way='+nmed_way,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("新增药物信息失败",data.reason,"error");
							else  {
								swal("成功添加药物");
							}
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			});
         }
         ); 
		
		 
	}
	function create_classname()
	{	
		if($('#nmed_belong').val() == ""){
			swal('未输入药品所属类');
			return ;
		}
		var classname = $('#nmed_belong').val(); 
		$.ajax({
				type:'post',
				url:'/ibdnew/index.php/Medicine/new_classname',
				data:'&classname='+classname,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("新增药物类失败",data.reason,"error");
							else  {
								swal("成功添加药物类");
							}
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			});
	}  
	function completion()
	{	
		if($('#nmed_belong').val() == ""){
			swal('未输入药品所属类');
			return ;
		}
		var classname = $('#nmed_belong').val(); 
		$.ajax({
				type:'post',
				url:'/ibdnew/index.php/Medicine/new_classname',
				data:'&classname='+classname,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("新增药物类失败",data.reason,"error");
							else  {
								swal("成功添加药物类");
							}
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			});
	}
</script>

</body>
</html>