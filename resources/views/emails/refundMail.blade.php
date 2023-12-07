<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Refund Request</title>
    <style>
        body {
            line-height: 1.6;
            margin: 0 auto;
            padding: 20px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            color: #333;
        }
    </style>
</head>
<body>
<div class="container" style="color: black; font-family: 'Inter'">
    <p>Hello {{ $details->full_name }},</p>
    <p>Greetings from Biman Bangladesh Airlines. We have received your Refund Request.</p>
    <p>Here are the details:</p>
    
    <p>
        <ul>
        <li><strong>Order ID:</strong> RFID-{{ $details->id }}</li>
        <li><strong>PNR:</strong> {{ $details->pnr }}</li>
        <li><strong>Ticket No: </strong>
            {{$details->p_ticket_1 ?? ''}} 
            {{$details->p_ticket_2 ? ', '.$details->p_ticket_2 : ''}}
            {{$details->p_ticket_3 ? ', '.$details->p_ticket_3 : ''}}
            {{$details->p_ticket_4 ? ', '.$details->p_ticket_4 : ''}}
            {{$details->p_ticket_5 ? ', '.$details->p_ticket_5 : ''}}
            {{$details->p_ticket_6 ? ', '.$details->p_ticket_6 : ''}}
            {{$details->p_ticket_7 ? ', '.$details->p_ticket_7 : ''}}
            {{$details->p_ticket_8 ? ', '.$details->p_ticket_8 : ''}}
            {{$details->p_ticket_9 ? ', '.$details->p_ticket_9 : ''}}
        </li>
        <li><strong>EMAIL:</strong> {{ $details->email }}</li>
        <li><strong>Contact:</strong> {{ $details->contact_no }}</li>
        <li><strong>Reason for Refund:</strong> {{ $details->reason }}</li>
        <li><strong>Submitted at:</strong> {{ $details->created_at }}</li>
        </ul>
    </p>
    <p>Our refund team will process your refund request as per Biman Ticket – EMD refund policy. Rest assured, we understand the importance of a prompt resolution and will begin processing your refund request immediately. Please comply with the following terms and conditions:</p>
    
    <p>
        <ol>
            <li>Please read the Refund and Change Policy carefully <a target="_blank" rel="noreferrer"  href="https://www.biman-airlines.com/refund-request#Refund-and-Change-Policy">Click here</a>.</li>
            <li>Booking completed using Biman Website (www.biman-airlines.com) or Mobile App can only be refunded through this process.</li>
            <li>Once the online refund form is submitted, the refund request cannot be reversed. The reservation will be canceled, and the ticket will process for a refund.</li>
            <li>Standard refund terms and conditions will apply. The refund request is subject to a cancellation fee and other charges (if any).</li>
            <li>Biman Bangladesh Airlines will process the refund immediately, and the refunded amount will be credited back to the same account used for purchasing the ticket. It may take up to 02 billing cycles (at least 28 working days) to appear on your credit card statement and is subject to the card-issuing bank.</li>
            <li>Please keep in mind that we do have a non-refundable fare policy.</li>
            <li>Do not submit Travel Agent, Online Travel Agent (OTA) issued tickets for a refund through this refund request form. These tickets will neither be processed for a refund nor notified separately.</li>
        </ol>
    </p>
    <p>If you have any questions or require further assistance, please don't hesitate to contact our support team at <a href="mailto:iberefund@biman.gov.bd">iberefund@biman.gov.bd</a> or <a href="mailto:ibebiman@biman.gov.bd">ibebiman@biman.gov.bd</a>.</p>
    
    <p>Thank you for choosing our services, and we appreciate your patience in this matter. You can check your application status here: <a class="btn btn-primary" href="https://www.biman-airlines.com/refund-request#refund_status"><b>Check Refund Status</b></a></p>
    
    <p>Best regards,</p>
    <p>Biman Refund Team</p>
    <p>Head Office,
        Balaka, Kurmitola,
        Dhaka-1229, Bangladesh.</p>

    <p><strong>*** This is a system generated mail ***</strong></p>
    
</div>

</body>
</html>

