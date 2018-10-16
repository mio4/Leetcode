<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive,"/>
    <link rel="shortcut icon" href="/ibdnew/PUBLIC/img/logo.png">
    <title>IBD-病例管理</title>
    <link href="/ibdnew/PUBLIC/css/root.css" rel="stylesheet">

    <style>
        .basicInfo {
            width: 100px;
            height: 20px;
            border: none;
        }
    </style>
    <link href="/ibdnew/PUBLIC/css/autocomplete_style.css" rel="stylesheet">
</head>
<body>
<!-- Start Page Loading -->
<div class="loading"><img src="/ibdnew/PUBLIC/img/loading.gif" alt="loading-img"></div>
<?php
 require("./PUBLIC/php/top.php"); require("./PUBLIC/php/sidebar.php"); ?>
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">

    <!-- Start Row -->
    <div class="row">
        <!-- Start Panel -->
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-title">
                    病人总览
                </div>
                <div class="panel-body table-responsive">
                    <table id="patientList" class="table display">
                        <thead>
                        <tr>
                            <th>类型</th>
                            <th>病历号</th>
                            <th>姓名</th>
                            <th>操作</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>类型</th>
                            <th>病历号</th>
                            <th>姓名</th>
                            <th>操作</th>

                        </tr>
                        </tfoot>

                        <tbody>
                        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                <td><?php echo ($vo['type']); ?></td>
                                <td><a onclick="getBasicInfo(<?php echo ($vo['cnum']); ?>)"><?php echo ($vo['cnum']); ?></a></td>
                                <td><?php echo ($vo['name']); ?></td>
                                <td>
                                    <!-- <a href="/ibdnew/index.php/detail/person/cnum/<?php echo ($vo['cnum']); ?>">-->
                                </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>


                </div>

            </div>
        </div>
        <!-- End Panel -->
        <!-- Start Panel -->

        <div class="col-md-8">
            <div class="panel panel-default">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#record" aria-controls="record" role="tab"
                                                              data-toggle="tab">住院记录</a></li>
                    <li role="presentation"><a a href="#medicine" aria-controls="medicine" role="tab" data-toggle="tab">药物信息</a>
                    </li>

                    <li role="presentation"><a href="#addLab" aria-controls="addLab" role="tab" data-toggle="tab">化验信息</a></li>
                    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">基本信息展示</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Start Today -->
                    <div role="tabpanel " class="tab-pane active" id="record">
                        <?php require("./PUBLIC/php/record.php");?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="medicine">

                        <?php require("./PUBLIC/php/medicine.php");?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tasks">
                        <?php require("./PUBLIC/php/basicInfo.php");?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="addLab">
                        <?php require("./PUBLIC/php/addLab.php");?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="row footer">
    <div class="col-md-12 text-left">
        Copyright &copy; 2018.ibd医疗数据管理 All rights reserved.
    </div>
</div>
</div>

<?php
 require("./PUBLIC/php/sidepanel.php"); require('./PUBLIC/php/common_js.php'); ?>
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery-1.9.1.min.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/jquery.autocomplete.min.js"></script>
<script src="/ibdnew/PUBLIC/js/autocomplete/autocomplete-medicine.js"></script>
<script type="text/javascript" src="/ibdnew/PUBLIC/js/laydate/laydate.js"></script>
<script src="/ibdnew/PUBLIC/js/datatables/datatables.min.js"></script>


<script>
    $(document).ready(function () {
        $('#patientList').DataTable();
        laydate.render({elem:'#med_sptime',calendar: true,})
        laydate.render({elem:'#med_stime',calendar: true,})
        laydate.render({elem: '#recordStime', calendar: true,})
        laydate.render({elem: '#recordSptime', calendar: true,});
    });

    function getBasicInfo(cnum) {

        $.ajax({
            type: 'post',
            url: '/ibdnew/index.php/show/person',
            data: 'cnum=' + cnum,
            success: function success(data) {
                $("#basicName").val(data['name']);
                $("#basicCnum").val(data['cnum']);
                $("#medCnum").val(data['cnum']);
                $("#recordName").val(data['name']);
                $("#recordCnum").val(data['cnum']);
                $("#basicType").val(data['first_type']);
                $("#basicSex").val(data['$sex'] == '0' ? '男' : '女');
                $("#basicBrith").val(data['birth']);
                $("#basicEthnic").val(data['ethnic']);
                $("#basicMobile1").val(data['mobile1']);
                $("#basicDoctorInCharge").val(data['doctor_in_charge']);
                $("#basicsSnum").val(data['snum']);
                $("#basicSecondType").val(data['second_type']);
                $("#basicAge").val(data['age']);
                $("#basicProvince").val(data['province']);
                $("#basicTelephone").val(data['telephone']);
                $("#basicMobile2").val(data['mobile2']);
                $("#basicOther").val(data['other']);
                $('#recordTh').empty();
                $('#recordTb').empty();
                if (data['record'] != null && data['record'].length > 0) {
                    var text = "<tr><td>第几次</td> <td>开始时间</td><td>结束时间</td></tr>"
                    $('#recordTh').append(text);
                    $.each(data['record'], function (key, val) {
                        var text = "<tr><td>" + val['times'] + "</td>"
                            + "<td>" + val['recordStime'] + "</td>"
                            + "<td>" + val['recordSptime'] + "</td></tr>";
                        $('#recordTb').append(text);
                    });
                }

            },
            error: function error() {

            }

        });
    }

    function saveRecord() {
        var recordCnum = $('#recordCnum').val();
        var recordStime = $('#recordStime').val();
        var recordSptime = $('#recordSptime').val();
        if(recordCnum == "" ||recordStime == ""){
             swal('病例号或者开始时间不能为空');
             return;
        }
        $.ajax({
            type: 'post',
            url: '/ibdnew/index.php/show/saveRecord',
            data: 'cnum=' + recordCnum + '&recordStime=' + recordStime + '&recordSptime=' + recordSptime,
            success: function (data) {
                if (data['status'] == 'success') {
                    swal({title: "添加成功", text: data['reason'], type: "success"});
                } else swal({title: "添加失败", text: data['reason'], type: "error"});
            },
            error: function error() {

            }
        });
    }

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
        var cnum = $('#medCnum').val();
        var med_name = $('#med_name').val();
        var med_dose = $('#med_dose').val();
        var med_times = $('#med_times').val();
        var med_stime = $('#med_stime').val();
        var med_sptime = $('#med_sptime').val();
        var med_way = $('#med_way').val() ;
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
</script>
</body>
</html>