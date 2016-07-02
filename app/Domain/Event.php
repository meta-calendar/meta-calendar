<?php

namespace App\Domain;

class Event
{
    /**
     * @var string
     */
    private $summary;

    /**
     * @var \DateTimeInterface
     */
    private $start;

    /**
     * @var \DateTimeInterface
     */
    private $end;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $summary
     * @param \DateTimeInterface $start
     * @param \DateTimeInterface $end
     * @param string $location
     * @param string $url
     */
    public function __construct($summary, \DateTimeInterface $start, \DateTimeInterface $end, $location, $url) {
        $this->summary = $summary;
        $this->start = $start;
        $this->end = $end;
        $this->location = $location;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }
}
