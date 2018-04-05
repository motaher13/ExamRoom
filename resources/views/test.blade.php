<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{!! asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') !!}">
</head>

<body>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Calendar</div>
                <div class="panel-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>

<a class="deleteBtn" href="#" data-toggle="modal" data-target="#details">
    <i class="icon-tag"></i> Delete </a>

<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="details_header" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="details_header">abul</h4>
            </div>
            <div class="modal-body" id="details_body">
                <h2>abul</h2>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="{!! asset('assets/global/plugins/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/global/plugins/fullcalendar/moment.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') !!}"></script>
<script>

    $(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            weekMode: 'liquid',
            weekends: true,

            eventSources: [

                // your event source
                {
                    events: [ // put the array in the `events` property

                        @foreach ($courses as $course)
                        {
                            title  : '{{$course->course->title}}',
                            start  : '{{$course->start_date}}',
                            end    : '{{$course->end_date}}'
                        },
                        @endforeach
                    ],
                    color: '#f05050',

                },

            ],

            eventClick: function(event) {

{{--               alert('{{$course->course->short_description}}');--}}
                $("#details_header").text('{{$course->course->title}}');
                $("#details_body").html('{{$course->course->short_description}}');
                $("#details").modal('show');

            },
        });

    });


</script>
</body>
</html>