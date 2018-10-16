<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link   rel= "shortcut icon"   href= "/ibdnew/PUBLIC/img/logo.png">
  <title>IBD-病例管理</title>

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

   <!-- Start Panel -->
    <div class="col-md-6 col-lg-8">
      <div class="panel panel-default">

        <div class="panel-title">
          <h4>基本信息</h4>
          <ul class="panel-tools">
            <li>
			  </br>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">操作<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#" data-toggle="modal" data-target="#edit">启用编辑</a></li>
                  <li><a href="javascript:swal('刷新成功','病历号为<?php echo ($cnum); ?>的病人用户信息已经刷新','success');">刷新</a></li>
                  <li><a href="javascript:swal('删除失败','您没有删除的权限','error');">删除</a></li>
                </ul>
				
            </li>
          </ul>
        </div>

        <div class="panel-body">

              <div class="col-md-6 padding-0">
                  <dl class="dl-horizontal">
                    <dt>姓名</dt>
                    <dd><?php echo ($name); ?></dd>
                    <dt>病历号</dt>
                    <dd><?php echo ($cnum); ?></dd>
                    <dt>初定发病类型</dt>
                    <dd><?php echo ($first_type); ?></dd>
                    <dt>性别</dt>
                    <dd><?php echo ($sex=='0'?'男':'女'); ?></dd>
                    <dt>出生日期</dt>
                    <dd><?php echo ($birth); ?></dd>
                    <dt>民族</dt>
                    <dd><?php echo ($ethnic); ?></dd>
                    <dt>手机1</dt>
                    <dd><?php echo ($mobile1); ?></dd>
                    <dt>主管医师</dt>
                    <dd><?php echo ($doctor_in_charge); ?></dd>
                  </dl>
              </div>
			  <div class="col-md-6 padding-0">
                  <dl class="dl-horizontal">
                    <dt>_</dt>
                    <dd>_</dd>
                    <dt>社保号</dt>
                    <dd><?php echo ($snum); ?></dd>
                    <dt>复定发病类型</dt>
                    <dd><?php echo ($second_type); ?></dd>
                    <dt>年龄</dt>
                    <dd><?php echo ($age); ?></dd>
                    <dt>省市</dt>
                    <dd><?php echo ($province); ?></dd>
                    <dt>联系电话</dt>
                    <dd><?php echo ($telephone); ?></dd>
                    <dt>手机2</dt>
                    <dd><?php echo ($mobile2); ?></dd>
                    <dt>其它说明</dt>
                    <dd><?php echo ($other); ?></dd>
                  </dl>
              </div>
        </div>

      </div>
    </div>
    <!-- End Panel -->
	 <!-- Start Project Stats -->
    <div class="col-md-12 col-lg-8">
      <div class="panel panel-widget">
        <div class="panel-title">
          住院记录 <span class="label label-info"><?php echo ($total); ?></span>
		  &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		  <a href = '#' data-toggle="modal" data-target="#newRecord"><span class="label label-default"><i class="fa fa-plus"></i>点击新增住院记录</span></a>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover">
            <thead>
              <tr>
                <td>ID</td>
                <td>开始时间</td>
                <td>结束时间</td>
                <td class="text-right">Progress</td>
              </tr>
            </thead>
            <tbody>
				<?php if(is_array($record)): foreach($record as $key=>$vo): ?><tr>
					<td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['begin']); ?></td>
					<td><?php echo ($vo['end'] == "2100-01-01" ? 未出院（至今） : $vo['end']); ?></td>
					<td class="text-right"><span class="demo-project-stats"></span></td>
				</tr><?php endforeach; endif; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- Start Project Stats -->


    



  </div>
  
  <!-- End Row -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!--Modal-->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">编辑页面（未完成）</h4>
		  </div>
		  <div class="modal-body">
		  
		     <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-1 control-label form-label">初定发病类型</label>
                  <div class="col-sm-3">
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="0" name="type" disabled>
                        <label for="inlineRadio1"> UC </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio2" value="1" name="type" disabled>
                        <label for="inlineRadio2"> CD </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio3" value="2" name="type" disabled>
                        <label for="inlineRadio3"> IBDU </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio4" value="3" name="type" disabled>
                        <label for="inlineRadio4"> IC </label>
                    </div>
                  </div>
				  <!--我是分割线-->
				  <label class="col-sm-1 control-label form-label">复定发病类型</label>
                  <div class="col-sm-3">
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio5" value="0" name="type2" disabled>
                        <label for="inlineRadio5"> UC </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio6" value="1" name="type2" disabled>
                        <label for="inlineRadio6"> CD </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio7" value="2" name="type2" disabled>
                        <label for="inlineRadio7"> IBDU </label>
                    </div>
					<div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio8" value="3" name="type2" disabled>
                        <label for="inlineRadio8"> IC </label>
                    </div>
					
					
                  </div>
				  <div class="col-sm-3">
					<button type="button" class="btn btn-default" onclick="activeType2()">启动复定类型编辑</button>
					<script>
						function activeType2()
						{
						   // swal('点击');
							$(':radio[id="inlineRadio5"]').removeAttr('disabled');
							$(':radio[id="inlineRadio6"]').removeAttr('disabled');
							$(':radio[id="inlineRadio7"]').removeAttr('disabled');
							$(':radio[id="inlineRadio8"]').removeAttr('disabled');
						//	swal('click');
						}
					</script>
				 </div>
                </div>

                <div class="form-group">
				
                  <label for="cnum" class="col-sm-1 control-label form-label">病历号</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="cnum" value="<?php echo ($cnum); ?>" disabled>
                  </div>
				  
				  <label for="snum" class="col-sm-1 control-label form-label">社保号</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="snum" value="<?php echo ($snum); ?>">
                  </div>
				  
				  <label for="name" class="col-sm-1 control-label form-label">姓名</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="name" value="<?php echo ($name); ?>">
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
                    <input type="text" class="form-control form-control-radius" id="birth" onclick="laydate()" value="<?php echo ($birth); ?>">
                  </div>
				  
				  
				  <label for="province" class="col-sm-1 control-label form-label">省市</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="province" value="<?php echo ($province); ?>">
                  </div>
                </div>
				
				<div class="form-group">
				
                  <label for="telephone" class="col-sm-1 control-label form-label">联系电话</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="telephone" value="<?php echo ($telephone); ?>">
                  </div>
				  
				  <label for="mobile1" class="col-sm-1 control-label form-label">手机1</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="mobile1" value="<?php echo ($mobile1); ?>">
                  </div>
				  
				  <label for="mobile2" class="col-sm-1 control-label form-label">手机2</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="mobile2" value="<?php echo ($mobile2); ?>">
                  </div>
                </div>
				
				<div class="form-group">
				  
				  
                  <label for="ethnic" class="col-sm-1 control-label form-label">民族</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="ethnic" value="<?php echo ($ethnic); ?>">
                  </div>
                  <label for="doctor_in_charge" class="col-sm-1 control-label form-label">主管医生</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="doctor_in_charge" value="<?php echo ($doctor_in_charge); ?>">
                  </div>
				  
				</div>
				
				 <div class="form-group">
                  <label class="col-sm-1 control-label form-label">其它说明</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="other" placeholder="Type your message..." ><?php echo ($other); ?></textarea>
                  </div>
                </div>
				</br>
				

              </form> 

		  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-default">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
  <!-- End Moda Code -->
  
  
 <!-- Modal -->
	<div class="modal fade" id="newRecord" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">新增入院记录</h4>
		  </div>
		  <div class="modal-body">
			  <form class="form-horizontal">
				<div class="form-group">
					  <label for="cnum" class="col-sm-2 control-label form-label">病历号</label>
					  <div class="col-sm-3">
						<input type="text" class="form-control form-control-radius" id="cnum" value="<?php echo ($cnum); ?>" disabled>
					  </div>
				</div>
				  <div class="form-group">
					<label for="begin" class="col-sm-2 control-label form-label">开始日期</label>
					  <div class="col-sm-3">
						<input type="text" class="form-control form-control-radius" id="begin" onclick="laydate()">
					  </div>
					  
				  </div>
				  <div class="form-group">
					  <label for="isInHosp" class="col-sm-2 control-label form-label">是否出院</label>
					  <div class="col-sm-3">
						   <input type="checkbox" id = "isInHosp" data-toggle="toggle" data-onstyle="success" data-on="是" data-off="否">
					  </div>
				  </div>
				   <div class="form-group" id = "div_end" style ="display:none">
					<label for="end" class="col-sm-2 control-label form-label">结束日期</label>
					  <div class="col-sm-3">
						<input type="text" class="form-control form-control-radius" id="end" onclick="laydate()">
					  </div>
				  </div>
				 
			  </form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
			<button type="button" class="btn btn-default" onclick = "saveRecord()">保存</button>
		  </div>
		</div>
	  </div>
	</div>
	
	
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
 <script>
	$("#isInHosp").change(function(){
		//alert($("#isInHosp").is(":checked"));
		if ($("#isInHosp").is(':checked') == true)
			$('#div_end').show();
		else
			$('#div_end').hide();
	});
