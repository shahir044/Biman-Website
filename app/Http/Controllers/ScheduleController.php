<?php

namespace App\Http\Controllers;

use App\Models\files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    //
    public function ScheduleUpdate()
    {
        
        // $dac_cgp = DB::table('Schedules')
        //             ->where('route', 'DAC-CGP')
        //             ->get();

                    
        // $cgp_dac = DB::table('Schedules')
        //             ->where('route', 'CGP-DAC')
        //             ->get();


        // $dac_zyl = DB::table('Schedules')
        //                 ->where('route', 'DAC-ZYL')
        //                 ->get();

                    
        // $zyl_dac = DB::table('Schedules')
        //             ->where('route', 'ZYL-DAC')
        //             ->get();
                    
        // $dac_cxb = DB::table('Schedules')
        //             ->where('route', 'DAC-CXB')
        //             ->get();

                    
        // $cxb_dac = DB::table('Schedules')
        //             ->where('route', 'CXB-DAC')
        //             ->get();


        // $dac_spd = DB::table('Schedules')
        //             ->where('route', 'DAC-SPD')
        //             ->get();

        // $spd_dac = DB::table('Schedules')
        //             ->where('route', 'SPD-DAC')
        //             ->get();

        
        // $dac_rjh = DB::table('Schedules')
        //                 ->where('route', 'DAC-RJH')
        //                 ->get();

        // $rjh_dac = DB::table('Schedules')
        //             ->where('route', 'RJH-DAC')
        //             ->get();

        
        // $dac_jsr = DB::table('Schedules')
        //             ->where('route', 'DAC-JSR')
        //             ->get();
                
        // $jsr_dac = DB::table('Schedules')
        //             ->where('route', 'JSR-DAC')
        //             ->get();

        
        // $dac_bzl = DB::table('Schedules')
        //         ->where('route', 'DAC-BZL')
        //         ->get();

        // $bzl_dac = DB::table('Schedules')
        //         ->where('route', 'BZL-DAC')
        //         ->get();

        // $spd_cxb = DB::table('Schedules')
        //         ->where('route', 'SPD-CXB')
        //         ->get();

        // $cxb_spd = DB::table('Schedules')
        //         ->where('route', 'CXB-SPD')
        //         ->get();

        
        // $zyl_cxb = DB::table('Schedules')
        //     ->where('route', 'ZYL-CXB')
        //     ->get();

        // $cxb_zyl = DB::table('Schedules')
        //         ->where('route', 'CXB-ZYL')
        //         ->get();

        
        
        // $allDomesticFiles = files::all(); 

        // return view('schedule',
        //         compact(
        //             'dac_cgp','cgp_dac',
        //             'dac_zyl','zyl_dac',
        //             'dac_cxb','cxb_dac',
        //             'dac_spd','spd_dac',
        //             'dac_rjh','rjh_dac',
        //             'dac_jsr','jsr_dac',
        //             'dac_bzl','bzl_dac',
        //             'spd_cxb','cxb_spd',
        //             'zyl_cxb','cxb_zyl',
        //         ));
    }
}
