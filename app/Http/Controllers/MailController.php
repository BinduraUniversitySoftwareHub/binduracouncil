<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use Auth;

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
        $mail = new Mail;
        $mail->subject = $request->subject;
        $mail->userId = Auth::user()->id;
        $mail->from =Auth::user()->departmentId;
        $mail->to = $request->deptId;
        $mail->save();

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
    public function update(Request $request, Mail $mail)
    {
        //
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

        $outbox = Mail::with(['department'])->where('userId',Auth::id())->get();
        return $outbox;
    }
     public function inbox(){

        $inbox = Mail::with(['department'])->where('to',Auth::user()->departmentId)->get();
        return $inbox;
    }
// count outgoing mails
    public function counter(){

        $counter = Mail::with(['department'])->where('userId',Auth::id())->count();
        return $counter;
    }
    //count incoming mails
      public function count(){

        $counter =Mail::with(['department'])->where('to',Auth::user()->departmentId)->get()->count();
        return $counter;
    }


}
