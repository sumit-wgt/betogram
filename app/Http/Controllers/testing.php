<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class testing extends Controller
{
    public function index()
    {
        return view('testing');
    }
    
    public function postUpload()
    {
        if(Input::file())
        {
            $image = Input::file('input_img');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            echo 
            $path = public_path('assets/front_end/images' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $user->image = $filename;
            $user->save();
        }
    }
}
?>