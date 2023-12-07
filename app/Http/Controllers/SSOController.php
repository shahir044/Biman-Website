<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use SimpleXMLElement;
use Illuminate\Support\Facades\Redirect;

class SSOController extends Controller
{
    public function createSession()
    {

        $xmlBody = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Header>
        <ns4:MessageHeader xmlns:ns8="http://www.opentravel.org/OTA/2002/11" xmlns:ns7="http://www.w3.org/2000/09/xmldsig#" xmlns:ns6="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns5="http://www.w3.org/1999/xlink" xmlns:ns4="http://www.ebxml.org/namespaces/messageHeader">
            <ns4:From>
                <ns4:PartyId>99999</ns4:PartyId>
            </ns4:From>
            <ns4:To>
                <ns4:PartyId>123123</ns4:PartyId>
            </ns4:To>
            <ns4:CPAId>BG</ns4:CPAId>
            <ns4:ConversationId>BGDX_SessionCreateTest_001</ns4:ConversationId>
            <ns4:Service>Session</ns4:Service>
            <ns4:Action>SessionCreateRQ</ns4:Action>
            <ns4:MessageData>
                <ns4:MessageId>mid:2023-02-22T22:10:55@sabre.com</ns4:MessageId>
            </ns4:MessageData>
        </ns4:MessageHeader>
        <ns6:Security xmlns:ns8="http://www.opentravel.org/OTA/2002/11" xmlns:ns7="http://www.w3.org/2000/09/xmldsig#" xmlns:ns6="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns5="http://www.w3.org/1999/xlink" xmlns:ns4="http://www.ebxml.org/namespaces/messageHeader">
            <ns6:UsernameToken>
                <ns6:Username>950008</ns6:Username>
                <ns6:Password>SSODX9BG</ns6:Password>
                <Organization>BG</Organization>
                <Domain>BG</Domain>
            </ns6:UsernameToken>
        </ns6:Security>
    </soap:Header>
    <soap:Body>
        <ns8:SessionCreateRQ xmlns:ns8="http://www.opentravel.org/OTA/2002/11" xmlns:ns7="http://www.w3.org/2000/09/xmldsig#" xmlns:ns6="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns5="http://www.w3.org/1999/xlink" xmlns:ns4="http://www.ebxml.org/namespaces/messageHeader">
            <ns8:POS>
                <ns8:Source PseudoCityCode="HDQ"/>
            </ns8:POS>
        </ns8:SessionCreateRQ>
    </soap:Body>
</soap:Envelope>';

        $options = [
            'body' => $xmlBody,
            'headers' => [
                "Content-Type" => "text/xml",
                "Accept" => "/",
                "Accept-Encoding" => "gzip, deflate,br",
            ]
        ];

        $client = new Client();
        try {
            $res = $client->request(
                'POST',
                'https://airline.webservices.cert.platform.sabre.com/stl',
                $options
            );
        } catch (GuzzleException $e) {
            dd($e);
        }

        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $res->getBody()->getContents());
        $xml = new SimpleXMLElement($response);

        $body = $xml->xpath('//soap-env:Header')[0];
        $array = json_decode(json_encode((array)$body), TRUE);

        return $this->generateToken(json_decode(json_encode($array))->wsseSecurity->wsseBinarySecurityToken);
    }

    public function generateToken($securityToken)
    {
        $xmlBody = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Header>
        <ns5:MessageHeader xmlns:ns8="http://www.w3.org/2000/09/xmldsig#" xmlns:ns7="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns6="http://www.w3.org/1999/xlink" xmlns:ns5="http://www.ebxml.org/namespaces/messageHeader" xmlns:ns4="http://webservices.sabre.com/sabreXML/sso/ssoaas/SSO_GenerateToken/1.2.0">
            <ns5:From>
                <ns5:PartyId>99999</ns5:PartyId>
            </ns5:From>
            <ns5:To>
                <ns5:PartyId>123123</ns5:PartyId>
            </ns5:To>
            <ns5:CPAId>BG</ns5:CPAId>
            <ns5:ConversationId>BGDX_SessionCreateTest_001</ns5:ConversationId>
            <ns5:Service>SSO_GenerateTokenRQ</ns5:Service>
            <ns5:Action>SSO_GenerateTokenRQ</ns5:Action>
            <ns5:MessageData>
                <ns5:MessageId>mid:2023-02-21T23:17:28@sabre.com</ns5:MessageId>
            </ns5:MessageData>
        </ns5:MessageHeader>
        <ns7:Security xmlns:ns8="http://www.w3.org/2000/09/xmldsig#" xmlns:ns7="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns6="http://www.w3.org/1999/xlink" xmlns:ns5="http://www.ebxml.org/namespaces/messageHeader" xmlns:ns4="http://webservices.sabre.com/sabreXML/sso/ssoaas/SSO_GenerateToken/1.2.0">
             <ns7:BinarySecurityToken valueType="String" EncodingType="wsse:Base64Binary">' . $securityToken . '</ns7:BinarySecurityToken>
        </ns7:Security>
    </soap:Header>
    <soap:Body>
        <ns4:GenerateTokenRQ xmlns:ns8="http://www.w3.org/2000/09/xmldsig#" xmlns:ns7="http://schemas.xmlsoap.org/ws/2002/12/secext" xmlns:ns6="http://www.w3.org/1999/xlink" xmlns:ns5="http://www.ebxml.org/namespaces/messageHeader" xmlns:ns4="http://webservices.sabre.com/sabreXML/sso/ssoaas/SSO_GenerateToken/1.2.0" version="1" applicationID="Biman">
            <ns4:OpenTokenInfo name="ssw">
                <ns4:User username="400001630">
                    <ns4:Attrs/>
                </ns4:User>
                <ns4:Session>
                    <ns4:Valid xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:nil="true"/>
                    <ns4:Duration>14400</ns4:Duration>
                </ns4:Session>
            </ns4:OpenTokenInfo>
        </ns4:GenerateTokenRQ>
    </soap:Body>
</soap:Envelope>';

        $options = [
            'body' => $xmlBody,
            'headers' => [
                "Content-Type" => "text/xml",
                "Accept" => "/",
                "Accept-Encoding" => "gzip, deflate,br",
            ]
        ];

        $client = new Client();
        try {
            $res = $client->request(
                'POST',
                'https://airline.webservices.cert.platform.sabre.com/stl',
                $options
            );
        } catch (GuzzleException $e) {
            dd($e);
        }

        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $res->getBody()->getContents());
        $xml = new SimpleXMLElement($response);

        $body = $xml->xpath('//soap-env:Body')[0];
        $array = json_decode(json_encode((array)$body), TRUE);
        $token = json_decode(json_encode($array))->GenerateTokenRS->OpenToken;
        $minutes = 15;
        
         // Set the token as a cookie
        Cookie::queue('shared_cookie', $token, $minutes, null, '.biman-airlines.com');
        
        return response()->json(['status' => true, 'message' => 'Cookie is set', 'token'=>$token]);
        
        return redirect()
            ->away('https://booking-cert.biman-airlines.com/dx/BGDX')
            ->withCookie(cookie('shared_cookie', $token, 60));
            
        return redirect('/login')->withCookie(cookie('shared_cookie', $token, 60));
        return response()->json(['status' => true, 'message' => 'Cookie is set', 'token'=>$token]);
        

       
    }
}
