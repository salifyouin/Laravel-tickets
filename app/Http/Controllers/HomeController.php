<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Priorite;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satatistiques=[];
        $satatistiques['total']=Ticket::All()->count();
        $satatistiques['encours']=Ticket::where('etat','en cours')->get()->count();
        $satatistiques['creation']=Ticket::where('etat','creation')->get()->count();
        $satatistiques['realisee']=Ticket::where('etat','realisee')->get()->count();

        $priorites=Priorite::All();
        if(Auth::user()->role=='admin')
        {
            $tickets=Ticket::paginate(4);
        }
        else
        {
         $tickets=Ticket::where('user_id',Auth::user()->id)->paginate(4);
        }
      
        return view('home',compact('tickets','satatistiques','priorites'));
    }
}
