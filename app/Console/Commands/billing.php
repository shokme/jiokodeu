<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class billing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pay:me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give the money, bitch!';

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
     * @return mixed
     */
    public function handle()
    {
        /** @var User $user */
        $user = User::find(1);
        $name = 'pay as you go';
        try {
            $u = $user->subscription('pay as you go');
            $nbOfCalls = $user->subscriptions->first()->quantity + 10000;
            if($nbOfCalls > 20000) {
                $q = $u->updateQuantity(500, false);
                dd($q);
            }
            $nbOfFreeCalls = 2500;
            $nbTotalCalls = $nbOfCalls - $nbOfFreeCalls;
            $quantity = $nbTotalCalls;
            $q= $u->updateQuantity($quantity, false);
            dd($q);
        } catch (\Throwable $e) {
            dd($e);
        }
        if (!$user->subscribed($name, 'pay-as-you-go')) {
        }
    }
}
