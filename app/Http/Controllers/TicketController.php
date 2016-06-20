<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

#Facades
use Auth;
#Models
use App\User;
use App\Ticket;

class TicketController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	$user = User::find($user->id);
    	$tickets = $user->tickets();

    	return view('manage.ticket.index',['tickets' => $tickets]);
    }
}
