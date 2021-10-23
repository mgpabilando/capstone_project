@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    {{-- <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Events</h3>
        </div>
    </div>

    <div class="col-md-9 content">
        <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
            <div class="res-prof"><a href="dashboard.php"><i class="fas fa-chevron-left"></i></a>EVENT</div>
            <form class="dbres-search">
                <input class="dbres-input" placeholder="Search...">
                <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="container position-relative d-flex flex-row resident-list">
            <div class="col-4 even-upcoming-list">
                <div class=" position-relative db-event">
                    <p class=" up-event">Upcoming Event</p>
                    <div class="justify-content-center d-flex event-list">
                        <div class="event-data">
                            <p class="event-title">Event Title: </p>
                            <p class="event-date">Date: </p>
                            <p class="event-time">Time: </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 position-relative d-flex add-event">
                <button type="button" class="btn-add-event text-wrap" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-calendar-day"></i> Add Event </button>

                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">ADD EVENT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="add-resident">
                                    <div class="d-flex flex-wrap identification">
                                        <div class="input-box">
                                            <div class="details">Event Title:</div>
                                            <input type="text" placeholder="" required>
                                        </div>
                                        <div class="input-box">
                                            <div class="details">Date:</div>
                                            <input type="date" placeholder="" required>
                                        </div>
                                        <div class="input-box">
                                            <div class="details">Time:</div>
                                            <input type="time" placeholder="" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Add Event</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event modal end -->

            </div>

        </div>
    </div> --}}

    <div id='calendar'></div>

</div>
@endsection
