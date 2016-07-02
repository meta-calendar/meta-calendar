<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Sabre\VObject;
use App\Domain\Event;

class HomeController extends Controller
{
    protected $calendars = [
        'bonnjetzt' => 'http://bonn.jetzt/?plugin=all-in-one-event-calendar&controller=ai1ec_exporter_controller&action=export_events&no_html=true'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function events()
    {
        $calendar_url = $this->calendars['bonnjetzt'];
        $calendar_text = file_get_contents($calendar_url);

        $calendar = VObject\Reader::read($calendar_text);

        $events = [];
        foreach ($calendar->VEVENT as $vevent) {
            $events[] = new Event(
                (string)$vevent->SUMMARY,
                new Carbon($vevent->DTSTART),
                new Carbon($vevent->DTEND),
                (string)$vevent->LOCATION,
                (string)$calendar->VEVENT[0]->URL
            );
        }

        return response()->json($events);
    }
}
