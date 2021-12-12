<?php

namespace App\Services;
use MailchimpMarketing\ApiClient; 
class Newsletter{
    public function subscribe(string $email){

        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);
        return $mailchimp->lists->addListMember(config('services.mailchimp.lists.subscribers'), [
            'email_address' => $email,
            'status'=>'subscribed']);
    // return redirect('/')->with('success', 'You are now signed up to our newsletter');

    }
}