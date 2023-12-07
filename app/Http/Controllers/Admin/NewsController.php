<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function delete(Request $request, $id){

        $item = News::find($id);
        $item->status = 0;
        $item->delete_by = auth()->user()->email;
        $item->save();

        return response()->json([
            'success' => true,
        ]);

    }
}
