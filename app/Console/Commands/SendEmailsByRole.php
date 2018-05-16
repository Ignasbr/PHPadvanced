<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailsByRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendemail:role';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send test email to users who have chosen role';

    protected $role;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Role $role)
    {
        parent::__construct();

        $this->role = $role;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $roles = array_column(Role::get(['name'])->toArray(), 'name');

        $roleName = $this->choice('What is users role ?', $roles);

        $users = User::whereHas('role', function ($query) use ($roleName){
            $query->where('name', $roleName);
        })->get();

        dd($users);

    }
}
