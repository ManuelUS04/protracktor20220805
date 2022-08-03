<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Repositories\DocumentRepository;
use SendGrid\Mail\Mail;
use App\Http\Repositories\SmsRepository;

class DocumentController extends Controller
{   
    /**
    * The  repository instance.
    */
    protected $documentRepo;


    /**
    * Create a new controller instance.
    *
    * @param  \App\Http\Repositories\DocumentRepository  $orders
    * @return void
    */
    public function __construct(DocumentRepository $documentRepo)
    {
        $this->documentRepo = $documentRepo;        
    }

    public function index()
    {
        $documentsArray = $this->documentRepo->all(); 
      
        return view('document', compact('documentsArray'));
    }

    public function test_mail(Request $request){
        $email = new Mail(); 
        $email->setFrom("rbocanegra@ctdevelopers.com", "From Roberto");
        $email->setSubject("Testing Sendgrid");
        $email->addTo("elnixo0007@gmail.com", "To Roberto");
        $email->addContent(
            "text/html", "<strong>Content is here</strong>"
        );
        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (\Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }

    public function test()
    {
        
        $email = new Mail(); 
        $email->setFrom("rbocanegra@ctdevelopers.com", "From Roberto");
        $email->setSubject("Testing Sendgrid");
        $email->addTo("rabp_91@hotmail.com", "To Roberto");
        $email->addContent(
            "text/html", "<strong>Content is here</strong>"
        );
        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (\Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }

    public function testSms()
    {
      $response =  SmsRepository::send('+13235978553','Hi Protracktor');
      dd($response);
    }
}