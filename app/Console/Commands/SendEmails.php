<?php

namespace App\Console\Commands;
use App\Mail\CompanyMailSending;
use App\Models\CompanyUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class SendEmails extends Command
{
    public $company;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

//        dd('1');


    $user=CompanyUser::get();
    foreach ($user as $item) {
       $user_id=$item->user_id;
       $comp = $item->company_id;
       $mail = User::where('id',$user_id)->first();
       $email=$mail->email;
//        Mail::to($email)->send();
    }
//    dd($email);
    $post= Post::where('company_id',$comp)->get();
    foreach ($post as $posts) {
        $title = $posts->Tittle;
//        dd($title);
        Mail::to($email)->send(new CompanyMailSending($title));

    }
//    $email=$user[0]->email;
//    $posts = Post::all();
//    dd($posts->Tittle);
//    Mail::to($email)->send();
        return 0;
    }
}
