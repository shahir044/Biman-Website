<?php

namespace App\Http\Controllers;

use App\Imports\InternationalSchedulesImport;
use App\Models\Advisory;
use App\Models\files;
use App\Models\InternationalScheduleFile;
use App\Models\News;
use Illuminate\Http\Request;

Use \Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class fileUpload extends Controller
{

    public function publishNews(Request $request){

        //return $request;

        $this->validate($request, [
            'input_file_image' => 'max:500|mimes:jpg,jpeg,png'
        ]);

        $date = date('d.m.Y.H.i.s', time());
        $fileNameToStore_image="";

        if($request->hasFile('input_file_image')){
            $file_image = $request->file('input_file_image');
            $fileNameWithExt_image = $file_image->getClientOriginalName();
            $fileName_image = pathinfo($fileNameWithExt_image, PATHINFO_FILENAME);
            $fileNameToStore_image = $date.'_'.$fileNameWithExt_image;
            $path = $file_image->storeAs('News_Photos',$fileNameToStore_image);
        }else{
            $fileNameToStore_image = 'news.png';
        }

        if($request->hasFile('input_file_pdf')){
            $file_pdf = $request->file('input_file_pdf');

            //return $file;

            $fileNameWithExt_pdf = $file_pdf->getClientOriginalName();

            //return $fileNameWithExt;

            $fileName_pdf = pathinfo($fileNameWithExt_pdf, PATHINFO_FILENAME);

            //return $date;

            $fileNameToStore_pdf = $date.'_'.$fileNameWithExt_pdf;

            $path = $file_pdf->storeAs('News',$fileNameToStore_pdf);
        }else{
            $fileNameToStore_pdf = 'No pdf uploaded';
        }
        
        $files = new News();
        // $file->title = $request->input('title');

        $files->news_pdf = $fileNameToStore_pdf;
        $files->news_image = $fileNameToStore_image;
        $files->news_title = $request->title;
        $files->news_description = $request->description;
        $files->news_category = $request->category;
        $files->user_id = auth()->user()->id;
        $files->save();

        return redirect()->back()->with('success', 'News Published on Website'); 
    }

    public function submitAdvisory(Request $request)
    {
        
        $this->validate($request, [
            'input_file' => 'required|mimes:docx,doc,pdf,jpg,jpeg,png'
        ]);


        $file = $request->file('input_file');

        //return $file;

        $fileNameWithExt = $file->getClientOriginalName();

        //return $fileNameWithExt;

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $date = date('d.m.Y.H.i.s', time());


        //return $date;

        $fileNameToStore = $date.'_'.$fileNameWithExt;

        $path = $file->storeAs('advisory',$fileNameToStore);

        $files = new Advisory();
        // $file->title = $request->input('title');

        $files->file_name = $fileNameToStore;
        $files->advisory_title = $request->name;
        $files->country_name = $request->country_name;
        $files->user_id = auth()->user()->id;
        $files->save();

      

        return redirect()->back()->with('success', 'Advisory Uploaded on Website'); 
    }

    public function submitFileInternational(Request $request)
    {
        
        $this->validate($request, [
            'input_file_international' => 'required|mimes:csv,xlx,xls,xlsx'
        ]);


        $file = $request->file('input_file_international');

        //return $file;

        $fileNameWithExt = $file->getClientOriginalName();

        //return $fileNameWithExt;

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $date = date('d.m.Y.H.i.s', time());


        //return $date;

        $fileNameToStore = $date.'_'.$fileNameWithExt;

        $path = $file->storeAs('internationalSchedule',$fileNameToStore);

        $files = new InternationalScheduleFile();
        // $file->title = $request->input('title');

        $files->file_name = $fileNameToStore;
        $files->user_id = auth()->user()->id;
        $files->save();

        //return $files;

        // 

        // $file = $request->file('input_file_international')->store('import_international');
        
        // Excel::import(new ScheduleImport, $file);
        

        $import = new InternationalSchedulesImport;

        $import->import($file);

        //dd($file);

        if($import->failures()->isNotEmpty()){
            return back()->withFailures($import->failures());
        }
        //dd($import->failures());

        return redirect()->back()->with('success', 'INTERNATIONAL SCHEDULE Update Successful'); 
    }

    public function submitFile(Request $request)
    {
        
        $this->validate($request, [
            'input_file' => 'required|mimes:csv,xlx,xls,xlsx'
        ]);

        // $file = $request->file('input_file')->store('import');

        $file = $request->file('input_file');

        $fileNameWithExt = $file->getClientOriginalName();

        //return $fileNameWithExt;

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $date = date('d.m.Y.H.i.s', time());

        //return $date;

        $fileNameToStore = $date.'_'.$fileNameWithExt;

        $path = $file->storeAs('public/domesticSchedule',$fileNameToStore);
        
        // return $fileNameToStore;

        $files = new Files;
        // $file->title = $request->input('title');

        $files->file_name = $fileNameToStore;
        $files->user_id = auth()->user()->id;
        $files->save();
        
        // Excel::import(new ScheduleImport, $file);
        

        // $import = new ScheduleImport;

        // $import->import($file);

        // if($import->failures()->isNotEmpty()){
        //     return back()->withFailures($import->failures());
        // }
        // dd($import->failures());

        return redirect()->back()->with('success', 'DOMESTIC SCHEDULE Update Successful');

    }
    

    public function getDownload($file)
    {
        //return $request->file_name;
        //return $file;
        //PDF file is stored under project/public/download/info.pdf
        $filepath = storage_path()."/app/internationalSchedule/". $file;
        
        // return $filepath;

        // return $filepath;

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($filepath, $file, $headers);
    }

    public function getDownloadAdvisory($file)
    {
        //return $request->file_name;
        //return $file;
        //PDF file is stored under project/public/download/info.pdf
       $filepath = '/home/bimanairlines/public_html/admin/storage/advisory/' . $file;
        
        // return $filepath;

        // return $filepath;
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $file . '"',
        ];
        return response()->file($filepath,$headers);

        $headers = array(
            'Content-Type: application/pdf',
            'Content-Type: application/msword',
            'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        );

        return response()->download($filepath, $file, $headers);
    }

    public function getNewsImage($file)
    {
        //return $request->file_name;
        //return $file;
        //PDF file is stored under project/public/download/info.pdf
        // $filepath = storage_path()."/app/News_Photos/". $file;
        $filepath = '/home/bimanairlines/public_html/admin/storage/News_Photos/' . $file;
        
        // return $filepath;
        if (!File::exists($filepath)) {

            abort(404);
    
        }

        $file = File::get($filepath);

        $type = File::mimeType($filepath);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }
}
