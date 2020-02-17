@extends(cpanel_layout().'.index')
@section('subtitle')
Edit company ({{ $company->name }})
@endsection
@section('content')

<div class="portlet box green ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Edit company ({{ $company->name }}) </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="" class="reload" data-original-title="" title=""> </a>
            <a href="" class="remove" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body">



        <h4 class="block">Please Enter name of company different for data</h4>
        <form role="form" method="post" action="/admin/allcompany/{{ $company->id }}">
            @csrf

            <div class="row">

                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="name" value="{{$company->name}}" required name="company" placeholder="Name of company">
                        <span class="input-group-addon">
                            <i class="fa fa-user font-red"></i>
                        </span>
                    </div>

                    <div  class="form-group form-md-checkboxes">

                        <div class="md-checkbox-inline">
                            <div class="md-checkbox">
                                <input type="checkbox" {{ $company->is_active==1?"checked":"" }} id="checkbox6" name="active" class="md-check">
                                <label for="checkbox6">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Active </label>
                            </div>
                        </div>
                    </div>

                    <!-- /.input-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <button type="submit" class="btn green">Submit</button>
            <a href="{{route('allcompany')}}" type="submit" class="btn red">Cancel</a>
        </form>
    </div>
</div>

@endsection
