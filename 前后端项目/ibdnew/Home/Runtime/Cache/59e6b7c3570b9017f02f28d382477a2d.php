<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link   rel= "shortcut icon"   href= "/ibdnew/PUBLIC/img/logo.png">
  <title>IBD-数据录入/新增病人</title>

  <!-- ========== Css Files ========== -->
  <link href="/ibdnew/PUBLIC/css/root.css" rel="stylesheet">  
  <link href="/ibdnew/PUBLIC/css/bd.styles.css" rel="stylesheet">  
  <link href="/ibdnew/PUBLIC/css/autocomplete_style.css" rel="stylesheet"> 
 
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
								<li class="btn btn-light"><a href="#panel-2">更改药品信息</a></li> 
								<li class="btn btn-light"><a href="#panel-3">添加药品信息</a></li> 
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
												<label for="cnum" class="col-sm-1 control-label form-label">病历号</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="cnum">
												</div>   
												
											</div> 
											<div class="form-group"> 
												<label for="med_name" class="col-sm-1 control-label form-label">药名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_name">
												</div>
												<label for="pro_name" class="col-sm-1 control-label form-label">商品名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="pro_name">
												</div> 
												<label class="col-sm-1 control-label form-label">剂型</label> 
												<div class="col-sm-1">
													<select class="selectpicker">
														  <option>片剂</option>
														  <option>栓剂</option>
														  <option>颗粒</option>
														  <option>灌肠液</option>
														  <option>注射液</option>
														  <option>胶囊</option>
														  <option>粉剂</option> 
														  <option>乳剂</option>
														  <option>混悬液</option>
														  <option>散</option>
													</select>
												</div> 
											</div>
										
											<div class="form-group"> 
												<label for="ethnic" class="col-sm-1 control-label form-label">药品规格</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="ethnic">
												</div>
												<label for="med_dose" class="col-sm-1 control-label form-label">单次剂量</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_dose">
												</div>
												<label for="med_times" class="col-sm-1 control-label form-label">次数/天</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_times">
												</div> 
											</div>
											<div class="form-group"> 
												<label for="ethnic" class="col-sm-1 control-label form-label">用药方式</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="ethnic">
												</div> 
												<label for="med_stime" class="col-sm-1 control-label form-label">开始时间</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_stime" onclick="laydate()">
												</div>
												<label for="med_sptime" class="col-sm-1 control-label form-label">结束时间</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_sptime" onclick="laydate()">
												</div> 
											</div>
											
											<div class="form-group">
												<label class="col-sm-1 control-label form-label">其它说明</label>
												<div class="col-sm-10">
												  <textarea class="form-control" rows="3" id="med_other" placeholder="Type your message..."></textarea>
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
										更改药品信息
										<ul class="panel-tools">
											<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
											<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
											<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
										</ul>
									</div>

									<div class="panel-body">
										<form class="form-horizontal">  
											<div class="form-group">  
												<label for="province" class="col-sm-1 control-label form-label">药名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="medicinename">
												</div> 
												<label for="telephone" class="col-sm-1 control-label form-label">商品名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="telephone">
												</div> 
												<label class="col-sm-1 control-label form-label">剂型</label> 
												<div class="col-sm-1">
													<select class="selectpicker">
														  <option>片剂</option>
														  <option>栓剂</option>
														  <option>颗粒</option>
														  <option>灌肠液</option>
														  <option>注射液</option>
														  <option>胶囊</option>
														  <option>粉剂</option> 
														  <option>乳剂</option>
														  <option>混悬液</option>
														  <option>散</option>
													</select>
												</div> 
											</div>
										
											<div class="form-group"> 
												<label for="ethnic" class="col-sm-1 control-label form-label">药品规格</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="ethnic">
												</div>  
												<label for="ethnic" class="col-sm-1 control-label form-label">用药方式</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="ethnic">
												</div> 
												<label for="nfactory" class="col-sm-1 control-label form-label">厂家</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nfactory">
												</div> 
											</div> 
											</br>
											<div style=" text-align:center;">
												<a href="javascript:save1()" class="btn btn-rounded btn-default">保存</a>
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
												<label for="med_belong" class="col-sm-1 control-label form-label">新建药品归属类</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="med_belong">
												</div> 
												<a href="javascript:create_classname()" class="btn btn-rounded btn-default">确认新建</a> 
											</div>	
											<div class="form-group">  
												<label for="nmed_name" class="col-sm-1 control-label form-label">药名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nmed_name">
												</div> 
												<label for="npro_name" class="col-sm-1 control-label form-label">商品名</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="npro_name">
												</div> 
												<label for="nfactory" class="col-sm-1 control-label form-label">厂家</label>
												<div class="col-sm-3">
													<input type="text" class="form-control form-control-radius" id="nfactory">
												</div> 
											</div>
										
											<div class="form-group"> 
												<label for="nmed_type"class="col-sm-1 control-label form-label">剂型</label> 
												<div class="col-sm-3">
													<select class="selectpicker" id="nmed_type">
														  <option>片剂</option>
														  <option>栓剂</option>
														  <option>颗粒</option>
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
<!-- End Footer -->


</div>
 
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<?php
 require("./PUBLIC/php/sidepanel.php"); ?>
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 
<?php
 require('./PUBLIC/php/common_js.php'); ?>


<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->

<!-- Today Activity --> 
 <script src="/ibdnew/PUBLIC/js/medicine/bd.ui.js"></script>
 
<script> 
   
	$('#med_stime').focusin(
		function (){
			laydate();
		}
	); 
	$('#med_sptime').focusin(
		function (){
			laydate();
		}
	);
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
		var med_times = $('#med_times').val();
		var med_stime = $('#med_stime').val();
		var med_sptime = $('#med_sptime').val(); 
		if (!check())
		{
			return; 
		} 
		var ifconfirm=confirm("病历号: "+cnum+" 药名: "+med_name+" 剂量: "+med_dose+" 次数: "+med_times+" 起始时间："+med_stime+
								" 停药时间："+med_sptime);
		if(ifconfirm==true){
			$.ajax({
				type:'post',
				url:'/ibdnew/index.php/Medicine/save_Medicine',
				data:'&cnum='+cnum+'&med_name='+med_name+'&med_dose='+med_dose+'&med_times='+med_times+'&med_stime='+med_stime
					 +'&med_sptime='+med_sptime,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("添加药物失败","该病历号已经存在","error");
							else  {
								swal("成功添加药品");
							}
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			});
		}else{
			
		} 
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
		var ifconfirm=confirm("归属类: "+med_belong+" 药名: "+nmed_name+" 商品名: "+npro_name+" 厂家: "+nfactory+
		" 药品规格："+nspecification+ " 药品剂型："+nmed_type+" 用药方式："+nmed_way);
		if(ifconfirm==true){
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
		}else{
			
		} 
	}
	function create_classname()
	{	
		if($('#med_belong').val() == ""){
			swal('未输入药品所属类');
			return ;
		}
		var classname = $('#med_belong').val(); 
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