
<script src="{{ asset ('js/jquery-3.4.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> 
<script src="{{ asset('js/ijaboCropTool-master/ijaboCropTool.min.js') }}"></script>
<script src="{{ asset('js/general.js') }}"></script>
<script src="{{ asset('js/medrequest.js') }}"></script>
<script src="{{ asset('js/medrequestPrint.js') }}"></script>
<script src="{{ asset('js/datatables.js') }}"></script>
<script src="{{ asset('js/residentprofile.js') }}"></script>
<script src="{{ asset('js/healthconsultation.js') }}"></script>
<script src="{{ asset('js/familynumbering.js') }}"></script>

@include('sweetalert::alert')

@yield('scripts')