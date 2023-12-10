<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $details = [
            'title' => 'Daily email for health check-up',
            'body' => 'please check your health status by following the link below
            http://dailymail.test/subscribe '
        ];

        $users = \App\Models\Subscriber::all();
        foreach($users as $user){
            Mail::to($user->email)->send(new \App\Mail\MyMail($details));
        }

        $this->info('Emails are sent.');
    }
}
