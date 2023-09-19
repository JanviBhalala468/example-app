<?php

namespace App\Observers;

use App\Models\_member;
use App\Mail\MailOnDelete;
use Illuminate\Support\Facades\Mail;

class MemberObserver
{
    /**
     * Handle the _member "created" event.
     *
     * @param  \App\Models\_member  $_member
     * @return void
     */
    public function created(_member $_member)
    {
        //
    }

    /**
     * Handle the _member "updated" event.
     *
     * @param  \App\Models\_member  $_member
     * @return void
     */
    public function updated(_member $_member)
    {
        //
    }

    /**
     * Handle the _member "deleted" event.
     *
     * @param  \App\Models\_member  $_member
     * @return void
     */
    public function deleting(_member $_member)
    {
        //
        $details = [
            'subject' => 'Observer on delete',
            'body' => 'This is for testing email using queue'
        ];
        $recipientEmail = 'janvibhalala15@gmail.com';
        $email = new MailOnDelete($details);

        // Push the email sending task onto the Redis queue
        // dispatch(function () use ($recipientEmail, $email) {
        Mail::to($recipientEmail)->queue($email);
        // });

    }

    /**
     * Handle the _member "restored" event.
     *
     * @param  \App\Models\_member  $_member
     * @return void
     */
    public function restored(_member $_member)
    {
        //
    }

    /**
     * Handle the _member "force deleted" event.
     *
     * @param  \App\Models\_member  $_member
     * @return void
     */
    public function forceDeleted(_member $_member)
    {
        //
    }
}