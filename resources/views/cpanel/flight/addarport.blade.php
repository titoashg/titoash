@extends(cpanel_layout().'.index')
@section('subtitle')
Add Airport
@endsection
@section('content')

<div class="portlet box green ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Add Airport  </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="" class="reload" data-original-title="" title=""> </a>
            <a href="" class="remove" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body">



        <h4 class="block">Please Enter name of airport different for data</h4>
        <form role="form" method="post" action="addairport">
            {{ csrf_field() }}
            <div class="row">

                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="name" required name="airport" placeholder="Name of airport">
                        <span class="input-group-addon">
                            <i class="fa fa-user font-red"></i>
                        </span>
                    </div>

                    <div  class="form-group form-md-checkboxes">

                        <div class="md-checkbox-inline">
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox6" name="active" class="md-check">
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
            <a href="{{route('allairport')}}" type="submit" class="btn red">Cancel</a>
        </form>
    </div>
</div>

@endsection
