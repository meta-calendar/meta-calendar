@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <ul id="events"></ul>
                    Your events
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.2.1/mustache.min.js"></script>

    <script id="event-template" type="template">
        <li>
            <p>@{{summary}}</p>
            <p>@{{start}} .. @{{end}}</p>
            <p><a href="@{{url}}">Link</a></p>
        </li>
    </script>

    <script>
        jQuery(function () {
            $.get('/api/events', function (events) {
                var $events = $('#events'),
                        template = $('#event-template').html();
                for (event in events) {
                    $events.append(Mustache.render(template, event));
                }
            });
        });
    </script>

@endsection