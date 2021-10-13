@extends('layouts.home')
@section('content')

<div class="container">
    <div class="headconsul1">
        <div class="msgandbtnadd d-flex align-items-center justify-content-end">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div type="button" class="btn-add-consul" title="Add Consultation"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                <i class="fas fa-user-plus"></i>&nbsp;Add New</div>
        </div>
        
    </div>
</div>

@overwrite