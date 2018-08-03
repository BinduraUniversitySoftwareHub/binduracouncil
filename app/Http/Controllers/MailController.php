<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Inbox;
use Illuminate\Http\Request;
use Auth;
use DB;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$ref = rand(100,999);
        DB::transaction(function(){
            global $request;
            global $ref;
           

            $this->validate($request, [
            'subject' => 'required|max:255',
            'deptId' => 'required',
             ]);
            $mail = new Mail;
            $mail->subject = $request->subject;
            $mail->agent = $request->agent;
            $mail->userId = Auth::user()->id;
            $mail->from =Auth::user()->departmentId;
            $mail->reference =str_random(7);
            $mail->to = $request->deptId;
            $mail->save();
            
            $inbox = new Inbox;
            $inbox->subject = $request->subject;
            $inbox->userId = Auth::user()->id;
            $inbox->from =Auth::user()->departmentId;
            $inbox->to = $request->deptId;
            $inbox->save();

        });
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

            $mail = Mail::find($id);
            
            $mail->update(['status'=>'delivered']);
            
            $inbox = Inbox::find($id);
          
            $inbox->update(['status'=>'delivered']);

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }

    public function outbox(){

        $outbox = Mail::with(['department'])->where('userId',Auth::id())->pluck('from');
        $o = Mail::with(['department'])->where('userId',Auth::id())->where('from',$outbox)->get();

        return $o;
    }
     public function inbox(){
        $inbox = Inbox::with(['department'])->where('userId',Auth::id())->pluck('to');
        $i = Inbox::with(['department'])->where('to',Auth::user()->departmentId)->get();
        return $i;
    }
// count outgoing mails
    public function counter(){

        $counter = Mail::with(['department'])->where('userId',Auth::id())->count();
        return $counter;
    }
    //count incoming mails
      public function count(){

        $counter =Mail::with(['department'])->where('to',Auth::user()->departmentId)->where('status','pending')->count();
        return $counter;
    }

    //delivered mail

    public function delivered(){

        $delivered = Mail::with(['department'])->where('userId',Auth::id())->pluck('to');
        $d = Mail::with(['department'])->where('userId',Auth::id())->where('to',$delivered)->where('status','delivered')->get();

        return $d;
    }
    public function countDelivered(){

        // $delivered = Mail::with(['department'])->where('userId',Auth::id())->pluck('to');
        $d = Mail::with(['department'])->where('userId',Auth::id())->where('status','delivered')->count();

        return $d;
    }


}
