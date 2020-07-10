<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Talent;


class TalentController extends Controller
{
   
    public function index()
    {
        $talents = Talent::whereStatus(0)->get();
        
        
      return view('talents.index', [
            'talents' => $talents,]);
       
    }

    public function button(Request $request, $id)
    {

        $talents = Talent::find($id)->update([
            'status' => 1
        ]);
        return redirect('/talents')->with('mssg', 'Approved');

    }

    public function approved()
    {
        $talents = Talent::whereStatus(1)->get();

        return view('talents.approved', [
            'talents' => $talents,
        ]);
    }


    public function create() {
        return view('talents.create');
    }

    public function store(Request $request)
    {
         $this->validate(request(),[
             'name' => 'required',
             'address' => 'required',
             'profession' => 'required',
             'phone' => 'required|unique:talents',
             'state' => 'required',
             'profile' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:150',
             'project1' => 'nullable|sometimes',
             'project2' => 'nullable|sometimes',
             'project2' => 'nullable|sometimes',
             'project3' => 'nullable|sometimes',
             'location1' => 'nullable|sometimes',
             'location2' => 'nullable|sometimes',
             'location3' => 'nullable|sometimes',
             'year1' => 'nullable|sometimes',
             'year2' => 'nullable|sometimes',
             'year3' => 'nullable|sometimes',
             'image1' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:250',
             'image2' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:250',
             'image3' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:250',
            
         ]);


        $talent = new Talent();

        $talent->name = request('name');
        $talent->address = request('address');
        $talent->profession = request('profession');
        $talent->phone = request('phone');
        $talent->state = request('state');
        $talent->project1 = request('project1');
        $talent->project2 = request('project2');
        $talent->project3 = request('project3');
        $talent->location1 = request('location1');
        $talent->location2 = request('location2');
        $talent->location3 = request('location3');
        $talent->year1 = request('year1');
        $talent->year2 = request('year2');
        $talent->year3 = request('year3');

        if($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->file('profile')->getClientOriginalName();
            $file->move('uploads/avatars', $filename);
            $talent->profile = $filename;
        } else {
            return $request;
            $talent->profile = '';
        }

        if($request->hasfile('image1')) {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->file('image1')->getClientOriginalName();
            $file->move('uploads/avatars', $filename);
            $talent->image1 = $filename;
        } else {
            return $request;
            $talent->image1 = '';
        }

        if($request->hasfile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->file('image2')->getClientOriginalName();
            $file->move('uploads/avatars', $filename);
            $talent->image2 = $filename;
        } else {
            return $request;
            $talent->image2 = '';
        }
        if($request->hasfile('image3')) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->file('image3')->getClientOriginalName();
            $file->move('uploads/avatars', $filename);
            $talent->image3 = $filename;
        } else {
            return $request;
            $talent->image3 = '';
        }
        $talent->save();

        return redirect('/')->with('mssg', 'Your account is waiting for our administrator approval. <br> Please check back later.');
        
    }
    
    public function show ($id) {
        $talent = Talent::findOrFail($id);

        return view('talents.show', ['talent' => $talent]);
    }

}
