<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advisory;
use App\Models\Refund;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvisoryController extends Controller
{
    public function delete(Request $request, $id){

        $item = Advisory::find($id);
        $item->status = 0;
        $item->delete_by = auth()->user()->email;
        $item->save();

        return response()->json([
            'success' => true,
        ]);

    }
}
