/*$(function(){
	  var currencies = 
	  ["柳氮磺吡啶肠溶片","柳氮磺吡啶栓","美沙拉秦缓释颗粒","美沙拉琴缓释片","美沙拉嗪灌肠液",
		"美沙拉嗪栓","美沙拉嗪肠溶片","泼尼松片","泼尼松龙片","注射用甲泼尼龙琥珀酸钠","甲泼尼龙片",
		"注射用氢化可的松琥珀酸钠","地塞米松片","地塞米松磷酸钠注射液","英夫利昔单抗","阿达木单抗",
		"硫唑嘌呤片","6-巯基嘌呤片","环孢素软胶囊","环孢素软胶囊","环孢素注射液","甲硝唑片","甲硝唑注射液",
		"盐酸小檗碱片","注射用青霉素钠","头孢克洛缓释片（II）","头孢呋辛酯片","头孢哌酮舒巴坦钠",
		"亚胺培南西司他丁钠","注射用美罗培南","注射用比阿培南","哌拉西林钠他唑巴坦钠","哌拉西林舒巴坦钠",
		"伏立康唑片","伏立康唑胶囊","注射用伏立康唑","氟康唑注射液","氟康唑胶囊","注射用米卡芬净钠",
		"更昔洛韦胶囊","注射用更昔洛韦","那曲肝素钙","依诺肝素钠","达肝素钠","马来酸曲美布汀片","得舒特片",
		"奥替溴铵片","蒙脱石散","盐酸洛哌丁胺胶囊","卡文注射液","中/长链脂肪乳注射液（C8-24Ve）",
		"脂肪乳注射液（C14-24）","结构脂肪乳注射液（C6-24）","中/长链脂肪乳注射液（C6-24）",
		"复方氨基酸注射液（18AA-II）","肠内营养粉剂（TP）","肠内营养乳剂（TPF-T）","肠内营养乳剂（TPF-D）",
		"肠内营养乳剂（TP-HE）","肠内营养混悬液（SP）","肠内营养混悬液（TPF）","氨酸型肠内营养剂（Elental）",
		"蔗糖铁注射液","维生素B12","叶酸片","维生素B1","布拉氏酵母菌","地衣芽孢杆菌活菌胶囊",
		"双歧杆菌三联活菌胶囊","枯草杆菌二联活菌肠溶胶囊","异烟肼片","利福平片","利福喷丁胶囊","吡嗪酰胺片",
		"盐酸乙胺丁醇片","链霉素注射液","拜复乐片","拜复乐注射液","聚乙二醇电解质散剂I","乳果糖口服溶液",
		"人血白蛋白","冰冻血浆","红细胞","血小板"
	  ]; 
	  // 设置autocomplete从数组currencies拉取数据
	  $('#med_name').autocomplete({
		lookup: currencies 
	  }); 
	});*/ 


$(document).ready(function(){
		 var currencies = [];  
	   $.ajax({
				type:'post', 
				url:'/ibdnew/index.php/Medicine/get_medname', 
				async: false,
				success : function success(data)
						{
							if (data.status == "failed")
							  swal("未找到药品","error");
							else  { 
								$('#med_name').autocomplete({
										lookup: data[0]
									  });
								  $('#nmed_name').autocomplete({
									lookup: data[0]
								  });
								   $('#pro_name').autocomplete({
									lookup: data[1]
								  });
								   //$('#med_type').autocomplete({
									//lookup: data[2]
								  //});
								   $('#specification').autocomplete({
									lookup: data[3]
								  });
								   $('#med_belong').autocomplete({
									lookup: data[4]
								  });
							}
						},
				error : function error()
				{
					swal('数据发送失败','请检查网络连接','error');
				}
			}); 
});
 