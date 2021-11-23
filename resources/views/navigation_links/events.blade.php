@extends('layouts.home')

@section('content')
<style>
#content {
    width: calc(100% - 260px);
    height: auto;
    background-color: none;
}

#calendar {
    width: 100%;
    font-size: 12px;
}

.btnadd{
    width: 100%;
    transform: translateX(100px)
}

.btn {
    width: 200px;
}

.btn-success:hover{
    box-shadow: 0 0 10px gray;
    font-weight: bold;
}

.btn-warning{
    color: white;
}
.btn-warning:hover{
    box-shadow: 0 0 10px gray;
    color: white;
    font-weight: bold;
}

.btn-danger:hover{
    box-shadow: 0 0 10px gray;
    font-weight: bold;
}

.fc-state-down, .fc-state-active {
    background-color: #08aeea;
    background-image: none;
    box-shadow: none;
    color: white;
}


</style>


<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Manage Events</h3>
            
        </div>
    </div>

    <div class="container m-2">
        <div class="row" style="justify-content: center;">

            <div class="add-sec d-flex">
                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ \Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            <div class="col-9 d-flex">
                <div class="panel panel-default" style="box-shadow: 0 0 10px gray; padding:10px">
                    <div class="panel-body justify-content-center">
                        <div id='calendar' class="calendar"></div>
                    </div>
                </div>
                {{-- <br>
                <div class="btnadd">
                    <button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#addevent">ADD EVENT</button>
                    <button type="button" class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#editevent">EDIT EVENT</button>
                    <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#deleteevent    ">DELETE EVENT</button>
                </div> --}}
            </div>
        </div>

        {{-- -----------------------------------ADD MODAL---------------------------------- --}}
        <div class="modal fade" id="addevent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: seagreen; color:white">
                <h5 class="modal-title" id="staticBackdropLabel">ADD EVENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action=" {{route('events.action')}} " method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input_event row pb-3">
                            <div class="label_event">Event Title:</div>
                            <input type="text" class="form-control" id="title" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Choose a Color:</div>
                            <input type="color" class="form-control" id="color" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter Start:</div>
                            <input type="datetime-local" class="form-control" id="start" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter End:</div>
                            <input type="datetime-local" class="form-control" id="end" placeholder="">
                        </div>  
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="submitButton">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        {{-- -----------------------------------EDIT MODAL---------------------------------- --}}
        <div class="modal fade" id="editevent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: gold; color:white">
                <h5 class="modal-title" id="staticBackdropLabel">EDIT EVENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form class="edit_event" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input_event row pb-3">
                            <div class="label_event">Event Title:</div>
                            <input type="text" class="form-control" id="title" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Choose a Color:</div>
                            <input type="color" class="form-control" id="color" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter Start:</div>
                            <input type="datetime-local" class="form-control" id="start" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter End:</div>
                            <input type="datetime-local" class="form-control" id="end" placeholder="">
                        </div>  
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        {{-- -----------------------------------DELETE MODAL---------------------------------- --}}
        <div class="modal fade" id="deleteevent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: crimson; color:white">
                <h5 class="modal-title" id="staticBackdropLabel">DELETE EVENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form class="delete_event" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input_event row pb-3">
                            <div class="label_event">Event Title:</div>
                            <input type="text" class="form-control" id="title" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Choose a Color:</div>
                            <input type="color" class="form-control" id="color" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter Start:</div>
                            <input type="datetime-local" class="form-control" id="start" placeholder="">
                        </div>  
                        <div class="input_event row pb-3">
                            <div class="label_event">Enter End:</div>
                            <input type="datetime-local" class="form-control" id="end" placeholder="">
                        </div>  
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Ok</button>
                    </div>
                </form>
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
            height: 480,
            defaultView: 'dayGridMonth',
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay,listWeek',
            },
            events:'/events',
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            display: bakc
            {
                var title = prompt('Event Title:');
                // $('#addevent').modal('show'); 

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
