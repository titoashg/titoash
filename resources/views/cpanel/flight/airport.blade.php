@extends(cpanel_layout().'.index')
@section('subtitle')
All Airport
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">All Airport</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name of Airport</th>
                            <th>Is Active</th>
                            <th>Crated By</th>
                            <th>Crated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name of Airport</th>
                            <th>Is Active</th>
                            <th>Crated By</th>
                            <th>Crated At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php

                            $counter = 1;
                        @endphp
                        @foreach($airport as $airpor)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$airpor->name}}</td>
                            <td>{{$airpor->is_active==1?'Active':'Dactive'}}</td>
                            <td>{{$airpor->username()->name}}</td>
                            <td>{{$airpor->created_at}}</td>
                            <td>
                                <a href="/admin/allairport/{{$airpor->id}}/edit" class="btn green"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="/admin/allairport/{{$airpor->id}}/delete" class="btn red"><i class="glyphicon glyphicon-trash"></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>

@endsection
