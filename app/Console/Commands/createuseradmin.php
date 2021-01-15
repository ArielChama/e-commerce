<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\Hash;

class createuseradmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user admin';
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
        $name = $this->ask('User: ');
        $email = $this->ask('Email: ');
        $password = $this->secret('Password: ');
        $number = 0000000000;
        $sex = "Não informado";

        if ($this->confirm('Do you wish to continue?')) {
            /*$user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->sex = $sex;
            $user->number_phone = $number;
            $user->isAdmin = true;

            $user->save();*/

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'sex' => $sex,
                'number_phone' => $number,
                'isAdmin' => true,
            ]);
            
            $this->info('User created successfully');
        } else {
            $this->error('User was not created');
        }

        return 0;
    }
}
