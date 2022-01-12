
$('#registerresident').on('hidden.bs.modal', function () {
$('#registerresident form')[0].reset();
});


//    {{-----------------------------EDIT RESIDENT SCRIPT--------------------------------}}
$('#editResidentModal').on('show.bs.modal', function(event) {
   var button = $(event.relatedTarget)
   var resident_id = button.data('resident_id')
   var family_id = button.data('family_id')
   var family_head = button.data('family_head')
   var fname = button.data('fname')
   var lname = button.data('lname')
   var mname = button.data('mname')
   var age = button.data('age')
   var bdate = button.data('bdate')
   var placeofbirth = button.data('placeofbirth')
   var phil_health_id = button.data('phil_health_id')
   var id_4ps = button.data('id_4ps')
   var mobile = button.data('mobile')
   var sex = button.data('sex')
   var civil_status = button.data('civil_status')

   var modal = $(this)
   modal.find('.modal-title').text('Edit Resident Profile');
   modal.find('.modal-body #Eresident_id').val(resident_id);
   modal.find('.modal-body #Efamily_id').val(family_id);
   modal.find('.modal-body #Efamily_head').val(family_head);
   modal.find('.modal-body #Efname').val(fname);
   modal.find('.modal-body #Emname').val(mname);
   modal.find('.modal-body #Elname').val(lname);
   modal.find('.modal-body #Eage').val(age);
   modal.find('.modal-body #Ebdate').val(bdate);
   modal.find('.modal-body #Eplaceofbirth').val(placeofbirth);
   modal.find('.modal-body #Esex').val(sex);
   modal.find('.modal-body #Ecivil_status').val(civil_status);
   modal.find('.modal-body #Emobile').val(mobile);
   modal.find('.modal-body #Ephil_health_id').val(phil_health_id);
   modal.find('.modal-body #Eid_4ps').val(id_4ps);
   })


//   {{-----------------------------DELETE RESIDENT SCRIPT--------------------------------}
$('#deleteResidentModal').on('show.bs.modal', function(event) {
   var button = $(event.relatedTarget)
   var resident_id = button.data('resident_id')

   var modal = $(this)
   modal.find('.modal-title').text(' Delete Resident Profile');
   modal.find('.modal-body #resident_id').val(resident_id);
})

//   {{-----------------------------DELETE PERMANENTLY RESIDENT SCRIPT--------------------------------}
$('#deleteModal').on('show.bs.modal', function(event) {
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
   var family_id = button.data('family_id')
   var family_head = button.data('family_head')
   var fname = button.data('fname')
   var lname = button.data('lname')
   var mname = button.data('mname')
   var age = button.data('age')
   var bdate = button.data('bdate')
   var placeofbirth = button.data('placeofbirth')
   var phil_health_id = button.data('phil_health_id')
   var id_4ps = button.data('id_4ps')
   var mobile = button.data('mobile')
   var sex = button.data('sex')
   var civil_status = button.data('civil_status')

   var modal = $(this)
   modal.find('.modal-title').text('View Resident Profile');
   modal.find('.modal-body #resident_id').val(resident_id);
   modal.find('.modal-body #family_id').val(family_id);
   modal.find('.modal-body #family_head').val(family_head);
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

    function EditAge() {
     var birth_date = new Date(document.getElementById("Ebdate").value);
     var birth_date_day = birth_date.getDate();
     var birth_date_month = birth_date.getMonth()
     var birth_date_year = birth_date.getFullYear();

     var today_date = new Date();
     var today_day = today_date.getDate();
     var today_month = today_date.getMonth();
     var today_year = today_date.getFullYear();

     var calculated_age = 0;

     if (today_month > birth_date_month) {
         calculated_age = today_year - birth_date_year;
     }
     else if (today_month == birth_date_month)
     {
         if (today_day >= birth_date_day) {
             calculated_age = today_year - birth_date_year;
         }
         else {
             calculated_age = today_year - birth_date_year - 1;
         }
     }

     else {
         calculated_age = today_year - birth_date_year - 1;
     }

     var output_value = calculated_age;

     if(output_value <= 0){
         calculated_age = 0;
     }
     else{
         calculated_age = output_value;
     }
     document.getElementById('Eage').value = calculated_age;
    }
