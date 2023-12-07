<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Refund;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefundController extends Controller
{
    public function index(){

        $newrequest = DB::table('refunds')->where('status', '0')->get();

        $resolvedrequest = DB::table('refunds')->where('status','1')->orWhere('status','2')->orderBy('status')->get();

        $resolvedrefund = DB::table('refunds')->where('status','3')->orWhere('status','4')->take(100)->get();

        return view('admin.refund-portal', ['newrequest' => $newrequest, 'resolvedrequest' => $resolvedrequest, 'resolvedrefund' => $resolvedrefund ]);
    }

    public function approveRefund($id){

        $refund = Refund::find($id);
        $refund->status = 1;
        $user = User::find(auth()->user()->id);
        $refund->updated_by = $user->email;
        $refund->save();

        return redirect(route('admin-refund-portal'));
    }


    public function declineRefund(Request $request, $id){
        $refund = Refund::find($id);
        $refund->status = 2;
        $refund->decline_reason = $request->data;
        $user = User::find(auth()->user()->id);
        $refund->updated_by = $user->email;
        $refund->save();

        return response()->json([
            'success' => true,
            'message' => 'Refund successfully declined',
        ]);
        // return redirect(route('admin-refund-portal'));
    }

    public function approveResolvedRefund(Request $request, $id){

        $refund = Refund::find($id);
        $refund->status = 3;
        $refund->decline_reason = $request->data;
        $user = User::find(auth()->user()->id);
        $refund->updated_by = $user->email;
        $refund->save();

        return response()->json([
            'success' => true,
            'message' => 'Refund successfully Done',
        ]);
    }

    public function declineResolvedRefund(Request $request, $id){
        $refund = Refund::find($id);
        $refund->status = 4;
        $refund->decline_reason = $request->data;
        $user = User::find(auth()->user()->id);
        $refund->updated_by = $user->email;
        $refund->save();

        return response()->json([
            'success' => true,
            'message' => 'Refund successfully declined',
        ]);
        // return redirect(route('admin-refund-portal'));
    }
    
        public function searchPNR(Request $request){

        $pnrs = DB::table('refunds')->where('pnr',$request->pnr)->get();

        return  response()->json($pnrs);
    }

    public function searchID(Request $request){

        $id = DB::table('refunds')->where('id',$request->id)->get();

        return  response()->json($id);
    }

}
