<?php
	class TestAction extends Action
	{
		
		
		public function CheckLogin()
		{
			isset($_SESSION) or session_start();
			if (isset($_SESSION['username']))
			{
				if ($_SESSION['status'] == 1)
				{
					return true;
				}
			}
			return false;
		}
		public function test()
		{
			if ($this->CheckLogin())
			{
				$this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		public function NewTest()
		{
			if ($this->CheckLogin())
			{
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		function birthday($birthday){ 
		 $age = strtotime($birthday); 
		 if($age === false){ 
		  return false; 
		 } 
		 list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
		 $now = strtotime("now"); 
		 list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
		 $age = $y2 - $y1; 
		 if((int)($m2.$d2) < (int)($m1.$d1)) 
		  $age -= 1; 
		 return $age; 
		}
		
		public function digit2type($value)
		{
			$ans = 'Unknown';
			if ($value=='0') $ans='UC';
			else if ($value=='1') $ans='CD';
			else if ($value=='2') $ans='IBDU';
			else if ($value=='3') $ans='IC';
			return $ans;
		}
		
		public function add_lab($cnum)
		{
			if ($this->CheckLogin())
			{
				$m = M('basic');
				$data = $m->where('cnum = "%s"',array($cnum))->select();
				$data[0]['first_type'] = $this->digit2type($data[0]['type']);
				$data[0]['age'] = $this->birthday($data[0]['birth']);
				$this->assign($data[0]);
				$this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function showlab($cnum)
		{
			if ($this->CheckLogin())
			{
				$this->assign('cnum',$cnum);
				$this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function show_all($cnum)
		{
			if ($this->CheckLogin())
			{
				$items = array('anca','anemia','blood_lipid','blood_regular_test','chemical','cmv','crp','ebv','esr','fungla_blood','hbv','hbv_dna','heart','hemostasis_coagulation',
							   'immune_globulin_complement_rf','infection_screening','liver_function','nephric_function','pancreas','pct','ret','stool_routine','stool_theory',
							   't_spot_tb','tc_bc','thyroid_antibody','thyroid_function','tst','urine_analyse','vitd');
				$R = array();
				$m = M('basic');
				$u = $m->where('cnum = "'.$cnum.'"')->find();
				$t = array('anca'=>'抗中性粒细胞胞浆抗体','anemia'=>'贫铁5项','blood_lipid'=>'血脂','blood_regular_test'=>'血常规','chemical'=>'电解质','cmv'=>"巨细胞病毒感染",
				   'crp'=>'C反应蛋白','ebv'=>'EB病毒感染','esr'=>'血沉','fungla_blood'=>'真菌试验','hbv'=>'乙肝五项','hbv_dna'=>'乙肝DNA定量','heart'=>'心功能及酶学','hemostasis_coagulation'=>'凝血功能',
				   'immune_globulin_complement_rf'=>'免疫球蛋白及补体','infection_screening'=>'感染筛查','liver_function'=>'肝功能','nephric_function'=>'肾功能','pancreas'=>'胰腺酶学','pct'=>'降钙素原','ret'=>'网织红细胞','stool_routine'=>'便常规','stool_theory'=>'便病原学',
				   't_spot_tb'=>'γ干扰素释放试验','tc_bc'=>'T/B淋巴细胞亚群','thyroid_antibody'=>'甲状腺抗体','thyroid_function'=>'甲状腺功能','tst'=>'PPD试验','urine_analyse'=>'尿常规','vitd'=>'维生素D及甲状旁腺素');

				foreach ($items as $it)
				{
					$m = M('lab-'.$it);
					$data = $m->where('cnum = "'.$cnum.'"')->getField('time',10000);
					//echo json_encode($data);
					//echo $it.'==>'.count($data)."\n";
					if ($data != null)
					{
						foreach($data as $j)
						{
							$tmp = array();
						//	if ($it == 'anemia')  $tmp['item'] = $t[$it];
							//else $tmp['item'] = $it;
							$tmp['item'] = $t[$it];
							//$tmp['item'] = $it;
							$tmp['time'] = $j;
							$tmp['cnum'] = $cnum;
							$tmp['name'] = $u['name'];
							$tmp['age'] = $item['age'] = $this->birthday($u['birth']);
							$tmp['item2'] = $it;
							array_push($R,$tmp);
						}
					}
				}
				$this->assign('data',$R);
				$this->display();
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getInfo()
		{
			if ($this->CheckLogin())
			{
				$item = $_POST['item'];
				$cnum = $_POST['cnum'];
				$time = $_POST['time'];
				$m = M('lab-'.$item);
				$data = $m->where('cnum="'.$cnum.'" and time = "'.$time.'"')->find();
				$Return = array();
				if ($item == 'blood_regular_test')
				{
					array_push($Return,array('红细胞计数',$data['RBC'],'10^9/L','-'));
					array_push($Return,array('血红蛋白浓度',$data['HGB'],'g/L','-'));
					array_push($Return,array('红细胞压积',$data['HCT'],'%','-'));
					array_push($Return,array('平均红细胞体积',$data['MCV'],'fl','-'));
					array_push($Return,array('平均红细胞血红蛋白量',$data['MCH'],'g/L','-'));
					array_push($Return,array('平均红细胞血红蛋白浓度',$data['MCHC'],'g/L','-'));
					array_push($Return,array('白细胞计数',$data['WBC'],'10^9/L','-'));
					array_push($Return,array('中性粒细胞计数',$data['NE'],'10^9/L','-'));
					array_push($Return,array('淋巴细胞计数',$data['LY'],'10^9/L','-'));
					array_push($Return,array('单核细胞计数',$data['MO'],'10^9/L','-'));
					array_push($Return,array('嗜酸性粒细胞计数',$data['EO'],'10^9/L','-'));
					array_push($Return,array('血小板计数',$data['PLT'],'10^12/L','-'));
				}
				else if ($item == "urine_analyse")
				{
					$t1 = $t2 = $t3 = $t4 = '';
					if ($data['BLD'] == '0') $t1 = '-';
					else if ($data['BLD'] == '1') $t1 = '+';
					else if ($data['BLD'] == '2') $t1 = '++';
					else if ($data['BLD'] == '3') $t1 = '+++';
					if ($data['PRO'] == '0') $t2 = '-';
					else if ($data['PRO'] == '1') $t2 = '+';
					else if ($data['PRO'] == '2') $t2 = '++';
					else if ($data['PRO'] == '3') $t2 = '+++';
					if ($data['RBC_microscopy']  == '0') $t3 = $data['RBC_microscopy_count'];
					else if ($data['RBC_microscopy'] == '1')$t3 = '满视野';
					if ($data['WBC_microscopy']  == '0') $t4 = $data['WBC_microscopy_count'];
					else if ($data['WBC_microscopy'] == '1')$t4 = '满视野';
					array_push($Return,array('隐血',$t1,'-','-'));
					array_push($Return,array('蛋白质',$t2,'-','-'));
					array_push($Return,array('白细胞计数',$t3,'-','-'));
					array_push($Return,array('白细胞计数',$t4,'-','-'));
				}
				else if ($item == "stool_routine")
				{
					$t1 = $t2 = $t3 = $t4 = '';
					if ($data['stool_WBC_microscopy'] == '0') $t1 = $data['stool_WBC_microscopy_count'];
					else if ($data['stool_WBC_microscopy'] == '1') $t1 = '满视野';
					if ($data['stool_RBC_microscopy'] == '0') $t2 = $data['stool_RBC_microscopy_count'];
					else if ($data['stool_RBC_microscopy'] == '1') $t2 = '满视野';
					if ($data['chemical_occult_blood'] == '0') $t3 = '阳性';
					else if ($data['chemical_occult_blood'] == '1') $t3 = '弱阳性';
					else if ($data['chemical_occult_blood'] == '2') $t3 = '隐性';
					if ($data['immunoassay_occult_blood'] == '0') $t4 = '阳性';
					else if ($data['immunoassay_occult_blood'] == '1') $t4 = '弱阳性';
					else if ($data['immunoassay_occult_blood'] == '2') $t4 = '隐性';
					
					array_push($Return,array('白细胞计数',$t1,'-','-'));
					array_push($Return,array('红细胞计数',$t2,'-','-'));
					array_push($Return,array('化学法潜血’',$t3,'-','-'));
					array_push($Return,array('免疫法潜血',$t4,'-','-'));
				}
				else if ($item == "ret")
				{
					array_push($Return,array('网织红细胞计数',$data['Ret'],'10^9/L','-'));
				}
				else if ($item == 'tc_bc')
				{
					array_push($Return,array('辅助性T细胞计数',$data['TH'],'个/ul','-'));
					array_push($Return,array('抑制性T细胞',$data['TS'],'个/ul','-'));
					array_push($Return,array('B淋巴细胞技术’',$data['B'],'个/ul','-'));
					array_push($Return,array('NK淋巴细胞计数',$data['NK'],'个/ul','-'));
				}
				else if ($item == 'nephric_function')
				{
					array_push($Return,array('血肌酐',$data['creatinine'],'umol/L','-'));
					array_push($Return,array('尿素',$data['urea'],'mmol/L','-'));
					array_push($Return,array('尿酸’',$data['uric_acid'],'umol/L','-'));
				}
				else if ($item == "liver_function")
				{
					array_push($Return,array('谷丙转氨酶',$data['ALT'],'IU/L','-'));
					array_push($Return,array('谷草转氨酶',$data['AST'],'IU/L','-'));
					array_push($Return,array('白蛋白',$data['ALB'],'g/L','-'));
					array_push($Return,array('碱性磷酸酶',$data['ALP'],'IU/L','-'));
					array_push($Return,array('谷氨酰胺转肽酶',$data['GGT'],'IU/L','-'));
					array_push($Return,array('总胆红素',$data['IBIL'],'umol/L','-'));
					array_push($Return,array('直接胆红素',$data['DBIL'],'umol/L','-'));
					array_push($Return,array('胆碱酯酶',$data['PCHE'],'IU/L','-'));
					array_push($Return,array('前白蛋白',$data['PA'],'mg/L','-'));
					array_push($Return,array('总胆汁酸',$data['TBA'],'umol/L','-'));
				}
				else if ($item == 'hemostasis_coagulation')
				{
					array_push($Return,array('凝血酶原时间',$data['PT'],'秒','-'));
					array_push($Return,array('活化部分凝血活酶时间',$data['APTT'],'秒','-'));
					array_push($Return,array('纤维蛋白原定量',$data['FIB'],'g/L','-'));
					array_push($Return,array('D-二聚体',$data['D_D'],'mg/L(DDU)','-'));
					array_push($Return,array('纤维蛋白（原）降解产物',$data['FDP'],'mg/L','-'));
					array_push($Return,array('凝血酶时间',$data['TT'],'秒','-'));
					
				}
				else if ($item == 'pancreas')
				{
					array_push($Return,array('脂肪酶',$data['AMY'],'IU/L','-'));
					array_push($Return,array('淀粉酶',$data['LPS'],'IU/L','-'));
				}
				else if ($item == 'chemical')
				{
					array_push($Return,array('钾',$data['K'],'mmol/L','-'));
					array_push($Return,array('钠',$data['Na'],'mmol/L','-'));
					array_push($Return,array('氯',$data['Cl'],'mmol/L','-'));
					array_push($Return,array('钙',$data['Ca'],'mmol/L','-'));
					array_push($Return,array('磷',$data['P'],'mmol/L','-'));
					array_push($Return,array('镁',$data['Mg'],'mmol/L','-'));
				}
				else if ($item == 'anemia')
				{
					array_push($Return,array('血清铁',$data['serum_iron'],'umol/L','-'));
					array_push($Return,array('总铁结合力',$data['TIBC'],'umol/L','-'));
					array_push($Return,array('铁蛋白',$data['ferritin'],'ng/L','-'));
					array_push($Return,array('维生素B12',$data['VB12'],'nmol/L','-'));
					array_push($Return,array('叶酸',$data['folic_acid'],'nmol/L','-'));
				}
				else if ($item == 'heart')
				{
					array_push($Return,array('肌酸激酶',$data['CK'],'IU/L','-'));
					array_push($Return,array('乳酸脱氢酶',$data['LDH'],'IU/L','-'));
					array_push($Return,array('羟丁酸脱氢酶',$data['HDBH'],'IU/L','-'));
					array_push($Return,array('4CK-MB',$data['CK_MB'],'ng/ml','-'));
					array_push($Return,array('心肌肌钙蛋白',$data['cTnI'],'ng/ml','-'));
					array_push($Return,array('钠尿肽',$data['BNP'],'pg/ml','-'));
				}
				else if ($item == 'blood_lipid')
				{
					array_push($Return,array('总胆固醇',$data['TCHO'],'mmol/L','-'));
					array_push($Return,array('高密度胆固醇',$data['HDL_C'],'mmol/L','-'));
					array_push($Return,array('低密度胆固醇',$data['LDL_C'],'mmol/L','-'));
					array_push($Return,array('甘油三酯',$data['TG'],'mmol/L','-'));
					
					
				}
				else if ($item == 'stool_theory')
				{
					$t1 = $t2 = $t3 = $t4 = '';
					if ($data['ova'] == '0') $t1 = '阴性';
					else if ($data['ova'] == '1') $t1 = '阳性';
					if ($data['Tuberculous_smear'] == '0') $t2 = '阴性';
					else if ($data['Tuberculous_smear'] == '1') $t2 = '阳性';
					if ($data['Fungal_smear'] == '0') $t3 = '阴性';
					else if ($data['Fungal_smear'] == '1') $t3 = '孢子';
					else if ($data['Fungal_smear'] == '2') $t3 = '菌丝';
					if ($data['coccus_bacillus_ratio'] == '0')  $t4 = '大致正常';
					else if ($data['coccus_bacillus_ratio'] == '1') $t4 = '球杆比失调';
					array_push($Return,array('便找虫卵',$t1,'-','-'));
					array_push($Return,array('便找抗酸杆菌',$t2,'-','-'));
					array_push($Return,array('便找真菌',$t3,'-','-'));
					array_push($Return,array('便球杆比',$t4,'-','-'));
					array_push($Return,array('艰难梭菌毒素A/B',$data['A_B'],'mmol/L','-'));
					
				}
				else if ($item == 'esr')
				{
					array_push($Return,array('血沉',$data['ESR'],'mm/h','-'));
				}
				else if ($item == 'crp')
				{
					array_push($Return,array('C反应蛋白',$data['CRP'],'mg/L','-'));
				}
				else if ($item == 'pct')
				{
					array_push($Return,array('降钙素原',$data['PCT'],'ng/mL','-'));
				}
				else if ($item == 'tst')
				{
					$t1 = '';
					if ($data['PPD'] == '0') $t1 = '阴性';
					else if ($data['PPD'] == '1') $t1 = '+';
					else if ($data['PPD'] == '2') $t1 = '++';
					else if ($data['PPD'] == '3') $t1 = '++++';
					array_push($Return,array('PPD试验',$t1,'ng/mL','-'));
				}
				else if ($item == 't_spot_tb')
				{
					
					array_push($Return,array('A抗原刺激',$data['A_Ag'],'*SFCs/2.5*10^5','-'));
					array_push($Return,array('B抗原刺激',$data['B_Ag'],'*SFCs/2.5*10^5','-'));
				}
				else if ($item == 'anca')
				{
					$t1 = $t2 = '';
					if ($data['p_ANCA'] == '0') $t1 = '阴性';
					else if ($data['p_ANCA'] == '1') $t1 = '阳性';
					if ($data['c_ANCA'] == '0') $t2 = '阴性';
					else if ($data['c_ANCA'] == '1') $t2 = '阳性';
					array_push($Return,array('pANCA',$t1,'-','-'));
					array_push($Return,array('cANCA',$t1,'-','-'));
				}
				else if ($item == 'hbv')
				{
					$t1 = $t2 = $t3 = $t4 = $t5 = '';
					if ($data['HBsAg'] == '0') $t1 = '阴性';
					else if ($data['HBsAg'] == '1') $t1 = '阳性';
					if ($data['Anti_HBs'] == '0') $t2 = '阴性';
					else if ($data['Anti_HBs'] == '1') $t2 = '阳性';
					if ($data['HBeAg'] == '0') $t3 = '阴性';
					else if ($data['HBeAg'] == '1') $t3 = '阳性';
					if ($data['Anti_HBe'] == '0') $t4 = '阴性';
					else if ($data['Anti_HBe']) $t4 = '阳性';
					if ($data['Anti_HBc'] == '0') $t5 = '阴性';
					else if ($data['Anti_HBc']) $t5 = '阳性';
					array_push($Return,array('乙肝表面抗原',$t1,'-','-'));
					array_push($Return,array('乙肝表面抗体',$t2,'-','-'));
					array_push($Return,array('乙肝e抗原',$t3,'-','-'));
					array_push($Return,array('乙肝e抗体',$t4,'-','-'));
					array_push($Return,array('乙肝核心抗体',$t5,'-','-'));
				}
				else if ($item == 'hbv_dna')
				{
					array_push($Return,array('乙肝DNA定量',$data['HBV_DNA'],'IU/mL','-'));
				}
				else if ($item == 'infection_screening')
				{
					$t1 = $t2 = $t3 = '';
					if ($data['Anti_HCV'] == '0') $t1 = '阴性';
					else if ($data['Anti_HCV'] == '1') $t1 = '阳性';
					if ($data['HIV'] == '0') $t2 = '阴性';
					else if ($data['HIV'] == '1') $t2 = '阳性';
					if ($data['TP_Ab'] == '0') $t3 = '阴性';
					else if ($data['TP_Ab'] == '1') $t3 = '阳性';
					array_push($Return,array('丙肝抗体',$t1,'-','-'));
					array_push($Return,array('艾滋病病毒抗体',$t2,'-','-'));
					array_push($Return,array('梅毒抗体',$t3,'-','-'));
				}
				else if ($item == 'thyroid_function')
				{
					array_push($Return,array('三碘甲腺原氨酸',$data['T3'],'nmol/L','-'));
					array_push($Return,array('四碘甲腺原氨酸',$data['T4'],'nmol/L','-'));
					array_push($Return,array('游离三碘甲腺原氨酸',$data['FT3'],'pmol/L','-'));
					array_push($Return,array('游离四碘甲腺原氨酸',$data['FT4'],'pmol/L','-'));
					array_push($Return,array('促甲状腺素',$data['TSH'],'uTU/ml','-'));
				}
				else if ($item == 'thyroid_antibody')
				{
					array_push($Return,array('抗甲状腺球蛋白抗体',$data['TGAb'],'IU/mL','-'));
					array_push($Return,array('抗甲状腺髓过氧化物酶抗体',$data['TPOAb'],'IU/mL','-'));
					array_push($Return,array('抗甲状腺受体抗体',$data['TRAB'],'IU/mL','-'));
				}
				else if ($item == 'immune_globulin_complement_rf')
				{
					
					array_push($Return,array('免疫球蛋白G',$data['IgG'],'g/L','-'));
					array_push($Return,array('免疫球蛋白A',$data['IgA'],'g/L','-'));
					array_push($Return,array('免疫球蛋白M',$data['IgM'],'g/L','-'));
					array_push($Return,array('免疫球蛋白G4',$data['IgG4'],'g/L','-'));
					array_push($Return,array('补体C3',$data['C3'],'g/L','-'));
					array_push($Return,array('补体C4',$data['C4'],'g/L','-'));
				}
				else if ($item == 'vitd')
				{
					array_push($Return,array('25-OH-维生素D',$data['25_OH_VitD'],'nmol/L','-'));
					array_push($Return,array('全段甲状旁腺素',$data['iPTH'],'pg/ml','-'));
				}
				else if ($item == 'cmv')
				{
					array_push($Return,array('血清巨细胞病毒',$data['CMV_DNA_blood'],'copies/ml','-'));
					array_push($Return,array('淋巴细胞巨细胞病毒',$data['CMV_DNA_lymphocyte'],'copies/ml','-'));
					array_push($Return,array('巨细胞病毒IgM抗体',$data['CMV_IgM'],'U/ml','-'));
					array_push($Return,array('巨细胞病毒IgG抗体',$data['CMV_IgG'],'U/ml','-'));
				
				}
				else if ($item == 'ebv')
				{
					array_push($Return,array('血清EB病毒',$data['EBV_DNA_blood'],'copies/ml','-'));
					array_push($Return,array('淋巴细胞EB病毒',$data['EBV_DNA_lymphocyte'],'copies/ml','-'));
					array_push($Return,array('EB病毒IgM抗体',$data['EBV_IgM'],'U/ml','-'));
					array_push($Return,array('EB病毒IgG抗体',$data['EBV_IgG'],'U/ml','-'));
				
				}
				else if ($item == 'fungla_blood')
				{
					$t1 = $t2 = '';
					if ($data['G_T'] == '0') $t1 = '阴性';
					else if ($data['G_T'] == '1') $t1 = '阳性';
					if ($data['GM_T'] == '0') $t2 = '阴性';
					else if ($data['GM_T'] == '1') $t2 = '阳性';
					array_push($Return,array('G试验',$t1,'-','-'));
					array_push($Return,array('GM试验',$t2,'-','-'));
				
					
				}
				$this->ajaxReturn($Return);
			}
			else 
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function Date2Date($dd)
		{
			//$strs = explode('/',$dd);
			//return $strs[2]."-".$strs[0]."-".$strs[1];
			return $dd;
		}
		 
		public function toW($cnum,$time)
		{
			$str = 'cnum = "'.$cnum.'" AND time = "'.$time.'"';
			return $str;
		}
		 
		public function save_lab_blood_regular_test($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-blood_regular_test');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}		
		
		public function save_ret($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-ret');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}		
		
		public function save_lab_urine_analyse($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-urine_analyse');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0)
				{
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录",code => 3));
			}
		}		
		
		public function save_lab_stool_routine($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-stool_routine');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0)
				{
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}		
		
		
		public function save_lab_tc_bc($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-tc_bc');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_nephric_function($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-nephric_function');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_liver_function($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-liver_function');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_hemostasis_coagulation($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-hemostasis_coagulation');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_pancreas($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-pancreas');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_chemical($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-chemical');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_anemia($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-anemia');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_heart($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-heart');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_blood_lipid($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-blood_lipid');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_stool_theory($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-stool_theory');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		public function save_lab_ESR($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-esr');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_crp($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-crp');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_pct($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-pct');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_tst($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-tst');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_t_spot_tb($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-t_spot_tb');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_anca($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-anca');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_hbv($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-hbv');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_hbv_dna($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-hbv_dna');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_infection_screening($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-infection_screening');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_thyroid_function($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-thyroid_function');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_thyroid_antibody($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-thyroid_antibody');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_immune_globulin_complement_rf($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-immune_globulin_complement_rf');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		
		public function save_lab_vitd($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-vitd');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					//echo $this->toW($_POST['cnum'],$_POST['time']);
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		public function save_lab_cmv($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-cmv');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		public function save_lab_ebv($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-ebv');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
		public function save_lab_fungla_blood($mode)//blood_regular_test
		{
			if ($this->CheckLogin())
			{
				$m = M('lab-fungla_blood');
				$_POST['time'] = $this->Date2Date($_POST['time']);
				if ($mode == 0){
					$data = $m->where($this->toW($_POST['cnum'],$_POST['time']))->find();
					if ($data == null )
					{
						$m->add($_POST);
						$this->ajaxReturn(array("status"=>"success","reason" => "数据首次录入成功，尚未经过双重确认",data=>$_POST));
					}
					else
					{
						$result = array_diff_assoc($data,$_POST);
						if (count($result) == 0)
							$this->ajaxReturn(array("status"=>"success","reason"=>"与数据库中已有数据一致","code" => 1));
						else
							$this->ajaxReturn(array("status"=>"failed","reason"=>"与数据库中已有数据不一致\n标红边框的项目为不一致项目\n请重新检查所有项目\n经过确认后在本页面重新保存","code" => 2,"diff"=>$result));
					}
				}
				else
				{
					$m->add($_POST,$options=array(),$replace = true);
					$this->ajaxReturn(array("status"=>"success","reason" => "数据修改成功",data=>$_POST));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}	
	}
	
	
?>