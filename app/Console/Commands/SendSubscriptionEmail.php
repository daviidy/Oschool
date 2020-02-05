<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\User;
use App\Purchase;
use App\Course;

class SendSubscriptionEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to remind users about their subscription';

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
        /*
        Mail::send('mails.test', ['test' => 'test'], function($message){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Automatisation OK!');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
        */


        //we take the date of today
        $date = Carbon::now();

        //taking all the users
        $users = User::orderby('id', 'asc')->paginate(30);
        //taking all the courses
        $courses = Course::orderby('id', 'asc')->paginate(30);
        foreach ($users as $user) {
            foreach ($courses as $course) {
                //si l'utilisateur est inscrit
                if ($user->courses->contains($course->id)) {


                $purchase = Purchase::where('user_id', $user->id)->where('course_id', $course->id)->where('status', 'Validé')->latest('id')->first();
                        if ($purchase) {
                            //we check if the purchase type is
                            //payment plan
                            if ($purchase->pricing->type == 'Plan de paiement') {
                                //si il reste encore des paiements à régler
                                if ($purchase->pricing->times - count($course->purchases->where('user_id', $user->id)->where('status', 'Validé')) > 0) {

                                    //we determine when the user Subscription
                                    //will end. and we start to send emails 10 days
                                    //before the subscription ending
                                    if (Carbon::parse($purchase->date)->addDays(30)->subDays(10) <= $date && $date <= Carbon::parse($purchase->date)->addDays(30)) {
                                        //envoi mail utilisateur

                                         Mail::send('mails.users.purchases.reminder', ['purchase' => $purchase], function($message) use($purchase){
                                           $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Petit rappel concernant votre abonnement');
                                           $message->from('eventsoschool@gmail.com', 'Oschool');
                                         });


                                     }
                                     //sinon si la date de renouvellement a expiré
                                     elseif (Carbon::parse($purchase->date)->addDays(30) < $date) {

                                         //on supprime l'utilisateur de la formation
                                         $user->courses()->detach($course);

                                         //on envoie le mail d'expiration
                                         Mail::send('mails.users.purchases.end_subscription', ['purchase' => $purchase], function($message) use($purchase){
                                           $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Vous abonnement a expiré');
                                           $message->from('eventsoschool@gmail.com', 'Oschool');
                                         });

                                         //on envoie un mail aux admins
                                         $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(10);

                                         foreach ($admins as $admin) {
                                         //envoi mail admin pour échec
                                         Mail::send('mails.admins.purchases.end_subscription', ['purchase' => $purchase], function($message) use($admin){
                                           $message->to($admin->email, 'Aux Admins Oschool')->subject('Un étudiant vient d\'être retiré de sa formation');
                                           $message->from('eventsoschool@gmail.com', 'Oschool');
                                         });
                                       }


                                     }

                                }
                                /*
                                else {
                                    echo "pas envoyé";
                                }
                                */
                            }

                            //else if it is recurrent subscription
                            elseif ($purchase->pricing->type == 'Abonnement') {
                                //we determine when the user Subscription
                                //will end. and we start to send emails 10 days
                                //before the subscription ending

                                if (Carbon::parse($purchase->date)->addDays(30)->subDays(10) <= $date && $date <= Carbon::parse($purchase->date)->addDays(30)) {

                                    Mail::send('mails.users.purchases.reminder', ['purchase' => $purchase], function($message) use($purchase){
                                      $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Petit rappel concernant votre abonnement');
                                      $message->from('eventsoschool@gmail.com', 'Oschool');
                                    });
                                }
                                else {

                                }
                            }

                        }
                        else {
                            break;
                        }

                    }

            }

        }


    }//fin function handle
}
