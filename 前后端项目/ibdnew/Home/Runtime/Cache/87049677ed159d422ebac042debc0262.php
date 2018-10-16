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
<style>
.exp{ float:left; width:400px;   solid #F0F}
.exp1{ float:left; width:200px;   solid #F0F}
.exp2{ float:right; width:200px;   solid #F0F}
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

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          诊断信息
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
                    <input type="text" class="form-control form-control-radius" id="cnum" >
                  </div>
				  
				  <label for="onset_time" class="col-sm-1 control-label form-label">起病时间</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="onset_time">
                  </div>
				  
				  <label for="diag_time" class="col-sm-1 control-label form-label">诊断时间</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="diag_time">
                  </div>
                </div>
				 <div class="form-group">  
					<label class="col-sm-1 control-label form-label margin-t-10">病变范围</label> 
					<div class="col-sm-3 margin-t-10"> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio1" value="1" name="dis_area">
							<label for="inlineRadio1"> 直肠型 </label>
						</div>
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio2" value="2" name="dis_area">
							<label for="inlineRadio2"> 左半结肠型 </label>
						</div>
						<div class="radio radio-info radio-inline"> 
						</div> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio3" value="3" name="dis_area" >
							<label for="inlineRadio3"> 广泛结肠型 </label>
						</div> 
					  </div>  
					<label class="col-sm-1 control-label form-label margin-t-10">疾病活动度</label> 
					<div class="col-sm-3 margin-t-10"> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio4" value="1" name="mayo"  >
							<label for="inlineRadio4"> 缓解期 </label>
						</div>
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio5" value="2" name="mayo"  >
							<label for="inlineRadio5"> 轻度活动 </label>
						</div>
						<div class="radio radio-info radio-inline"> 
						</div>
						<div class="radio radio-info radio-inline"> 
						</div>  
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio6" value="3" name="mayo"  >
							<label for="inlineRadio6"> 中度活动 </label>
						</div> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio7" value="4" name="mayo"  >
							<label for="inlineRadio7"> 重度活动 </label>
						</div>
				    </div>  
					<label class="col-sm-1 control-label form-label margin-t-10">并发症</label> 
					<div class="col-sm-3 margin-t-10">  
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio8" value="1" name="complication">
							<label for="inlineRadio8"> 中毒性巨结肠 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio9" value="2" name="complication">
							<label for="inlineRadio9"> 肠穿孔 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio10" value="3" name="complication"  >
							<label for="inlineRadio10"> 结肠癌 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio11" value="4" name="complication"  >
							<label for="inlineRadio11"> 下消化道大出血 </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio12" value="5" name="complication"  >
							<label for="inlineRadio12"> 结肠上皮内瘤变 </label> 
						</div>
						
				    </div> 	 		  
                </div>
				 
				<div class="form-group">    
					<label class="col-sm-1 control-label form-label margin-t-10">关节炎</label> 
					<div class="col-sm-3 margin-t-10">  
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio13" value="1" name="arthritis" onclick="getValue()"  >
							<label for="inlineRadio13"> 外周关节炎 </label>
						</div> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio14" value="2" name="arthritis"  >
							<label for="inlineRadio14"> 脊柱关节炎 </label>
						</div> 
					  </div>  
					<label class="col-sm-1 control-label form-label margin-t-10">眼炎</label> 
					<div class="col-sm-3 margin-t-10"> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio15" value="1" name="eye_inf" >
							<label for="inlineRadio15"> 葡萄膜炎 </label>
						</div>
						<div class="radio  radio-info radio-inline">
							<input type="radio" id="inlineRadio16" value="2" name="eye_inf">
							<label for="inlineRadio16"> 巩膜炎 </label>
						</div> 
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio17" value="3" name="eye_inf"  >
							<label for="inlineRadio17"> 虹膜炎 </label>
						</div>  
				    </div>   
					<label class="col-sm-1 control-label form-label margin-t-10">肝脏</label> 
					<div class="col-sm-3 margin-t-10"> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio18" value="1" name="liver"  >
							<label for="inlineRadio18"> 脂肪肝 </label>
						</div>
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio19" value="2" name="liver">
							<label for="inlineRadio19">原发性硬化性胆管炎</label>
						</div>
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio20" value="3" name="liver"  >
							<label for="inlineRadio20"> 胆石症 </label>
						</div>   
					</div> 
                </div> 
				<div class="form-group">  
					<label class="col-sm-1 control-label form-label margin-t-10">皮肤</label> 
					<div class="col-sm-3 margin-t-10">  
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio21" value="1" name="skin"  >
							<label for="inlineRadio21"> 结节红斑 </label>
						</div> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio22" value="2" name="skin"  >
							<label for="inlineRadio22"> 坏疽性脓皮病 </label>
						</div> 
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio23" value="3" name="skin" onclick="shin_other()" >
							<label for="inlineRadio23"> 其他 </label>
						</div>
					  </div>  	
				    <label class="col-sm-1 control-label form-label margin-t-10">栓塞</label> 
					<div class="col-sm-3 margin-t-10">  
						<div class="radio radio-info radio-inline">
							<input type="radio" id="inlineRadio24" value="1" name="embolism">
							<label for="inlineRadio24"> 结节红斑 </label>
						</div>  
					</div> 
					  <label for="com_dis" class="col-sm-1 control-label form-label margin-t-10">合并疾病</label>
					  <div class="col-sm-3">
						<input type="text" class="form-control form-control-radius margin-t-10" id="com_dis" >
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
<script type="text/javascript" src="/ibdnew/PUBLIC/js/jquery.min.js"></script> 
<script src="/ibdnew/PUBLIC/js/bootstrap/bootstrap.min.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/plugins.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/bootstrap-select/bootstrap-select.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/bootstrap-toggle/bootstrap-toggle.min.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/easypiechart/easypiechart.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/easypiechart/easypiechart-plugin.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/sparkline/sparkline.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/sparkline/sparkline-plugin.js"></script>  
<script src="/ibdnew/PUBLIC/js/rickshaw/d3.v3.js"></script> 
<script src="/ibdnew/PUBLIC/js/rickshaw/rickshaw.js"></script> 
<script src="/ibdnew/PUBLIC/js/rickshaw/rickshaw-plugin.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/moment/moment.min.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/laydate.js"></script> 
<script src="/ibdnew/PUBLIC/js/sweet-alert/sweet-alert.min.js"></script> 
<script src="/ibdnew/PUBLIC/js/datatables/datatables.min.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/date-range-picker/daterangepicker.js"></script>

<script>
	var skin_other="";
  $(document).ready(function() { 
	$('#onset_time').daterangepicker(
		{ singleDatePicker: true,
			format: 'YYYY-MM-DD'
			}, function(start, end, label) {
				if(!this.startDate){
                    this.element.val('');
                }else{
                    this.element.val(this.startDate.format('YYYY-MM-DD'));
            }				 
			 
		  });
    $('#diag_time').daterangepicker(
	   { singleDatePicker: true,
		format: 'YYYY-MM-DD'	
		}, function(start, end, label) {
		if(!this.startDate){
			this.element.val('');
		}else{
			this.element.val(this.startDate.format('YYYY-MM-DD'));
		}				 
	 
    });
} );
	function shin_other(){
		swal({  
			title:'其他',
			text: '<input  id="skin_other">',
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:true,
			closeOnCancel:true
         },
         function(isConfirm){
			skin_other=$('#skin_other').val(); 
         }
        ); 
	}    
	function save(){ 
		var cnum=$('#cnum').val();
		var onset_time=$('#onset_time').val();
		var diag_time=$('#diag_time').val();
		var dis_area=$('input[name="dis_area"]:checked').val();
		if(dis_area==null)dis_area=0;
		var dis_area2=["无","直肠型","左半结肠型","广泛结肠型"];
		var mayo =$('input[name="mayo"]:checked').val();
		if(mayo==null)mayo=0;
		var mayo2=["无","缓解期","轻度活动","中度活动","重度活动"]
		var arthritis=$('input[name="arthritis"]:checked').val();
		if(arthritis==null)arthritis=0;
		var complication2=["无","中毒性巨结肠","肠穿孔","下消化道大出血","结肠上皮内瘤变","结肠癌"];
		var arthritis2=["无","外周关节炎","脊柱关节炎"];
		var eye_inf=$('input[name="eye_inf"]:checked').val(); 
		if(eye_inf==null)eye_inf=0;
		var eye_inf2=["无","葡萄膜炎","巩膜炎","虹膜炎"];
		var liver=$('input[name="liver"]:checked').val();
		if(liver==null)liver=0;
		var liver2=["无","脂肪肝","原发性硬化性胆管炎","胆石症"]; 
		var skin=$('input[name="skin"]:checked').val();
		if(skin==null)skin=0; 
		var skin2=["无","结节红斑","坏疽性脓皮病"];
		if(skin_other!="")skin2[3]=skin_other;
		var embolism=$('input[name="embolism"]:checked').val();
		if(embolism==null)embolism=0;
		var embolism2=["无","是"];
		var com_dis=$('#com_dis').val();
		var complication=null; 
		var complication2=["无","中毒性巨结肠","肠穿孔","结肠癌","下消化道大出血","结肠上皮内瘤变"];
		var complication1="";
		obj =  document.getElementsByName("complication");  
		for(k in obj){  
			if(obj[k].checked){    
					if (k=="item")break;
					if(complication==null)complication="1";
					else complication=complication+"1"; 
					complication1=complication1+complication2[obj[k].value]+" ";
			}
			if(!obj[k].checked){
				if (k=="item")break;
				if(complication==null)complication="0";
				else complication=complication+"0";
			} 
		}   
		swal({  
           title:'',
			text:  '<p><div class="exp"><div class="exp1"> <label class="exp3"> 病历号:'+cnum+'</label></div><div class="exp2"><label class="exp3">起病时间:  '+onset_time+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">确诊时间：'+diag_time+'</label></div><div class="exp2"><label class="exp3">病变范围： '+ dis_area2[dis_area]+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">疾病活动度： '+mayo2[mayo]+'</label></div><div class="exp2"><label class="exp3">并发症:  '+complication1+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">关节炎： '+arthritis2[arthritis]+'</label></div><div class="exp2"><label class="exp3">眼炎：'+eye_inf2[eye_inf]+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">肝脏：'+liver2[liver]+'</label></div><div class="exp2"><label class="exp3">皮肤：'+skin2[skin]+'</label></div></div></p>'+
			 '<p><div class="exp"><div class="exp1"><label class="exp3">栓塞：'+embolism2[embolism]+'</label></div><div class="exp2"><label class="exp3">合并疾病：'+com_dis+'</label></div></div></p>' ,
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:false,
			closeOnCancel:true
         },
         function(isConfirm){
           $.ajax({
				type:'post',
				url:'/ibdnew/index.php/Diagnosis/save_diag',
				data:'cnum='+cnum+'&onset_time='+onset_time+'&diag_time='+diag_time+'&dis_area='+dis_area+'&mayo='+mayo+'&complication='+complication+'&arthritis='
				+arthritis+'&eye_inf='+eye_inf+'&liver='+liver+'&skin='+skin+'&embolism='+embolism+'&com_dis='+com_dis+'&skin_other='+skin_other,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("添加诊断信息失败",data.reason,'error');
							else  {
								swal("成功添加诊断信息");
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
</script>


</body>
</html>