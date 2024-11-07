<?php 

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateWaterLevel extends Command
{
    protected $signature = 'water:update';
    protected $description = 'Update the water level every second';

    public function handle()
    {
        // Fetch the first entry in water_logs
        $waterData = DB::table('water_logs')->first();

        if ($waterData) {
            // Calculate the new water level
            $newLevel = $waterData->current_level 
                        + $waterData->incoming_rate 
                        - $waterData->outgoing_rate;

            // Prevent negative water level
            $newLevel = max($newLevel, 0);

            // Update the water level in the database
            DB::table('water_logs')->update([
                'current_level' => $newLevel,
                'updated_at' => now(),
            ]);

            $this->info("Water level updated to: {$newLevel}");
        }
    }

    // Define the schedule directly in the command (Laravel 11 feature)
    public function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
    {
        $schedule->command(static::class)->everySecond();
    }
}
