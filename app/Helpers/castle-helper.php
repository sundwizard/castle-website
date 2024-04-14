<?php
use App\Models\Event;
use App\Models\Service;

function getLink(){
    $links = \Share::page(str_replace(' ','-',url(\URL::current())),
    "Hello dear! Welcome to livingword Global Leadership Mission"
    )->facebook()
     ->twitter()
     ->whatsapp()
     ->linkedin()
     ->telegram();

     return $links;
}


function generateReference(){
    $generatorNum = rand(10,100); //user id
    $id_lenth=strlen($generatorNum);
    $stamp = mt_rand(2,100);
    $random_id_length = 6-$id_lenth;
    $paymentreferenceno = hexdec(uniqid(rand(),1));
    $paymentreferenceno = strip_tags(stripslashes($paymentreferenceno));
    $paymentreferenceno = str_replace(".","",$paymentreferenceno);
    $paymentreferenceno = str_replace("E", "$stamp", $paymentreferenceno);
    $paymentreferenceno = str_replace("+", "9", $paymentreferenceno);
    $paymentreferenceno = strrev(str_replace("/","",$paymentreferenceno));
    $paymentreferenceno = substr($paymentreferenceno,0,$random_id_length);
    $paymentreference_no = $paymentreferenceno.$generatorNum; //payment reference number

    return $paymentreference_no.mt_rand(100,9999).$generatorNum;
 }

 function getNextEvent(){
    $nextEvent = Event::orderBy('event_date','Asc')->first();
    return $nextEvent;
 }

 function getEvents(){
    $events = Event::all();

    return $events;
 }

 function getServices(){
    $services = Service::all();

    return $services;
 }
?>
