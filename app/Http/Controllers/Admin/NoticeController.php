<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Index()
    {
        return view('admin.header-notice');
    }

    public function fetchNotice()
    {
        $notices = Notice::all();
        $output = "";
        if (!empty($notices)) {
            $output .= '<table class="table table-sm text-center align-middle" id="notice-table">
            <thead>
              <tr>
                 <th>UPLOADED AT</th>
                <th>Serial</th>
                <th>NOTICE DESC</th>
                 <th>UPLOADED BY</th>
                 <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($notices as $notice) {
                $output .= '<tr>
                 <td>' . $notice->created_at . '</td>
                <td>' . $notice->id . '</td>
                <td>' . $notice->notice . '</td>
                 <td>' . $notice->uploaded_by . '</td>
                <td>
                  <button data-id="' . $notice->id . '" value="' . $notice->id . '" class="btn btn-sm btn-primary btn_edt_notice" id="btn_edt_notice" data-toggle="modal" data-target="#update-modal"><i class="fas fa-edit"></i></button>

                  <button data-id="' . $notice->id . '" class="btn btn-sm btn-danger btn_dlt_notice" id="btn_dlt_notice" data-toggle="modal" data-target="#categoryDeleteModal"><i class="fa fa-trash"></i></button>
                </td>
              </tr>';
            }

            $output .= '</tbody></table>';
            return response()->json($output);
        }
    }

    public function uploadNotice(Request $request)
    {

        $valid = $this->validate($request, [
            'notice' => 'required|max:1000'
        ]);

        if ($valid) {
            $notice = Notice::create([
                'notice' => $request->notice,
                'uploaded_by' => auth()->user()->email,
            ]);
            // Set a flash message and redirect back to the form
            return redirect()->back()->with('success', 'Operation successfully!');
        } else {
            // Set an error message and redirect back to the form
            return redirect()->back()->withErrors('An error occurred while saving the user. Please try again.');
        }
    }

    public function edit(Request $request)
    {
//        dd($request);
        $result = Notice::where('id', $request->id)->first();
        if ($result) {
            return response()->json([
                'message' => 'Data Found',
                'code' => 200,
                'data' => $result
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
    }

    public function update(Request $request)
    {
//        dd($request);
        $result = Notice::where('id', $request->id)->update([
            'notice' => $request->edit_notice,
        ]);
        if ($result) {
            return response()->json([
                'message' => 'Data Updated Successfully',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);

        }
    }

    public function delete(Request $request)
    {
//        dd($request);
        $result = Notice::where('id',$request->id)->delete();

        if ($result) {
            return response()->json([
                'message' => 'Data Deleted Successfully',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong!',
                'code' => 500
            ]);

        }
    }
}
