<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Talent;

class TalentPanelController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    
    public function approved()
    {
        $talents = Talent::whereStatus(1)->get();
        return view('admin.user.approved')->with(compact('talents'));
    }
    
    public function unapproved()
    {
        $talents = Talent::whereStatus(0)->get();
        return view('admin.user.unapproved')->with(compact('talents'));
    }
    
    public function doApprove(Request $request)
    {
        $talent = Talent::find($request->talentId);
        if(! $talent){
            return redirect()->with('msg:error', "Talent with id {$request->talentId} does not exists.");
        }
        
        $talent->update([
            'status' => 1
        ]);
        
        return redirect()
            ->to("talents/{$talent->id}")
            ->with('msg:success', "Talent with id {$request->talentId} has been approved.");
    }
    
    public function doUnApprove(Request $request)
    {
        $talent = Talent::find($request->talentId);
        if(! $talent){
            return redirect()->with('msg:error', "Talent with id {$request->talentId} does not exists.");
        }
        
        $talent->update([
            'status' => 0
        ]);
        return redirect()
            ->to("talents/{$talent->id}")
            ->with('msg:success', "Talent with id {$request->talentId} has been unapproved.");
    }
}
