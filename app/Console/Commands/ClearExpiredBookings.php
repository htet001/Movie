<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\SeatTimetable;
use Illuminate\Console\Command;

class ClearExpiredBookings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-expired-bookings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

     public function handle()
     {
         $timeThreshold = Carbon::now()->subMinutes(1);
 
         SeatTimetable::where('created_at', '<=', $timeThreshold)->delete();
 
         $this->info('Booking data deleted successfully.');
     }
}