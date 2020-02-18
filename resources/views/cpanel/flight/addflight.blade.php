@extends(cpanel_layout().'.index')
@section('subtitle')
Add Flight
@endsection
@section('content')

<div class="portlet box green ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Add Flight  </div>
        <div class="tools">
            <a href="" class="collapse" data-original-title="" title=""> </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="" class="reload" data-original-title="" title=""> </a>
            <a href="" class="remove" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body">



        <h4 class="block">Please Enter information for Flight</h4>
        <form role="form" method="post" action="addflight">
            {{ csrf_field() }}
            <div class="row">

                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" autofocus value="{{old("numberflight")}}" id="name" required name="numberflight" placeholder="number of Flight">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-plane font-green"></i>
                        </span>
                    </div>
            <br />
                    <div class="form-group">
                        <label class="col-md-1 control-label">From</label>
                        <div class="col-md-11">
                            <select class="form-control" name="airportnamede">
                                <option value="">Select departure Airport</option>
                                @foreach($airports as $airport)
                                <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br /> <br />
                    <div class="form-group">
                        <label class="col-md-1 control-label">To</label>
                        <div class="col-md-11">
                            <select class="form-control" name="airportnamear">
                                <option value="">Select arrival Airport</option>
                                @foreach($airports as $airport)
                                <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br /><br />



                    <div class="mt-repeater-input">
                        <label class="control-label">Date Of flight</label>
                        <br>
                            <!--/*group-a[0][date-input]*/-->

                        <input class="input-group form-control form-control-inline date date-picker" size="16" type="text" placeholder="01/08/2020" name="des" data-date-format="dd/mm/yyyy"> </div>

                        <br /> <br />
                        <div class="form-group">
                            <label class="col-md-2 control-label">Company of flight</label>
                            <div class="col-md-10">
                                <select class="form-control" name="companyflight">
                                    <option value="">Select company of flight</option>
                                    @foreach($companys as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br /><br />



                    <div  class="form-group form-md-checkboxes">

                        <div class="md-checkbox-inline">
                            <div class="md-checkbox">
                                <input type="checkbox" {{old("active")?"checked":""}} id="checkbox6" name="active" class="md-check">
                                <label for="checkbox6">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Active </label>
                            </div>
                            <div class="md-checkbox">
                                <input type="checkbox" {{old("stopeflight")?"checked":""}} id="stopeflight" name="stopeflight" class="md-check">
                                <label for="stopeflight">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Stop </label>
                            </div>
                        </div>
                 </div>



                    <!-- /.input-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <button type="submit" class="btn green">Submit</button>
            <a href="{{route('flight')}}" type="submit" class="btn red">Cancel</a>
        </form>
    </div>
</div>

@endsection
