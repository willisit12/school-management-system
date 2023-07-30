<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classess;
use App\Models\FeeStructure;

class AccountController extends Controller
{
    public function AccountPage(){
      return view('Account.account-admin');
    }


    public function AddFeeTypeForm(){
        $user = User::Where('UserID', '=', Session::get('UserID'))->first();
        $Sch_ID = $user->Sch_ID;
        $class = Classess::Where('Sch_ID', '=', $Sch_ID)->get();
        return view('Account.feetype-form', compact('class'));
      }

    public function FeeType(){
        $user = User::Where('UserID', '=', Session::get('UserID'))->first();
        $Sch_ID = $user->Sch_ID;
        $fees = FeeStructure::Where('Sch_ID', '=', $Sch_ID)->get();
        return view('Account.feetype', compact('fees'));
    }

    public function AddFeeStructure(Request $request){
       // print_r($request->Class);
        $request->validate([
            'Class'=>'required',
            'FeeType'=>'required',
            'Period'=>'required',
            'Amount'=> 'required|numeric'
          ]);
    
          $ClassArray = $request->Class;
          $data = User::Where('UserID', '=', Session::get('UserID'))->first();
          $success = true; // Flag variable to track the success of all iterations

           foreach ($ClassArray as $class) {
            $feestructure = new FeeStructure();
            $classID = preg_replace('/\s+/', '', $class);
            $feestructure->Sch_ID = $data->Sch_ID;
            $feestructure->FeeType = $request->FeeType;
            $feestructure->Class = $class;
            $feestructure->Amount = $request->Amount;
            $feestructure->Period= $request->Period;
            $feestructure->classID = $classID;

            $res = $feestructure->save();
                if (!$res) {
                    $success = false;
                    break; // Exit the loop if a failure occurs, assuming you don't want to continue with further iterations
                }
             }

             if ($success) {
                return back()->with('success', 'fee structure added successfully');
              } else {
                return back()->with('fail', 'Something bad occurred');
            }
         }
}
