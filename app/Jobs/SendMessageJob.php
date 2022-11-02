<?php

namespace App\Jobs;

use App\Mail\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $request, $address, $mailer, $from, $replyTo;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request, $address, $mailer, $from, $replyTo)
    {
        $this->request = $request;
        $this->address = $address;
        $this->mailer = $mailer;
        $this->from = $from;
        $this->replyTo = $replyTo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $request= $this->request;
        $address= $this->address;
        $mailer= $this->mailer;
        $from= $this->from;
        $replyTo= $this->replyTo;
        
        Mail::send( [] , [] , function ($m) use ($request, $address, $mailer, $from, $replyTo) {
            if ($from) { $m->from($address, $request->name ?? $request->from); }
            if ($replyTo) { $m->replyTo($request->email, $request->name ?? $request->replyTo); }
            // if ($request->body) { $m->setBody($request->message, 'text/html'); }
            $m->to($mailer)->subject($request->subject)->setBody($request->message, 'text/html');
        });
    }
}
