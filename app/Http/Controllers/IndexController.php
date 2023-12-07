<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('created_at','desc')->get();
        $news = News::orderBy('created_at', 'DESC')->take(6)->get(['id','news_title','news_description','news_category','news_image','news_pdf','created_at','status']);
        return view('index',compact('news','notices'));
    }
    
    public function certIndex()
    {
        // $notices = Notice::orderBy('created_at','desc')->get();
        $news = News::orderBy('created_at', 'DESC')->take(6)->get(['id','news_title','news_description','news_category','news_image','news_pdf','created_at','status']);
        return view('index',compact('news'));
    }


    public function index2()
    {
        // $news = News::orderBy('created_at', 'DESC')->take(6)->get(['news_title','news_description','news_category','news_image','news_pdf','created_at','status']);
        return view('index2');
    }

    public function flightOneWay(Request $request)
    {
        //return $request;

        $request->validate([
            'departure1' => 'required|max:200',
            'arrival1' => 'required|max:200',
        ]);

        $ADT = $request->adult_number;
        $CHD = $request->child_number;
        $INF = $request->infants_number;
        $origin = $request->departure1;
        $destination = $request->arrival1;
        $locale = "en-US";
        $pointOfSale = $request->point_of_sales1;
        $journeyType = "one-way";
        $cabinClass = $request->cabin;
        $date = date('m-d-Y', strtotime($request->daterange_single));
        $promoCode=$request->promo_code;
        // return $date;
        $url_bgdx_booking =
            'https://booking.biman-airlines.com/dx/BGDX/#/flight-selection?'
            .''.'journeyType='.$journeyType
            .''.'&locale='.$locale 
            .''.'&ADT='.$ADT 
            .''.'&C11='.$CHD
            .''.'&INF='.$INF 
            .''.'&origin='.$origin
            .''.'&destination='.$destination
            .''.'&date='.$date
            .''.'&promoCode='.$promoCode 
            .''.'&class='.$cabinClass
            .''.'&pointOfSale='.$pointOfSale;
            
        if($request->source1 == 'amobile' ){
            $url_bgdx_booking .= '&source=amobile';
        }

        //  return    $url_bgdx_booking;
        // https://dx.dx13.cert.aws.sabre.com/dx/BGDX/beta#/flight-selection?journeyType=one-way&awardBooking=false&origin=DAC&destination=CGP&class=Economy&ADT=1&CHD=0&INF=0&date=01-21-2022&pointOfSale=BD&execution=41e38efd-e775-4476-ad78-087592dc9aed
        // $url_bgdx_booking = 'https://dx.dx13.cert.aws.sabre.com/dx/BGDX/beta#/flight-selection?journeyType=one-way&awardBooking=false&origin=DAC&destination=CGP&class=Economy&ADT=1&CHD=0&INF=0&date=01-21-2022&pointOfSale=BD';
        
        return Redirect::to($url_bgdx_booking);
    }
    
    public function flightRoundTrip(Request $request)
    {
        
        // return $request;
        $request->validate([
            'departure2' => 'required|max:200',
            'arrival2' => 'required|max:200',
        ]);

        $ADT = $request->adult_number;
        $CHD = $request->child_number;
        $INF = $request->infants_number;
        $origin = $request->departure2;
        $destination = $request->arrival2;
        $locale = "en-US";
        $pointOfSale = $request->point_of_sales2;
        $journeyType = "round-trip";
        $cabinClass = $request->cabin;
        $date_round = $request->daterange_round;
        // $date_round = date('m-d-Y', strtotime($request->daterange_single));
        $date =  $request->daterange_round;
        $date1 =  $request->daterange_round_two;

        $date = date('m-d-Y', strtotime($date));
        $date1 = date('m-d-Y', strtotime($date1));

        $promoCode=$request->promo_code;
        // return $date;
        if($request->has('flexible_date')){
            $url_bgdx_booking =
            'https://booking.biman-airlines.com/dx/BGDX/#/matrix?'
            .''.'journeyType='.$journeyType
            .''.'&locale='.$locale 
            .''.'&ADT='.$ADT 
            .''.'&C11='.$CHD
            .''.'&INF='.$INF 
            .''.'&origin='.$origin
            .''.'&destination='.$destination
            .''.'&date='.$date
            .''.'&date1='.$date1
            .''.'&origin1='.$destination
            .''.'&destination1='.$origin
            .''.'&promoCode='.$promoCode 
            .''.'&class='.$cabinClass
            .''.'&pointOfSale='.$pointOfSale;
        }else{
            $url_bgdx_booking =
            'https://booking.biman-airlines.com/dx/BGDX/#/flight-selection?'
            .''.'journeyType='.$journeyType
            .''.'&locale='.$locale 
            .''.'&ADT='.$ADT 
            .''.'&C11='.$CHD
            .''.'&INF='.$INF 
            .''.'&origin='.$origin
            .''.'&destination='.$destination
            .''.'&date='.$date
            .''.'&date1='.$date1
            .''.'&origin1='.$destination
            .''.'&destination1='.$origin
            .''.'&promoCode='.$promoCode 
            .''.'&class='.$cabinClass
            .''.'&pointOfSale='.$pointOfSale;
        }
        
        if($request->source2 == 'amobile' ){
            $url_bgdx_booking .= '&source=amobile';
        }

        // return    $url_bgdx_booking;
        // 'https://booking.biman-airlines.com/dx/BGDX/beta#/flight-selection?journeyType=round-trip&activeMonth=01-20-2022&locale=en-US&awardBooking=false&origin=DAC&destination=CGP&class=Economy&ADT=1&CHD=0&INF=0&date=01-20-2022&origin1=CGP&destination1=DAC&date1=01-22-2022&pointOfSale=BD&execution=ca270f12-233c-49f5-a25e-a1e7f99800de'
        // 'https://booking.biman-airlines.com/dx/BGDX/beta#/flight-selection?journeyType=one-way&locale=en-US&ADT=1&CHD=0&INF=&origin=CGP&destination=DAC&date=01-24-2022&date1=01-21-2022&promoCode=&class=&pointOfSale=BD&execution=0655efc7-39c8-4a84-be1c-e72209db9184'
        // $url_bgdx_booking = 'https://booking.biman-airlines.com/dx/BGDX/beta#/flight-selection?journeyType=one-way&awardBooking=false&origin=DAC&destination=CGP&class=Economy&ADT=1&CHD=0&INF=0&date=01-21-2022&pointOfSale=BD';
        
        return Redirect::to($url_bgdx_booking);
    }


    public function flightMulticity(Request $request)
    {
        //https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/flight-selection?
        //journeyType=multi-city&awardBooking=false
        //&origin=DAC&destination=CGP&class=Economy&ADT=1&CHD=0&INF=0&date=02-08-2022
        //&origin1=CGP&destination1=CXB&date1=02-09-2022
        //&origin2=CGP&destination2=ZYL&date2=02-10-2022&pointOfSale=BD
        // return $request;
        $url_bgdx_booking =
            'https://booking.biman-airlines.com/dx/BGDX/#/flight-selection?';

        $ADT = $request->adult_number;
        $CHD = $request->child_number;
        $INF = $request->infants_number;
        $journeyType = "multi-city";
        $awardBooking='false';
        $origin = $request->depart;
        $destination = $request->arriv;
        $date = date('m-d-Y', strtotime($request->daterange_multi));
        $origin1 = $request->depart1;
        $destination1 = $request->arriv1;
        $date1 = date('m-d-Y', strtotime($request->daterange_single1));
        $cabinClass = "Economy";

        $url_bgdx_booking =
            'https://booking.biman-airlines.com/dx/BGDX/#/flight-selection?'
            .''.'journeyType='.$journeyType
            .''.'&awardBooking='.$awardBooking
            .''.'&origin='.$origin
            .''.'&destination='.$destination
            .''.'&class='.$cabinClass
            .''.'&ADT='.$ADT 
            .''.'&C11='.$CHD
            .''.'&INF='.$INF 
            .''.'&date='.$date
            .''.'&origin1='.$origin1
            .''.'&destination1='.$destination1
            .''.'&date1='.$date1;

        if($request->has('depart2')){
            $origin2 = $request->depart2;
            $destination2 = $request->arriv2;
            $date2 = date('m-d-Y', strtotime($request->daterange_single2));

            $url_bgdx_booking = $url_bgdx_booking
            .''.'&origin2='.$origin2
            .''.'&destination2='.$destination2
            .''.'&date2='.$date2;

            if($request->has('depart3')){
                $origin3 = $request->depart3;
                $destination3 = $request->arriv3;
                $date3 = date('m-d-Y', strtotime($request->daterange_single3));

                $url_bgdx_booking = $url_bgdx_booking
                .''.'&origin3='.$origin3
                .''.'&destinatio3='.$destination3
                .''.'&date3='.$date3;
            }
        }


        $locale = "en-US";
        if($request->has('point_of_sales')){
            $pointOfSale = $request->point_of_sales;
        }else{
            $pointOfSale = "BD";
        }
        
        $promoCode=$request->promo_code;

        $url_bgdx_booking = $url_bgdx_booking
                .''.'&pointOfSale='.$pointOfSale
                .''.'&promoCode='.$promoCode;

        if($request->source3 == 'amobile' ){
            $url_bgdx_booking .= '&source=amobile';
        }
        // return    $url_bgdx_booking;
        
        return Redirect::to($url_bgdx_booking);
    }

    public function manageBooking(Request $request)
    {
        // https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/myb?pnr=KIJMTD&lastName=ROY&locale=en-US
        $request->validate([
            'confirmationPNR' => 'required|max:200',
            'lastName' => 'required|max:200',
        ]);

        $confirmationPNR = $request->confirmationPNR;
        $lastName = $request->lastName;

        $url_manage_booking = 
        'https://booking.biman-airlines.com/dx/BGDX/#/myb?'
        .''.'pnr='.$confirmationPNR
        .''.'&lastName='.$lastName
        .''.'&locale=en-US';
        
         if($request->source4 == 'amobile' ){
            $url_manage_booking .= '&source=amobile';
        }

        // return $url_manage_booking;
        return Redirect::to($url_manage_booking);
    }

    public function flightStatusRoute(Request $request)
    {
        // return $request;
        // https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/flight-status?
        // origin=DAC&destination=LHR&date=02-03-2022&searchType=ROUTE&redirection=true&airlineCode=BG&journeyType=one-way
        
        $request->validate([
            'departureFlightStatus' => 'required|max:200',
            'arrivalFlightStatus' => 'required|max:200',
            'flightStatusDate' => 'required|max:200',
        ]);
        
        $departureFlightStatus = $request->departureFlightStatus;
        $arrivalFlightStatus = $request->arrivalFlightStatus;
        $flightStatusDate = $request->flightStatusDate;

        $url_manage_booking = 
        'https://booking.biman-airlines.com/dx/BGDX/#/flight-status?'
        .''.'origin='.$departureFlightStatus
        .''.'&destination='.$arrivalFlightStatus
        .''.'&date='.$flightStatusDate
        .''.'&searchType=ROUTE&redirection=true&airlineCode=BG&journeyType=one-way';

        // return $url_manage_booking;
        return Redirect::to($url_manage_booking);
    }

    
    public function flightStatusFlightno(Request $request)
    {
        // return $request;
        // https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/flight-status?
        //flightNumber=4039&date=02-05-2022&searchType=FLIGHT_NUMBER&redirection=true
        //&airlineCode=BG&journeyType=one-way&origin=DAC&destination=ZYL
        $request->validate([
            'flight_no' => 'required|max:200',
            'departure_date' => 'required|max:200',
        ]);

        $flight_no = $request->flight_no;
        $departure_date = $request->departure_date;

        $url_manage_booking = 
        'https://booking.biman-airlines.com/dx/BGDX/#/flight-status?'
        .''.'flightNumber='.$flight_no
        .''.'&date='.$departure_date
        .''.'&searchType=FLIGHT_NUMBER&redirection=true&airlineCode=BG&journeyType=one-way';

        // return $url_manage_booking;
        return Redirect::to($url_manage_booking);
    }

    public function flightSchedule(Request $request)
    {
        // return $request;
        // https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/flight-schedule?
        //origin=DAC&destination=LHR&date=03-04-2022&journeyType=one-way
        $request->validate([
            'departureFlightSchedule' => 'required|max:200',
            'arrivalFlightSchedule' => 'required|max:200',
            'daterange_single_status' => 'required|max:200',
        ]);

        $departureFlightSchedule = $request->departureFlightSchedule;
        $arrivalFlightSchedule = $request->arrivalFlightSchedule;
        $daterange_single_status = $request->daterange_single_status;

        $date = date('m-d-Y', strtotime($daterange_single_status));

        $url_manage_booking = 
        'https://booking.biman-airlines.com/dx/BGDX/#/flight-schedule?'
        .''.'&origin='.$departureFlightSchedule
        .''.'&destination='.$arrivalFlightSchedule
        .''.'&date='.$date
        .''.'&journeyType=one-way';

        // return $url_manage_booking;
        return Redirect::to($url_manage_booking);
    }

    public function checkinBookingReference(Request $request)
    {

        $request->validate([
            'bookingPNRCheckin' => 'required|max:200',
            'lastNameCheckin' => 'required|max:200',
        ]);

        $bookingPNRCheckin = $request->bookingPNRCheckin;
        $lastNameCheckin = $request->lastNameCheckin;

        $url_checkin_reference = 
        'https://checkin.biman-airlines.com/dx/BGCI/#/check-in/deep-link?deepLink=true&'
        .''.'locale=en-US'
        .''.'&recordLocator='.$bookingPNRCheckin
        .''.'&lastName='.$lastNameCheckin ;

        return Redirect::to($url_checkin_reference);
    }

    public function checkinTicket(Request $request)
    {

        $request->validate([
            'checkinTicketNumber' => 'required|max:200',
            // 'firstNameCheckinTicket' => 'required|max:200',
            'lastNameCheckinTicket' => 'required|max:200',
        ]);

        $checkinTicketNumber = $request->checkinTicketNumber;
        // $firstNameCheckinTicket = $request->firstNameCheckinTicket;
        $lastNameCheckinTicket = $request->lastNameCheckinTicket;

        $url_checkin_ticket = 
        'https://checkin.biman-airlines.com/dx/BGCI/#/check-in/deep-link?deepLink=true&'
        .''.'locale=en-US'
        .''.'&virtualCouponRecordNumber='.$checkinTicketNumber
        .''.'&lastName='.$lastNameCheckinTicket ;
        // .''.'&firstName='.$firstNameCheckinTicket ;

        return Redirect::to($url_checkin_ticket);
    }

}
