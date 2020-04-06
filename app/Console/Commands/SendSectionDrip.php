<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\User;
use App\Purchase;
use App\Course;

class SendSectionDrip extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'section:drip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emais to users when section available';

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
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Drip OK!');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });



        //we take the date of today
        $date = Carbon::now();

        //taking all the users
        $users = User::orderby('id', 'asc')->get();
        //taking all the courses
        $courses = Course::orderby('id', 'asc')->get();
        foreach ($courses as $course) {
            //on ne prend que les utilisateurs inscrits
            if (count($course->sections) > 0) {
                foreach ($course->sections as $section) {
                    if (count($course->users) > 0) {
                        foreach ($course->users as $user) {
                            $today = Carbon::now();
                            $purchase = $course->purchases->where('user_id', $user->id)->where('status', 'Validé')->first();
                            $days = Carbon::now();


                                //si la section en question
                                //a été planifiée pour un nombre de jours après l'inscription
                                //de l'étudiant
                                if ($section->drip && $section->drip->days !== null) {

                                    //on va déterminer la date de disponibilité prévue
                                    $day_availability = Carbon::parse($purchase->date)->addDays((int)$section->drip->days);

                                    //ensuite on va vérifier si la date prévue est aujourd'hui
                                    if ($day_availability == $today) {
                                        //si oui on envoie un mail
                                        //pour notifier l'etudiant
                                        Mail::send('mails.users.sections.reminder', ['course' => $course, 'user' => $user, 'section' => $section], function($message) use($user){
                                          $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Contenu de cours disponible');
                                          $message->from('eventsoschool@gmail.com', 'Oschool');
                                        });
                                    }

                                }


                                //si la section en question
                                //a été planifiée pour une date spécifique
                                if ($section->drip && $section->drip->date !== null) {

                                    //on va déterminer la date de disponibilité prévue
                                    $day_availability = Carbon::parse($section->drip->date);

                                    //ensuite on va vérifier si la date prévue est aujourd'hui
                                    if ($day_availability == $today) {
                                        //si oui on envoie un mail
                                        //pour notifier l'etudiant
                                        Mail::send('mails.users.sections.reminder', ['course' => $course], function($message) use($user){
                                          $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Contenu de cours disponible');
                                          $message->from('eventsoschool@gmail.com', 'Oschool');
                                        });
                                    }

                                }




                        }
                    }

                }
            }


        }

    }//function handle
}
