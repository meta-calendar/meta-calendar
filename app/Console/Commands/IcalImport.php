<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IcalImport extends Command
{
    protected $calendars = [
        'bonnjetzt' => 'http://bonn.jetzt/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true'
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ical:import {calendar}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $calendar = $this->argument('calendar');
        var_dump($calendar);
    }
}
