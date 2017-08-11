<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Users;
use Session;
class NewsFeedController extends Controller
{
    public function SearchByUsername(Request $request)
    {
        $username = $request->input('username');
        $SearchQuery = Users::select('user_name')->where('user_name', 'like', ''.$username.'%')->get()->toArray();
        //print_r($SearchQuery);
    }
}
?>