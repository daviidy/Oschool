<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\User;
use App\Purchase;
use App\Course;
use App\Classroom;

class ClassroomReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'classroom:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder for users who have subscribed to sessions';

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
        Mail::send('mails.test', ['test' => 'test'], function($message){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Classroom Reminder OK!');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });



        //we take the date of today
        $date = Carbon::now();

        //taking all the classrooms
        $classrooms = Classroom::orderby('id', 'asc')->get();
        foreach ($classrooms as $classroom) {
            //on ne prend que les utilisateurs inscrits
            if (count($classroom->users) > 0) {

                    //ensuite on va vérifier si la date prévue est aujourd'hui
                    if (Carbon::parse($classroom->date) > $date) {
                        //si oui on envoie un mail
                        foreach ($classroom->users as $user) {
                            //pour notifier l'etudiant
                            Mail::send('mails.users.sessions.reminder', ['classroom' => $classroom, 'user' => $user], function($message) use($user){
                              $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Rappel de votre appel hebdomadaire');
                              $message->from('eventsoschool@gmail.com', 'Oschool');
                            });
                        }


                    }


            }


        }

    }//function handle
}
