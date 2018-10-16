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

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          新增病人
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-1 control-label form-label">发病类型</label>
                  <div class="col-sm-5">
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="0" name="type">
                        <label for="inlineRadio1"> UC </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio2" value="1" name="type">
                        <label for="inlineRadio2"> CD </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio3" value="2" name="type">
                        <label for="inlineRadio3"> IBDU </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio4" value="3" name="type">
                        <label for="inlineRadio4"> IC </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
				
                  <label for="cnum" class="col-sm-1 control-label form-label">病历号</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="cnum">
                  </div>
				  
				  <label for="snum" class="col-sm-1 control-label form-label">社保号</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="snum">
                  </div>
				  
				  <label for="name" class="col-sm-1 control-label form-label">姓名</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="name">
                  </div>
                </div>
				 <div class="form-group">
				
                  <label for="num" class="col-sm-1 control-label form-label">性	&nbsp;	&nbsp;别</label>
                  <div class="col-sm-3">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="sex0" value="0" name="sex">
                        <label for="sex0"> 男 </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="sex1" value="1" name="sex">
                        <label for="sex1"> 女 </label>
                    </div>
                  </div>
				  
				  <label for="birth" class="col-sm-1 control-label form-label">出生日期</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="birth" onclick="laydate()">
                  </div>
				  
				  
				  <label for="province" class="col-sm-1 control-label form-label">省市</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="province">
                  </div>
                </div>
				
				<div class="form-group">
				
                  <label for="telephone" class="col-sm-1 control-label form-label">联系电话</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="telephone">
                  </div>
				  
				  <label for="mobile1" class="col-sm-1 control-label form-label">手机1</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="mobile1">
                  </div>
				  
				  <label for="mobile2" class="col-sm-1 control-label form-label">手机2</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="mobile2">
                  </div>
                </div>
				
				<div class="form-group">
				  
				  
                  <label for="ethnic" class="col-sm-1 control-label form-label">民族</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="ethnic">
                  </div>
                  <label for="doctor_in_charge" class="col-sm-1 control-label form-label">主管医生</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="doctor_in_charge">
                  </div>
				  
				</div>
				
				 <div class="form-group">
                  <label class="col-sm-1 control-label form-label">其它说明</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="other" placeholder="Type your message..."></textarea>
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
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/laydate/laydate.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery.autocomplete.min.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-ethnic.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-province.js"></script>

<script>
    laydate.render({elem:'#birth',calendar: true});
	function pre_check()
	{
		if ($('input[name="type"]:checked').val() == null)
		{
			swal('未选择发病类型');
			return false;
		}
		if ($('input[name="sex"]:checked').val() == null)
		{
			swal('未选择性别');
			return false;
		}
		if ($('#cnum').val() == null)
		{
			swal('未输入病历号');
			return false;
		}
		
		if ($('#name').val() == null)
		{
			swal('姓名不能为空');
			return false;
		}
		if ($('#birth').val() == null)
		{
			swal('出生日期不能为空');
			return false;
		}
		//swal($('input[name="type"]:checked').val());
		return true;
	}
	
	
	function save()
	{
		if (!pre_check())
		{
			return;
		}
		var type = $('input[name="type"]:checked').val();
		var cnum = $('#cnum').val();
		var snum = $('#snum').val();
		var name = $('#name').val();
		var sex = $(':input[name="sex"]:checked').val();
		var birth = $('#birth').val();
		var province =  $('#province').val();
		var telephone = $('#telephone').val();
		var mobile1 = $('#mobile1').val();
		var mobile2 = $('#mobile2').val();
		var DIC = $('#doctor_in_charge').val();
		var other = $('#other').val();
		var ethnic = $('#ethnic').val();
		var ifconfirm=confirm("病历号: "+cnum+" 社保号: "+snum+" 姓名: "+name+" 性别： "+sex+" 出生日期："+birth
		+" 省份："+province+" 联系电话: "+telephone+" 手机1："+mobile1+ "手机2："+mobile2+" 民族: "+ethnic
		+" 主管医生: "+DIC+" 其它说明: "+other);
		 
		if(ifconfirm==true){
			$.ajax({
				type:'post',
				url:'/ibdnew/index.php/new/savePatient',
				data:'type='+type+'&cnum='+cnum+'&snum='+snum+'&name='+name+'&sex='+sex
					 +'&birth='+birth+'&province='+province+'&telephone='+telephone
					 +'&mobile1='+mobile1+'&mobile2='+mobile2+'&doctor_in_charge='+DIC
					 +'&other='+other+'&ethnic='+ethnic,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("新增病人失败","该病历号已经存在","error");
							else swal({ 
							  title: "新增病人成功", 
							  text: " &type ", 
							  type: "success",
							  showCancelButton: true, 
							  confirmButtonColor: "#33CC52",
							  cancelButtonColor: "#1ABDE6",
							  confirmButtonText: "确定跳转", 
							  cancelButtonText: "留在本界面",
							  closeOnConfirm: false, 
							  closeOnCancel: false	
							},
							function(isConfirm){ 
							  if (isConfirm) { 
								window.location = '/ibdnew/index.php/show/person/cnum/'+cnum;
							  } else { 
								swal("成功", "您将留在本页面",
							"success"); 
							  } 
							});
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			});
		}else{
			
		} 
	}
</script>


</body>
</html>