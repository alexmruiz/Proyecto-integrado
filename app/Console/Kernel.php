<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SendEventReminders;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        SendEventReminders::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('send:event-reminders')->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
