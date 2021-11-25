@extends('layouts.home')

@section('content')

<style>
    #calendar {
    max-width: 100%;
    margin: 20px auto;
    }

    #calendar .fc-toolbar.fc-header-toolbar{
    margin-bottom: 1em;
    font-size: 12px;
}
    #calendar .fc-toolbar.fc-header-toolbar h2{
        font-size: 25px;
    }

    #calendar .fc-head-container .fc-widget-header
    {
        font-size: 12px;
    }

    #calendar .fc-view-container
    {
        font-size: 11px;
    }

    #calendar .fc-event
    {
        background-color: #0bb3e2;
    }

    #calendar a
    {
        color: #212529;
        text-decoration: none;
        font-size: 11px;
    }

    #calendar .fc .fc-col-header-cell-cushion {
    display: inline-block;
    padding: 2px 4px;
    font-size: 11px;
    }

    #calendar .fc-button-group
    {
        background-color: #212529;
        color: white;
    }

    #content
    {
        height: auto;
    }

</style>

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Manage Events</h3>
        </div>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center;">

            <div class="add-sec d-flex">
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ \Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            <div class="calendarcontainer">
                <div class="panel" style="box-shadow: 0 0 10px gray; padding:10px">
                    <div class="panel-body justify-content-center">
                        <div id='calendar' class="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
        });
    
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            displayEventTime: true,
            height: 500,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay,listWeek'
            },
            events:'/events',
            eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            display: bakc
            {
                var title = prompt('Event Title:');

                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
    
                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
    
                    $.ajax({
                        url:"events/action",
                        type:"POST",
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        success:function(data)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Created Successfully");
                            
                        }
                    })
                }
            },

            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"events/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },
            eventDrop: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"events/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },
    
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"events/action",
                        type:"POST",
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Deleted Successfully");
                        }
                    })
                }
            }
        });
    
});
</script>

@endsection
