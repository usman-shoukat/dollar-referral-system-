<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $userModel;

    public function __construct()
    {
        $this->userModel = new Admin();
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getalladmin = Admin::all();
     
        return view('admin.dashboard')->with('getalladmin' , $getalladmin)
            ->with('totalbusinesscount' , $totalbusinesscount)
            ->with('getalluser' , $getalluser)->with('getallappuser' , $getallappuser)
            ->with('totalwithdarw' , $totalwithdarw);
    }

    public function reject($id)
    {
        $addapp = Admin::where('id', $id)->delete();
        $getalladmin = Admin::all();
        return view('admin.dashboard', ['getalladmin' => $getalladmin]);
    }

    protected function makeadmin(Request $request)
    {
        $userData = [
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ];
        $createdUser = $this->userModel->create($userData);
        return redirect()->route('dashboard');
    }

    protected function update($id)
    {
        $re = $id;
        return view('admin.updatepass')->with('re', $re);

    }

    public function updateadmin(Request $request,$id)
    {
      $updateid = $id;
        $re = $id;
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);

        //Change Password

        $adminpass = Admin::where(['id' => $updateid ])->first();
        $user = $adminpass->password;
        if (Hash::check($request->oldpassword, $user)) {
            $adminpass->password = Hash::make($request->password);
            $adminpass->save();
            return redirect()->route('dashboard')->with(['success' => true, 'message' => 'Password change successfull']);


        } else {
            return view('admin.updatepass')->with('re', $re)->with(['error' => true, 'message' => 'Current password is invalid']);

        }

    }
    public function jazzcashusers()
    {
        $jazzcash = 'jazzcash';
        $jazzid = '0';
        $getalljazzcashuser = User::where(['platform' => $jazzcash ])->where(['approval' => $jazzid ])->get();
        $getalljazzcashusercount = User::where(['platform' => $jazzcash ])->count();
        return view('admin.jazzcashuser', ['getalljazzcashuser' => $getalljazzcashuser])->with('getalljazzcashusercount' ,$getalljazzcashusercount );
    }
    public function paisausers()
    {
        $EasyPaisa = 'EasyPaisa';
        $EasyPaisaid = '0';
        $EasyPaisauser = User::where(['platform' => $EasyPaisa ])->where(['approval' => $EasyPaisaid ])->get();
        $EasyPaisausercount = User::where(['platform' => $EasyPaisa ])->count();
        return view('admin.easypaisauser')->with('EasyPaisauser', $EasyPaisauser)
            ->with('EasyPaisausercount', $EasyPaisausercount);
    }
    public function payusers()
    {
        $Payoneer = 'Payoneer';
        $Payoneerid = '0';
        $Payoneeruser = User::where(['platform' => $Payoneer ])->where(['approval' => $Payoneerid ])->get();
        $Payoneerusercount = User::where(['platform' => $Payoneer ])->count();
        return view('admin.payoneeruser', ['Payoneeruser' => $Payoneeruser])->with('Payoneerusercount' ,$Payoneerusercount );
    }

}
