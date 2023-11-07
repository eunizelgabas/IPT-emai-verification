z<?php

namespace App\Http\Controllers;

use App\Events\UserLog;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MedicineController extends Controller
{
    public function index(){
        $medicine = Medicine::all();
        return view('medicine.index',[
            'medicine' => $medicine
        ]);
    }

    public function create(){
        return view('medicine/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'      => 'required|string',
            'dosage'     => 'required|string',
            'expiry_date'  => 'required|date',
            'stock' => 'required',
            'price' => 'required'
        ]);

        // $this->validate($request, $this->rules());

        $medicine = Medicine::create($request->all());
        $log_entry = Auth::user()->name . " added a medicine ". $medicine->name . " with the id# ". $medicine->id;
        event(new UserLog($log_entry));
        return redirect('/medicine')->with('message', ' Medicine added successfully.');
    }

    public function edit(Medicine $medicine){
        return view('medicine/edit',[
            'medicine' => $medicine
        ]);
    }

    public function update(Request $request, Medicine $medicine) {
        $data = $request->validate([
            'name' => 'required|string',
            'dosage' => 'required|string',
            'expiry_date' => 'required|date',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $medicine->update($data);
        $log_entry = Auth::user()->name . " updated a medicine ". $medicine->name . " with the id# ". $medicine->id;
        event(new UserLog($log_entry));


        return redirect('/medicine')->with('message', 'Medicine updated successfully.');
    }

    public function destroy(Medicine $medicine){
        $medicine->delete();
        $log_entry = Auth::user()->name . " deleted an medicine ". $medicine->name . " with the id# ". $medicine->id;
        event(new UserLog($log_entry));
        return redirect('/medicine')->with('message', 'Medicine deleted successfully');
    }
}
