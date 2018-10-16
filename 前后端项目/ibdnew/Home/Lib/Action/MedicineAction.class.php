<?php

class MedicineAction extends BaseAction
{
    public function redirect()
    {
    }

    public function newMedicine()
    {

        if ($this->CheckLogin()) {
            $cnum = $_GET['cnum'];
            $medClass = M('med_belong_info');
            $d = M('ibdnew');
            $list = $medClass->getField('classname', true);
            $dataInfo = $d->query("SELECT `med_name`,`belong`,`belong_id` FROM `med_info`");
            $data = [];
            foreach($dataInfo as $k){
                    $data[$k['belong']][$k['belong_id']] =   $k['med_name'];
            }

            $addMedecine = [];
            foreach ($list as $k) {
                $m = M($k);
                $addMedecine[$k] = $m->select();
                foreach ($addMedecine[$k] as $med => $v){
                    $addMedecine[$k][$med]['med_name'] = $data[$k][$v['med_name']];
                }
            }

            $m = M('med_info');
            $med_data = $m->select();
            $this->assign('addMedecine', $addMedecine);
            $this->assign('med_data', $med_data);
            $this->assign('cnum', $cnum);
            $this->display();
        } else {
            $this->redirect();
        }
    }

    public function save_Medicine()
    {
        if ($this->CheckLogin()) {
            $find_class = M('med_info');
            $class = $find_class->where('med_name = "%s" and pro_name= "%s" and specification= "%s" ', array($_POST['med_name'], $_POST['pro_name'], $_POST['specification']))->getField('belong,belong_id');
            $class_name = array_keys($class);
            $_POST['med_name'] = $class[$class_name[0]];

            if ($class == null) {
                $this->ajaxReturn(array("status" => "failed", "reason" => "无该药品"));
                return;
            }
            $m = M($class_name[0]);
            $condition = new stdClass();
            $condition->cnum = $_POST['cnum'];
            $condition->med_name = $_POST['med_name'];
            $condition->med_stime = $_POST['med_stime'];
            $if_exist = $m->where($condition)->select();
            if ($if_exist == null) {
                $m->add($_POST);
                $this->ajaxReturn(array("status" => "success"));
            } else {
                $this->ajaxReturn(array("status" => "failed", "reason" => "新增药品信息已存在"));
            }
        } else {
            $this->ajaxReturn(array("status" => "failed", "reason" => "用户未登录"));
        }
    }

    public function save_nMedicine()
    {
        if ($this->CheckLogin()) {
            $m = M('med_info');
            $m1 = M('med_belong_info');
            $condition = new stdClass();
            foreach ($_POST as $k => $v) {
                $condition->$k = $v;
            }
            $if_exist = $m->where($condition)->select();

            $belong = $m1->where('classname = "%s"', $_POST['belong'])->getField('classname');
            if ($belong != null) {
                if ($if_exist == null) {
                    $n = $m->where('belong = "%s"', $_POST['belong'])->getField('belong_id', true);
                    if ($n == null) {
                        $k = 0;
                    } else {
                        $k = max($n) + 1;
                    }
                    $_POST['belong_id'] = $k;
                    $m->add($_POST);
                    $this->ajaxReturn(array("status" => "success"));
                } else {
                    $this->ajaxReturn(array("status" => "failed", "reason" => "该药品已存在"));
                }
            } else {
                $this->ajaxReturn(array("status" => "failed", "reason" => "不存在该药品的归属类"));
            }

        } else {
            $this->ajaxReturn(array("status" => "failed", "reason" => "用户未登录"));
        }
    }

    public function get_medname()
    {
        if ($this->CheckLogin()) {
            $m = M('med_info');
            $name = $m->distinct(true)->getField('med_name', true);
            $pro_name = $m->distinct(true)->getField('pro_name', true);
            $med_type = $m->distinct(true)->getField('med_type', true);
            $specification = $m->distinct(true)->getField('specification', true);
            $belong = $m->distinct(true)->getField('belong', true);
            $d = M('ibdnew');
            $data_info = $d->query("SELECT `med_name`,`pro_name`,`specification` FROM `med_info`");

            $med_in = array();
            $data = array(array());
            foreach ($data_info as $k) {
                if (empty($k['pro_name'])) $str = $k['med_name'] . " " . $k['specification'];
                else $str = $k['med_name'] . " [" . $k['pro_name'] . "] " . $k['specification'];
                array_push($data[0], $str);
            }
            if ($name == null) {
                $this->ajaxReturn(array("status" => "failed", "reason" => "还没有存药品"));
            } else {
                $i = 0;
                foreach ($pro_name as $v) {
                    if ($v) {
                        $data[1][$i] = $v;
                        $i++;
                    }
                }
                $i = 0;

                foreach ($specification as $v) {
                    if ($v) {
                        $data[3][$i] = $v;
                        $i++;
                    }
                }
                $i = 0;
                foreach ($belong as $v) {
                    if ($v) {
                        $data[4][$i] = $v;
                        $i++;
                    }
                }
                $this->ajaxReturn($data);
            }
        } else {
            $this->ajaxReturn(array("status" => "failed", "reason" => "用户未登录"));
        }
    }

    public function new_classname()
    {
        if ($this->CheckLogin()) {

            $m = M('med_belong_info');
            $new = M('ibdnew');
            $belong = $m->where('classname = "%s"', $_POST['classname'])->getField('classname');
            if ($belong == null) {
                $m->add($_POST);
                $sql = "CREATE TABLE `ibdnew`.`" . $_POST['classname'] . "` 
					( `cnum` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
						`med_name` INT(3) NOT NULL,
						`med_dose` 	VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
						`med_times` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
						`med_stime` DATE NOT NULL,
						`med_sptime` DATE NULL 
					) ENGINE = MyISAM,AUTO_INCREMENT = 0";  //`med_id`  int(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT
                $new->execute($sql);
                $this->ajaxReturn(array("status" => "success"));

            } else {
                $this->ajaxReturn(array("status" => "failed", "reason" => "该归属类已经存在"));
            }
        } else {
            $this->ajaxReturn(array("status" => "failed", "reason" => "用户未登录"));
        }
    }

    public function get_medtable()
    {
        $m = M('med_info');
        $med_data = $m->select();
        //echo $med_data;
        //$this->assgin('med_data',"saf");
    }
}

?>