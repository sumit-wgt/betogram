<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use App\Security_questions;
use App\cms_email_templates;
use App\Countries;
use App\Website_page_setting;
use App\Faq_detail;
use App\Country_codes;
use Mail;
use Session;

class LandingPageController extends Controller
{
    public function index()
	{
        if(Session::get('user_id') != '')
        {
            return redirect(url('home'));
        }
        $get_country = Countries::get();
        $records = Security_questions::where('status', 1)->get();
        return view('login', compact('get_country','records'));
        //return view('login')->with('data',$data);
	}
    
    public function PreRegistration()
    {
        $records = Security_questions::where('status', 1)->get();
        return view('registration_modal')->with('records',$records);
    }
    
    public function check_username(Request $request)
    {
         $username = $request->input('userName');
         if($username !='')
         {
            //$username = $request->userName;
            $records = Users::where('user_name',$username)->get()->toArray();
            if(count($records) > 0){
                echo 'has';
            }else{
                echo 'no';
            }
         }
    }
    
    public function GetCountryCode(Request $request)
    {
        $country_id = $request->input('countryId');
        $countryCodeDetails = Country_codes::all();
        return view('selectedCountryCode',compact('countryCodeDetails','country_id'));
    }
    
    public function check_email(Request $request)
    {
         $email = $request->input('emailid');
         if($email !='')
         {
            //$email = $request->email;
            //echo $email;die;
            $records = Users::where('email',$email)->get()->toArray();
            if(count($records) > 0){
                echo 'has';
            }else{
                echo 'no';
            }
         }
    }
    
    public function check_phoneNumber(Request $request)
    {
         $phoneNumber = $request->input('phoneNumber');
         if($phoneNumber !='')
         {
            $records = Users::where('contact_no',$phoneNumber)->get()->toArray();
            if(count($records) > 0){
                echo 'has';
            }else{
                echo 'no';
            }
         }
    }
    
    public function service()
    {
        $records = Website_page_setting::where('cms_page_title', 'Service')->get();
        return view('service')->with('records',$records);
    }
    
    public function about_us()
    {
        $records = Website_page_setting::where('cms_page_title', 'About')->get();
        return view('about_us')->with('records',$records);
    }
    
    public function contact()
    {
        $records = Website_page_setting::where('cms_page_title', 'Contact')->get();
        return view('contact')->with('records',$records);
    }
    
    public function faq()
    {
        $records = Faq_detail::where('status', '1')->get()->toArray();
        return view('faq')->with('records',$records);
    }
}
?>