<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;
use App\Users;
use App\Security_questions;
use App\cms_email_templates;
use Mail;
use Session;

class RegistrationController extends Controller
{
    protected $url;
    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    public function methodName()
    {
        $this->url->to('/');
    }
    
    public function Register()
    {
        /*Mail::raw('Welcome to betogram', function ($message) {
            $message->to('sumit.wgt@gmail.com')->subject('Welcome Mail');
        });*/
        $records = Security_questions::where('status', 1)->get();
        return view('registration')->with('records',$records);
    }
    
    public function getRegister(Request $request)
    {
        $base_url = $this->url->to('/');
        $activation_code = uniqid(rand(), true);
        $random_code = uniqid(rand(), true);
        $activation_link = $base_url.'/activation/'.$activation_code;
        if($request->input('g-recaptcha-response'))
        {
            $secret = '6LdugSgUAAAAAKzP2UhLpSJpabo7cwaD7-jMBTRi';
			$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$request->input('g-recaptcha-response'));
			$responseData = json_decode($verifyResponse);
            if($responseData->success == 1)
			{
			      $data = array('profile_id'=>null,
                       'user_name'=>$request->input('user_name'),
                       'name'=>$request->input('name'),
                       'email'=>$request->input('email'),
                       'age_group'=>$request->input('age_group'),
                       'password'=>md5($request->input('password')),
                       'gender'=>$request->input('gender'),
                       'country_id'=>$request->input('country'),
                       'country_code'=>$request->input('country_code'),
                       'contact_no'=>$request->input('contact_no'),
                       'currency'=>$request->input('currency'),
                       'city'=>$request->input('city'),
                       'activation_code'=>$activation_code,
				       'random_code'=>$random_code,
                       'status'=>'0',
                       'creation_date' => date("Y-m-d H:i:s"),
					   'updation_date' => date("Y-m-d H:i:s"),
					   'user_type'=>2,
                       'roles_id'=>null,
                       'social_media_id'=>null,
                       'subscription_type'=>0,
					   'forgot_pass'=>0
                    );
                 //print_r($data);die;
                 $insert_data = Users::insert($data);
                 if($insert_data == true)
                 {
                    $records = cms_email_templates::where('slug','activation_link')->get()->toArray();
                    if(!empty($records))
                    {
                        $email = $request->input('email');
                        $password = md5($request->input('password'));
                        $firstName = explode(" ",$request->input('name'));
                        $msg = preg_replace("/&#?[a-z0-9]+;/i","",$records[0]['content']);
                		$msg = str_replace("[user]",$firstName[0],$msg);
                		//$msg = str_replace("[email]",$email,$msg);
                		//$msg = str_replace("[password]",$password,$msg);
                		$msg = str_replace("[confirm]",$activation_link,$msg);
                        $data['msg'] =$msg;
                        Mail::send('mail_template', $data, function($message) use($records,$email){
                             $message->to($email)->subject($records[0]['subject']);
                         });
                        echo "success"; 
                    }
                     
                 }
                 //$request->session()->flash('status', 'Registration successfully completed. Please check your email to activate your account.');
                 //return redirect(url('login'));
			}
            else
            {
                echo "error1";
                /*$request->session()->flash('status', 'Something went wrong!Please try again.');
                return redirect(url('login'));*/
            } 
        }
        else{
            echo "error2";
            /*$request->session()->flash('status', 'Please click on the reCAPTCHA box');
            return redirect(url('/'));*/
        }
    }
    
    public function accountActivation($id,Request $request)
    {
        if($id =='')
        {
            $request->session()->flash('success','You have already verified.');
            return redirect(url('login'));
        }
        $data = array(
               'activation_code'=>'',
               'status' => 1
               );
		//$where = 'activation_code';
		//$field = $id;
		$query = Users::where('activation_code',$id)->update($data);
        $request->session()->flash('success', 'You have successfully verified!Please login to continue.');
        return redirect(url('login'));
    }
    
    public function getLogin(Request $request)
    {
        //print_r($request->input());
        $username = $request->input('user_name');
        $password = md5($request->input('password'));
        $query = Users::where('user_name',$username)->where('password',$password)->where('status',1)->get();
                
        if(count($query) > 0)
        {
            Session::put('user_id', $query[0]->id);
            $value = Session::get('user_id');
            $status = $query[0]->forgot_pass;
            $request->session()->flash('success', 'You have successfully logged in.');
            echo $status;
        }else{
            $request->session()->flash('status', 'Please try again');
            echo "failed";
        }
    }
    
    public function userHomePage()
    {
        if(Session::get('user_id') == '')
        {
            return redirect(url('login'));
        }
        $userId = Session::get('user_id');
        $userData = Users::find($userId);
        return view('home',compact('userData'));
    }
    
    public function forgotPassMail(Request $request)
    {
        $data = $request->input();
        $mailId = $data['forgotEmail'];
        $userData = Users::where('email',$data['forgotEmail'])->get();
        if($data['recovery_email'] == 'username')
        {
            $records = cms_email_templates::where('slug','recovery_username')->get()->toArray();
            if(count($records) > 0)
            {
                $username = $userData[0]->user_name;
                $msg = preg_replace("/&#?[a-z0-9]+;/i","",$records[0]['content']);
                $msg = str_replace("[username]",$username,$msg);
                $data['msg'] = $msg; 
                Mail::send('mail_template', $data, function($message) use($mailId){
                    $message->to($mailId)->subject('Recover username');
                });
                $request->session()->flash('success', 'Your username is sent to your registered email id, please check');
                echo "success";
            }
        }else{
            $records = cms_email_templates::where('slug','recovery_password')->get()->toArray();
            if(count($records) > 0)
            {
                $demoPassword = 'BTG'.rand(0,1000000);
                $msg = preg_replace("/&#?[a-z0-9]+;/i","",$records[0]['content']);
                $msg = str_replace("[password]",$demoPassword,$msg);
                $data['msg'] = $msg;
                Mail::send('mail_template', $data, function($message) use($mailId){
                    $message->to($mailId)->subject('Recover password');
                });
                $data = array(
                   'password'=>md5($demoPassword),
                   'forgot_pass' => 1
                );
                $update_forgot_pass = Users::where('email',$mailId)->update($data);
                $request->session()->flash('success', 'Your password is sent to your registered email id, please check');
                echo "success";
            }
        }
    }
    public function logout(Request $request)
    {
        Session::forget('user_id');
        $request->session()->flash('success', 'Logout Successfully');
        return redirect(url('login'));
    }
    
    public function change_password(Request $request)
    {
        return view('change_password');
    }
    
    public function change_password_data(Request $request)
    {
        $userId = Session::get('user_id');
        $userData = Users::find($userId);
        $usersPreviousPassword = $userData['password'];
        
        $postedData = $request->input();
        $oldPassword = md5($postedData['oldPassword']);
        $newPassword = $postedData['newPassword'];
        $confirmPassword = $postedData['confirmPassword'];
        
        if($usersPreviousPassword != $oldPassword)
        {
            $msg = "Your old password is incorrect";
            $status = "error";
            $type = "status";
        }
        else if ($newPassword != $newPassword)
        {
            $msg = "Your current password doesn't match";
            $status = "error";
            $type = "status";
        }
        else
        {
            $updateData = array(
               'password' => md5($newPassword),
               'forgot_pass' => 0
            );
            $updateUsersData = Users::where('id',$userId)->update($updateData);
            $msg = "You have successfully set your new password";
            $status = "success";
            $type = "success";
        }
        $request->session()->flash($type, $msg);
        echo $status;
    }
}
?>