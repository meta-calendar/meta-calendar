<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Sabre\VObject;

class IcalImport extends Command
{
    protected $calendars = [
        'bonnjetzt' => 'http://bonn.jetzt/?plugin=all-in-one-event-calendar&controller=ai1ec_exporter_controller&action=export_events&no_html=true'
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
        $calendar_url = $this->calendars[$this->argument('calendar')];
        $calendar_text = file_get_contents($calendar_url);

        $calendar = VObject\Reader::read($calendar_text);
        var_dump($calendar);
    }
}
