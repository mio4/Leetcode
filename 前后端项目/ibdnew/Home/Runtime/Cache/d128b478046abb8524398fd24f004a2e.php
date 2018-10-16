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
	 <link href="/ibdnew/PUBLIC/css/jquery.qtip.css" rel="stylesheet">  
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
          症状与体征信息
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
				  <label for="check_time" class="col-sm-1 control-label form-label">检查时间</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-radius" id="check_time">
                  </div>
				 </div>
				<div class="form-group"> 
					<label class="col-sm-1 control-label form-label margin-t-10">起病症状</label> 
					<div class="col-sm-4 margin-t-10">
						 <div class="checkbox checkbox-inline ">
							<input type="checkbox" value="1" name="symptom" id="fever"onclick="show_input(fev_input,this.id)"  >
							<label for="fever"> 发热 </label>
							<input type="text" style="width:40px;height:20px ;display:none" id="fev_input" >
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="diarrhea" value="2" name="symptom" onclick="show_input(dia_input,this.id)">
							<label for="diarrhea"> 腹泻 </label>
							<input type="text" style="width:40px;height:20px;display:none" id="dia_input" >
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio3" value="3" name="symptom"  >
							<label for="inlineRadio3"> 粘液脓血便 </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio4" value="4" name="symptom"  >
							<label for="inlineRadio4"> 里急后重 </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio5" value="5" name="symptom"  >
							<label for="inlineRadio5"> 腹痛 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio6" value="6" name="symptom"  >
							<label for="inlineRadio6"> 便血 </label>
						</div>	
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio7" value="7" name="symptom"  >
							<label for="inlineRadio7"> 体重下降 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="other_sym" value="8" name="symptom" onclick=" other_symptom()"  >
							<label for="other_sym"> 其他 </label>
						</div>
					</div>  		    
					<label class="col-sm-1 control-label form-label margin-t-10">起病体征</label> 
					<div class="col-sm-5 margin-t-10">
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio9" value="1" name="signs"  >
							<label for="inlineRadio9"> 贫血貌 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio10" value="2" name="signs">
							<label for="inlineRadio10"> 淋巴结肿大 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio11" value="3" name="signs"  >
							<label for="inlineRadio11"> 黄疸  </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio12" value="4" name="signs"  >
							<label for="inlineRadio12"> 腹部包块 </label>
						</div>  
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio13" value="5" name="signs"  >
							<label for="inlineRadio13"> 瘘管 </label>
						</div> <div class="checkbox checkbox-inline"> 
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio14" value="6" name="signs"  >
							<label for="inlineRadio14"> 便血 </label>
						</div>	
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio15" value="7" name="signs"  >
							<label for="inlineRadio15"> 肛周脓肿 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio16" value="8" name="signs"  >
							<label for="inlineRadio16"> 口腔溃疡 </label>
						</div> 
						<div class="checkbox checkbox-inline"> 
							<input type="checkbox" id="other_sign" value="9" name="signs"onclick="other_signs()">
							<label for="other_sign"> 其他 </label>
						</div>
				    </div> 	
                </div>
				
				<div class="form-group"> 
					<label class="col-sm-1 control-label form-label margin-t-10">吸烟史</label> 
					<div class="col-sm-4 margin-t-10">
						<div class="radio radio-info radio-inline "> 
							<input type="radio" id="inlineRadio18" value="1" name="smoke" >
							<label for="inlineRadio18"> 是 </label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio19" value="2" name="smoke"checked>
							<label for="inlineRadio19"> 否 </label>
						</div> 
					</div>
					<label class="col-sm-1 control-label form-label margin-t-10">饮酒史</label> 
					<div class="col-sm-5 margin-t-10">
						<div class="radio radio-info radio-inline"> 
							<input type="radio" id="inlineRadio20" value="1" name="drink" >
							<label for="inlineRadio20"> 是 </label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio21" value="2" name="drink"checked>
							<label for="inlineRadio21"> 否 </label>
						</div> 
					</div>
					
				</div>
				 <div class="form-group"> 
					<label class="col-sm-1 control-label form-label margin-t-10">乳糖不耐受</label> 
					<div class="col-sm-4 margin-t-10">
						<div class="radio radio-info radio-inline"> 
							<input type="radio" id="inlineRadio22" value="1" name="lactose" >
							<label for="inlineRadio22"> 是 </label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio23" value="2" name="lactose"checked>
							<label for="inlineRadio23"> 否 </label>
						</div> 
					</div>
					<label class="col-sm-1 control-label form-label margin-t-10">腹部手术史</label> 
					<div class="col-sm-5 margin-t-10">
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="appendix" value="1" name="abdomen" onclick="show_input(app_input,this.id)"  >
							<label for="appendix"> 阑尾 </label>
							<input type="text" style="width:100px;height:20px;display:none" id="app_input" >
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio25" value="2" name="abdomen">
							<label for="inlineRadio25"> 肝 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio26" value="3" name="abdomen"  >
							<label for="inlineRadio26"> 胆 </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio27" value="4" name="abdomen"  >
							<label for="inlineRadio27"> 胰 </label>
						</div> 
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio28" value="5" name="abdomen"  >
							<label for="inlineRadio28"> 脾 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio29" value="6" name="abdomen"  >
							<label for="inlineRadio29"> 胃 </label>
						</div>	
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio30" value="7" name="abdomen"  >
							<label for="inlineRadio30"> 小肠 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio31" value="8" name="abdomen"  >
							<label for="inlineRadio31"> 结肠 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio32" value="9" name="abdomen"  >
							<label for="inlineRadio32"> 直肠 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio33" value="10" name="abdomen"  >
							<label for="inlineRadio33"> 泌尿系 </label>
						</div>
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineRadio34" value="11" name="abdomen"  >
							<label for="inlineRadio34"> 生殖系统 </label>
						</div>
				    </div>
				 </div>
				 <div class="form-group"> 
					   
					<label class="col-sm-1 control-label form-label margin-t-10">结直肠癌家族史</label> 
					<div class="col-sm-4 margin-t-10">
						<div class="radio radio-info radio-inline"> 
							<input type="radio" id="inlineRadio35" value="1" name="colon" >
							<label for="inlineRadio35"> 是 </label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio36" value="2" name="colon" checked>
							<label for="inlineRadio36"> 否 </label>
						</div> 
					</div>
					<label for="med_dose" class="col-sm-1 control-label form-label">妊娠生育史</label>
					<div class="col-sm-3">
						<input type="text" class="form-control form-control-radius" id="pregnancy" value="0">
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
<script type="text/javascript" src="/ibdnew/PUBLIC/js/laydate/laydate.js"></script> 
<script src="/ibdnew/PUBLIC/js/sweet-alert/sweet-alert.min.js"></script> 
<script src="/ibdnew/PUBLIC/js/datatables/datatables.min.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/jquery.qtip.js"></script> 
<script type="text/javascript" src="/ibdnew/PUBLIC/js/date-range-picker/daterangepicker.js"></script> 

