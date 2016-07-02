<?php

namespace App\Domain;

class Event
{
    private $summary;
    private $start;
    private $end;
    private $location;
    private $url;

    /**
     * Event constructor.
     * @param $summary
     * @param $start
     * @param $end
     * @param $location
     * @param $url
     */
    public function __construct($summary, $start, $end, $location, $url) {
        $this->summary = $summary;
        $this->start = $start;
        $this->end = $end;
        $this->location = $location;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * @return mixed
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * @return mixed
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * @return mixed
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

}
