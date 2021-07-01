<?php
use GuzzleHttp\Client;
class XhrController extends BaseController {
  
  private $url;
  private $headers;
  private $body;
  private $request;
  
  public function __construct(){
    $this->url='https://testapi.multisafepay.com/ewx/';
    $this->headers=array('Content-Type' => 'text/xml; charset=UTF8');
    $this->body='<?xml version="1.0" encoding="UTF-8"?>
                <status ua="custom-1.1">
                 <merchant>
                 <account>1001001</account>
                 <site_id>13431</site_id>
                 <site_secure_code>965105</site_secure_code>
                 </merchant>
                 <transaction>
                 <id>apitool_1533623s3</id>
                 </transaction>
                </status>';
    $this->request=new Client();
  }

	public function index(){
    return View::make("list", ["xml"=> $this->parser($this->request->post($this->url,  ['headers' => $this->headers, 'body' => $this->body])->getBody()) ] );
	}
  
  private function parser($xml){
    return $this->clean(json_decode(json_encode(simplexml_load_string($xml)), true));
  }

  private function clean($array){
    unset($array["transaction"]["items"]);
    return $array;
  }
  
}
