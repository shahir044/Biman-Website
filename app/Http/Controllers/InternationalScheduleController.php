<?php

namespace App\Http\Controllers;

use App\Models\InternationalSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternationalScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $DAC_LON = DB::table('international_schedules')
        //             ->where('route', 'DAC-LON')
        //             ->get();
        
        // // return $DAC_LON;

        // $LON_DAC = DB::table('international_schedules')
        //             ->where('route', 'LON-DAC')
        //             ->get();

        // // LON ZYL

        // $ZYL_LON = DB::table('international_schedules')
        //         ->where('route', 'ZYL-LON')
        //         ->get();



        // $LON_ZYL = DB::table('international_schedules')
        //         ->where('route', 'LON-ZYL')
        //         ->get();

        
        // // $DAC_CXB 

        // $DAC_DXB = DB::table('international_schedules')
        //             ->where('route', 'DAC-DXB')
        //             ->get();

        // $DXB_DAC = DB::table('international_schedules')
        //             ->where('route', 'DXB-DAC')
        //             ->get();

        // // DXB CTG


        
        // // DAC-AUH

        // $DAC_AUH = DB::table('international_schedules')
        //         ->where('route', 'DAC-AUH')
        //         ->get();

        // $AUH_DAC = DB::table('international_schedules')
        //         ->where('route', 'AUH-DAC')
        //         ->get();

        // // DAC-MCT

        // $DAC_MCT = DB::table('international_schedules')
        //         ->where('route', 'DAC-MCT')
        //         ->get();

        // $MCT_DAC = DB::table('international_schedules')
        //         ->where('route', 'MCT-DAC')
        //         ->get();

        // // CGP-MCT


        // $CGP_MCT = DB::table('international_schedules')
        //         ->where('route', 'CGP-MCT')
        //         ->get();

        // $MCT_CGP = DB::table('international_schedules')
        //         ->where('route', 'MCT-CGP')
        //         ->get();

        // // DAC DOH

        // $DAC_DOH = DB::table('international_schedules')
        //         ->where('route', 'DAC-DOH')
        //         ->get();

        // $DOH_DAC = DB::table('international_schedules')
        //         ->where('route', 'DOH-DAC')
        //         ->get();


        // // DAC KWI

        // $DAC_KWI = DB::table('international_schedules')
        //         ->where('route', 'DAC-KWI')
        //         ->get();

        // $KWI_DAC = DB::table('international_schedules')
        //         ->where('route', 'KWI-DAC')
        //         ->get();

        // // DAC RUH

        // $DAC_RUH = DB::table('international_schedules')
        //         ->where('route', 'DAC-RUH')
        //         ->get();

        // $RUH_DAC = DB::table('international_schedules')
        //         ->where('route', 'RUH-DAC')
        //         ->get();

        // // DAC JED

        // $DAC_JED = DB::table('international_schedules')
        //         ->where('route', 'DAC-JED')
        //         ->get();

        // $JED_DAC = DB::table('international_schedules')
        //         ->where('route', 'JED-DAC')
        //         ->get();

        // // DAC MED

        // $DAC_MED = DB::table('international_schedules')
        //         ->where('route', 'DAC-MED')
        //         ->get();

        // $MED_DAC = DB::table('international_schedules')
        //         ->where('route', 'MED-DAC')
        //         ->get();

        // // DAC DMM

        // $DAC_DMM = DB::table('international_schedules')
        //         ->where('route', 'DAC-DMM')
        //         ->get();

        // $DMM_DAC = DB::table('international_schedules')
        //         ->where('route', 'DMM-DAC')
        //         ->get();

        // // DAC SIN

        // $DAC_SIN = DB::table('international_schedules')
        //         ->where('route', 'DAC-SIN')
        //         ->get();

        // $SIN_DAC = DB::table('international_schedules')
        //         ->where('route', 'SIN-DAC')
        //         ->get();

        // // DAC KUL

        // $DAC_KUL = DB::table('international_schedules')
        //         ->where('route', 'DAC-KUL')
        //         ->get();

        // $KUL_DAC = DB::table('international_schedules')
        //         ->where('route', 'KUL-DAC')
        //         ->get();

        // // DAC DEL

        // $DAC_DEL = DB::table('international_schedules')
        //         ->where('route', 'DAC-DEL')
        //         ->get();

        // $DEL_DAC = DB::table('international_schedules')
        //         ->where('route', 'DEL-DAC')
        //         ->get();

        // //DAC CCU

        // $DAC_CCU = DB::table('international_schedules')
        //         ->where('route', 'DAC-CCU')
        //         ->get();

        // $CCU_DAC = DB::table('international_schedules')
        //         ->where('route', 'CCU-DAC')
        //         ->get();
        
        // // DAC KTM

        // $DAC_KTM = DB::table('international_schedules')
        //         ->where('route', 'DAC-KTM')
        //         ->get();

        // $KTM_DAC = DB::table('international_schedules')
        //         ->where('route', 'CCU-DAC')
        //         ->get();

        // // DAC MCT

        // $DAC_MAN = DB::table('international_schedules')
        //         ->where('route', 'DAC-MAN')
        //         ->get();

        // $MAN_DAC = DB::table('international_schedules')
        //         ->where('route', 'MAN-DAC')
        //         ->get();

        // // ZYL MAN

        // $ZYL_MAN = DB::table('international_schedules')
        // ->where('route', 'DAC-ZYL')
        // ->get();

        // $MAN_ZYL = DB::table('international_schedules')
        //         ->where('route', 'ZYL-DAC')
        //         ->get();
    

        // // BKK DAC

        // $DAC_BKK = DB::table('international_schedules')
        //         ->where('route', 'DAC-BKK')
        //         ->get();

        // $BKK_DAC = DB::table('international_schedules')
        //         ->where('route', 'BKK-DAC')
        //         ->get();

        

        // return view('internationalSchedule',
        //         compact(

        //             'DAC_LON','LON_DAC',
        //             'ZYL_LON','LON_ZYL',
        //             'DAC_DXB','DXB_DAC',
        //             'DAC_AUH','AUH_DAC',
        //             'DAC_MCT','MCT_DAC',
        //             'CGP_MCT','MCT_CGP',
        //             'DAC_DOH','DOH_DAC',
        //             'DAC_KWI','KWI_DAC',
        //             'DAC_RUH','RUH_DAC',
        //             'DAC_JED','JED_DAC',
        //             'DAC_MED','MED_DAC',
        //             'DAC_DMM','DMM_DAC',
        //             'DAC_SIN','SIN_DAC',
        //             'DAC_KUL','KUL_DAC',
        //             'DAC_DEL','DEL_DAC',
        //             'DAC_CCU','CCU_DAC',
        //             'DAC_KTM','KTM_DAC',
        //             'DAC_MAN','MAN_DAC',
        //             'ZYL_MAN','MAN_ZYL',
        //             'DAC_BKK','BKK_DAC',

        //         ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InternationalSchedule  $internationalSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(InternationalSchedule $internationalSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InternationalSchedule  $internationalSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(InternationalSchedule $internationalSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InternationalSchedule  $internationalSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternationalSchedule $internationalSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InternationalSchedule  $internationalSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternationalSchedule $internationalSchedule)
    {
        //
    }
}
