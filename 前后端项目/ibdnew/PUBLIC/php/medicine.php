


        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="cnum" class="col-sm-1 control-label form-label" >病历号</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-radius" id="medCnum" value="">
                    </div>

                </div>
                <div class="form-group">
                    <label for="med_name" class="col-sm-1 control-label form-label">药名</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-radius" id="med_name">
                    </div>
                    <label for="med_way" class="col-sm-1 control-label form-label">用药方式</label>
                    <div class="col-sm-3">
                        <select class="select" id="med_way">
                            <option>口服</option>
                            <option>输液</option>
                            <option>皮下</option>
                            <option>肌注</option>
                            <option>皮内</option>
                            <option>鼻饲</option>
                            <option>雾化</option>
                            <option>静推</option>
                            <option>舌下</option>
                            <option>小壶</option>
                            <option>灌注</option>
                            <option>静脉泵入</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">

                    <label for="med_times" class="col-sm-1 control-label form-label">用药频率</label>
                    <div class="col-sm-4">
                        <select class="select" id="med_times">
                            <option>晨1次</option>
                            <option>早晚各1次</option>
                            <option>早中晚各1次</option>
                            <option>睡前1次</option>
                            <option>一日4次</option>
                            <option>每小时1次</option>
                            <option>每小时2次</option>
                            <option>每小时3次</option>
                            <option>每小时4次</option>
                            <option>每小时6次</option>
                            <option>每小时8次</option>
                            <option>每12小时1次</option>
                            <option>中午1次</option>
                            <option>每周1次</option>
                            <option>每周2次</option>
                            <option>每周3次</option>
                            <option>每周4次</option>
                            <option>每周5次</option>
                            <option>即刻</option>
                            <option>2周1次</option>
                            <option> 隔日1次</option>
                            <option>每周2次</option>
                            <option>下午4点1次</option>
                            <option>3天1次</option>
                        </select>
                    </div>
                    <label for="med_dose" class="col-sm-1 control-label form-label">单次剂量</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-radius" id="med_dose">
                    </div>
                    <!--<label for="med_times" class="col-sm-1 control-label form-label">次数/天</label>
                    <div class="col-sm-3">
                           <input type="text" class="form-control form-control-radius" id="med_times">
                    </div> -->
                </div>
                <div class="form-group">
                    <label for="med_stime" class="col-sm-1 control-label form-label">开始时间</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-radius" id="med_stime"  >
                    </div>
                    <label for="med_sptime" class="col-sm-1 control-label form-label">结束时间</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-radius" id="med_sptime"  >
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


