<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

date_default_timezone_set('Asia/Kuala_Lumpur');

class memberController extends Controller
{
    public function form(){
        return view("form");
    }
    public function insert(Request $request){
        // $form = $request->validate([
        //     'name' => 'required',
        //     'email' => ['required',Rule::unique('members','email')],
        //     'age' => ['required','numeric','min:18'],
        //     'feedback' => ['required','max:30'],
        //     'rate' => 'required'
        // ]);

        $form = $request->validate([
            'p_name' => 'required',
            'quantity'=> ['required'],
            ]);

        member::create($form);
        return redirect('/')->with('success','add Product Successfully');
    }

    public function view(){
        return view('index',[
            'feedback' => member::latest()->paginate(5)
        ]);
    }

    public function edit_show(member $id){
        return view('edit',[
            'member' => $id
        ]);
    }

    public function update(Request $request,member $id){
        // $form = $request->validate([
        //     'name'=> 'required',
        //     'email'=> ['required'],
        //     'age'=> ['required','numeric','min:18'],
        //     'feedback'=> ['required','string','max:30'],
        //     'rate'=> ['required']
        // ]);

        $form = $request->validate([
            'p_name'=> 'required',
            'quantity'=> ['required'],
        ]);

        $id->update($form);

        return redirect('/')->with('success','Update Successfully');
    }

    public function destroy(member $id){
        $id->delete();
        
        return redirect('/')->with('success','Delete Successfully');
    }

}
