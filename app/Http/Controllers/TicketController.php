<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ticket;
use Auth;
use App\Traitement;
use Session;
use Excel;
class TicketController extends Controller
{
    public function __construct()
    {
      
        $this->middleware('auth');
        $this->middleware('isadmin')->only('show');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priorites=DB::table('priorites')->pluck('nom','id');
        return view('ticket.create',compact('priorites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->all();
        $this->validate($request,[
            'message'=>'required|min:10',
            'priorite_id'=>'required',
        ]);
        $data=array_add($data,'user_id',Auth::user()->id);
        Ticket::create($data);
        Session::flash('message','Votre ticket a ete cree avec succe');
        return redirect('/home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function consulter($id)
    {
        $traitements=Traitement::where('ticket_id',$id)->get();
        $ticket=Ticket::findOrFail($id);
        if($ticket->etat=='création')
      {
        $ticket->etat='En cours';
        $ticket->save();
      }     
        return view('ticket.show',compact('ticket','traitements'));
    }

   /* public function export_xls()
    {
            Excel::create('tickets', function($excel)
            {
                  $excel->sheet('tickets', function($sheet) {
                          $sheet->loadView('export.ticket_xls');

            })->export('xls');

            });
            return redirect('/');
    }*/
}