<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->

<!-- Today Activity -->


<script> 
	var symptom_other=""; 
	var signs_other="",fever="",diarrhea="";
	 $(document).ready(function()
	 { 
		laydate.render({
			elem: '#check_time' //指定元素
		}); 
			 
		  laydate.render({elem:'#app_input',calendar: true,}) 
	 });
    function show_input(obj,id){ 
		if($('input[id='+id+']').prop("checked")){
				$(obj).show();
		}else $(obj).hide();
	}
	function  other_symptom(){ 
		if($('input[id="other_sym"]').prop("checked"))
        {
            swal({  
			title:'其他',
			text: '<div><label>其他</label><input type ="text" id="symptom_other"></div>',
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:true,
			closeOnCancel:true
			 },function(isConfirm){
				symptom_other=$('#symptom_other').val(); 
				}
			); 
		}  
	}  
	function  other_signs(){ 
		if($('input[id="other_sign"]').prop("checked"))
        {
		
            swal({  
			title:'其他',
			text: '<input type ="text"id="signs_other">',
			html :true,			
            showCancelButton:true,
            confirmButtonColor:'#DD6B55',
            confirmButtonText:'确定添加',
			cancelButtonText:"返回修改",
            closeOnConfirm:true,
			closeOnCancel:true
			 },function(isConfirm){
				signs_other=$('#signs_other').val(); 
				
				}
			); 
		}  
	}  
	 function save(){
		var arr=new Array("symptom","signs","abdomen") ;
		var symptom2=["无","发热","腹泻","粘液脓血便","里急后重","腹痛","便血","体重下降",""];
		var signs2=["无","贫血貌","淋巴结肿大","黄疸","腹部包块","瘘管","便血","肛周脓肿","口腔溃疡"];
		var abdomen2=["无","阑尾","肝","胆","胰","脾","胃","小肠","结肠","直肠","泌尿系","生殖系统"];
		var check = {};
		var reg0 = /^[3-4][0-9]\.[0-9]$/;
		var reg1= /^[1-9][0-9]$/;
		var reg2 = /^[0-9]$/;
		var reg3=/^[1-3]\d{3}[-][0-1][0-9][-][0-3][0-9]$/;
		var symptom1="";var signs1="";var abdomen1="";
		if(symptom_other!=null) symptom2[8]=symptom_other; 
		if(other_signs!=null) signs2[9]=signs_other;
		var fev_input=$('#fev_input').val();
		if(fev_input!=""){
			symptom2[1]=symptom2[1]+" "+fev_input+"℃"; 
			if(reg0.test(fev_input)==true){
				fev_input=fev_input.replace(".", ''); 
			}else if(reg1.test(fev_input)==true){
				fev_input="0"+fev_input;
			}else{
				swal("请检查你输入的发烧温度");
				return;
			}
		}else fev_input="000";
	    var dia_input=$('#dia_input').val();
		if(dia_input!=""){
			symptom2[2]=symptom2[2]+" "+dia_input+"次"; 
			if(reg2.test(dia_input)==true){
				dia_input="0"+dia_input;
			}else if(reg1.test(dia_input)==true){ 
			}else{
				swal("腹泻次数只能为大于等于0小于99的数字");
				return;
			}
		}  else dia_input="00";
		var app_input=$('#app_input').val();
		if(app_input!="")abdomen2[1]=abdomen2[1]+" "+app_input;
		for(var i=0;i<arr.length;i++){ 
			obj =  document.getElementsByName(arr[i]);  
			for(k in obj){  
				if(obj[k].checked){    
						if (k=="item")break;
						if(check[arr[i]]==null)check[arr[i]]="1";
						else check[arr[i]]=check[arr[i]]+"1"; 
						if(arr[i]=="symptom") symptom1=symptom1+symptom2[obj[k].value]+" ";
						if(arr[i]=="signs") signs1=signs1+signs2[obj[k].value]+" ";
						if(arr[i]=="abdomen") abdomen1=abdomen1+abdomen2[obj[k].value]+" ";
				}
				else{
					if (k=="item")break;
					if(check[arr[i]]==null)check[arr[i]]="0";
					else check[arr[i]]=check[arr[i]]+"0";
				} 
			} 
		}  
		if(check["symptom"]=="0000000000000") symptom1="无";
		if(check["signs"]=="000000000") signs1="无";
		if(check["abdomen"]=="00000000000")abdomen1="无";
		var cnum=$('#cnum').val();
		var check_time=$('#check_time').val();
		var smoke=$('input[name="smoke"]:checked').val();
		if(smoke==null)smoke=0;
		var drink=$('input[name="drink"]:checked').val();
		if(drink==null)drink=0;
		var lactose=$('input[name="lactose"]:checked').val();
		if(lactose==null)lactose=0;
		var pregnancy=$('#pregnancy').val();
		var colon=$('input[name="colon"]:checked').val();
		if(colon==null)colon=0;
		var arr=new Array("无","有","无") ;
		check["symptom"]=check["symptom"]+fev_input+dia_input;
		if(cnum==""){
			swal("病历号不能为空"); 
			return;
		} 
		if(check_time==""){ 
			swal("请检查时间");
			return;
		} 
		if((reg2.test(pregnancy)!=true)&&(reg1.test(pregnancy)!=true)){
				swal("请检查妊娠生育史");
					return;
		}
		swal({  
           title:'',
			text:  '<p><div class="exp"><div class="exp1"> <label class="exp3"> 病历号:'+cnum+'</label></div><div class="exp2"><label class="exp3">检查时间:  '+check_time+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">起病症状：'+symptom1+'</label></div><div class="exp2"><label class="exp3">起病体征： '+ signs1+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">吸烟史： '+arr[smoke]+'</label></div><div class="exp2"><label class="exp3">饮酒史:  '+arr[drink]+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">乳糖不耐受： '+arr[lactose]+'</label></div><div class="exp2"><label class="exp3">腹部手术史：'+abdomen1+'</label></div></div></p>'+
			'<p><div class="exp"><div class="exp1"><label class="exp3">妊娠生育史：'+pregnancy+'个子女</label></div><div class="exp2"><label class="exp3">结直肠癌家族史：'+arr[colon]+'</label></div></div></p>' ,
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
				url:'/ibdnew/index.php/Symptoms/save_sym',
				data:'cnum='+cnum+'&check_time='+check_time+'&symptom='+check["symptom"]+'&signs='+check["signs"]+'&smoke='+smoke+'&drink='
				+drink+'&lactose='+lactose+'&abdomen='+check["abdomen"]+'&pregnancy='+pregnancy+'&colon='+colon+'&symptom_other='+symptom_other+'&signs_other='+signs_other+
				'&app_input='+app_input,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("添加信息失败",data.reason,'error');
							else  {
								swal("成功添加信息");
							}
						},
				error : function error()
				{
					swal('数据发送失败','','error'); 
				}
			});
         }
         );  
		 document.getElementById("fev_input").value="" ;
		 document.getElementById("app_input").value="" ;
		 document.getElementById("dia_input").value="" ;
	 }
 
</script>


</body>
</html>