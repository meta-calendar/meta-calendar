@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <ul>
                        @foreach ($calendar->VEVENT as $event)
                            <?php
                            $start = $event->DTSTART;
                            $end = $event->DTEND;
                            ?>
                            <li>
                                Summary: {{$event->SUMMARY}}<br>
                                Description: {{$event->DESCRIPTION}}<br>

                                <pre>
                                    {{$event->serialize()}}
                                </pre>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
