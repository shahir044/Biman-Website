@extends('header-footer')

@section('header-extension')

@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area gradient-bg-gray-privacy before-none">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="section-heading text-left">
                                <h2 class="sec__title-terms">Privacy Policy</h2>
                                <p class="sec__desc-terms font-weight-regular pb-2">is the statement that discloses the process of data management.</p>
                            </div>
                            <div class="btn-box bread-btns">
                                {{-- <a href="#" class="theme-btn theme-btn-gray mr-2"><i class="la la-bookmark mr-1"></i>Save</a> --}}
                                <a href="{{route('termsConditions')}}" class="theme-btn theme-btn-gray"><i class="la la-external-link mr-1"></i>Terms & Conditions</a>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
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
                                <li><span class="text-black mr-2 "><a href="#Introduction" class="active" target="_self">Introduction</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Purpose-And-Legal-Basis-For-Processing-Personal-Data">Purpose And Legal Basis For Processing Personal Data</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Personal-Data-Categories">Personal Data Categories</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#IP-Address">IP Address</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#cookies">Cookies</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Registration">Registration</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Financial-Information">Financial Information</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Management-Of-Personal-Data">Management Of Personal Data</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Your-Right">Your Right</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Disclosing-Information">Disclosing Information</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Links-To-Other-Sites"></a>Links To Other Sites</span></li>
                                <li><span class="text-black mr-2"><a  href="#Updating-Account-Information"></a>Updating Account Information</span></li>
                                <li><span class="text-black mr-2"><a  href="#Your-Consent">Your Consent</a></span></li>
                                <li><span class="text-black mr-2"><a  href="#Contact-Us">Contact Us</a></span></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8" id="main">
                    <div class="form-box" id="Introduction">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Introduction</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">This Privacy Policy applies to Biman Bangladesh Airlines Limited (“Biman”) and (“Biman”, “we”, “us”, “our”). Biman properly manages and protect customers’ personal data pursuant to the Biman’s basic policies for Information Security and Personal Data Protection. For the purposes of the General Data Protection Regulation (“GDPR”) and other applicable data protection laws, we are data controller. Our data protection officer can be contacted at <b>dpo@bdbiman.com</b>. Our European Union representative is in our UK establishment, Biman Bangladesh Airlines Limited a branch registered at 17 Conduit Street, London WlS 2B, United Kingdom.</p>
                            <p class="pb-4">The collection, use and disclosure of Customer Data enables us to provide services and products that are most likely to meet your needs and requirements. This Privacy Policy outlines our policy and responsibility in relation to the collection, use and disclosure of Customer Data.</p>
                            <p class="pb-4">Biman Bangladesh Airlines Limited is concerned about your right to privacy. Biman does not sell/disclose personal information about individual members (such as name, address, Email address, etc.) to third parties. We do not sell or rent lists of members or use information about individual members outside the scope of the Biman Bangladesh Airlines umbrella of services. Biman Bangladesh Airlines reserves the right to disclose aggregated information regarding its members and usage of the Biman Bangladesh Airlines umbrella of services (such as member demographics and traffic patterns) to advertisers, partners and others for various purposes.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Purpose-And-Legal-Basis-For-Processing-Personal-Data" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Purpose And Legal Basis For Processing Personal Data</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Biman Airlines properly process customers’ personal data within the scope of the following purposes:</p>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>To provide air transportation services (Reservations, Ticket sales, check-in, airport handling, cabin services, Biman Holiday Wings, etc. in addition to normal transportation services). Legal basis: Contract Performance.</li>
                                <li>To provide services relating to Biman Loyalty Club (BLC) members mileage services. Legal basis: Contract Performance.</li>
                                <li>To provide other products and services. Legal basis: Contract Performance.</li>
                                <li>To conduct sales analysis, investigations and research; to develop new services and products. Legal basis: Legitimate Interests.</li>
                                <li>To conduct operations relating to 1-4 above; to respond to inquiries, etc. Legal basis: Contract Performance , Legal obligations, Legitimate Interests.</li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="Personal-Data-Categories" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Personal Data Categories</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Biman Bangladesh Airlines process customers’ personal data necessary for the purposes stated in "Purpose and Legal Basis for Processing Personal Data". Such personal data includes:</p>
                            
                            <h4 class="title pb-2">Basic Data</h4>
                            <p class="pb-4">Name, address, contact details (Telephone/Mobile numbers, e-mail address), gender, date of birth, country /region of residence, passport number, date of expiry, payment card details, preference (meals, seat) etc.</p>
                            
                            <h4 class="title pb-2">Data For Making Reservations And Itineraries</h4>
                            <p class="pb-4">Reservation /boarding information (flight name, etc.), itinerary information, copy of e-ticket, EMD, accompanying passengers, incidental services (upgrades, additional baggage, etc.), mailing address of items sent to customers, e.g. ticket, itinerary, etc.</p>

                            <h4 class="title pb-2">BLC Membership Data</h4>
                            <p class="pb-4">Membership number, member's service qualifications, membership region, accumulated mileage, data related mileage awards, etc.</p>

                            <h4 class="title pb-2">Communications Data</h4>
                            <p class="pb-4">Records of communications with the Biman Airlines (records of responses to questions submitted via e-mail or web inquiry forms, etc. Where necessary, records of questions/remarks or complaints, etc. received at airport counters or when boarding, may be kept)</p>

                            <h4 class="title pb-2">Data Collected From Websites</h4>
                            <p class="pb-4">Website access logs (IP address, etc.). Where a customer reserves the Biman Bangladesh Airlines’ air transportation services via a third party such as travel agents or other airline companies, some of the above-stated personal data may be collected from such third party. These third parties may also have their own privacy policies that apply when they collect information from or about you.</p>

                            <h4 class="title pb-2">Collection And Use Of Children Personal Data</h4>
                            <p class="pb-4">Due to the nature of our Services, we may collect travel information, which may include personal information, about children when it is required to comply with the law or security regulations, or as otherwise required to provide transportation needs and services. We may retain personal information when required to provide transportation and related services to a child. Biman does not knowingly collect personal information directly from children –persons under the age of 12, or another age if required by applicable law –other than when required to comply with the law or for safety and security reasons. If you are a parent or guardian of a child who has provided personal information without your knowledge and consent, you may request we remove this child’s information by emailing <b>privacy@bdbiman.com</b>. </p>

                            <h4 class="title pb-2">Collection And Use Of Sensitive Personal Data</h4>
                            <p class="pb-4">Biman may collect and use sensitive personal data on customers when providing air transportation services. The collection and use of such sensitive personal data is limited to cases in which customers request Priority Guest Support when using air transportation services, and such data is not used for any other purpose.</p>

                            <h4 class="title pb-2">Examples Of Processing Sensitive Personal Data:</h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Where requesting escort from check-in counter to departure gates for passengers that use a wheelchair.</li>
                                <li>Where requesting rental medical oxygen bottles or permission to carry-on a medical oxygen bottle.</li>
                                <li>When requesting permission to carry-on syringes or other medical equipment for a chronic disease.</li>
                                <li>When a pregnant passenger requests to board a flight within 26 weeks expected delivery date.</li>
                                <li>Where a customer requests a special in-flight meal, etc., data may be processed that is not sensitive personal data but may indicate a customer’s religious beliefs or state of health.</li>
                            </ul>
                            <p class="pb-4">Customers have the right to withdraw consent for the processing of sensitive personal data. Customers wishing to withdraw consent should contact where he or she applied for the service. It may not be possible to provide all or some services if consent is withdrawn.</p>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="IP-Address">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">IP Address</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">We use your IP address to help diagnose problems with our server and to administer our Web site under the Terms and Conditions of the Service Agreement. Your IP address is used to help identify you and your shopping cart, and to gather broad demographic information.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="cookies">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Cookies</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">A “cookie” is a small computer file which is downloaded to your device. It collects information as to how you navigate our websites and the internet, and helps us provide better website services to you and tailor certain content. 
                        Cookies may collect personal information about you. Cookies help us remember information about your visit to our Platforms, like your country, language and other settings and searches. Cookies enable us to understand who has seen webpages and how frequently, and to determine which are the most popular areas of our Platforms. They can also help us to operate our website more efficiently, and make your next visit easier and customise your view of the Platforms to reflect your preferences and activities. They also help us tailor our marketing and advertisements to you on our Platforms, other websites you visit, social media platforms and your other devices.
                        </p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Registration">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Registration</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4"><b>www.biman-airlines.com</b> membership registration requires users to give us contact information (like name, mailing address, and email address). Biman Bangladesh Airlines also uses this information for account maintenance and will advise registrants of new services and special promotional offers. Users may opt-out of receiving future mailings.</p>
                            <p class="pb-4">Any personal information (name, Email address, phone number) you provide will only be used to help us get back to you on your issue. We'll discard it unless you ask us to inform you of future enhancements to our Web site or services.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Financial-Information">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Financial Information</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Credit card information may be collected each time an order is placed for Biman Bangladesh Airlines travel. The information collected will include, but not be limited to name, billing address, credit card number, and expiration date. This information will be retained on the site in the secure environment covered under "Secure", and processed by a third party.</p>
                            <p class="pb-4">Your information is only accessible to you through use of your PNR number and secret password. We do not store your credit card information, except only your name, address, travel history, telephone number and email.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Management-Of-Personal-Data">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Management Of Personal Data</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Biman Bangladesh Airlines retain customers’ personal data for the period necessary to achieve the purposes stated in "Purpose and Legal Basis for Processing Personal Data". Records concerning boarding by customers, such as reservations records and ticket information, are normally retained after boarding for a period of maximum fiveyears.</p>
                            <p class="pb-4">Where a BLC member, data is retained as membership data for a period of maximum 10 years after withdrawing membership, in addition to the period as a member. Furthermore, records concerning contracts and invoices are retained for the period necessary to meet legal obligations. If it is necessary for the establishment, exercise or defense of legal claims, Biman may keep personal data for a longer period.</p>
                            <p class="pb-4">Data collected during communication with customers (customer service records, records of e-mails received, etc.) is retained for the period necessary to provide even better services to customers.</p>
                            <p class="pb-4">Access logs, etc. recorded when the Biman website is accessed are retained for the period necessary for analysis by Biman.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Your-Right">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Your Right</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">You do not have to provide your personal information to us, but if you do not provide certain essential information we will not be able to provide products and services to you. For example, where your refusal to provide mandatory travel information, we will not be able to transport you.</p>
                            <p class="pb-4">When a data subject or his or her representative makes a request concerning personal data retained by Biman, the Company shall respond as follows in accordance with GDPR:</p>
                        
                            <h4 class="title pb-2">Rectification</h4>
                            <p class="pb-4">Where requested to rectify or make additions (hereinafter referred to as "Rectification, etc.") to retained personal data due to the retained personal data that identifies the data subject being incorrect, unless special procedures are prescribed in the provisions of laws and regulations regarding the Rectification, etc. of such details, the Company shall conduct necessary investigations without delay within the scope necessary to achieve purpose of processing. The Company shall notify of details without delay when all or a part of the retained personal data is Rectified, etc. as a result. The data subject shall be notified of such effect, outlining the grounds, if a decision is made not to carry out Rectification, etc.</p>

                            <h4 class="title pb-2">Erasure</h4>
                            <p class="pb-4">Where requested to erase retained personal data that identifies the data subject, the Company shall conduct necessary checks without delay such as where personal data is necessary in light of the purpose of processing. The Company shall notify of details without delay when all or a part of the retained personal data is erased as a result. The data subject shall be notified of such effect, outlining the grounds, if a decision is made not to carry out erasure.</p>

                            <h4 class="title pb-2">Suspension Of Use, Etc.</h4>
                            <p class="pb-4">Where requested to suspend use, erase, or suspend provision to a third party (hereinafter referred to as "Suspension of Use, etc.") of retained personal data, and when there is discovered to be grounds for such a request, the Company shall Suspend Use, etc. of such retained personal data without delay, to the extent necessary; provided, however, that where Suspension of Use, etc. of such retained personal data requires a considerable expense, or where Suspension of Use, etc. is otherwise difficult, the Company may substitute Suspension of Use, etc. with alternative measures necessary to protect the rights and interest of the data subject. The Company shall notify the data subject of such effect without delay when it has Suspended Use, etc. of all or a part of the retained personal data. The data subject shall be notified of such effect, outlining the grounds, if a decision is made not to carry out Suspension of Use, etc.</p>

                            <h4 class="title pb-2">Right To Lodge A Complaint With Your Local Supervisory Authority</h4>
                            <p class="pb-4">You have a right to lodge a complaint with your local supervisory authority (i.e. your place of habitual residence, place of work of place of alleged infringement) if you have concerns about how we are processing your personal information.</p>
                            <p class="pb-4">We ask that you please attempt to resolve any issues with us first, although you have a right to contact your supervisory authority at any time.</p>

                            <h4 class="title pb-2">Data Portability</h4>
                            <p class="pb-4">Where legal requirements are fulfilled, the Company shall provide personal data provided by data subjects that has been structured, generally used, and is in a machine readable format. Furthermore, where technically possible, personal data provided by data subjects shall be transmitted to other data controllers. The data subject shall be notified of such effect, outlining the grounds, if a decision is made not to provide or transmit personal data.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Disclosing-Information">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Disclosing Information</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Biman does not sell, trade, or rent your personal information to others.</p>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Customers’ data may be disclosed or provided to partner airlines or companies entrusted with ground handling and check-in operations to provide air transportation services such as when using code share flights or connecting flights, and to achieve purposes such as mileage accumulation.</li>
                                <li>Where customers have made reservations via a travel agent, customer data is disclosed and provided to such travel agent in relation to the reservation.</li>
                                <li>Customers’ data is transmitted to a server operated by Sabre GLBL Inc.(Sabre), a company in Switzerland that manages the passenger service system used by Biman Airlines.</li>
                                <li>Where required by law, customer data relating to reservations and itineraries (including passport, visa, and API data) may be submitted to the customs authorities or immigration bureaus in the customers’ countries to be flown from, into or over, or in countries of transit and transfer.</li>
                                <li>Customers’ personal data may be disclosed or provided to authorities or recipients prescribed in laws and regulations where necessary to comply with EU law or the laws and regulations of members of the EU/EEA.</li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box --> 

                    <div class="form-box" id="Links-To-Other-Sites">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Links To Other Sites</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">This site may contain links to other sites. Biman Bangladesh Airlines is not responsible for the privacy practices or the content of such Web sites.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Updating-Account-Information">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Updating Account Information</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">This site gives users the following options for changing and modifying information previously provided by visiting www.biman-airlines.com. You may update your personal information, opt in/out of email updates and manage your BLC account.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Your-Consent">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Your Consent</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">By using the Biman, you consent to the collection and use of this information by Biman Bangladesh Airlines. If we decide to change our privacy policy, we will post the changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it. Biman reserves the right, at any time, to modify, alter or update these policies, and you agree to be bound by such modifications, alterations, or updates.</p>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Contact-Us">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Contact Us</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">If you have any questions about this privacy statement, the practices of this site, or your dealings with this Web site, you can <a href="mailto:dpo@bdbiman.com">contact with dpo@bdbiman.com.</a>.</p>
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


