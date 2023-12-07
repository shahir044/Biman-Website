@extends('header-footer')

@section('content')

<!-- ================================
    START FAQ AREA
================================= -->
<section class="faq-area section-bg padding-bottom-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Frequently Asked Questions</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-6 card pt-3" id="ticketing">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Ticketing</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How to purchase ticket / book seats?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                <li>To Purchase a Ticket Online:
                                    Please visit <a href="{{url('/')}}" target="_blank" class="faq-links">here</a>.
                                </li>
                                <li>
                                To Purchase a Ticket Offline please follow the steps below:
                                <br>
                                Step-1: Contact/visit Biman Sales Counter or Biman Call Centre or Biman authorized Travel agent.
                                <br>
                                Step-2: Biman or Travel Agent representative will search and book the flight.
                                <br>
                                Step-3: Make payment for ticket by using your credit card or by mobile banking (bKash/Nagod).
                                <br>
                                Step-4: Receive the purchased ticket from Biman or Travel Agent representative.
                                </li>
                                </li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How to change my journey date online? <span class="badge bg-2 text-white">New</span>
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                <li>To change journey date from online:
                                    Please click <a href="{{url('/#manage-booking')}}" target="_blank" class="faq-links">here</a>.
                                </li>
                                <li>
                                Step-1: In home page <a href='{{url('/#manage-booking')}}'>www.biman-airlines.com</a> click on "Modify Trip" option. Provide your "SIX Letter Airlines PNR/Booking Reference/Reservation Code" and "Last Name" mentioned in your ticket. Then click on "Search" button.
                                <br>
                                Step-2: If you have provided the information of step-1 correctly a "Manage Your Booking Page" will appear. Then click on "EXCHANGE" button.
                                <br>
                                Step-3: Select your required flight date and proceed.
                                </li>
                                </li>For further info contact: ibebiman@bdbiman.com</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                After booking, how do I get my ticket?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>After issuance of ticket online, reservation copy along with ticketing details will be forwarded to the email account provided at the time of making reservation. Please make a printout of the ticket copy to show at airport as a proof of journey.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How can I use my credit card to book a ticket for someone else?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Ticket can be purchased using one’s credit card for other person to travel with. In case of issuance this type of ticket, the card holder has to fill up the <a href=" {{ url('/termsConditions#Authorization-letter-from-Credit-Debit-Card-holder') }} " target="_blank" class="faq-links">Credit Card Authorization Form</a> and give a copy to the passenger to carry with to show at check-in point. For more info visit: <a href="{{ route('termsConditions')}}" target="_blank" class="faq-links">terms and conditions</a></li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What is the time limit of my booking?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>The present reservation system does not allow ticket time limit. Once the booking is in progress, confirmation of payment in different mode completes the whole ticketing process. Making delay in completing reservation process will end up with “Session expiry” mode.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                When is a passenger considered No-show on a booking ?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>If a passenger fails to report on-time to Biman Check-in counter within specified reporting time, the passenger will be considered as No-show for the flight, ticket issued for.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can I request for seat confirmation on a waitlist segment?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Seat Confirmation in waitlist segment is not allowed.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can I request for a special meal, wheelchair, or bassinet seat?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>A request for special meal, wheelchair or bassinet can be done at the time of making reservation (subject to availability).</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Who can occupy preferred seats located near emergency exit doors?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Emergency Exit seat rows seat selection is unavailable for online seat reservation due to flight safety issue.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Do I need to reconfirm bookings?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Once ticket is been issued “Reconfirmation” is not necessary until/ unless the passenger intends to change travel date. For some exceptional cases (i.e. VVIP Flight/ canceled flight) passengers are advised to contact Biman Sales Counters/ Call Center for reconfirmation of booking.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can I revalidate my ticket?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>For revalidation of issued ticket, please contact Biman Sales Counter or Call Center.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How can I process OK to board VISA messages?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Please contact nearest Biman Sales Counters with all travel documents (i.e. Passport, Visa Papers, ticket & necessary papers – if any) to process OK to Board message in reservation details.</li></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- end faq-item -->
            </div>
            <div class="col-lg-6 card pt-3" id="group_booking">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Group Booking</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                       <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How to request for a group booking with Biman?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                Please contact nearest Biman Sales Counter <a href="{{url('contactus?#domestic')}}" target="_blank" class="faq-links">Domestic</a>, <a href="{{url('contactus?#global-office')}}" target="_blank" class="faq-links">International</a> for Group Booking with Biman. 
                                </li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What basic information does Biman require in order to assist on group booking requests?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Please contact Biman Sales Counter   with passenger list [please specify number of passenger, Adult, Child, Infant with correct name/ date of birth (for child & infant)], travel date-time, group size etc. </li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                               Is group deposit refundable?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>In case of refund, applicable refund charge/ fare amount will be deducted as per group fare approval/ fare rule.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Are group tickets refundable?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Group tickets are refundable (subject to approved group fare policy - applicable cancelation/ refund charge will be deducted as per fare rule).</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                               Is it possible to make a reservation change on a group ticket?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>In case of change of reservation date, change can be done with applicable date change fee/ difference of fare (subject to approved group fare policy) from nearest Biman Sales Counter.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                If some passengers from a group want to change their travel date, is it possible?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>If some passenger wants to change travel date (subject to approved group fare policy - applicable date change fee/ revalidation charge has to be paid as per fare rule) he/ she has to contact nearest Biman Sales Counter/ Call Center.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                When you say group, can it be a mixture of Adult, Children and Infant? Will the group fare be applicable to all?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Approved group fare will be applicable for Adult and Child only. Generally two Childs are counted as one adult for group size calculation.
                                </li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Does Biman provide excess baggage for groups?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Excess baggage will be allowed as per Group Fare approval with special/ market rate (subject to availability of aircraft capacity).</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can a group request for special seat assignment?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Special seat assignment depends on Group Size along with passenger type. Special seat assignment request can be accepted as per availability of seats requested for.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can a group request for special meal?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Special meal request can be accepted as per availability of special meal.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can a group request for a dedicated check-in counter at the airport?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>A dedicated check-in counter can be arranged as per prior request (subject to availability of check-in counter & staff).</li></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 card pt-3">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Cancellation & Refunds</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                       <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can a passenger change or cancel his/her flight reservation?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                After confirmation of ticket issuance, ticket can be changed or canceled. For date change, please contact Biman Sales Counter or Call Center. For online (<a href="{{url('https://www.biman-airlines.com/')}}" target="_blank" class="faq-links"> www.biman-airlines.com </a>), issued ticket refund, please submit refund request <a href="{{route('refund-request')}}" target="_blank" class="faq-links">here</a>. Please Note: for refund/ change - 
                                <li>
                                a.	Ticket issued from Biman Sales Counter, Call Center has to be processed from Biman Sales Counter/ Call Center 
                                </li>
                                <li>
                                b. Ticket issued from Travel Agent/ Online Travel Agent, please contact with concern travel agent for exchange/ refund. 
                                </li> 
                                </li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How can I process name changes and corrections?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Please book flight as per name(s) written on Passport, NID. After completion of reservation, name cannot be changed, amended or corrected. Ticket issued with wrong name are advised to process cancel/ refund (charge applicable) and issue fresh ticket with correct name to avoid mishandle/ denied boarding at airport check-in point.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can I change seat and meal preferences after completing the booking?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>After completing the booking, only seat preferences can be changed (subject to availability).</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How to check the fare difference while making changes to an existing booking?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>In case of ticket exchange, applicable difference of fare (s), taxes, charges will be informed by the concern counter staff at Biman Sales Counter/ Call Center.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How to check the refund calculation of a partially used ticket?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>For refund of partially used tickets, one-way market fare with applicable taxes & refund charges will be deducted as per fare rule.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Where can I find refund policy?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Please visit <a href=" {{ url('termsConditions#Refund-and-Change-Policy') }} " target="_blank" class="faq-links">here</a> to see the refund policy.</li></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 card pt-3" id="payment">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Payment</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What payment methods are accepted?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Currently you can pay with credit card (<i class="las la-credit-card"></i>), visa card (<i class="lab la-cc-visa"></i>), master card (<i class="lab la-cc-mastercard"></i>), bKash & Nagad.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Where can I see the payment policy for my booking?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>To see the payment policy please visit: <a href=" {{ url('termsConditions#Credit-Debit-Card-Payment-Condition') }} " target="_blank" class="faq-links">payment policy</a></li></li>
                            </ul>
                        </li>
                       

                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
           
            <div class="col-lg-6 card pt-3" id="children">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Children, Infants & Expectant Mothers</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How does Biman help an Unaccompanied Minor (Child) at check-in?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                Handling Facilities for Unaccompanied Minor (Child) is available both at arrivals and departures with prior request during reservation and fulfillment of traveling conditions.
                                                            
                                <br><br>
                                
                                <b>Contact For Hazrat Shahjalal International Airport, Dhaka.</b>
                                <br>
                                On Duty Station Manager 
                                (SM)  (+88) 01777715533
                                <br>
                                Passenger Controller  +88028901548
                                <br>
                                Station Manager of <a href="{{url('contactus?#domestic')}}" target="_blank" class="faq-links">Domestic</a> And <a href="{{url('contactus?#global-office')}}" target="_blank" class="faq-links">Foreign Stations</a>
                                </li>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Do I need to purchase a seat for an infant ?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Generally infant tickets are issued without seat and if necessary, infant tickets can be purchased with seat (subject to availability of seats with applicable fare) at the time of making reservation.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What are the instructions for air traveling Expectant Mothers should follow?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>1.	Expectant mothers are not normally incapacitated passengers. Pregnant Females will be accepted for travel. From 26th to 32nd Week of pregnancy, they need to carry “Fit for Fly” Medical Certificate given from Registered Doctors.</li>
                                <li>2.	From 33rd weeks of pregnancy, Expectant Mothers shall not be allowed to travel.
                                </li>
                                <li>
                                    3.	Medical Certificate shall remain valid within 72 hours of commencing of the flight.
                                </li></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 card pt-3" id="animal">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Carriage of Animals</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How does a passenger transport pets or livestock?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26">
                                <li>
                                On flights within Bangladesh, live animals are not carried in any Aircraft.
                                </li>
                                <li>
                                On international flights for The U.K., pets are not permitted as accompanied baggage and must be sent as Cargo. Health and vaccination certificates must be in order for ultimate destination including en-route transit points. For more detail <a href="{{url('baggageAll#list-item-13')}}">click here</a></li>  
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                Can a service dog travel in the cabin with the passenger?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>Pets are not permitted as accompanied baggage in the cabin with the passenger and must be sent as cargo.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                How much does it cost to travel with a pet?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                The charge will be at the rate of existing excess baggage for the live animal including the weight of the container irrespective of the free baggage allowance of passenger.</li></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What kind of travel container should a passenger have for his/her pet?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                Live animals should be carried in escape proof containers of proper size with ample ventilation. The container must be inedible i.e. not made of chewable material.</li></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 card pt-3" id="dis_assist">
                <div class="faq-item mb-5">
                    <h3 class="title font-weight-bold">Disability & Assistance</h3>
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                What assistance does Biman provide for passengers with disability?
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26"><li>
                                If passengers require any special assistance to their departure gates, we will be happy to escort you to the gate. Please contact your departure airport or a local Biman office during reconfirmation to check if check-in times materially differ from our suggested three hours. If passengers require Wheel Chair, the facilities are available on both arrivals and departures with prior request at the time of reservation which is subject to payment.</li></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end faq-item -->
            </div><!-- end col-lg-6 -->
            
          <!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end faq-area -->
