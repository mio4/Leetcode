<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link   rel= "shortcut icon"   href= "/ibdnew/PUBLIC/img/logo.png">
  <title>IBD-数据录入/化验信息</title>

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

  <div class = "row">
  <div class="col-md-4 col-lg-12">
      <div class="panel panel-default">

        <div class="panel-title">
          <h4>病例信息</h4>
          <ul class="panel-tools">
            
          </ul>
        </div>

        <div class="panel-body">

              <div class="col-md-3 padding-0">
                  <dl class="dl-horizontal">
                    <dt>姓名</dt>
                    <dd><?php echo ($name); ?></dd>
                  </dl>
              </div>
			  <div class="col-md-3 padding-0">
                  <dl class="dl-horizontal">
                    <dt>病历号</dt>
                    <dd><?php echo ($cnum); ?></dd>
                  </dl>
              </div>
			  
			  <div class="col-md-3 padding-0">
                  <dl class="dl-horizontal">
                    <dt>年龄</dt>
                    <dd><?php echo ($age); ?></dd>
                    </dl>
              </div>
			  <div class="col-md-3 padding-0">
                  <dl class="dl-horizontal">
                    <dt>性别</dt>
                    <dd><?php echo ($sex=='0'?'男':'女'); ?></dd>
                  </dl>
              </div>
        </div>

      </div>
    </div>
    
  </div>
 <!-- Start Row -->
  <div class="row">
