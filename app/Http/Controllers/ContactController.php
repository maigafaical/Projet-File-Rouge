<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     
     public function index()
     {
         return view('contact');
     }

    //  public function contactpost()
    //  {
    //      return view('contact');
    //  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contactpost(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);
        
        if( $this->index()){
            $mail_data = [
                'recipient'=> 'faicalmaiga78@gmail.com',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=> $request->subject,
                'body'=> $request->message,
            ];

        \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->subject($mail_data['subject']);
        });

        return redirect()->back()->with('success','Votre mail a bien été envoyé!');
        
           
        }else{
            return redirect()->back()->withInput()->with('error','Veuillez vous connecter a internet!');
        }
            
    }

    
    // public function isOnline($site = "https://youtube.com/"){
    //     if(@fopen($site, "r")){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
