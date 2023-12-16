<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RemoveUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:removeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the User as a Revisor for the announcement';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user= User::where('email', $this->argument('email'))->first();

        if (!$user) {
            $this->error('Nessun revisore trovato');
            return;
        }

        $user->is_revisor=false;
        $user->save();
        $this->info("{$user->name} {$user->surname} non è piu un revisore");
    }
}
