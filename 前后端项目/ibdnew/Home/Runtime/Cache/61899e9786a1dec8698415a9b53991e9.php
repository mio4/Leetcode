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
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          病人总览
        </div>
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>项目</th>
                        <th>时间</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>病历号</th>
                        <th>操作</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>项目</th>
                        <th>时间</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>病历号</th>
                        <th>操作</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
						<td><?php echo ($vo['item']); ?></td>
						<td><?php echo ($vo['time']); ?></td>
						<td><?php echo ($vo['name']); ?></td>
						<td><?php echo ($vo['age']); ?></td>
						<td><?php echo ($vo['cnum']); ?></td>
						<td>
							
							<a href="#" onclick = "getInfo('<?php echo ($vo['item2']); ?>','<?php echo ($vo['cnum']); ?>','<?php echo ($vo['time']); ?>','<?php echo ($vo['name']); ?>','<?php echo ($vo['item']); ?>')">
								<i class="fa fa-search"></i>
							    查看
							</a>
						</td>
					</tr><?php endforeach; endif; ?>
                </tbody>
            </table>


        </div>

      </div>
    </div>
    <!-- End Panel -->



   <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"  id = 'name1'></h4>
                  </div>
                  <div class="modal-body">
                     <!-- Start Panel -->
					<div class="col-md-12">
					  <div class="panel panel-default">

						<div class="panel-title" id = 'name2'>
						  
						</div>

						<div class="panel-body">
						  <p>病例号:<code id = 'c1'></code></p>

						  <table class="table table-bordered table-striped" id = 'tab'>
							<thead>
							  <tr>
								<td>项目</td>
								<td>数值</td>
								<td>单位</td>
								<td>参考范围</td>
								<td>项目</td>
								<td>数值</td>
								<td>单位</td>
								<td>参考范围</td>
							  </tr>
							</thead>
							<tbody id  = "tbd">
							</tbody>
						  </table>
						</div>

					  </div>
					</div>
					<!-- End Panel -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
	<!-- End Moda Code -->


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


<script>
//$(document).ready(function() {
	/*var cnum = '<?php echo ($cnum); ?>';
	$.ajax({
		type:'post',
		url:'/ibdnew/index.php/test/show_all/cnum/'+cnum,
		success: function success(data)
		{
			
		}
	});*/
    var table = $('#example0').DataTable();
	table.order([[1,'dsc']]).draw();
	function getInfo(item,cnum,time,name,item2)
	{
		$('#name1').text(item2);
		$('#name2').text(name);
		$('#c1').text(cnum);
		$.ajax({
			type : 'post',
			url : '/ibdnew/index.php/test/getInfo',
			data : 'item='+item+'&cnum='+cnum+'&time='+time,
			success : function success(data)
			{
				$("#tbd").html("");
				var i = 0,len = data.length;
				while (i < len)
				{
					if (i + 1 < len)
					{
						var trHTML = " <tr>  <td>"+data[i][0]+"</td>  <td>"+data[i][1]+"</td>  <td>" +data[i][2] +"</td>  <td>"+data[i][3]+"</td> <td>"+data[i+1][0]+"</td> <td>"+data[i+1][1]+"</td>  <td>"+data[i+1][2]+"</td> <td>"+data[i+1][3]+"</td> </tr>";
						$("#tbd").append(trHTML);
						i += 2;
					}
					else
					{
						var trHTML = " <tr>  <td>"+data[i][0]+"</td>  <td>"+data[i][1]+"</td>  <td>" +data[i][2] +"</td>  <td>"+data[i][3]+"</td> </tr>";
						$("#tbd").append(trHTML);
						i += 1;
					}
				}
				$('#myModal').modal('show');
			}
		});
	}
//} );
</script>



</body>
</html>