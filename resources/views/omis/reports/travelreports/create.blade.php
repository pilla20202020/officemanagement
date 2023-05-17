@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Travelreports</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('reports.travelreports.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('reports.travelreports.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("title","title","Title")}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName")}}
</div><div class="col-lg-6">{{createText("departmentSector","departmentSector","DepartmentSector")}}
</div><div class="col-lg-6">{{createText("visitedLocation","visitedLocation","VisitedLocation")}}
</div><div class="col-lg-6">{{createDate("visitedDate","visitedDate","VisitedDate",'','','')}}
</div><div class="col-lg-6">{{createText("activities","activities","Activities")}}
</div><div class="col-lg-6">{{createText("visitObjectives","visitObjectives","VisitObjectives")}}
</div><div class="col-lg-6">{{createText("keyHighlights","keyHighlights","KeyHighlights")}}
</div><div class="col-lg-6">{{createText("achievement","achievement","Achievement")}}
</div><div class="col-lg-6">{{createText("observation","observation","Observation")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-12">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("remarks",'',"remarks",'',"")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection