<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use App\Models\PersonNav;
use App\Logics\RegisterProcessLogic;
use App\Helpers\Response as Resp;

class AuthLoginAuthenticated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * If user is authenticated then we need to save his last session
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /**
        * Make $user variabloe globally
        * so that it can be accessed in all views
        */
        if (! request()->expectsJson()) {
            //depricated, will be removed!
            view()->share('user', $event->user);
            
            //set user token to browser storage
            $token = auth()->guard('api')->tokenById($event->user->id);
           // $token = auth()->guard('api')->refresh(true);
            view()->share('apiToken', $token);
        }
    }
}