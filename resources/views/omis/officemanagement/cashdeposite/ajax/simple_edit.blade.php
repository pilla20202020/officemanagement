
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("mainTitle","mainTitle","MainTitle",'',$data->mainTitle)}}
</div><div class="col-lg-6">{{createText("DATE","DATE","DATE",'',$data->DATE)}}
</div><div class="col-lg-6">{{createText("amountWords","amountWords","AmountWords",'',$data->amountWords)}}
</div><div class="col-lg-6">{{createText("thousand","thousand","Thousand",'',$data->thousand)}}
</div><div class="col-lg-6">{{createText("fiveHundred","fiveHundred","FiveHundred",'',$data->fiveHundred)}}
</div><div class="col-lg-6">{{createText("hundred","hundred","Hundred",'',$data->hundred)}}
</div><div class="col-lg-6">{{createText("fifty","fifty","Fifty",'',$data->fifty)}}
</div><div class="col-lg-6">{{createText("twenty","twenty","Twenty",'',$data->twenty)}}
</div><div class="col-lg-6">{{createText("ten","ten","Ten",'',$data->ten)}}
</div><div class="col-lg-6">{{createText("five","five","Five",'',$data->five)}}
</div><div class="col-lg-6">{{createText("two","two","Two",'',$data->two)}}
</div><div class="col-lg-6">{{createText("one","one","One",'',$data->one)}}
</div><div class="col-lg-6">{{createText("fullName","fullName","FullName",'',$data->fullName)}}
</div><div class="col-lg-6">{{createText("position","position","Position",'',$data->position)}}
</div><div class="col-lg-6">{{createText("declaredDate","declaredDate","DeclaredDate",'',$data->declaredDate)}}
</div><div class="col-lg-6">{{createText("approvedName","approvedName","ApprovedName",'',$data->approvedName)}}
</div><div class="col-lg-6">{{createText("approvedPosition","approvedPosition","ApprovedPosition",'',$data->approvedPosition)}}
</div><div class="col-lg-6">{{createText("approvedDate","approvedDate","ApprovedDate",'',$data->approvedDate)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>