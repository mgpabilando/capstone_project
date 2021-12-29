
$('#registerresident').on('hidden.bs.modal', function () {
$('#registerresident form')[0].reset();
});


//    {{-----------------------------EDIT RESIDENT SCRIPT--------------------------------}}
$('#editResidentModal').on('show.bs.modal', function(event) {
   var button = $(event.relatedTarget)
   var resident_id = button.data('resident_id')
   var fname = button.data('fname')
   var lname = button.data('lname')
   var mname = button.data('mname')
   var purok = button.data('purok')
   var age = button.data('age')
   var bdate = button.data('bdate')
   var placeofbirth = button.data('placeofbirth')
   var family_id = button.data('family_id')
   var phil_health_id = button.data('phil_health_id')
   var id_4ps = button.data('id_4ps')
   var mobile = button.data('mobile')
   var sex = button.data('sex')
   var civil_status = button.data('civil_status')

   var modal = $(this)
   modal.find('.modal-title').text('Edit Resident Profile');
   modal.find('.modal-body #resident_id').val(resident_id);
   modal.find('.modal-body #purok').val(purok);
   modal.find('.modal-body #family_id').val(family_id);
   modal.find('.modal-body #fname').val(fname);
   modal.find('.modal-body #mname').val(mname);
   modal.find('.modal-body #lname').val(lname);
   modal.find('.modal-body #age').val(age);
   modal.find('.modal-body #bdate').val(bdate);
   modal.find('.modal-body #placeofbirth').val(placeofbirth);
   modal.find('.modal-body #sex').val(sex);
   modal.find('.modal-body #civil_status').val(civil_status);
   modal.find('.modal-body #mobile').val(mobile);
   modal.find('.modal-body #phil_health_id').val(phil_health_id);
   modal.find('.modal-body #id_4ps').val(id_4ps);
   })


//   {{-----------------------------DELETE RESIDENT SCRIPT--------------------------------}
$('#deleteResidentModal').on('show.bs.modal', function(event) {
   var button = $(event.relatedTarget)
   var resident_id = button.data('resident_id')


   var modal = $(this)
   modal.find('.modal-title').text(' Delete Resident Profile');
   modal.find('.modal-body #resident_id').val(resident_id);
})



//   {{-----------------------------VIEW RESIDENT SCRIPT--------------------------------}
$('#viewResidentModal').on('show.bs.modal', function(event) {
   var button = $(event.relatedTarget)
   var resident_id = button.data('resident_id')
   var fname = button.data('fname')
   var lname = button.data('lname')
   var mname = button.data('mname')
   var purok = button.data('purok')
   var age = button.data('age')
   var bdate = button.data('bdate')
   var placeofbirth = button.data('placeofbirth')
   var family_id = button.data('family_id')
   var phil_health_id = button.data('phil_health_id')
   var id_4ps = button.data('id_4ps')
   var mobile = button.data('mobile')
   var sex = button.data('sex')
   var civil_status = button.data('civil_status')

   var modal = $(this)
   modal.find('.modal-title').text('RESIDENT PROFILE');
   modal.find('.modal-body #resident_id').val(resident_id);
   modal.find('.modal-body #purok').val(purok);
   modal.find('.modal-body #family_id').val(family_id);
   modal.find('.modal-body #fname').val(fname);
   modal.find('.modal-body #mname').val(mname);
   modal.find('.modal-body #lname').val(lname);
   modal.find('.modal-body #age').val(age);
   modal.find('.modal-body #bdate').val(bdate);
   modal.find('.modal-body #placeofbirth').val(placeofbirth);
   modal.find('.modal-body #sex').val(sex);
   modal.find('.modal-body #civil_status').val(civil_status);
   modal.find('.modal-body #mobile').val(mobile);
   modal.find('.modal-body #phil_health_id').val(phil_health_id);
   modal.find('.modal-body #id_4ps').val(id_4ps);
})

