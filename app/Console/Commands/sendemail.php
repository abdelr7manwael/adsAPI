<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;
use App\Models\User;
use App\Models\Ad;
class sendemail extends Command
{
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
    protected $description = 'Remainder Advertiser that his Ad will be live Tomorrow';

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

        if($Ads = Ad::where('start_date','=',date('Y-m-d', strtotime('+1 days')))->get()){
            foreach($Ads as $ad){
                $user = User::find($ad->user_id);
                $data=[
                    'user'=> $user,
                    'ad'=> $ad,
                ];
                Mail::to($user->email)->send(new ConfirmationMail($data));
            }

            return True;
        }
        return false;
    }
}
