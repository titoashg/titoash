<?php

namespace App\Http\Controllers\adminstrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\companyflight;
use App\airport;

class FlightController extends Controller
{
    //
    public function index()
    {
        return view('cpanel.flight.index');
    }


    /*
    add flight
    TiToASH
    HERE
    */
    public function addflight()
    {
        return view('cpanel.flight.index');
    }


    /*
    Company
    TiToASH
    HERE
    */
    public function allcompany()
    {
        $company = companyflight::where('is_delete',0)->OrderBy('id','desc')->get();
        return view('cpanel.flight.company',compact('company'));
    }

    public function addcompany()
    {
        return view('cpanel.flight.addcompany');
    }

    public function addcompanypost(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|unique:companyflights,name|max:50',
        ]);

        $company = new companyflight();
        $company->name = $request->company;
        $company->is_active = $request->active?1:0;
        $company->created_by = \Auth::user()->id;
        $company->is_delete = 0;
        $company->save();
        \Session::flash("msg","s:Add company Success");
        return redirect("admin/allcompany");
    }

    public function editcompany($id)
    {
        $company = companyflight::find($id);
        return view('cpanel.flight.editcompany',compact('company'));
    }

    public function editcompanypost(Request $request,$id)
    {
        $validatedData = $request->validate([
            'company' => 'required|max:50',
        ]);

        $company = companyflight::find($id);
        $company->name = $request->company;
        $company->is_active = $request->active?1:0;
        $company->created_by = \Auth::user()->id;
        $company->save();
        \Session::flash("msg","s:Edit company Success");
        return redirect("admin/allcompany");
    }

    public function deletecompany($id)
    {
        $company = companyflight::find($id);
        $company_delete = $company->is_delete;
        if($company_delete == 0){
            $company->is_delete = 1;
            $company->save();
            \Session::flash("msg","s:Deleted Success");
            return redirect("admin/allcompany");
        }else{
            \Session::flash("msg","e:Is deleted Alredy");
            return redirect("admin/allcompany")->withInput();
        }
    }



    /*
    airport
    TiToASH
    HERE
    */
    public function allairport()
    {
        $airport = airport::where('is_delete',0)->OrderBy('id','desc')->get();
        return view('cpanel.flight.airport',compact('airport'));
    }

    public function addairport()
    {
        return view('cpanel.flight.addarport');
    }

    public function addairportpost(Request $request)
    {
        $validatedData = $request->validate([
            'airport' => 'required|unique:airports,name|max:50',
        ]);
        $airport = new airport();
        $airport->name = $request->airport;
        $airport->is_active = $request->active?1:0;
        $airport->created_by = \Auth::user()->id;
        $airport->is_delete = 0;
        $airport->save();
        \Session::flash("msg","s:Add airport Success");
        return redirect("admin/allairport");
    }

    public function editairport($id)
    {
        $airport = airport::find($id);
        return view('cpanel.flight.editarport',compact('airport'));
    }

    public function editairportpost(Request $request,$id)
    {
        $validatedData = $request->validate([
            'airport' => 'required|max:50',
        ]);

        $airport = airport::find($id);
        $airport->name = $request->airport;
        $airport->is_active = $request->active?1:0;
        $airport->created_by = \Auth::user()->id;
        $airport->save();
        \Session::flash("msg","s:Edit airport Success");
        return redirect("admin/allairport");
    }

    public function deleteairport($id)
    {
        $airport = airport::find($id);
        $airport_delete = $airport->is_delete;
        if($airport_delete == 0){
            $airport->is_delete = 1;
            $airport->save();
            \Session::flash("msg","s:Deleted Success");
            return redirect("admin/allairport");
        }else{
            \Session::flash("msg","e:Is deleted Alredy");
            return redirect("admin/allairport")->withInput();
        }
    }
}
