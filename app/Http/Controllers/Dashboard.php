<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index() {
        return view('customDashboard', ['user' => auth()->user()->with(['bank_accounts' , 'bank_accounts.bank_detail'])->first()]);
    }
}
