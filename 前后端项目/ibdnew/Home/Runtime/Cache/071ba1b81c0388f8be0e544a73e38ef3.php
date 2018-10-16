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
                        <th>类型</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>病历号</th>
                        <th>操作</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>类型</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>病历号</th>
                        <th>操作</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
						<td><?php echo ($vo['type']); ?></td>
						<td><?php echo ($vo['name']); ?></td>
						<td><?php echo ($vo['sex']=='0'?'男':'女'); ?></td>
						<td><?php echo ($vo['age']); ?></td>
						<td><?php echo ($vo['cnum']); ?></td>
						<td>
							<a href="/ibdnew/index.php/test/add_lab/cnum/<?php echo ($vo['cnum']); ?>">
								<i class="fa fa-plus"></i>
							    编辑
							</a>
							<a href="/ibdnew/index.php/test/show_all/cnum/<?php echo ($vo['cnum']); ?>">
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
    $('#example0').DataTable();
//} );
</script>



</body>
</html>