<table class="datatable-init table" data-nk-container="table-responsive">
        <thead class="table-light">
            <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">titleName</span></th>
<th class="tb-col"><span class="overline-title">titleType_id</span></th>
<th class="tb-col"><span class="overline-title">time</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">officerName</span></th>
<th class="tb-col"><span class="overline-title">applicants_id</span></th>
<th class="tb-col"><span class="overline-title">applicantName</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                        class="overline-title">Action</span></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($data as $item)
            <tr>
                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->titleName }}</td>
<td class="tb-col">{{ $item->titleType_id }}</td>
<td class="tb-col">{{ $item->time }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->officerName }}</td>
<td class="tb-col">{{ $item->applicants_id }}</td>
<td class="tb-col">{{ $item->applicantName }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                    <li><a href="{{route('rostermanagement.rostercategory.show',[$item->rostercateogry_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                     <li><a href="{{route('rostermanagement.rostercategory.edit',[$item->rostercateogry_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                    <li><button type="button" data-route="{{route('rostermanagement.rostercategory.destroy',[$item->rostercateogry_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                   </ul> </td>
                   <tr>

            @endforeach

        </tbody>
    </table>