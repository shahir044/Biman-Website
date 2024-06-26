<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Refund Request Rejected by Biman Bangladesh Airlines</title>
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
    <p>Dear {{ $details->full_name }},</p>
    <p>We appreciate your recent refund request. After careful consideration, we regret to inform you that we are unable to process your refund at this time. Please find below the reason for the rejection:</p>
    <p><b>{{$details->decline_reason}}</b></p>
    <p>Submission Details:</p>

    <ul>
        <li><strong>Submission ID:</strong>{{ $details->id }}</li>
        <li><strong>PNR:</strong> {{ $details->pnr }}</li>
        <li><strong>EMAIL:</strong> {{ $details->email }}</li>
        <li><strong>Contact:</strong> {{ $details->contact_no }}</li>
        <li><strong>Reason for Refund:</strong> {{ $details->reason }}</li>
        <li><strong>Submitted at:</strong> {{ $details->created_at }}</li>
    </ul>

    <p>Our refund team will calculate the refund amount as per Biman Ticket – EMD refund policy. The refund will be processed using the same payment method you used for the original transaction. Rest assured, we understand the importance of a prompt resolution and will begin processing your refund amount at earliest. Please read the Refund and Change Policy of BIMAN carefully: <a target="_blank" rel="noreferrer"  href="https://www.biman-airlines.com/refund-request#Refund-and-Change-Policy">Click here</a>.</p>

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

