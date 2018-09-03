<?php

namespace App\Http\Controllers;

use App\General;
use App\Http\Requests\ContactFormRequest;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function mailus(ContactFormRequest $request){
        //dd($request);
        $validated = $request->validated();
        $data = [];

        $data['name'] = $validated['name'];
        $data['email'] = $validated['email'];
        $data['msg'] = $validated['message'];

        // Mail delivery logic goes here
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.contact', $data, function($message) use ($data) {
            $message
                ->from('contact@yeceapp.com','YECE APP')
                ->to("admin@yeceapp.com", 'Admin YECEAPP')
                ->subject('YECE Site: Making contact with a Visitor!');
        });

        //flash($validated['name'].trans('messagesent'))->success();
        //app('debugbar')->warning('Watch out..');
        logger()->info("Mailing Us From ".request()->ip(),$validated);
        return $validated['name']." ".trans('home.messagesent');
    }
}
