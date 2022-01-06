@extends('layouts.home')

@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Family Numbering</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="consultation-list container bhms-box-shadow">
                    <div class="title-and-button d-flex justify-content-between align-items-center">
                        <h4 class="consulttable-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Family Numbering</h4> 
                        @if(request()->has('view_deleted'))
                                <a href="{{ route('familynumbering.index') }}" class="btn btn-primary">View All</a>
                        @else
                            <button type="submit" class="btn btn-add me-2" title="Add Family Number" data-bs-toggle="modal" data-bs-target="#addfamilynumber">
                            <i class="fas fa-user-plus"></i> Add</button>
                            @include('modals.family_numbering.Add')
                            <a href="{{ route('familynumbering.index', ['view_deleted' => 'DeletedRecords']) }}"
                            class="btn btn-danger">Trash </a>
                        @endif
                    </div> 
                        <hr>
                    <div class="table-responsive mb-3">
                        <table id="familynumbering-datatable" class="table table-bordered table-striped table-hover" style="padding: 10px">
                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">Family_Number</th>
                                    <th class="text-center" scope="col">Family Head</th>
                                    <th class="text-center" scope="col">Purok</th>
                                    <th class="text-center" scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($familynumberrecord)
                                    @foreach ($familynumberrecord as $familynumberRec)
                                        <tr>
                                            <th class="text-center">{{ $familynumberRec->id }}</th>
                                            <td class="text-center">{{ $familynumberRec->f_name }} {{ $familynumberRec->m_name }} {{ $familynumberRec->l_name }}</td>
                                            <td class="text-center">{{ $familynumberRec->purok }}</td>
                                            <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                                @if (request()->has('view_deleted'))
                                                <a href="{{ route('familyhead.restore', $familynumberRec->id) }}" class="btn btn-success">Restore</a>
                                                
                                                <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal"  data-familynumber_id="{{$familynumberRec->id}}">Delete
                                                </a>
                                                @include('modals.family_numbering.PermanentDelete')
                                                @else
                                                {{-----***************************** SHOW BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewfamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}"
                                                data-f_name = "{{ $familynumberRec->f_name }}" data-m_name = "{{ $familynumberRec->m_name }}" data-l_name = "{{ $familynumberRec->l_name }}"
                                                data-purok="{{ $familynumberRec->purok }}">
                                                <i class="manage fas fa-eye"></i></a>
                                                @include('modals.family_numbering.Show')
                                            
                                                {{-----***************************** EDIT BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editfamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}"
                                                data-f_name = "{{ $familynumberRec->f_name }}" data-m_name = "{{ $familynumberRec->m_name }}" data-l_name = "{{ $familynumberRec->l_name }}"
                                                data-purok="{{ $familynumberRec->purok }}">
                                                <i class="manage fas fa-edit"></i>
                                                </a>
                                                @include('modals.family_numbering.Edit')
                                            
                                                {{-----***************************** DELETE BUTTON *******************************------}}
                                                <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletefamilynumber"
                                                data-familynumber_id="{{ $familynumberRec->id }}">
                                                <i class="manage fas fa-trash"></i>
                                                </a>
                                                @include('modals.family_numbering.Delete')

                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- /row d-flex justify-content-center -->  
    </div> <!--container-fluid -->
</div>
@endsection
