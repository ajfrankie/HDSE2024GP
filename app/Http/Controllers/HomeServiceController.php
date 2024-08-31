<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeService;
use Auth;


class HomeServiceController extends Controller
{
    public function HomeService() {
        $home_services = HomeService::latest()->get();
        // $home_services = HomeService::find($id);
        return view('admin.home_service.edit', compact('home_services'));
    }

    public function EditHomeService($id)  {
        $home_services = HomeService::find($id);
        return view('admin.home_service.edit',compact('home_services'));
      
    }
      
    public function UpdateHomeService(Request $request, $id) {
        

        HomeService::find($id)->update([
            'head' => $request->head,
            'tittle' => $request->tittle,
            'servicenameone'=> $request->servicenameone,
            'serviceiconone'=>$request->serviceiconone,
            'servicenametwo'=>$request->servicenametwo,
            'serviceicontwo' =>$request->serviceicontwo,
            'servicenamethree' => $request->servicenamethree,
            'serviceiconthree' =>$request->serviceiconthree,
            'servicenamefour' => $request->servicenamefour,
            'serviceiconfour' =>$request->serviceiconfour,
            'servicenamefive' => $request->servicenamefive,
            'serviceiconfive' =>$request->serviceiconfive,
            'servicenamesix' => $request->servicenamesix,
            'serviceiconsix' =>$request->serviceiconsix,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('home.service')->with('success', 'Home Services Update SuccessFull'); 
      }
}
