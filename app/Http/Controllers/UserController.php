<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


 
use App\Http\Controllers\Controller;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\Http\Response

     */
    public function getUser()
        {
        Log::info('This is an informational message.');
        $data = ["User" => 1];
        Log::info('This is an informational message.',$data);
        return response()->json($data, 200);
        }

    public function postUser(Request $request)
    {
        $rawData = $request->json()->all();
        Log::info($rawData["name"]);

        return response()->json($rawData, 201);
    }
}