<!-- ================================
    END FAQ AREA
================================= -->

<!-- ================================
    STARTS FAQ AREA Logos
================================= -->
<section class="faq-area section-bg padding-top-50px  text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#ticketing" class="d-block">
                        <i class="las la-money-bill faq-icons"></i>
                        <span class="d-block info__title">How To Buy Ticket</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#group_booking" class="d-block">
                        <i class="las la-users faq-icons"></i>
                        <span class="d-block info__title">Group Booking</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#dis_assist" class="d-block">
                        <i class="las la-wheelchair faq-icons"></i>
                        <span class="d-block info__title">Disability & Assistance</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('travel-advisory') }}" class="d-block">
                        <i class="las la-plane faq-icons"></i>
                        <span class="d-block info__title">Travel Advisory</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#animal" class="d-block">
                        <i class="las la-paw faq-icons"></i>
                        <span class="d-block info__title">Carriage of Animals</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#children" class="d-block">
                        <i class="las la-user-astronaut faq-icons"></i>
                        <span class="d-block info__title">Children, Infants & Expectant Mothers </span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="#payment" class="d-block">
                        <i class="lab la-cc-mastercard faq-icons"></i>
                        <span class="d-block info__title">Payment</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('loyalty.home') }}" class="d-block">
                        <i class="las la-id-card faq-icons"></i>
                        <span class="d-block info__title">Biman Loyalty Club Membership</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END FAQ AREA logos
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-bg-2 bg-fixed padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Want to share your feedback</h2>
                    <p class="sec__desc text-white pt-1">We would love to hear from you</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="btn-box btn--box text-right">
                    <a href="{{url('contactus?#customer-feedback')}}" class="theme-btn border-0">Feedback</a>
                </div>
                <!-- end btn-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

@endsection

@section('page-specific-footer')

@endsection