</script>

<script>
	function saveRecord()
	{
		if ($("#begin").val() == "" || ($("#isInHosp").is(':checked') == true && $("#end").val()==""))
		{
			alert("开始日期和结束日期未确定，不能保存");
			return;
		}
		if ($("#begin").val() > $("#end").val())
		{
			alert("开始日期不能大于结束日期");
			return;
		}
		var begin = $("#begin").val();
		var end = $("#end").val();
		var cnum = $("#cnum").val();
		if ($("#isInHosp").is(':checked') == false)
			end = "2100-01-01";
		$.ajax({
			type : 'post',
			url : '/ibdnew/index.php/show/save_record',
			data : 'cnum='+cnum+'&begin='+begin+'&end='+end,
			success: function success(data)
			{
				if (data.status == "success")
				{
					$("#newRecord").hide();
					swal(data.status);
				}
			}
		});
	}
</script>

<script>

//$(document).ready(function() {
 //   $('#example0').DataTable();
//} );

SetRaidoByValue('type','<?php echo ($type); ?>');
SetRaidoByValue('sex','<?php echo ($sex); ?>');

function SetRaidoByValue(name,value)
	  {
		var objs = document.getElementsByName(name);
		for (var i = 0; i < objs.length ; i++)
		{
			if (objs[i].value == value)
			{
				objs[i].checked = true;
			}
		}
	  }
</script>



</body>
</html>