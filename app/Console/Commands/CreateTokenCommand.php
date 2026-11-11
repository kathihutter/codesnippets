<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:create-token-command')]
#[Description('Command description')]
class CreateTokenCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Token wird erstellt ...');

        $token = User::all()->first()->createToken('Postman');

        $this->info('Token: '. $token->plainTextToken);
    }
}
