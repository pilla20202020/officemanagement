<form method="POST" action="{{route('finance.estimates.update',[$data->estimates_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("departmentName","departmentName","DepartmentName",'',$data->departmentName)}}
</div><div class="col-lg-6">{{createText("estimateDate","estimateDate","EstimateDate",'',$data->estimateDate)}}
</div><div class="col-lg-6">{{createText("estimateDetails","estimateDetails","EstimateDetails",'',$data->estimateDetails)}}
</div><div class="col-lg-6">{{createText("totalEstimates","totalEstimates","TotalEstimates",'',$data->totalEstimates)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>