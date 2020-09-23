<?php

namespace App\Listeners;

use App\Events\AssignLotProgram;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Traits\NodeTrait;
use Auth;

class AssignLotProgramListen
{
    use NodeTrait;
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
     * Handle the event.
     *
     * @param  AssignLotProgram  $event
     * @return void
     */
    public function handle(AssignLotProgram $event)
    {

        $root = '';

        foreach($event as $item)
        {
            if($item->id == 1)
            {
                $root = Zes::create(['user_id'=>Auth::id()]);

                //return redirect()->back()->with('success', 'Successful create node');

            }
            elseif($item->id == 3)
            {
                $root = Zes::create(['user_id'=>Auth::id()]);

                //return redirect()->back()->with('success', 'Successful create node');
            }
            // elseif($item->id == 4)
            // {
            //     //assign to partner program RM5000
            // }
        }

        return $root;
    }
}
