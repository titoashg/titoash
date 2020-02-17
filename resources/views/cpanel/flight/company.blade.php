@extends(cpanel_layout().'.index')
@section('subtitle')
All Company
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">All company of flight</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name of company</th>
                            <th>Is Active</th>
                            <th>Crated By</th>
                            <th>Crated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name of company</th>
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
                        @foreach($company as $com)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{ $com->name }}</td>
                            <td>{{ $com->is_active==1?'Active':'Dactive' }}</td>
                            <td>{{ $com->username()->name }}</td>
                            <td>{{ $com->created_at }}</td>
                            <td>
                                <a href="/admin/allcompany/{{$com->id}}/edit" class="btn green"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="/admin/allcompany/{{$com->id}}/delete" class="btn red"><i class="glyphicon glyphicon-trash"></i></a>

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