<!-- Start Tab Panel -->
    <div class="col-md-12 col-lg-12 padding-0">
	
      <div class="panel panel-transparent">

        <div class="panel-title">
          化验信息
        </div>

            <div class="panel-body">
              
                <div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-pills nav-stacked col-md-2" role="tablist">
                    <li role="presentation" class="active"><a href="#home3" aria-controls="home2" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">血常规</a></li>
                    <li role="presentation"><a href="#profile3" aria-controls="profile3" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">尿常规</a></li>
                    <li role="presentation"><a href="#messages3" aria-controls="messages3" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">便常规</a></li>
                    <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">网织红细胞</a></li>
                    <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">T/B 淋巴细胞亚群</a></li>
                    <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">肾功能</a></li>
                    <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">肝功能</a></li>
                    <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">凝血功能</a></li>
                    <li role="presentation"><a href="#tab9" aria-controls="tab0" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">胰腺酶学</a></li>
                    <li role="presentation"><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">电解质</a></li>
                    <li role="presentation"><a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">贫血5项</a></li>
                    <li role="presentation"><a href="#tab12" aria-controls="tab12" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">心功能及酶学</a></li>
                    <li role="presentation"><a href="#tab13" aria-controls="tab13" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">血脂</a></li>
                    <li role="presentation"><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">便病原学</a></li>
                    <li role="presentation"><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">血沉（待定）</a></li>
                    <li role="presentation"><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">C反应蛋白（待定）</a></li>
                    <li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">降钙素原（待定）</a></li>
                    <li role="presentation"><a href="#tab18" aria-controls="tab18" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">PPD试验（待定）</a></li>
                    <li role="presentation"><a href="#tab19" aria-controls="tab19" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">γ干扰素释放试验</a></li>
                    <li role="presentation"><a href="#tab20" aria-controls="tab20" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">抗中性粒细胞胞浆抗体</a></li>
                    <li role="presentation"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">乙肝5项</a></li>
                    <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">乙肝DNA定量（待定）</a></li>
                    <li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">感染筛查</a></li>
                    <li role="presentation"><a href="#tab24" aria-controls="tab24" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">甲状腺功能</a></li>
                    <li role="presentation"><a href="#tab25" aria-controls="tab25" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">甲状腺抗体</a></li>
                    <li role="presentation"><a href="#tab26" aria-controls="tab26" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">免疫球蛋白及补体</a></li>
                    <li role="presentation"><a href="#tab27" aria-controls="tab27" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">维生素D及甲状旁腺素</a></li>
                    <li role="presentation"><a href="#tab28" aria-controls="tab28" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">巨细胞病毒感染</a></li>
                    <li role="presentation"><a href="#tab29" aria-controls="tab29" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">EB病毒感染</a></li>
                    <li role="presentation"><a href="#tab30" aria-controls="tab30" role="tab" data-toggle="tab" onclick="window.scrollTo(0,0);">真菌实验</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content col-md-10">
                    <div role="tabpanel" class="tab-pane active" id="home3">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-1-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-1-checkDate">
								</div>
							</div>
							<div class="form-group">
							  <label for="RBC" class="col-sm-1 control-label form-label">红细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="RBC" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							  <label for="HGB" class="col-sm-1 control-label form-label">血红蛋白浓度</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="HGB" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  <label for="HCT" class="col-sm-1 control-label form-label">红细胞压积</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="HCT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">%</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="MCV" class="col-sm-1 control-label form-label">平均红细胞体积</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="MCV" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">fl</div>
								</div>
							  </div>
							  <label for="MCH" class="col-sm-1 control-label form-label">平均红细胞血红蛋白量</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="MCH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  <label for="MCHC" class="col-sm-1 control-label form-label">平均红细胞血红蛋白浓度</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="MCHC" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="WBC" class="col-sm-1 control-label form-label">白细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="WBC" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							  <label for="NE" class="col-sm-1 control-label form-label">中性粒细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="NE" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							  <label for="LY" class="col-sm-1 control-label form-label">淋巴细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="LY" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="MO" class="col-sm-1 control-label form-label">单核细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="MO" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							  <label for="EO" class="col-sm-1 control-label form-label">嗜酸性粒细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="EO" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							  <label for="PLT" class="col-sm-1 control-label form-label">血小板计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="PLT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^12/L</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_blood_regular_test()" class="btn btn-rounded btn-default">保存</a>
							</div>

							

						</form> 
                     
					
					</div>
                    <div role="tabpanel" class="tab-pane" id="profile3">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-2-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-2-checkDate">
								</div>
							</div>
							<div class="form-group">
							  <label for="BLD" class="col-sm-1 control-label form-label">隐血</label>
							  <div class="col-sm-5" id = "BLD">
								   <div class="radio radio-info radio-inline">
										<input type="radio" id="BLD0" value="0" name="BLD" checked>
										<label for="BLD0"> - </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="BLD1" value="1" name="BLD">
										<label for="BLD1"> + </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="BLD2" value="2" name="BLD">
										<label for="BLD2"> ++ </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="BLD3" value="3" name="BLD">
										<label for="BLD3"> +++ </label>
									</div>
							  </div>
							  
							   <label for="PRO" class="col-sm-1 control-label form-label">蛋白质</label>
							  <div class="col-sm-5" id = "PRO">
								   <div class="radio radio-info radio-inline">
										<input type="radio" id="PRO0" value="0" name="PRO" checked>
										<label for="PRO0"> - </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="PRO1" value="1" name="PRO" >
										<label for="PRO1"> + </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="PRO2" value="2" name="PRO">
										<label for="PRO2"> ++ </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="PRO3" value="3" name="PRO">
										<label for="PRO3"> +++ </label>
									</div>
							  </div>
							  
							</div>
							
							<div class="form-group">
							  <label for="RBC_microscopy" class="col-sm-1 control-label form-label">红细胞计数</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="RBC_microscopy0" value="0" name="RBC_microscopy" checked>
									<label for="RBC_microscopy0"> 计数 </label>
								</div>
								<div class="input-group">
								  <input type="text" class="form-control" id="RBC_microscopy_count" value = "0">
								  <div class="input-group-addon">/HP</div>
								</div>
							  </div>
							  
							  <div class="col-sm-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="RBC_microscopy1" value="1" name="RBC_microscopy">
									<label for="RBC_microscopy1"> 满视野 </label>
								</div>
							  </div>
							 </div>
							 
							 <div class="form-group">
							  <label for="WBC_microscopy" class="col-sm-1 control-label form-label">白细胞计数</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="WBC_microscopy0" value="0" name="WBC_microscopy" checked>
									<label for="WBC_microscopy0"> 计数 </label>
								</div>
								<div class="input-group">
								  <input type="text" class="form-control" id="WBC_microscopy_count" value = "0">
								  <div class="input-group-addon">/HP</div>
								</div>
							  </div>
							  
							  <div class="col-sm-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="WBC_microscopy1" value="1" name="WBC_microscopy">
									<label for="WBC_microscopy1"> 满视野 </label>
								</div>
							  </div>
							 </div>
							  
							  
							<div style=" text-align:center;">
									<a href="javascript:save_lab_urine_analyse()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
							

						</form> 
                     
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages3">
					
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-3-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-3-checkDate">
								</div>
							</div>
						 <div class="form-group">
							  <label for="stool_WBC_microscopy" class="col-sm-1 control-label form-label">白细胞计数</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="stool_WBC_microscopy0" value="0" name="stool_WBC_microscopy" checked>
									<label for="stool_WBC_microscopy0"> 计数 </label>
								</div>
								<div class="input-group">
								  <input type="text" class="form-control" id="stool_WBC_microscopy_count" value = "0">
								  <div class="input-group-addon">/HP</div>
								</div>
							  </div>
							  
							  <div class="col-sm-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="stool_WBC_microscopy1" value="1" name="stool_WBC_microscopy">
									<label for="stool_WBC_microscopy1"> 满视野 </label>
								</div>
							  </div>
							 </div>
							 
							 
							 <div class="form-group">
							  <label for="stool_RBC_microscopy" class="col-sm-1 control-label form-label">红细胞计数</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="stool_RBC_microscopy0" value="0" name="stool_RBC_microscopy" checked>
									<label for="stool_RBC_microscopy0"> 计数 </label>
								</div>
								<div class="input-group">
								  <input type="text" class="form-control" id="stool_RBC_microscopy_count" value = "0">
								  <div class="input-group-addon">/HP</div>
								</div>
							  </div>
							  
							  <div class="col-sm-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="stool_RBC_microscopy1" value="1" name="stool_RBC_microscopy">
									<label for="stool_RBC_microscopy1"> 满视野 </label>
								</div>
							  </div>
							  
							  
						</div>
						
						
						<div class="form-group">
							  <label for="chemical_occult_blood" class="col-sm-1 control-label form-label">化学法潜血</label>
							  <div class="col-sm-5">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="chemical_occult_blood0" value="0" name="chemical_occult_blood" checked>
									<label for="chemical_occult_blood0"> 阳性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="chemical_occult_blood1" value="1" name="chemical_occult_blood">
									<label for="chemical_occult_blood1"> 弱阳性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="chemical_occult_blood2" value="2" name="chemical_occult_blood">
									<label for="chemical_occult_blood2"> 阴性 </label>
								</div>
							  </div>
							  
							   <label for="immunoassay_occult_blood" class="col-sm-1 control-label form-label">免疫法潜血</label>
							  <div class="col-sm-5">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="immunoassay_occult_blood0" value="0" name="immunoassay_occult_blood" checked>
									<label for="immunoassay_occult_blood0"> 阳性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="immunoassay_occult_blood1" value="1" name="immunoassay_occult_blood">
									<label for="immunoassay_occult_blood1"> 弱阳性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="immunoassay_occult_blood2" value="2" name="immunoassay_occult_blood">
									<label for="immunoassay_occult_blood2"> 阴性 </label>
								</div>
							  </div>
							  
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_stool_routine()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
						
						
                    </div>
					<div role="tabpanel" class="tab-pane" id="tab4">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-4-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-4-checkDate">
								</div>
							</div>
							<div class="form-group">
							  <label for="Ret" class="col-sm-1 control-label form-label">网织红细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="Ret" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">10^9/L</div>
								</div>
							  </div>
							</div>
							 <div style=" text-align:center;">
									<a href="javascript:save_ret()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					<div role="tabpanel" class="tab-pane" id="tab5">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-5-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-5-checkDate">
								</div>
							</div>
							<div class="form-group">
							  <label for="TH" class="col-sm-1 control-label form-label">辅助性T细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">个/ul</div>
								</div>
							  </div>
							  
							  <label for="TS" class="col-sm-1 control-label form-label">抑制性T细胞</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TS" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">个/ul</div>
								</div>
							  </div>
							  
							  <label for="B" class="col-sm-1 control-label form-label">B淋巴细胞技术</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="B" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">个/ul</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="NK" class="col-sm-1 control-label form-label">NK淋巴细胞计数</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="NK" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">个/ul</div>
								</div>
							  </div>
							</div>
							 <div style=" text-align:center;">
									<a href="javascript:save_lab_tc_bc()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					
					<div role="tabpanel" class="tab-pane" id="tab6">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-6-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-6-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="creatinine" class="col-sm-1 control-label form-label">血肌酐</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="creatinine" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
							  
							  <label for="urea" class="col-sm-1 control-label form-label">尿素</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="urea" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="uric_acid" class="col-sm-1 control-label form-label">尿酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="uric_acid" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
							</div>
							 <div style=" text-align:center;">
									<a href="javascript:save_lab_nephric_function()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					
					<div role="tabpanel" class="tab-pane" id="tab7">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-7-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-7-checkDate">
								</div>
							</div>
						
						<div class="form-group">
							  <label for="ALT" class="col-sm-1 control-label form-label">谷丙转氨酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="ALT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="AST" class="col-sm-1 control-label form-label">谷草转氨酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="AST" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="ALB" class="col-sm-1 control-label form-label">白蛋白</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="ALB" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
						</div>
						
						<div class="form-group">
							  <label for="ALP" class="col-sm-1 control-label form-label">碱性磷酸酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="ALP" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="GGT" class="col-sm-1 control-label form-label">谷氨酰胺转肽酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="GGT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="IBIL" class="col-sm-1 control-label form-label">总胆红素</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="IBIL" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
						</div>
						
						<div class="form-group">
							  <label for="DBIL" class="col-sm-1 control-label form-label">直接胆红素</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="DBIL" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
							  
							  <label for="PCHE" class="col-sm-1 control-label form-label">胆碱酯酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="PCHE" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="PA" class="col-sm-1 control-label form-label">前白蛋白</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="PA" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mg/L</div>
								</div>
							  </div>
						</div>
						
						<div class="form-group">
							  <label for="TBA" class="col-sm-1 control-label form-label">总胆汁酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TBA" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
						</div>
						
						 <div style=" text-align:center;">
									<a href="javascript:save_lab_liver_function()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
					
					
					<div role="tabpanel" class="tab-pane" id="tab8">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-8-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-8-checkDate">
								</div>
							</div>
							
							
							<div class="form-group">
							  <label for="PT" class="col-sm-1 control-label form-label">凝血酶原时间</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="PT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">秒</div>
								</div>
							  </div>
							  
							  <label for="APTT" class="col-sm-1 control-label form-label">活化部分凝血活酶时间</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="APTT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">秒</div>
								</div>
							  </div>
							  
							  <label for="FIB" class="col-sm-1 control-label form-label">纤维蛋白原定量</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="FIB" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							</div>
						
						<div class="form-group">
							  <label for="D_D" class="col-sm-1 control-label form-label">D-二聚体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="D_D" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mg/L(DDU)</div>
								</div>
							  </div>
							  
							  <label for="FDP" class="col-sm-1 control-label form-label">纤维蛋白（原）降解产物</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="FDP" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mg/L</div>
								</div>
							  </div>
							  
							  <label for="TT" class="col-sm-1 control-label form-label">凝血酶时间</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">秒</div>
								</div>
							  </div>
						</div>
						
						<div style=" text-align:center;">
									<a href="javascript:save_lab_hemostasis_coagulation()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab9">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-9-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-9-checkDate">
								</div>
							</div>
							
							
							<div class="form-group">
							  <label for="AMY" class="col-sm-1 control-label form-label">脂肪酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="AMY" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="LPS" class="col-sm-1 control-label form-label">淀粉酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="LPS" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							</div>
							<div style=" text-align:center;">
									<a href="javascript:save_lab_pancreas()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab10">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-10-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-10-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="K" class="col-sm-1 control-label form-label">钾</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="K" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="Na" class="col-sm-1 control-label form-label">钠</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="Na" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="Cl" class="col-sm-1 control-label form-label">氯</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="Cl" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="Ca" class="col-sm-1 control-label form-label">钙</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="Ca" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="P" class="col-sm-1 control-label form-label">磷</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="P" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="Mg" class="col-sm-1 control-label form-label">镁</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="Mg" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_chemical()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab11">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-11-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-11-checkDate">
								</div>
							</div>
							
							
							<div class="form-group">
							  <label for="serum_iron" class="col-sm-1 control-label form-label">血清铁</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="serum_iron" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
							  
							  <label for="TIBC" class="col-sm-1 control-label form-label">总铁结合力</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TIBC" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">umol/L</div>
								</div>
							  </div>
							  
							  <label for="ferritin" class="col-sm-1 control-label form-label">铁蛋白</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="ferritin" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">ng/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="VB12" class="col-sm-1 control-label form-label">维生素B12</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="VB12" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">nmol/L</div>
								</div>
							  </div>
							  
							  <label for="folic_acid" class="col-sm-1 control-label form-label">叶酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="folic_acid" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">nmol/L</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_anemia()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab12">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-12-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-12-checkDate">
								</div>
							</div>
							
							
							<div class="form-group">
							  <label for="CK" class="col-sm-1 control-label form-label">肌酸激酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CK" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="LDH" class="col-sm-1 control-label form-label">乳酸脱氢酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="LDH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							  
							  <label for="HDBH" class="col-sm-1 control-label form-label">羟丁酸脱氢酶</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="HDBH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/L</div>
								</div>
							  </div>
							</div>
							
							
							<div class="form-group">
							  <label for="CK_MB" class="col-sm-1 control-label form-label">4CK-MB</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CK_MB" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">ng/ml</div>
								</div>
							  </div>
							  
							  <label for="cTnI" class="col-sm-1 control-label form-label">心肌肌钙蛋白</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="cTnI" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">ng/ml</div>
								</div>
							  </div>
							  
							  <label for="BNP" class="col-sm-1 control-label form-label">钠尿肽</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="BNP" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">pg/ml</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_heart()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab13">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-13-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-13-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="TCHO" class="col-sm-1 control-label form-label">总胆固醇</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TCHO" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="HDL_C" class="col-sm-1 control-label form-label">高密度胆固醇</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="HDL_C" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							  
							  <label for="LDL_C" class="col-sm-1 control-label form-label">低密度胆固醇</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="LDL_C" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="TG" class="col-sm-1 control-label form-label">甘油三酯</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TG" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_blood_lipid()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab14">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-14-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-14-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="ova" class="col-sm-1 control-label form-label">便找虫卵</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="ova0" value="0" name="ova" checked>
									<label for="ova0"> 阴性</label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="ova1" value="1" name="ova">
									<label for="ova1"> 阳性 </label>
								</div>
							  </div>
							  
							   <label for="Tuberculous_smear" class="col-sm-1 control-label form-label">便找抗酸杆菌</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="Tuberculous_smear0" value="0" name="Tuberculous_smear" checked>
									<label for="Tuberculous_smear0"> 阴性</label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="Tuberculous_smear1" value="1" name="Tuberculous_smear">
									<label for="Tuberculous_smear1"> 阳性 </label>
								</div>
							  </div>
							  
							  <label for="Fungal_smear" class="col-sm-1 control-label form-label">便找真菌</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="Fungal_smear0" value="0" name="Fungal_smear" checked>
									<label for="Fungal_smear0"> 阴性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="Fungal_smear1" value="1" name="Fungal_smear">
									<label for="Fungal_smear1"> 孢子 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="Fungal_smear2" value="2" name="Fungal_smear">
									<label for="Fungal_smear2"> 菌丝 </label>
								</div>
							  </div>
							  
							</div>
							
							
							<div class="form-group">
							  <label for="coccus_bacillus_ratio" class="col-sm-1 control-label form-label">便球杆比</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="coccus_bacillus_ratio0" value="0" name="coccus_bacillus_ratio" checked>
									<label for="coccus_bacillus_ratio0"> 大致正常</label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="coccus_bacillus_ratio1" value="1" name="coccus_bacillus_ratio">
									<label for="coccus_bacillus_ratio1"> 球杆比失调 </label>
								</div>
							  </div>
							  
							  <label for="A_B" class="col-sm-1 control-label form-label">艰难梭菌毒素A/B</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="A_B" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mmol/L</div>
								</div>
							  </div>
							</div>
							
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_stool_theory()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab15">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-15-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-15-checkDate">
								</div>
							</div>
							<div class="form-group">
							 <label for="ESR" class="col-sm-1 control-label form-label">血沉</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="ESR" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mm/h</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_ESR()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab16">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-16-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-16-checkDate">
								</div>
							</div>
							<div class="form-group">
							 <label for="CRP" class="col-sm-1 control-label form-label">C反应蛋白</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CRP" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">mg/L</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_crp()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab17">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-17-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-17-checkDate">
								</div>
							</div>
							<div class="form-group">
							 <label for="PCT" class="col-sm-1 control-label form-label">降钙素原</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="PCT" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">ng/mL</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_pct()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab18">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-18-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-18-checkDate">
								</div>
							</div>
							<div class="form-group">
							  <label for="PPD" class="col-sm-1 control-label form-label">PPD试验</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="PPD0" value="0" name="PPD" checked>
									<label for="PPD0"> 阴性 </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="PPD1" value="1" name="PPD">
									<label for="PPD1"> + </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="PPD2" value="2" name="PPD">
									<label for="PPD2"> ++ </label>
								</div>
								
								<div class="radio radio-info radio-inline">
									<input type="radio" id="PPD3" value="3" name="PPD">
									<label for="PPD3"> +++ </label>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_tst()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab19">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-19-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-19-checkDate">
								</div>
							</div>
							
							
							<div class="form-group">
							 <label for="A_Ag" class="col-sm-1 control-label form-label">A抗原刺激</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="A_Ag" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">*SFCs/2.5*10^5</div>
								</div>
							  </div>
							  <label for="B_Ag" class="col-sm-1 control-label form-label">B抗原刺激</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="B_Ag" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">*SFCs/2.5*10^5</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_t_spot_tb()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab20">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-20-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-20-checkDate">
								</div>
							</div>
							
							<label for="p_ANCA" class="col-sm-1 control-label form-label">pANCA</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="p_ANCA0" value="0" name="p_ANCA" checked>
									<label for="p_ANCA0"> 阴性</label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="p_ANCA1" value="1" name="p_ANCA">
									<label for="p_ANCA1"> 阳性 </label>
								</div>
							  </div>
							  
							   <label for="c_ANCA" class="col-sm-1 control-label form-label">cANCA</label>
							  <div class="col-sm-3">
								<div class="radio radio-info radio-inline">
									<input type="radio" id="c_ANCA0" value="0" name="c_ANCA" checked>
									<label for="c_ANCA0"> 阴性</label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="c_ANCA1" value="1" name="c_ANCA">
									<label for="c_ANCA1"> 阳性 </label>
								</div>
							  </div>
							  
							  <div style=" text-align:center;">
									<a href="javascript:save_lab_anca()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab21">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-21-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-21-checkDate">
								</div>
							</div>
							
							<div class="form-group">
								<label for="HBsAg" class="col-sm-1 control-label form-label">乙肝表面抗原</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HBsAg0" value="0" name="HBsAg" checked>
										<label for="HBsAg0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HBsAg1" value="1" name="HBsAg">
										<label for="HBsAg1"> 阳性 </label>
									</div>
								  </div>
								  
								   <label for="Anti_HBs" class="col-sm-1 control-label form-label">乙肝表面抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBs0" value="0" name="Anti_HBs" checked>
										<label for="Anti_HBs0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBs1" value="1" name="Anti_HBs">
										<label for="Anti_HBs1"> 阳性 </label>
									</div>
								  </div>
								  
								  <label for="HBeAg" class="col-sm-1 control-label form-label">乙肝e抗原</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HBeAg0" value="0" name="HBeAg" checked>
										<label for="HBeAg0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HBeAg1" value="0" name="HBeAg">
										<label for="HBeAg1"> 阳性 </label>
									</div>
								  </div>
							 </div>
							 
							 <div class="form-group">
								<label for="Anti_HBe" class="col-sm-1 control-label form-label">乙肝e抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBe0" value="0" name="Anti_HBe" checked>
										<label for="Anti_HBe0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBe1" value="1" name="Anti_HBe">
										<label for="Anti_HBe1"> 阳性 </label>
									</div>
								  </div>
								  
								   <label for="Anti_HBc" class="col-sm-1 control-label form-label">乙肝核心抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBc0" value="0" name="Anti_HBc" checked>
										<label for="Anti_HBc0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HBc1" value="1" name="Anti_HBc">
										<label for="Anti_HBc1"> 阳性 </label>
									</div>
								  </div>
							 </div>
							 
							  <div style=" text-align:center;">
									<a href="javascript:save_lab_hbv()" class="btn btn-rounded btn-default">保存</a>
							</div>
							 
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab22">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-22-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-22-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							<label for="HBV_DNA" class="col-sm-1 control-label form-label">乙肝DNA定量</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="HBV_DNA" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">IU/mL</div>
								</div>
							  </div>
							</div>
							
							 <div style=" text-align:center;">
									<a href="javascript:save_lab_hbv_dna()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab23">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-23-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-23-checkDate">
								</div>
							</div>
							
							<div class="form-group">
								<label for="Anti_HCV" class="col-sm-1 control-label form-label">丙肝抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HCV0" value="0" name="Anti_HCV" checked>
										<label for="Anti_HCV0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="Anti_HCV1" value="1" name="Anti_HCV">
										<label for="Anti_HCV1"> 阳性 </label>
									</div>
								  </div>
								  
								   <label for="HIV" class="col-sm-1 control-label form-label">艾滋病病毒抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HIV0" value="0" name="HIV" checked>
										<label for="HIV0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="HIV1" value="1" name="HIV">
										<label for="HIV1"> 阳性 </label>
									</div>
								  </div>
								  
								  <label for="TP_Ab" class="col-sm-1 control-label form-label">梅毒抗体</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="TP_Ab0" value="0" name="TP_Ab" checked>
										<label for="TP_Ab0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="TP_Ab1" value="1" name="TP_Ab">
										<label for="TP_Ab1"> 阳性 </label>
									</div>
								  </div>
							 </div>
							 
							 <div style=" text-align:center;">
									<a href="javascript:save_lab_infection_screening()" class="btn btn-rounded btn-default">保存</a>
							</div>
							
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab24">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-24-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-24-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="T3" class="col-sm-1 control-label form-label">三碘甲腺原氨酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="T3" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">nmol/L</div>
								</div>
							  </div>
							  
							  <label for="T4" class="col-sm-1 control-label form-label">四碘甲腺原氨酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="T4" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">nmol/L</div>
								</div>
							  </div>
							  
							  <label for="FT3" class="col-sm-1 control-label form-label">游离三碘甲腺原氨酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="FT3" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">pmol/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="FT4" class="col-sm-1 control-label form-label">游离四碘甲腺原氨酸</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="FT4" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">pmol/L</div>
								</div>
							  </div>
							  
							  <label for="TSH" class="col-sm-1 control-label form-label">促甲状腺素</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TSH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">uTU/ml</div>
								</div>
							  </div>
							  
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_thyroid_function()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab25">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-25-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-25-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="TGAb" class="col-sm-1 control-label form-label">抗甲状腺球蛋白抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TGAb" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">*IU/mL</div>
								</div>
							  </div>
							  
							  <label for="TPOAb" class="col-sm-1 control-label form-label">抗甲状腺髓过氧化物酶抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TPOAb" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">*IU/mL</div>
								</div>
							  </div>
							  
							  <label for="TRAB" class="col-sm-1 control-label form-label">抗甲状腺受体抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="TRAB" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">*IU/mL</div>
								</div>
							  </div>
							</div>
							
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_thyroid_antibody()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab26">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-26-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-26-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="IgG" class="col-sm-1 control-label form-label">免疫球蛋白G</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="IgG" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  
							  <label for="IgA" class="col-sm-1 control-label form-label">免疫球蛋白A</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="IgA" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  
							  <label for="IgM" class="col-sm-1 control-label form-label">免疫球蛋白M</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="IgM" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="IgG4" class="col-sm-1 control-label form-label">免疫球蛋白G4</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="IgG4" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  
							  <label for="C3" class="col-sm-1 control-label form-label">补体C3</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="C3" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							  
							  <label for="C4" class="col-sm-1 control-label form-label">补体C4</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="C4" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">g/L</div>
								</div>
							  </div>
							</div>
							
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_immune_globulin_complement_rf()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
								
					<div role="tabpanel" class="tab-pane" id="tab27">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-27-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-27-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="25_OH_VitD" class="col-sm-1 control-label form-label">25-OH-维生素D</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="25_OH_VitD" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">nmol/L</div>
								</div>
							  </div>
							  <label for="iPTH" class="col-sm-1 control-label form-label">全段甲状旁腺素</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="iPTH" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">pg/ml</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_lab_vitd()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab28">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-28-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-28-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="CMV_DNA_blood" class="col-sm-1 control-label form-label">血清巨细胞病毒</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CMV_DNA_blood" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">copies/ml</div>
								</div>
							  </div>
							  <label for="CMV_DNA_lymphocyte" class="col-sm-1 control-label form-label">淋巴细胞巨细胞病毒</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CMV_DNA_lymphocyte" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">copies/ml</div>
								</div>
							  </div>
							  <label for="CMV_IgM" class="col-sm-1 control-label form-label">巨细胞病毒IgM抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CMV_IgM" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">U/ml</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="CNV_IgG" class="col-sm-1 control-label form-label">巨细胞病毒IgG抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="CMV_IgG" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">U/ml</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_cmv()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab29">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-29-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-29-checkDate">
								</div>
							</div>
							
							<div class="form-group">
							  <label for="EBV_DNA_blood" class="col-sm-1 control-label form-label">血清EB病毒</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="EBV_DNA_blood" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">copies/ml</div>
								</div>
							  </div>
							  <label for="EBV_DNA_lymphocyte" class="col-sm-1 control-label form-label">淋巴细胞EB病毒</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="EBV_DNA_lymphocyte" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">copies/ml</div>
								</div>
							  </div>
							  <label for="EBV_IgM" class="col-sm-1 control-label form-label">EB病毒IgM抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="EBV_IgM" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">U/ml</div>
								</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="EBV_IgG" class="col-sm-1 control-label form-label">EB病毒IgG抗体</label>
							  <div class="col-sm-3">
								<div class="input-group">
								  <input type="text" class="form-control" id="EBV_IgG" placeholder="">
								  <div class="input-group-addon" style ="width:88px; text-align:center">U/ml</div>
								</div>
							  </div>
							</div>
							
							<div style=" text-align:center;">
									<a href="javascript:save_ebv()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					<div role="tabpanel" class="tab-pane" id="tab30">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="tab-30-checkDate" class="col-sm-1 control-label form-label">检验时间</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-radius" id="tab-30-checkDate">
								</div>
							</div>
							
							<div class="form-group">
								<label for="G_T" class="col-sm-1 control-label form-label">G试验</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="G_T0" value="0" name="G_T" checked>
										<label for="G_T0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="G_T1" value="1" name="G_T">
										<label for="G_T1"> 阳性 </label>
									</div>
								  </div>
								  
								   <label for="GM_T" class="col-sm-1 control-label form-label">GM试验</label>
								  <div class="col-sm-3">
									<div class="radio radio-info radio-inline">
										<input type="radio" id="GM_T0" value="0" name="GM_T" checked>
										<label for="GM_T0"> 阴性</label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="GM_T1" value="1" name="GM_T">
										<label for="GM_T1"> 阳性 </label>
									</div>
								  </div>
							 </div>
							
							
							<div style=" text-align:center;">
									<a href="javascript:save_fungla_blood()" class="btn btn-rounded btn-default">保存</a>
							</div>
						</form>
					</div>
					
					
				 </div>

                </div>              

            </div>

      </div>
    </div>
    <!-- End Tab Panel -->

   


   


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
	$('#birth').focusin(
		function (){
			laydate();
		}
	);
	
	function GetRadioValue(RadioName){
		var obj;
		obj = document.getElementsByName(RadioName);
		if (obj != null){
			var i;
			for (i = 0; i < obj.length; i++)
				if (obj[i].checked)
					return obj[i].value;
		}
		return null;
	}
	
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
	var tab1_mode = 0;
	
	
	function save_lab_blood_regular_test()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $('#tab-1-checkDate').val();
		var RBC = $('#RBC').val();
		var HGB = $('#HGB').val();
		var HCT = $('#HCT').val();
		var MCV = $('#MCV').val();
		var MCH = $('#MCH').val();
		var MCHC = $('#MCHC').val();
		var WBC = $('#WBC').val();
		var NE = $('#NE').val();
		var LY = $('#LY').val();
		var MO = $('#MO').val();
		var EO = $('#EO').val();
		var PLT = $('#PLT').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_blood_regular_test/mode/'+tab1_mode,
			data:'cnum='+cnum+'&time='+time+'&RBC='+RBC+'&HGB='+HGB+'&HCT='+HCT
				 +'&MCV='+MCV+'&MCH='+MCH+'&MCHC='+MCHC+'&WBC='+WBC+'&NE='+NE
				 +'&LY='+LY+'&MO='+MO+'&EO='+EO+'&PLT='+PLT,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab1_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab1_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			}
		});
	}
	
	function SetRadioDanger(name,num)
	{
		for (var i = 0; i < num; i++)
			$('#'+name+i).parent().attr('class','radio radio-danger radio-inline');
			
	}
	
	function SetRadioInfo(name,num)
	{
		for (var i = 0; i < num; i++)
			$('#'+name+i).parent().attr('class','radio radio-info radio-inline');
			
	}
	
	var tab2_mode = 0;
	function save_lab_urine_analyse()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-2-checkDate").val();
		var WBC_microscopy = GetRadioValue('WBC_microscopy');
		var WBC_microscopy_count = $('#WBC_microscopy_count').val();
		var RBC_microscopy = GetRadioValue('RBC_microscopy');
		var RBC_microscopy_count = $('#RBC_microscopy_count').val();
		var BLD = GetRadioValue('BLD');
		var PRO = GetRadioValue('PRO');
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_urine_analyse/mode/'+tab2_mode,
			data:'cnum='+cnum+'&time='+time+'&BLD='+BLD+'&PRO='+PRO+
			     '&WBC_microscopy='+WBC_microscopy+'&WBC_microscopy_count='+WBC_microscopy_count+
				 '&RBC_microscopy='+RBC_microscopy+'&RBC_microscopy_count='+RBC_microscopy_count,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab2_mode = 1;
						for (var item in data.diff){
							if (item == "BLD") SetRadioDanger('BLD',4);
							else if (item == "PRO") SetRadioDanger('PRO',4);
							else if (item == "RBC_microscopy") SetRadioDanger('RBC_microscopy',2);
							else if (item == "WBC_microscopy") SetRadioDanger('WBC_microscopy',2);
							else 
							 $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab2_mode = 0;
					for (var item in data.data){
						if (item == "BLD") SetRadioInfo('BLD',4);
						else if (item == "PRO") SetRadioInfo('PRO',4);
						else if (item == "RBC_microscopy") SetRadioInfo('RBC_microscopy',2);
						else if (item == "WBC_microscopy") SetRadioInfo('WBC_microscopy',2);
						else 
							 $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab3_mode = 0;
	function save_lab_stool_routine()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-3-checkDate").val();
		var stool_WBC_microscopy = GetRadioValue('stool_WBC_microscopy');
		var stool_WBC_microscopy_count = $('#stool_WBC_microscopy_count').val();
		var stool_RBC_microscopy = GetRadioValue('stool_RBC_microscopy');
		var stool_RBC_microscopy_count = $('#stool_RBC_microscopy_count').val();
		var chemical_occult_blood = GetRadioValue('chemical_occult_blood');
		var immunoassay_occult_blood= GetRadioValue('immunoassay_occult_blood');
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_stool_routine/mode/'+tab3_mode,
			data:'cnum='+cnum+'&time='+time+'&chemical_occult_blood='+chemical_occult_blood+'&immunoassay_occult_blood='+immunoassay_occult_blood+
			     '&stool_WBC_microscopy='+stool_WBC_microscopy+'&stool_WBC_microscopy_count='+stool_WBC_microscopy_count+
				 '&stool_RBC_microscopy='+stool_RBC_microscopy+'&stool_RBC_microscopy_count='+stool_RBC_microscopy_count,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab3_mode = 1;
						for (var item in data.diff){
						if (item == "chemical_occult_blood") SetRadioDanger('chemical_occult_blood',3);
						else if (item == "immunoassay_occult_blood") SetRadioDanger('immunoassay_occult_blood',3);
						else if (item == "stool_WBC_microscopy") SetRadioDanger('stool_WBC_microscopy',2);
						else if (item == "stool_RBC_microscopy") SetRadioDanger('stool_RBC_microscopy',2);
							else 
							 $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab3_mode = 0;
					for (var item in data.data){
						if (item == "chemical_occult_blood") SetRadioInfo('chemical_occult_blood',3);
						else if (item == "immunoassay_occult_blood") SetRadioInfo('immunoassay_occult_blood',3);
						else if (item == "stool_WBC_microscopy") SetRadioInfo('stool_WBC_microscopy',2);
						else if (item == "stool_RBC_microscopy") SetRadioInfo('stool_RBC_microscopy',2);
						else 
							 $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab4_mode = 0;
	function save_ret()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $('#tab-4-checkDate').val();
		var Ret = $('#Ret').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_ret/mode/'+tab4_mode,
			data:'cnum='+cnum+'&time='+time+'&Ret='+Ret,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab4_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab4_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			}
		});
	}
	
	var tab5_mode = 0;
	function save_lab_tc_bc()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-5-checkDate").val();
		var TH = $('#TH').val();
		var TS = $('#TS').val();
		var B = $('#B').val();
		var NK = $('#NK').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_tc_bc/mode/'+tab5_mode,
			data:'cnum='+cnum+'&time='+time+'&TH='+TH+'&TS='+TS
			     +'&B='+B+'&NK='+NK,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab5_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab5_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab6_mode = 0;
	function save_lab_nephric_function()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-6-checkDate").val();
		var creatinine = $('#creatinine').val();
		var urea = $('#urea').val();
		var uric_acid = $('#uric_acid').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_nephric_function/mode/'+tab6_mode,
			data:'cnum='+cnum+'&time='+time+'&creatinine='+creatinine+'&urea='+urea
			     +'&uric_acid='+uric_acid,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab6_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab6_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab7_mode = 0;
	function save_lab_liver_function()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-7-checkDate").val();
		var ALT= $('#ALT').val();
		var AST= $('#AST').val();
		var ALB= $('#ALB').val();
		var ALP= $('#ALP').val();
		var GGT= $('#GGT').val();
		var IBIL= $('#IBIL').val();
		var DBIL= $('#DBIL').val();
		var PCHE= $('#PCHE').val();
		var PA= $('#PA').val();
		var TBA= $('#TBA').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_liver_function/mode/'+tab7_mode,
			data:'cnum='+cnum+'&time='+time+'&ALT='+ALT+'&ALB='+ALB+
			     '&AST='+AST+'&ALP='+ALP+'&GGT='+GGT+'&IBIL='+IBIL+'&DBIL='+DBIL+
				 '&PCHE='+PCHE+'&PA='+PA+'&TBA='+TBA,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab7_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab7_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab8_mode = 0;
	function save_lab_hemostasis_coagulation()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-8-checkDate").val();
		var PT = $('#PT').val();
		var APTT = $('#APTT').val();
		var FIB = $('#FIB').val();
		var D_D= $('#D_D').val();
		var FDP = $('#FDP').val();
		var TT = $('#TT').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_hemostasis_coagulation/mode/'+tab8_mode,
			data:'cnum='+cnum+'&time='+time+"&PT="+PT+'&APTT='+APTT+
				 '&FIB='+FIB+'&D_D='+D_D+'&FDP='+FDP+'&TT='+TT,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab8_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab8_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab9_mode = 0;
	function save_lab_pancreas()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-9-checkDate").val();
		var AMY = $('#AMY').val();
		var LPS = $('#LPS').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_pancreas/mode/'+tab9_mode,
			data:'cnum='+cnum+'&time='+time+"&AMY="+AMY+'&LPS='+LPS,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab9_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab9_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab10_mode = 0;
	function save_lab_chemical()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-10-checkDate").val();
		var K = $('#K').val();
		var Ca = $('#Ca').val();
		var Mg = $('#Mg').val();
		var Cl = $('#Cl').val();
		var P = $('#P').val();
		var Na = $('#Na').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_chemical/mode/'+tab10_mode,
			data:'cnum='+cnum+'&time='+time+"&K="+K+'&Ca='+Ca
			     +'&Mg='+Mg+'&Cl='+Cl+'&P='+P+'&Na='+Na,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab10_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab10_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab11_mode = 0;
	function save_lab_anemia()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-11-checkDate").val();
		var TIBC = $('#TIBC').val();
		var VB12 = $('#VB12').val();
		var ferritin = $('#ferritin').val();
		var serum_iron = $('#serum_iron').val();
		var folic_acid = $('#folic_acid').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_anemia/mode/'+tab11_mode,
			data:'cnum='+cnum+'&time='+time+"&TIBC="+TIBC+'&VB12='+VB12
			     +'&ferritin='+ferritin+'&serum_iron='+serum_iron+'&folic_acid='+folic_acid,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab11_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab11_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab12_mode = 0;
	function save_lab_heart()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-12-checkDate").val();
		var CK = $('#CK').val();
		var LDH = $('#LDH').val();
		var HDBH = $('#HDBH').val();
		var CK_MB = $('#CK_MB').val();
		var cTnI = $('#cTnI').val();
		var BNP = $('#BNP').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_heart/mode/'+tab12_mode,
			data:'cnum='+cnum+'&time='+time+"&CK="+CK+'&LDH='+LDH
			     +'&HDBH='+HDBH+'&CK_MB='+CK_MB+'&cTnI='+cTnI+'&BNP='+BNP,
			success:function success(data)
			{
				
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab12_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab12_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab13_mode = 0;
	function save_lab_blood_lipid()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-13-checkDate").val();
		var TCHO = $('#TCHO').val();
		var HDL_C = $('#HDL_C').val();
		var LDL_C = $('#LDL_C').val();
		var TG = $('#TG').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_blood_lipid/mode/'+tab13_mode,
			data:'cnum='+cnum+'&time='+time+"&TCHO="+TCHO+'&HDL_C='+HDL_C
			     +'&LDL_C='+LDL_C+'&TG='+TG,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab13_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab13_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab14_mode = 0;
	function save_lab_stool_theory()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-14-checkDate").val();
		var ova = GetRadioValue('ova');
		var Tuberculous_smear = GetRadioValue('Tuberculous_smear');
		var Fungal_smear = GetRadioValue('Fungal_smear');
		var coccus_bacillus_ratio = GetRadioValue('coccus_bacillus_ratio');
		var A_B = $('#A_B').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_stool_theory/mode/'+tab14_mode,
			data:'cnum='+cnum+'&time='+time+"&ova="+ova+'&Tuberculous_smear='+Tuberculous_smear
			     +'&Fungal_smear='+Fungal_smear+'&coccus_bacillus_ratio='+coccus_bacillus_ratio+'&A_B='+A_B,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab14_mode = 1;
						for (var item in data.diff){
						if (item == "ova") SetRadioDanger('ova',2);
						else if (item == "Tuberculous_smear") SetRadioDanger('Tuberculous_smear',2);
						else if (item == "Fungal_smear") SetRadioDanger('Fungal_smear',3);
						else if (item == "coccus_bacillus_ratio") SetRadioDanger('coccus_bacillus_ratio',2);
						else 
							 $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab14_mode = 0;
					for (var item in data.data){
						if (item == "ova") SetRadioInfo('ova',2);
						else if (item == "Tuberculous_smear") SetRadioInfo('Tuberculous_smear',2);
						else if (item == "Fungal_smear") SetRadioInfo('Fungal_smear',3);
						else if (item == "coccus_bacillus_ratio") SetRadioInfo('coccus_bacillus_ratio',2);
						else 
							 $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	
	var tab15_mode = 0;
	function save_lab_ESR()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-15-checkDate").val();
		var ESR = $('#ESR').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_ESR/mode/'+tab15_mode,
			data:'cnum='+cnum+'&time='+time+"&ESR="+ESR,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab15_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab15_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var	tab16_mode;
	function save_lab_crp()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-16-checkDate").val();
		var CRP = $('#CRP').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_crp/mode/'+tab16_mode,
			data:'cnum='+cnum+'&time='+time+"&CRP="+CRP,
			success:function success(data)
			{
			if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab16_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab16_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab17_mode = 0;
	function save_lab_pct()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-17-checkDate").val();
		var PCT = $('#PCT').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_pct/mode/'+tab17_mode,
			data:'cnum='+cnum+'&time='+time+"&PCT="+PCT,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab17_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab17_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab18_mode = 0;
	function save_lab_tst()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-18-checkDate").val();
		var PPD = GetRadioValue("PPD");
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_tst/mode/'+tab18_mode,
			data:'cnum='+cnum+'&time='+time+"&PPD="+PPD,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab18_mode = 1;
						for (var item in data.diff){
							if (item == "PPD") SetRadioDanger("PPD",4);
							else 
								$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab18_mode = 0;
					for (var item in data.data){
						if (item == "PPD") SetRadioInfo("PPD",4);
						else 
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab19_mode = 0;
	function save_lab_t_spot_tb()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-19-checkDate").val();
		var A_Ag = $('#A_Ag').val();
		var B_Ag = $('#B_Ag').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_t_spot_tb/mode/'+tab19_mode,
			data:'cnum='+cnum+'&time='+time+"&A_Ag="+A_Ag+'&B_Ag='+B_Ag,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab19_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab19_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}

	var tab20_mode = 0;
	function save_lab_anca()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-20-checkDate").val();
		var p_ANCA = GetRadioValue('p_ANCA');
		var c_ANCA = GetRadioValue('c_ANCA');
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_anca/mode/'+tab20_mode,
			data:'cnum='+cnum+'&time='+time+"&p_ANCA="+p_ANCA+'&c_ANCA='+c_ANCA,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab20_mode = 1;
						for (var item in data.diff){
							if (item == "p_ANCA") SetRadioDanger(item,2);
							else if (item == "c_ANCA") SetRadioDanger(item,2);
							else 
								$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab20_mode = 0;
					for (var item in data.data){
						if (item == "p_ANCA") SetRadioInfo(item,2);
						else if (item == "c_ANCA") SetRadioInfo(item,2);
						else 
							$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab21_mode = 0;
	function save_lab_hbv()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-21-checkDate").val();
		var HBeAg = GetRadioValue('HBeAg');
		var Anti_HBs = GetRadioValue('Anti_HBs');
		var Anti_HBc = GetRadioValue('Anti_HBc');
		var Anti_HBe = GetRadioValue('Anti_HBe');
		var HBsAg = GetRadioValue('HBsAg');
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_hbv/mode/'+tab21_mode	,
			data:'cnum='+cnum+'&time='+time+"&HBeAg="+HBeAg+'&HBsAg='+HBsAg
			     +'&Anti_HBc='+Anti_HBc+'&Anti_HBe='+Anti_HBe+'&Anti_HBs='+Anti_HBs,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab21_mode = 1;
						for (var item in data.diff){
							if (item == "HBsAg") SetRadioDanger(item,2);
							else if (item == "Anti_HBs") SetRadioDanger(item,2);
							else if (item == "Anti_HBc") SetRadioDanger(item,2);
							else if (item == "Anti_HBe") SetRadioDanger(item,2);
							else if (item == "HBeAg") SetRadioDanger(item,2);
							else $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab21_mode = 0;
					for (var item in data.data){
						if (item == "HBsAg") SetRadioInfo(item,2);
						else if (item == "Anti_HBs") SetRadioInfo(item,2);
						else if (item == "Anti_HBc") SetRadioInfo(item,2);
						else if (item == "Anti_HBe") SetRadioInfo(item,2);
						else if (item == "HBeAg") SetRadioInfo(item,2);
						else $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab22_mode = 0;
	function save_lab_hbv_dna()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-22-checkDate").val();
		var HBV_DNA = $('#HBV_DNA').val();
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_hbv_dna/mode/'+tab22_mode,
			data:'cnum='+cnum+'&time='+time+"&HBV_DNA="+HBV_DNA,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab22_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab22_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab23_mode = 0;
	function save_lab_infection_screening()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-23-checkDate").val();
		var Anti_HCV = GetRadioValue('Anti_HCV');
		var HIV = GetRadioValue('HIV');
		var TP_Ab = GetRadioValue('TP_Ab')
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_infection_screening/mode/'+tab23_mode,
			data:'cnum='+cnum+'&time='+time+"&Anti_HCV="+Anti_HCV
			     +'&HIV='+HIV+'&TP_Ab='+TP_Ab,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab23_mode = 1;
						for (var item in data.diff){
							if (item == "Anti_HCV") SetRadioDanger(item,2);
							else if (item == "HIV") SetRadioDanger(item,2);
							else if (item == "TP_Ab") SetRadioDanger(item,2);
							else $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab23_mode = 0;
					for (var item in data.data){
						if (item == "Anti_HCV") SetRadioInfo(item,2);
						else if (item == "HIV") SetRadioInfo(item,2);
						else if (item == "TP_Ab") SetRadioInfo(item,2);
						else $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab24_mode = 0;
	function save_lab_thyroid_function()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-24-checkDate").val();
		var T3 = $('#T3').val();
		var T4 = $('#T4').val();
		var FT3 = $('#FT3').val();
		var FT4 = $('#FT4').val();
		var TSH = $('#TSH').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_thyroid_function/mode/'+tab24_mode,
			data:'cnum='+cnum+'&time='+time+"&T3="+T3+"&T4="+T4+
			     '&FT3='+FT3+'&FT4='+FT4+'&TSH='+TSH,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab24_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab24_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab25_mode = 0;
	function save_lab_thyroid_antibody()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-25-checkDate").val();
		var TGAb = $('#TGAb').val();
		var TPOAb = $('#TPOAb').val();
		var TRAB = $('#TRAB').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_thyroid_antibody/mode/'+tab25_mode,
			data:'cnum='+cnum+'&time='+time+"&TGAb="+TGAb+"&TPOAb="+TPOAb+
			     '&TRAB='+TRAB,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab25_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab25_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab26_mode = 0;
	function save_lab_immune_globulin_complement_rf()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-26-checkDate").val();
		var IgG = $('#IgG').val();
		var IgG4 = $('#IgG4').val();
		var IgM = $('#IgM').val();
		var IgA = $('#IgA').val();
		var C3 = $('#C3').val();
		var C4 = $('#C4').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_immune_globulin_complement_rf/mode/'+tab26_mode,
			data:'cnum='+cnum+'&time='+time+"&IgG="+IgG+"&IgG4="+IgG4+
			     '&IgM='+IgM+'&IgA='+IgA+'&C3='+C3+'&C4='+C4,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab26_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab26_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab27_mode = 0;
	function save_lab_vitd()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-27-checkDate").val();
		var s25_OH_VitD = $('#25_OH_VitD').val();
		var iPTH = $('#iPTH').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_vitd/mode/'+tab27_mode,
			data:'cnum='+cnum+'&time='+time+"&25_OH_VitD="+s25_OH_VitD+"&iPTH="+iPTH,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab27_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab27_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab28_mode = 0;
	function save_cmv()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-28-checkDate").val();
		var CMV_DNA_blood = $('#CMV_DNA_blood').val();
		var CMV_DNA_lymphocyte = $('#CMV_DNA_lymphocyte').val();
		var CMV_IgM = $('#CMV_IgM').val();
		var CMV_IgG = $('#CMV_IgG').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_cmv/mode/'+tab28_mode,
			data:'cnum='+cnum+'&time='+time+"&CMV_DNA_blood="+CMV_DNA_blood+"&CMV_DNA_lymphocyte="+CMV_DNA_lymphocyte
			+'&CMV_IgM='+CMV_IgM+'&CMV_IgG='+CMV_IgG,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab28_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab28_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab29_mode = 0;
	function save_ebv()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-29-checkDate").val();
		var EBV_DNA_blood = $('#EBV_DNA_blood').val();
		var EBV_DNA_lymphocyte = $('#EBV_DNA_lymphocyte').val();
		var EBV_IgM = $('#EBV_IgM').val();
		var EBV_IgG = $('#EBV_IgG').val();
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_ebv/mode/'+tab29_mode,
			data:'cnum='+cnum+'&time='+time+"&EBV_DNA_blood="+EBV_DNA_blood+"&EBV_DNA_lymphocyte="+EBV_DNA_lymphocyte
			+'&EBV_IgM='+EBV_IgM+'&EBV_IgG='+EBV_IgG,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab29_mode = 1;
						for (var item in data.diff){
							$('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab29_mode = 0;
					for (var item in data.data){
						$('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
	}
	
	var tab30_mode = 0;
	function save_fungla_blood()
	{
		var cnum = '<?php echo ($cnum); ?>';
		var time = $("#tab-30-checkDate").val();
		var G_T = GetRadioValue('G_T');
		var GM_T = GetRadioValue('GM_T');
	//	alert(FT3);
		$.ajax({
			type:'post',
			url:'/ibdnew/index.php/test/save_lab_fungla_blood/mode/'+tab30_mode,
			data:'cnum='+cnum+'&time='+time+"&G_T="+G_T+"&GM_T="+GM_T
			,
			success:function success(data)
			{
				if (data.status == 'failed')
				{
					swal("发生错误",data.reason,"error");
					if (data.code == 2){
						tab30_mode = 1;
						for (var item in data.diff){
							if (item == "G_T") SetRadioDanger(item,2);
							else if (item == "GM_T") SetRadioDanger(item,2);
							else $('#'+item).css('border-color','red');
							console.log(item);
						}
					}
				}
				else if (data.status == 'success')
				{
					swal("录入成功",data.reason,"success")
					tab30_mode = 0;
					for (var item in data.data){
						if (item == "G_T") SetRadioInfo(item,2);
						else if (item == "GM_T") SetRadioInfo(item,2);
						else $('#'+item).css('border-color','grey');
					}
				}
				else 
					swal("录入失败","未知错误","error")
			} 
		});
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
						  text: "是否要跳转至信息查看界面", 
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
	}
	
	//获取当前时间，格式YYYY-MM-DD
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = year + seperator1 + month + seperator1 + strDate;
        return currentdate;
    }
	var datepick =  new Array();//("tab-1-checkDate","tab-2-checkDate","tab-3-checkDate","tab-4-checkDate","tab-5-checkDate","tab-6-checkDate");
	for (var i = 1; i <= 30; i++) 
		datepick.push("tab-"+i+"-checkDate");
	for (var i in datepick)
	{
		$('#'+datepick[i]).daterangepicker({
			"singleDatePicker": true,
			"showDropdowns": true,
			"timePicker": true,
			"timePicker12Hour" : false,
			"format": "YYYY-MM-DD HH:mm:ss",
			"locale": {
				"format": "YYYY-MM-DD HH:mm:ss",
				"separator": " - ",
				"applyLabel": "确认",
				"cancelLabel": "取消",
				"fromLabel": "From",
				"toLabel": "To",
				"customRangeLabel": "Custom",
				"weekLabel": "W",
				"daysOfWeek": [
					"日",
					"一",
					"二",
					"三",
					"四",
					"五",
					"六"
				],
				"monthNames": [
					"一月",
					"二月",
					"三月",
					"四月",
					"五月",
					"六月",
					"七月",
					"八月",
					"九月",
					"十月",
					"十一月",
					"十二月"
				],
				"firstDay": 1
			},
			"startDate": getNowFormatDate,
			"endDate": getNowFormatDate
		}, function(start, end, label) {
		  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		});	
	}
</script>


</body>
</html>