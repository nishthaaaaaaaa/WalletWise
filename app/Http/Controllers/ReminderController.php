<?php

namespace App\Http\Controllers;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{
    public function store(request $request){
        $request->validate([
            'reminder_name'=>'required|string|max:255',
            'reminder_amount'=>'required|numeric|min:0',
            'due_date'=>'required|date',
            'reminder_frequency'=>'required|string|max:255',
            'reminder_description'=>'nullable|string',
        ]);
        // dd($request);
        reminder::create([
            'user_id' => Auth::id(),
            'reminder_name'=>$request->input('reminder_name'),
            'reminder_amount'=>$request->input('reminder_amount'),
            'due_date'=>$request->input('due_date'),
            'frequency'=>$request->input('reminder_frequency'),
            'description'=>$request->input('reminder_description'),
        ]);
        return redirect()->back()->with('success', 'Reminder added successfully!');
        }   

        public function index()
        {
            $reminders = reminder::all(); 
            return view('dashboard.Show_reminder', compact('reminders')); 
            dd($reminders);
        }
        public function destroy($id)
        {
            $reminder = Reminder::findOrFail($id);

            $reminder->delete();

            return redirect()->back()->with('success', 'Reminder deleted successfully.');
        }

}   
