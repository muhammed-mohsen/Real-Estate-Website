<?php

namespace App\Http\Controllers;

use App\Bu;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $contactCount = Contact::count();
        $unActBuCount = buCounter(0);
        $actBuCount = buCounter(1);
        $maps = Bu::select('bu_name', 'bu_longtitude', 'bu_latitude')->get();
        $charts = Bu::select(DB::raw('count(*) as counting,month'))->groupBy('month')->where('year', date('Y'))->orderBy('month', 'asc')->get();

        $latestUser = User::take(8)->orderBy('created_at', 'desc')->get();
        $latestBu = Bu::take(10)->orderBy('created_at', 'desc')->get();
        $latestContact = Contact::take(6)->orderBy('created_at', 'desc')->get();

        // dd($latestContact);



        return view('admin.home.index', compact(
            [
                'userCount', 'contactCount', 'unActBuCount', 'actBuCount', 'maps', 'charts', 'latestUser', 'latestBu', 'latestContact'
            ]
        ));
    }
}
