<div class="panel-title">
    住院记录 <span class="label label-info"></span>
    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
    <label for="recordName">姓名</label>
    <input type="text" style="width:100px; height:20px;" id="recordName">
    <label for="recordCnum">病例号</label>
    <input type="text" style="width:100px; height:20px;" id="recordCnum">
</div>

<div class="panel-search">
    <form>
        <input type="text" class="form-control" placeholder="Search...">
        <i class="fa fa-search icon"></i>
    </form>
</div>


<div class="panel-body table-responsive">
    <a href='#' onclick="saveRecord()"><span class="label label-default"><i class="fa fa-plus"></i>新增住院记录</span></a>
    <label for="recordStime">开始时间</label>
    <input type="text" style="width:100px; height:20px;" id="recordStime">
    <label for="recordSptime">结束时间</label>
    <input type="text" style="width:100px; height:20px;" id="recordSptime">
    <table class="table table-hover">
        <thead id="recordTh">
        </thead>
        <tbody id="recordTb">
        </tbody>
    </table>

</div>