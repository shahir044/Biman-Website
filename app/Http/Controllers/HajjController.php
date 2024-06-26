<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HajjController extends Controller
{
    public function index(Request $request){
        $hajjSchedule = DB::table('hajj_sch_2024')->get();
        return view('hajj-info',compact('hajjSchedule'));
    }

    public function hajjSchSearch(Request $request){
        // Validate incoming request data
        $request->validate([
            'arriv' => 'required',
            'depart' => 'required',
            'daterange' => 'required',
        ]);

        // Retrieve search parameters from the request
        $arriv = $request->input('arriv');
        $depart = $request->input('depart');
        $route = $depart.'-'.$arriv;
        $daterange = Carbon::createFromFormat('d/m/Y', $request->input('daterange'))->format('Y-m-d');
        // dd($daterange);
        // Query the Schedule model based on the search parameters
        $schedules = DB::table('hajj_sch_2024')
                            ->where('route', $route)
                            ->where('date', $daterange)
                            ->get();

        // dd($schedules);
        // Assuming you have a Blade view file named 'search_results.blade.php' to render search results
        // You can customize this part based on how you want to display the search results
        // Return JSON response
        $routeItem = '<hr>
        <div class="col-md-12 bg-success-light">
            <h4 class="font-size-20 pb-4 text-black font-weight-bolder">Search Results</h4>
        </div>';
        if ($schedules->isEmpty()) {
            // dd($schedules);
            $routeItem .= '
            <div class="col-md-12">
                <h4 class="font-size-16 pb-4 text-color-10 font-weight-bolder">No flight found!.. Try again with correct input.</h4>
            </div>';
        }
        
        foreach($schedules as $sch){
            $flightNumber = substr($sch->FLT_NO,2);
            $routeItem .= '
            <div class="route-item">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="route-inner-item media align-items-center">
                            <div class="route-icon mr-4 pl-3">
                            <img style="width:100px" src="' . asset('assets/images/logo/' . $sch->AIRLINES . '.svg') . '" alt="logo">
                            </div><!-- end route-icon -->
                            <div class="media-body">
                                <div class="time-wrap font-size-18 font-weight-bold text-black">
                                    <span class="departure-time" id="depar-text">' . $sch->FLT_NO .'</span>
                                </div>
                            </div><!-- end media-body -->
                        </div><!-- end media -->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-2">
                        <div class="route-inner-item media">
                            <div class="media-body">
                                <div class="price-wrap font-size-18 font-weight-medium text-black">
                                    <span class="value text-black">'.$sch->ROUTE.'</span>
                                </div>
                            </div><!-- end media-body -->
                        </div><!-- end media -->
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-3">
                        <div class="route-inner-item media">
                            <div class="media-body">
                                <div class="price-wrap font-size-18 font-weight-medium text-black">
                                    <span class="value text-color"> Date: '.$sch->DATE.'</span>
                                </div>
                            </div><!-- end media-body -->
                        </div><!-- end media -->
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-2">
                        <div class="route-inner-item media">
                            <div class="media-body">
                                <div class="price-wrap font-size-18 text-black">
                                    <span class="value text-black">DEP: '.$sch->DEP.'</span>
                                    <br>
                                    <span class="value text-black">ARR: '.$sch->ARR.'</span>
                                    <!-- Add button if date is today -->
                                </div>
                            </div><!-- end media-body -->
                        </div><!-- end media -->
                    </div><!-- end col-lg-2 -->
                    '.(Carbon::parse($sch->DATE)->isToday() ? '<div class="col-lg-2">
                    <div class="route-inner-item media">
                        <div class="media-body">
                            <div class="price-wrap font-size-18 text-black">
                                <a href="https://www.flightstats.com/v2/flight-tracker/'.$sch->AIRLINES.'/'.$flightNumber.'?year='.Carbon::parse($sch->DATE)->year.'&month='.Carbon::parse($sch->DATE)->month.'&date='.Carbon::parse($sch->DATE)->day.'" class="btn btn-outline-success" target="_blank"><i class="la la-external-link-alt"></i> View Flight</a>
                            </div>
                            </div><!-- end media-body -->
                        </div><!-- end media -->
                    </div><!-- end col-lg-2 -->' : '').'
                </div><!-- end row -->
            </div>
            ';
        }

        return response()->json($routeItem);
    }
}
