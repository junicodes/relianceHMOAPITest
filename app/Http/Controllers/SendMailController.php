<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PortFolioMail;

class SendMailController extends Controller
{
    //
    public function index(){
        return response()->json([
            'message' => 'Server open for build'
        ], 200);
    }

    public function sendmail(Request $request) {

        $data = [
            'subject' => $request->input('subject'),
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'phone'   => $request->input('phne'),
            'message' => $request->input('message')
        ];
        try{
            Mail::to('junicodesdev@gmail.com')->send(new PortFolioMail($data));
            return response()->json(['success' => 'Mail Sent'], 200);
        }catch(\Exception $e) {
            return response()->json(['error' => 'Mail not sent', 'info' => $e->getMessage()], 501);
        }
    }
}
