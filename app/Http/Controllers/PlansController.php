<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PlansController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $plans = Plan::get();

        $user = User::where('id',Auth::user()->id)->with('plans')->first();

        $now = Carbon::now();

        if ($user->plans->count() > 0) {

            $last_activation = Carbon::parse($user->last_activated_plan->pivot->last_activation);

            // How many days passed since user last active plan activation
            $last_activation_days_passed = $now->diffInDays($last_activation);

            $days_passed_percentage = number_format(($last_activation_days_passed * 100) / 30, 0);

            return view('plans.index', compact('plans','user','last_activation_days_passed','days_passed_percentage'));
        }

        return view('plans.index', compact('plans','user'));
    }

    public function show($id)
    {
        $plan = Plan::where('id', $id)->first();

        $user = User::where('id',Auth::user()->id)->with('plans')->first();


        return view('plans.show', compact('plan', 'user'));
    }

    public function activate()
    {
        $plan_id = Input::get('plan_id');

        $user = User::where('id',Auth::user()->id)->first();

        $plan = Plan::where('id',$plan_id)->first();

        $user->plans()->attach($plan->id);

        return response('Ok');
    }
}
