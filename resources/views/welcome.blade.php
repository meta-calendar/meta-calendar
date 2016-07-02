@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Event Feed</div>

                <div class="panel-body">
                    <ul class="timeline" id="events"></ul>
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
        <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">@{{start}} .. @{{end}}</h4>
            </div>
            <div class="timeline-body">
              <p>@{{summary}}</p>
              <p><a href="@{{url}}">Link</a></p>
            </div>
          </div>
    </li>
    </script>

    <script>
        $(document).ready(function () {
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
