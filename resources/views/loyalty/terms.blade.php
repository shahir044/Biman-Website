@extends('header-footer')

@section('header-extension')

@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-terms">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Terms & Conditions</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.tc')}}">Terms & Conditions</a></li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START JOB-DETAILS AREA
    ================================= -->
    <section class="job-details-area   section--padding" id="main-content">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 " id="sticky-sidebar" >
                    <div class="sidebar mb-0 sticky-top">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape  font-weight-bold">On this page</h3>
                            <ul class="list-items list--items list-group list-items-flush">
                                <li><span class="text-black mr-2 "><a href="#list-item-1" class="active" target="_self">General</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-2">Conditions of Enrollment</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-3">Virtual Membership Cards</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-4">Tier Benefits</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-5">Membership Responsibility</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-6">Termination</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-7">Accruals</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-8">Reward</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#upgrade">Upgrade</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-11">Retain Tier Status</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-12">Data Protection</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-13">Privacy</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#list-item-14">Definitions</a></span></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8" id="main">
                    <div class="form-box" id="list-item-1">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">General</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>The Biman Loyalty Club (The Club) is managed and operated by BIMAN BANGLADESH AIRLINES LTD. Participants in the program as an individual (hereinafter called Member) is subject to these Terms & Conditions, which may be changed by Biman Bangladesh Airlines Ltd from time to time without notice and shall be deemed to constitute acceptance by the member of such Terms & Conditions as amended from time to time.</li>
                                <li>These terms and conditions set out the contractual relationship between Biman Bangladesh Airlines and each individual member of the Biman Loyalty Club.</li>
                                <li>The Club is open to all individuals. Membership is not available to corporations or other legal entities.</li>

                                <li>Membership is accepted at the sole discretion of BIMAN BANGLADESH AIRLINES LTD and free of charge.</li>
                                <li>Virtual Membership cards remain the property of BIMAN BANGLADESH AIRLINES LTD and must be returned upon request.</li>
                                <li>Biman Bangladesh Airlines reserve the right to interpret, apply and communicate the Terms & Conditions as posted on website or any other printed materials. All decisions made by Biman Bangladesh Airlines shall be final and conclusive in each case.</li>

                                <li>BIMAN BANGLADESH AIRLINES LTD reserves the right to modify The Club structure, benefits or other features including these terms and conditions or to terminate the Club at any time upon reasonable notice where possible, and BIMAN BANGLADESH AIRLINES LTD will not be liable for any loss or damage resulting therefrom. Any use of The Club by a member will be deemed as acceptance of any amendment to these terms and conditions.</li>
                                <li>Upon joining or upgrading to a tier within The Club, members will receive a membership virtual card. When joining, members can refer to our online membership guide at <a href="https://www.biman-airlines.com/loyalty-club"> www.biman-airlines.com/loyalty-club </a> </li>
                                <li>The actual Biman Loyalty Club miles earned by a member are a percentage, based on class flown, of the categories used by the Club that are based on the Great Circle Distance in miles between origin airports and destination airports. For connecting flights that require a change of flight number, the sum of the Great Circle Distance of each segment will form the basis of the Club miles/sectors.</li>

                                <li>There is no minimum Club miles/sectors earned guarantee. Club miles/sectors earned are not affected by complimentary upgrades or involuntary downgrades.</li>
                                <li>The membership guide is incorporated as part of these terms and conditions and is deemed as part of the contract between BIMAN BANGLADESH AIRLINES LTD and a member.</li>
                                <li>Membership of the Club and membership virtual Cards are “not transferable” and may only be used by the Member.</li>

                                <li>A temporary Biman Loyalty Club Virtual Card is a card that carries a number only. This card is issued when you successfully enroll for membership through online.</li>
                                <li>Only the member named on the Biman Loyalty Club virtual card may use it. Cards are not transferable.</li>
                                <li>Miles are valid for two years from the date of transaction. Unused Biman Loyalty Club miles will expire at the end of the stated validity period.</li>


                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    <div class="form-box" id="list-item-2" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Conditions of Enrollment</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    To become a member, you must enroll online by completing the Loyalty Club Enrollment Form.
                                    <br>On successful enrolment you will receive an auto-generated password to your mailbox to operate or log-in your Biman Loyalty Club Membership Account. Members will be issued a membership number and virtual membership card. The use of this number/virtual card and associated benefits are deemed to be an acceptance of these terms and conditions and other Club terms and conditions that may be issued from time to time, both to the benefit of BIMAN BANGLADESH AIRLINES LTD as well as to the benefit of the Members.
                                </li>
                                <li>
                                    You are permitted to hold only one Biman Loyalty Club account. If you have more than one Biman Loyalty Club account, your accounts will be merged, and miles will be transferred into one account.
                                </li>
                                <li>
                                    Every enrollment has to have a unique e-mail address i.e. Two members within Biman Loyalty Club including children cannot use the same e-mail address.
                                </li>
                                <li>
                                    You should produce the Biman Loyalty Club virtual card or Biman Loyalty Club number at any time whilst travelling or otherwise utilizing any services at the request of BIMAN BANGLADESH AIRLINES LTD or a Biman Loyalty Club Partner.
                                </li>
                                <li>
                                    Membership Account with missing information or incomplete personal details will be considered Pending Account and will be closed within 12 months from the date of enrollment.
                                </li>
                                <li>
                                    You should add your Biman Loyalty Club number at time of booking or at check-in to ensure miles are credited automatically to your Biman Loyalty Club account.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD and Biman Loyalty Club Partners have the right to require you to produce your Biman Loyalty Club virtual card and quote your Biman Loyalty Club number at any time while booking, ticketing, travelling or claiming a Reward.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD shall not be liable to any member for any indirect or consequential loss, damage or expense of any kind whatsoever arising out of or in connection with the Club and/or the use of or the unavailability of facilities of The Club and/or the provision or the refusal to provide any benefits, whether such loss, damage or expense is caused by negligence or otherwise, and whether BIMAN BANGLADESH AIRLINES LTD have any control over the circumstances giving rise to the claim or not.
                                </li>
                                <li>
                                    In any event, subject to 1. above and any applicable limitation under the Warsaw Convention or under BIMAN BANGLADESH AIRLINES LTD's conditions of travel, the liability of BIMAN BANGLADESH AIRLINES LTD in contract, tort or otherwise with respect to any claim arising in respect of acts or omissions in operating The Club shall be limited to the value of the ticket being used by the member in connection with which the matter.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD will endeavor to ensure the availability of services of The Club when these are provided by partners but will not be liable for any loss arising from the failure by partners to provide such services. Where a member uses the services provided by partners, the partners' terms and conditions will apply and BIMAN BANGLADESH AIRLINES LTD will not be liable for any loss.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD confirms that it will operate the Club and provide the Club facilities with reasonable care and skill, however, BIMAN BANGLADESH AIRLINES LTD does not in any way warrant that the Club facilities and benefits will always be available, and all terms expressed or implied by statute or otherwise on the part of BIMAN BANGLADESH AIRLINES LTD are hereby excluded to the fullest extent permitted by law.
                                </li>
                                <li>
                                    The failure by BIMAN BANGLADESH AIRLINES LTD to exercise or enforce any rights herein contained shall not be deemed to be a waiver thereof nor shall it affect BIMAN BANGLADESH LTD's entitlement to take any subsequent action in respect of that right or of any other right.
                                </li>
                                <li>
                                    Should any provision of these terms and conditions be found by any court or administrative body of competent jurisdiction to be invalid or unenforceable, the invalidity or unenforceable of such provision shall not affect the other provisions of these terms and conditions. All provisions not affected by such invalidity or unenforceable shall remain in full force and effect.
                                </li>
                                <li>
                                    These terms and conditions and the relationship between BIMAN BANGLADESH AIRLINES LTD and each member are governed by the laws of Bangladesh. By using The Club each member submits to the non-exclusive jurisdiction of the courts of Bangladesh.
                                </li>
                                <li>
                                    Members agree to use all Club facilities with all reasonable care and attention and with due courtesy and respect to BIMAN BANGLADESH AIRLINES LTD staff and other Members.
                                </li>
                                <li>
                                    Biman Loyalty Club Partners, and the Terms and Conditions concerning their issuance of Biman Loyalty Club miles vary by partner and are subject to change from time to time. The up-to-date list of such partnerships and offers is as featured on the Biman Loyalty Club website.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may change or terminate Biman Loyalty Club Partners or modify partner agreements as it deems necessary from time to time and without advance notice to members.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD will honor miles only if they have been allocated and reported by a Biman Loyalty Club Partner prior to its withdrawal from Biman Loyalty Club.
                                </li>
                                <li>
                                    Your information which is held by Biman Loyalty Club includes the information that you or a Biman Loyalty Club Partner have provided to Biman Loyalty Club through your enrollment and for any future communication.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    <div class="form-box " id="list-item-3">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Virtual Membership Cards</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    The validity of a Virtual Membership Card is shown on the Card subject to other terms &amp; conditions herein provided.
                                </li>
                                <li>
                                    A Virtual Membership Card is not a credit card. It does not confer upon the Member any right or benefit other than as laid down in these Terms &amp; Conditions.
                                </li>
                                <li>
                                    Biman Loyalty Club Green Virtual Card has no expiry date.
                                </li>
                                <li>
                                    Biman Loyalty Club Silver and Gold virtual cards both have expiry date. The Biman Loyalty Club’s Silver and Gold Virtual Cards become null and void after the expiry date stated on the Card.
                                </li>
                                <li>
                                    A member cannot claim any benefits unless:
                                    <ul class="list-items list-items-bullet">
                                        <li >
                                            His/her status is changed by the system automatically which will be reflected in his/her Members Account. This status change can also be viewed by member by log-in into Account.
                                        </li>
                                        <li>
                                            May present his/her Virtual Card at Check-In/Sales Counter while availing the benefit or any service. Virtual Membership Card will be available in the Biman Mobile Apps or in Biman website by log-in into the membership account.
                                        </li>
                                        <li>
                                            BIMAN BANGLADESH AIRLINES Ltd. has the right to refuse any benefits/service to its BLC members for non-compliance of above rule.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    <div class="form-box" id="list-item-4">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Tier Benefits</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    There are three Tiers in Biman Loyalty Club Program such as a) GREEN, b) SILVER and c) GOLD and member’s entitlement are different in each Tier Level. The Tier Benefits are subject to and member s entitlement are different in each Tier Level. The Tier Benefits are subject to change as per requirement of Biman Bangladesh Airlines LTD and airlines has the right to do so when required without giving any notice to members. Current details will be found in the website. Please see the details at Loyalty Club Member Dashboard or you may check by Log-in into your Membership Account.
                                </li>
                                <li>
                                    You can progress from Biman Loyalty Club Green to Silver and from Silver to Gold.
                                    <br>To achieve Silver Tier:
                                    <ul class="list-items list-items-bullet">
                                        <li> Earn 50000 miles in a calendar year on any Biman operated flights OR </li>
                                        <li> Travel 20 (Twenty) times (minimum 10 International sectors) in a calendar year on any Biman operated flights </li>
                                    </ul>
                                    <br>To achieve Gold Tier:
                                    <ul class="list-items list-items-bullet">
                                        <li> Earn 75000 miles in a calendar year on any Biman operated flights OR </li>
                                        <li> Travel 35 (Thirty-Five) times (minimum 20 International sectors) in a calendar year on any Biman operated flights </li>
                                    </ul>
                                </li>
                                <li>
                                    All Benefits are subject to availability.
                                </li>
                                <li>
                                    Additional baggage facilities will not be applicable to Biman Loyalty Club Redemption Ticket which is issued against reward miles from member’s account.
                                </li>
                                <li>
                                    Tier benefits and privileges provided to a member at each Membership Tier may be changed by Biman Loyalty Club at any time without notice.
                                </li>
                                <li>
                                    Gold members are entitled to an additional 20 kg and Silver members to an additional 10 kg over the baggage allowance shown on the Revenue Ticket only on Biman Bangladesh Airlines‟ flights and not on connecting airlines or BIMAN BANGLADESH AIRLINES LTD code share flights operated by other carriers. All checked bags are subject to existing weight allowance regulations applicable to BIMAN BANGLADESH AIRLINES LTD, Pay-Load restriction to the departing aircraft or in the country where your flight starts.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD will try to provide additional baggage facilities to its Silver and Gold Members with reasonable effort subject to Pay Load availability before departure of the flight and as such BIMAN BANGLADESH AIRLINES LTD has the right to refuse giving additional baggage facilities in case of Pay-Load restriction or any lawful reason.
                                </li>
                                <li>
                                    Some Services (such as the Lounge at Dhaka Airport) will be provided by BIMAN BANGLADESH AIRLINES LTD and others (such as Lounges at some airports) by Service Partners. BIMAN BANGLADESH AIRLINES LTD will use reasonable endeavors to ensure the availability of Services provided by BIMAN BANGLADESH AIRLINES LTD Service Partners but will not be liable for any Loss arising from failure by BIMAN BANGLADESH AIRLINES LTD Service Partners to provide such Services except where such failure is caused by BIMAN BANGLADESH AIRLINES LTD.
                                </li>
                                <li>
                                    Upgrade to a Biman Loyalty Club Gold or Silver tier depends on the miles earned in a calendar year. This applies only to miles earned with flight activities operated by BIMAN BANGLADESH AIRLINES LTD.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may upgrade, downgrade or retain your membership tier at its discretion.
                                </li>
                                <li>
                                    Across the BIMAN BANGLADESH AIRLINES LTD network, lounge access is available only for Biman Loyalty Club Silver and Gold members at no cost. If you are a Biman Loyalty Club Gold or Silver member, you can invite a guest to the lounge facilities, provided they are travelling on a BIMAN BANGLADESH AIRLINES LTD flight at the same time.
                                </li>
                                <li>
                                    Guaranteed seat reservation in Economy or Business Class is available to Gold members only holding a full fare Economy Class ticket booked in ‘Y’ class or full fare Business Class ticket booked in ‘J’ class. A guaranteed seat will be confirmed within 48 hours. The guaranteed seat reservation request must be made through e-mail at Bimanloyaltyclub@bdbiman.com at least 72 hours prior to flight departure.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may discontinue relationships with BIMAN BANGLADESH AIRLINES LTD Service Partners at any time and will give you such notice of any discontinuance as is reasonably practical in the circumstances.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-5">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Membership Responsibility</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    Members are responsible for keeping BIMAN BANGLADESH AIRLINES LTD up to date as to their correct personal details. BIMAN BANGLADESH AIRLINES LTD is not responsible for any loss as a result of a member's failure to notify of a change in address and e-mail (for any notification by email).
                                </li>
                                <li>
                                    Members will be issued with a confidential password. Members must ensure that this number is not disclosed to any unauthorized parties. BIMAN BANGLADESH AIRLINES LTD cannot be held liable for the consequences of any unauthorized disclosure of the Password by members or unauthorized use of the password.
                                </li>
                                <li>
                                    You must present your Biman Loyalty Club virtual card to be admitted to the lounge as well as a valid boarding pass for a BIMAN BANGLADESH AIRLINES LTD operated flight. If you fail to produce any of these items, you may not get the complimentary invitation to the lounge.
                                </li>
                                <li>
                                    If you have recently qualified to become a Biman Loyalty Club Silver or Gold member, you may use a copy of the tier upgrade email sent to you to access the Lounge for the period mentioned on the letter.
                                </li>
                                <li>
                                    It is your responsibility to be aware of both the Biman Loyalty Club miles in your account and their validity. This can be checked at any time online by accessing your Loyalty Club Member Dashboard.
                                </li>
                                <li>
                                    You are responsible for obtaining all necessary travel documents (including but not limited to insurance and visa) for a Flight reward. It is the member’s responsibility to obtain all necessary Visas/Permission for his/her travel.
                                </li>
                                <li>
                                    Member must present Virtual Card when asked by concerned Sales or Check-in staff and failing to do so may result to refusal of getting stated benefits of Biman Loyalty Club.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-6">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Termination</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">


                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    Members may terminate their membership at any time by giving written notice to BIMAN BANGLADESH AIRLINES LTD and returning their membership card. All Biman Loyalty Club miles credited but not exchanged for Rewards, as well as any un-utilized Rewards, will be cancelled as soon as you cease to be a member.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may forthwith terminate the membership of a member and the right of a Member to use his/her membership card and use The Club facilities, if a Member commits misconduct or fraud, misuse the Biman Loyalty Club program benefits and awards, misuse The Club, its facilities and services or fails to follow these terms and conditions. In such circumstances, BIMAN BANGLADESH AIRLINES LTD shall simultaneously cancel all Club miles/sectors of the Member.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may also terminate the Club membership of a member at its complete discretion and in such circumstances will provide the member with 3 to 6-month notice of termination. Upon expiry of the notice period, all unused miles/sectors will be cancelled. Without prejudice to the foregoing, BIMAN BANGLADESH AIRLINES LTD may alternatively at its discretion forthwith terminate or suspend a member’s right to use specified facilities, benefits or services of the Club, with the member retaining his/her overall membership in The Club.
                                </li>
                                <li>
                                    Termination of membership for whatever reason shall be without prejudice to the accrued rights and remedies of BIMAN BANGLADESH AIRLINES LTD and the member as at the date of termination.
                                </li>
                                <li>
                                    Upon the death of a member, the membership account will be closed and all outstanding Club miles/sectors will be cancelled.
                                </li>
                                <li>
                                    The personal data supplied by members are required for the operation of the Club, delivery of associated benefits and services, ongoing research and program development and to communicate news and information to members. Failure by members to provide or keep required data up to date may result in BIMAN BANGLADESH AIRLINES LTD being unable to provide membership of the Club and associated benefits. In such cases, membership may be terminated.
                                </li>
                                <li>
                                    If BIMAN BANGLADESH AIRLINES LTD terminates or suspends Biman Loyalty Club, members will be able to redeem miles during the notice period in accordance with these Terms and Conditions, except where BIMAN BANGLADESH AIRLINES LTD is ceasing to operate an airline business and/or has gone into liquidation or other form of administration, in which case BIMAN BANGLADESH AIRLINES LTD may terminate or cancel any Awards or Benefits immediately without notice.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD may in its absolute discretion suspend, cancel or terminate your membership or your accumulated Biman Loyalty Club miles at any time and reserves the right to seek compensation for Rewards utilized if, in BIMAN BANGLADESH AIRLINES LTD's sole judgment, that you have engaged in willful misconduct or breached any of the rules governing Biman Loyalty Club.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD gives no warranty as to the continuing availability of Biman Loyalty Club. BIMAN BANGLADESH AIRLINES LTD may terminate or suspend Biman Loyalty Club at any time. BIMAN BANGLADESH AIRLINES LTD will give at least six-month notice to members of such termination or suspension, except if BIMAN BANGLADESH AIRLINES LTD ceases to operate an airline business in which case Biman Loyalty Club will cease immediately.
                                </li>
                            </ul>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-7">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Accruals</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <ul class="list-items list-items-bullet loyal-ul">

                                <li>
                                    Miles are based unit of credits given to a Member for his/her transaction/travel with Biman Bangladesh Airlines or its partners under Biman Loyalty Club Program. Companies with whom members can earn and/or redeem miles are known as program partners and Biman Bangladesh Airlines may, at its own discretion, add or remove any company as a program partner.
                                </li>
                                <li>
                                    To earn miles, you must quote your valid Biman Loyalty Club number (Membership number) at reservation or check-in for a qualifying flight and at the time of purchase when transacting with a Biman Loyalty Club Partner. Biman Loyalty Club miles are credited upon completion of a qualifying flight on BIMAN BANGLADESH AIRLINES LTD or through the purchase of a qualifying product or service from one of the Biman Loyalty Club Partners.
                                </li>
                                <li>
                                    Miles for flight activities with BIMAN BANGLADESH AIRLINES LTD will take up to 7 working days to be credited to your account. Miles for Partner activities could take up to 6 weeks to be added to your account.
                                </li>
                                <li>
                                    Miles are valid for a period of 2 years.
                                </li>
                                <li>
                                    Miles can be earned for Partner activities as specified in the Partner pages on the website.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD reserves the right to make Biman Loyalty Club miles and promotional offers available to selected members based on flight activity, geographic location, program participation or any other criteria deemed appropriate for such promotion.
                                </li>
                                <li>
                                    Neither Biman Loyalty Club miles nor the Rewards offered by the Club have any convertible cash value.
                                </li>
                                <li>
                                    Biman Loyalty Club miles are valid for a period of two years from the date of transaction. Unused Biman Loyalty Club miles will expire at the end of the stated validity period.
                                </li>
                                <li>
                                    Any expired Biman Loyalty Club miles will not be re-credited.
                                </li>
                                <li>
                                    Missing miles claim, for existing members, must be requested online through the Biman Loyalty Club website or through e-mail request at bimanloyaltyclub@bdbiman.com within 90 days of the date on which the transaction/travel took place.
                                </li>
                                <li>
                                    For new members, past transactions made within 90 days from the date of enrollment are valid for mileage earning. These miles can be retro-credited into member’s account upon request from the member at Bimanloyaltyclub@bdbiman.com within 30 days from the date of enrollment. Past transactions that are over 90 days prior to the enrollment date are not eligible for retro-credit. BIMAN BANGLADESH AIRLINES LTD may request scan copy of tickets, boarding passes and Passport while processing a missing miles claim.
                                </li>
                                <li>
                                    For existing members, missing miles must be claimed within 90 days from the date of actual travel and BIMAN BANGLADESH AIRLINES LTD will not credit any missing miles after such period.
                                </li>
                                <li>
                                    In the event you are transferred to an alternative flight due to unforeseen circumstances, you will earn Biman Loyalty Club miles as per the original flight details and not as per the revised route flown.
                                </li>
                                <li>
                                    The following options do not qualify to earn Biman Loyalty Club miles and cannot be used to avail of Biman Loyalty Club benefits: All types of Free travel tickets, Industry and Agent discounted tickets, Chartered flights, Flight Rewards, specially discounted diplomat and government tickets or highly discounted tickets (booked in non-revenue booking classes) by BIMAN BANGLADESH AIRLINES LTD or any other airlines.
                                </li>
                                <li>
                                    Miles may only be earned for one frequent flyer Program for each flight or transaction unless otherwise stated in Biman Loyalty Club terms and conditions.
                                </li>
                                <li>
                                    BIMAN BANGLADESH AIRLINES LTD code share flights operated by the code share partner carrier and marketed by BIMAN BANGLADESH AIRLINES LTD are not eligible to earn miles and will not qualify for Flight Rewards.
                                </li>
                                <li>
                                    Biman Loyalty Club miles may be re-credited to you after deduction of applicable service charges, provided the Flight Reward is completely unused and valid.
                                </li>
                                <li>
                                    Biman Loyalty Club miles will not be re-credited if you do not cancel your reservation at 72 hours prior to the commencement of your journey or do not report to the airport in time for your flight (no-show).
                                </li>
                                <li>
                                    Children are eligible to Earn and Burn 75% of the listed miles.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-8">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Reward</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    All Rewards are subject to availability, certain embargoes to dates and/or to flights and/or to period.
                                </li>
                                <li>
                                    Entitlement and use of Rewards is subject to the Terms &amp; Conditions set by Biman Bangladesh Airlines Ltd and its Partners.
                                </li>
                                <li>
                                    Miles are valid for two years from the date of transaction.
                                </li>
                                <li>
                                    The number of Biman Loyalty Club miles required for a Reward is published on the Biman Loyalty Club website and is subject to change. BIMAN BANGLADESH AIRLINES LTD may withdraw, replace or substitute Rewards at any time without notice.
                                </li>
                                <li>
                                    To claim a Reward, you must have the required number of Biman Loyalty Club miles in your account. You may redeem Biman Loyalty Club miles for specified products and services at any time provided your miles are valid.
                                </li>
                                <li>
                                    You may request Flight Rewards, Upgrade Rewards or other Rewards online at <a href="https://www.biman-airlines.com/loyalty-club"> www.biman-airlines.com/loyalty-club </a> to Biman Loyalty Club Service Centre in Dhaka before the Deadline period. Biman Bangladesh Airlines Ltd has the right to refuse the reward request if not asked before the Deadline. Reward ticket cannot be issued through travel agents.
                                </li>
                                <li>
                                    Member can issue Reward Ticket against earned miles by log-in his/her Membership Account. Here member can book and issue free Reward Ticket against earned miles, but member has to pay the applicable Tax(es), Government Charge(s) and Fuel/Insurance Surcharges by Credit Card online.
                                </li>
                                <li>
                                    BLC members can also obtain redemption tickets against miles through process at selected Biman Sales Outlets. In that case, prior e-mail request must be sent at bimanloyaltyclub@bdbiman.com or any prescribed web-link before the deadline period. Additional service charges either in cash or in miles will be applicable here as per below:
                                </li>
                                <table cellpadding="10" cellspacing="0" border="1">
                                    <thead>
                                    <tr>
                                        <th align="left">
                                            Tier Status
                                        </th>
                                        <th colspan="2">
                                            Green Tier
                                        </th>
                                        <th colspan="2">
                                            Silver Tier
                                        </th>
                                        <th colspan="2">
                                            Gold Tier
                                        </th>
                                    </tr>
                                    <tr>
                                        <th align="left">
                                            Deadline
                                        </th>
                                        <th colspan="2">
                                            7 Days Before Departure
                                        </th>
                                        <th colspan="2">
                                            4 Days Before Departure
                                        </th>
                                        <th colspan="2">
                                            3 Days Before Departure
                                        </th>
                                    </tr>
                                    <tr>
                                        <th align="left">
                                            <u>Process Charges per Ticket</u>
                                        </th>
                                        <th>
                                            (in USD)
                                        </th>
                                        <th>
                                            (in Miles)
                                        </th>
                                        <th>
                                            (in USD)
                                        </th>
                                        <th>
                                            (in Miles)
                                        </th>
                                        <th>
                                            (in USD)
                                        </th>
                                        <th>
                                            (in Miles)
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            DOMESTIC &amp; REGIONAL
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            500
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            500
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            500
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BKK, HKG, KUL, SIN, CAN, MLE
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            1500
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            1500
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            1500
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AUH, DMM, DOH, DXB, JED, MED, KWI, RUH, MCT, SHJ, BAH, AMM, IST
                                        </td>
                                        <td>
                                            40
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            40
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            40
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LON, MAN, TYO, NYC, YYZ
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            2500
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            2500
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            2500
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <li>
                                    Redemption of Biman Loyalty Club miles may be requested only by the Biman Loyalty Club member (or by parent or legal guardian on behalf of a member less than 18 years of age).
                                </li>
                                <li>
                                    Any taxes, fees or charges that are applicable to a Reward (Flight Reward, Upgrade Rewards or other) will have to be paid by the member at the time of making request.
                                </li>
                                <li>
                                    Rewards that have been bought, sold or bartered by or to you may be cancelled or confiscated instantly at the sole discretion of BIMAN BANGLADESH AIRLINES LTD and you are liable for payment of the used portions.
                                </li>
                                <li>
                                    To the extent permitted by law, BIMAN BANGLADESH AIRLINES LTD accepts no liability whatsoever in respect of any damage, death, delay, injury or loss arising out of or in connection with the services or Rewards supplied by BIMAN BANGLADESH AIRLINES LTD or a Biman Loyalty Club Partner.
                                </li>
                                <li>
                                    Determination of the value of the Biman Loyalty Club miles is at the sole discretion of Biman Loyalty Club. Biman Loyalty Club reserves the right to change the price of Biman Loyalty Club miles, impose additional conditions for purchasing Biman Loyalty Club miles at any time.
                                </li>
                                <li>
                                    A request application for a Flight Reward (Upgrade, Lounge Access, Excess Baggage etc.) must be made through website or at bimanloyaltyclub@bdbiman.com or any other link set by Biman:
                                    <ul class="list-items list-items-bullet">
                                        <li> At least 7 working days in advance if you are a Green member </li>
                                        <li> At least 4 working days in advance if you are a Silver member </li>
                                        <li> At least 3 working days in advance if you are a Gold member </li>
                                    </ul>
                                </li>
                                <li>
                                    Flight Rewards cannot be issued as open dated tickets.
                                </li>
                                <li>
                                    Once issued, name changes are not permitted on any Flight Reward ticket.
                                </li>
                                <li>
                                    Flight Reward Ticket is subject to availability of seat, periodic embargoes on specific sectors and/or flights and/or flight date.
                                </li>
                                <li>
                                    Reward Ticket(s) issued on Redemption cannot be sold or exchanged or Transfer. In the event of any misuse of Reward Ticket(s), BIMAN BANGLADESH AIRLINES LTD. reserves the right to block or withdraw such reward ticket(s).
                                </li>
                                <li>
                                    Reward Tickets have no monetary refund value.
                                </li>
                                <li>
                                    The Entire journey must be confirmed at the time of ticketing.
                                </li>
                                <li>
                                    A Reward Ticket, also called as Redemption Ticket, can be issued on-line against required miles by the member from his/her Account. For Other reward benefits members have to send e-mail request to Biman Loyalty Club Service Center before the mentioned deadline. The deadline depends on Member’s Tier Status, like Green, Silver &amp; Gold.
                                </li>
                                <li>
                                    If a member books a flight through on-line by redeeming miles in that case a Reservation will be made on time limit and such Reservation will be cancelled automatically when the time limit is over. Members must ensure to issue the Redemption Ticket before time limit. No extension of Time Limit will be allowed.
                                </li>
                                <li>
                                    Member must notify Biman Loyalty Club Service Center for TL booking and in that case prior advice to Biman Sales Counter is required to issue such ticket from the reservation that member made. BLC Service Center will notify the member the place of process center for obtaining the Reward Ticket. The notification to BLC Service Center must be made as per deadline mentioned in the website. Biman Bangladesh Airlines Ltd has the right to refuse any such request which falls within the Deadline Period.
                                </li>
                                <li>
                                    The change of Flight Date is permitted at any Biman Service Center with applicable charges. All Charges are mentioned in the Terms &amp; Conditions in Biman Loyalty Club website.
                                </li>
                                <li>
                                    A reward ticket is valid for a maximum of 12 months from the date of issuance.
                                </li>
                                <li>
                                    A reward ticket can be One Way or Return Trip.
                                </li>
                                <li>
                                    Separate RBD (booking class) i.e. R for Business Class and I for Economy Class will be used for Reward ticket.
                                </li>
                                <li>
                                    Cancel Fees, Change Fees & Refund Fees are applicable for Reward Ticket which is identical to normal Full Economy & Business class of Revenue Ticket.
                                </li>
                                <li>
                                    A Flight Reward cannot be endorsed to another carrier in case of cancellation or delay of flight, but can be re-used to another Biman flight on different date in case of cancellation of the flight or member can get miles credited back to his/her account upon e-mail request to Biman Loyalty Club service center, Dhaka at bimanloyaltyclub@bdbiman.com.
                                </li>
                                <li>
                                    Re-booking of Flight Rewards (Reward Ticket) is permitted at any time on payment of applicable service charges provided that both, the miles and the ticket are valid at the time of rebooking.
                                </li>
                                <li>
                                    Re-routing of Flight Reward/Ticket is not permitted at any time. However, member can get refund the reward by crediting miles back to his/her account with applicable charges (refund fees, cancel fees, no-show etc.) and issue another reward ticket by log-in his/her membership account.
                                </li>
                                <li>
                                    In case of partly used Reward Ticket, the miles for the unutilized sectors of the ticket will not be credited back to the member’s account.
                                </li>
                                <li>
                                    No Reward booking fees apply to Gold members.
                                </li>
                                <li>
                                    Charges for Rebooking, No-show and Refund of Flight Rewards Ticket:
                                </li>
                                <table cellpadding="10" cellspacing="0" border="1">
                                    <thead>
                                    <tr>
                                        <th>
                                            Tier Status
                                        </th>
                                        <th>
                                            Green Tier
                                        </th>
                                        <th>
                                            Silver Tier
                                        </th>
                                        <th>
                                            Gold Tier
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Rebooking/Revalidation Charges
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy (YCL) & Business class of Revenue Ticket.
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy (YCL) & Business class (JCL) of Revenue Ticket.
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy & Business class of Revenue Ticket.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Refund of Reward
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy & Business class (JCL) of Revenue Ticket.
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy (YCL) & Business class (JCL) of Revenue Ticket.
                                        </td>
                                        <td>
                                            All Charges & Fees are applicable for any Reward Ticket which is identical to normal Full Economy (YCL) & Business class (JCL) of Revenue Ticket.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <li>
                                    All above charges are non-refundable.
                                </li>
                                <li>
                                    One-class upgrades (e.g. Economy Class to Business Class) on BIMAN BANGLADESH AIRLINES LTD flights are available, provided the revenue ticket has been issued prior to the upgrade being requested, the request is made at least 72 hours in advance of travel and seats are available in Business Class.
                                </li>
                                <li>
                                    Children are eligible to Earn and Burn 75% of the listed miles.
                                </li>
                                <li>
                                    A Minor member age between 2 to below 12 years if traveling alone, is required to bring a sign copy of the Unaccompanied Minors Assistance and Handling Form during Check-In at airport. This Form is to be completed by minor’s parent or legal guardian. All other formalities of Unaccompanied Minor set by Biman Bangladesh Airlines Ltd must be accomplished by minor’s parent or guardian before travel, otherwise Minor will be refused to be On-Board in plane by check-in staff on duty. The Form is available at any Biman Sales Counter all over its network. It is the sole responsibility of minor’s parent/guardian to collect and complete Form before travel.
                                </li>
                                <li>
                                    For pregnant woman, set rules of Biman Bangladesh Airlines Ltd. will be followed for travel with redemption ticket.
                                </li>

                            </ul>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="upgrade">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">
                                Upgrade</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">

                                <li>
                                    For any upgrade prior request is required to be sent to Biman Loyalty Club Service Center, before the deadline period, for Green status 7 working days before departure, for Silver 4 working days and for Gold 3 working days before departure of flight.
                                </li>
                                <li>
                                    A Member must hold a confirmed ticket for the flight they wish to upgrade prior to requesting an Upgrade Reward. All ticketing and fares rules applicable to the base ticket must be followed at all times.
                                </li>
                                <li>
                                    To book a Business Class upgrade, you must hold a confirmed Revenue Economy Class ticket. The redemption rate for a one-way upgrade from Economy Class to Business Class is 50% of the full one- way Business Class redemption rate. A return upgrade from Economy Class to Business Class is the equivalent of the one-way Business Class redemption rate on the route flown. Upgrade mileage table is set in the Biman Loyalty Club website which is subject to change from time to time without any prior notice to members.
                                </li>
                                <li>
                                    All upgrades are subject to availability of seats in specific redemption class (R-Class).
                                </li>
                                <li>
                                    Member must pay difference of applicable Tax, Surcharge due to government and airlines for up- gradation from lower cabin class to higher cabin class.
                                </li>
                                <li>
                                    Redemption tickets in Economy Class cannot be upgraded to Business Class.
                                </li>
                                <li>
                                    In the event that Biman Loyalty Club or operations of BIMAN BANGLADESH AIRLINES LTD are altered, suspended, cut back or cancelled, Biman Loyalty Club is unable to guarantee that any affected Flight Rewards booked will be honored. Miles for such Flight Rewards booked but not honored will be reinstated to your Biman Loyalty Club account.
                                </li>
                                <li>
                                    Miles are valid for a period of 2 years.
                                </li>
                                <li>
                                    Children are eligible to Earn and Burn 75% of the listed miles.
                                </li>

                            </ul>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-11">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Retain Tier Status</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    A member must earn 50,000 miles or 20 (Twenty) times travel (minimum 10 international sectors) to Retain Silver status, 75,000 miles or 35 (Thirty-Five) times travel (minimum 20 international sectors) to Retain Gold status in last 12 months prior to expiry of current tier validity.
                                </li>
                                <li>
                                    If a Gold member is unable to earn required miles to retain current Gold status but able to earn 50,000 miles or 20 (Twenty) times travel (minimum 10 international sectors) in that case he/she will be downgraded to Silver status.
                                </li>
                                <li>
                                    If a member of upper tier status (Silver/Gold) is unable to retain present tier status in that case he/she will be downgraded to lower tier according to miles earned in last 12 months prior to expiry of current tier validity.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-12">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Data Protection</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    All information is managed in accordance with the BIMAN BANGLADESH AIRLINES LTD Data Privacy Policy, Such Data Privacy Policy is deemed incorporated into the contract between BIMAN BANGLADESH AIRLINES LTD and a member. Information may be passed to supplier and partner organizations to facilitate communication of news and information to members. Members have the right not to receive such communication from either BIMAN BANGLADESH AIRLINES LTD or other partner organizations.
                                </li>
                                <li>
                                    Members have the right to request to review and correct any personal data held by BIMAN BANGLADESH AIRLINES LTD. In such circumstances members can update personal information, such as mailing address, telephone number and e-mail address by log-in his/her own account and rest can be changed upon request to at bimanloyaltyclub@bdbiman.com.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-13">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Privacy</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="font-weight-bold pb-2">Biman Loyalty Club Member Information:</p>
                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    Will be retained and used by Biman Loyalty Club and its subcontractors to ensure the efficient running of Biman Loyalty Club.
                                </li>
                                <li>
                                    May be disclosed as required by law, including disclosures to the police, immigration and customs authorities.
                                </li>
                                <li>
                                    May be used by Biman Loyalty Club and its Partners to send you communication about promotions, services, products and facilities offered by Biman Loyalty Club or its Partners.
                                </li>
                                <li>
                                    May be used to develop new services, new partnerships; for marketing and market research purposes.
                                </li>
                                <li>
                                    May be used for accounting and audit purposes, including fraud auditing.
                                </li>
                                <li>
                                    May otherwise be used in a manner which you may authorize from time to time.
                                </li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->



                    <div class="form-box" id="list-item-14">
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Definitions</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <ul class="list-items list-items-bullet loyal-ul">
                                <li>
                                    <b>Applicant</b> is an eligible person who has enrolled online through the BIMAN BANGLADESH AIRLINES LTD website or who has enrolled through any other approved source of enrollment and has agreed to the Terms and Conditions of the Program.
                                </li>
                                <li>
                                    <b>Booking Class</b> are the sub-classes of the class of service (Business Class and Economy Class) which are defined on the basis of fare paid and may vary according to restrictions such as advance purchase, minimum / maximum stay, rerouting / rebooking restrictions, refund charges etc.
                                </li>
                                <li>
                                    <b>Code share flight</b> is a practice whereby one airline permits a second airline to use the airline designator code of latter airline on flights operated by the former airline.
                                </li>
                                <li>
                                    <b>Member</b> is an applicant who becomes a member of Biman Loyalty Club on approval of the Enrollment Form and subsequent registration in Biman Loyalty Club.
                                </li>
                                <li>
                                    <b>Membership Tier</b> is the membership level in Biman Loyalty Club (e.g. Green, Silver, or Gold).
                                </li>
                                <li>
                                    <b>Qualifying flight</b> means a flight taken on BIMAN BANGLADESH AIRLINES LTD or partner airlines between the point of origin and point of destination of the outward and/or return journey; that is eligible for earning Biman Loyalty Club miles.
                                </li>
                                <li>
                                    <b>Upgrade Reward / Flight Reward</b> is a specific flight, service or product to be provided by Biman Loyalty Club or a Biman Loyalty Club Partner to a member in exchange for Biman Loyalty Club miles.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club account</b> means the account to which the Biman Loyalty Club and Tier miles of a member will be accrued or deducted.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club</b> is the Frequent Flyer Program of BIMAN BANGLADESH AIRLINES LTD, in which members collect miles in their membership account, which can then be redeemed for various benefits, privileges and Rewards. Biman Loyalty Club is owned and operated by BIMAN BANGLADESH AIRLINES LTD, and it is a trademark or registered trademark of its own.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club miles</b> are the reward currency issued to members for qualifying flights and or purchases made through Program Partners. Biman Loyalty Club miles can be redeemed in exchange for specific Redemption offers and has no cash value.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club partner</b> is a participating provider of goods or services including Airlines, Banks, Hotels, Telecommunication providers, Leisure and Lifestyle service providers, Retailers, Car hire companies, and/or any other organization that BIMAN BANGLADESH AIRLINES LTD signs up to its Program.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club service center</b> means the dedicated resource allocated to handle all queries and provide assistance to all Biman Loyalty Club members. Its e-mail address is bimanloyaltyclub@bdbiman.com and/or any other e-mail address mentioned in the website from time to time.
                                </li>
                                <li>
                                    <b>Biman Loyalty Club website</b> means the Biman Loyalty Club page under <a href="https://www.biman-airlines.com/loyalty-club"> www.biman-airlines.com/loyalty-club </a>
                                </li>
                                <li>
                                    <b>Transaction(s)</b> means any flight or partner activity.
                                </li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->







                </div><!-- end col-lg-8 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end job-details-area -->


    @push('custom-script')
        <script type="text/javascript">

        </script>
    @endpush

@endsection


