<?php

namespace App\Listeners;

use App\Mail\Contact;
use App\Events\ContactProcessed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactProcessed  $event
     * @return void
     */
    public function handle(ContactProcessed $event)
    {
        $contact = $event->contact;
        $email = "hashco28@gmail.com";
        try{
             \Mail::to(email)->send(new Contact($contact));
           return "Done";
           } catch(\Exception $e) {
               return Str::limit($e->getMessage() , 47);
         }
    }
}
