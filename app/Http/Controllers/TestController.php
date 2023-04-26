<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class TestController extends Controller
{
    // This controller is for quick functions

    public function withdrawEarningToAccount(){
        // withdraw earning to account as automatic addition feature was implemented late

        $users = Models\UserSubscription::get();
        foreach($users as $user){
            // Models\UserAccount::where('user_id',$user['user_id'])->increment('net_amount',$user['earning']);
        }
    }

}
