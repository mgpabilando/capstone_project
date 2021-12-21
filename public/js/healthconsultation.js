//_________________PREGNANCY__________________//
    // {{-----------------------------VIEW PREGNANCY RECORD SCRIPT--------------------------------}}
    $('#viewpregconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var pregnant_id = button.data('pregnant_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var height_cm = button.data('height_cm')
        var weight_kg = button.data('weight_kg')
        var age = button.data('age')
        var lmp = button.data('lmp')
        var pregnancyorder = button.data('pregnancyorder')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vpregnant_id').val(pregnant_id);
        modal.find('.modal-body #Vresident_id').val(resident_id);
        modal.find('.modal-body #Vname').val(name);
        modal.find('.modal-body #Vheight').val(height_cm);
        modal.find('.modal-body #Vweight').val(weight_kg);
        modal.find('.modal-body #Vage').val(age);
        modal.find('.modal-body #Vlmp').val(lmp);
        modal.find('.modal-body #Vpregnancyorder').val(pregnancyorder);
    });

    //{{-----------------------------EDIT PREGNANCY RECORD SCRIPT--------------------------------}}
    $('#editpregconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var pregnant_id = button.data('pregnant_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var height_cm = button.data('height_cm')
        var weight_kg = button.data('weight_kg')
        var age = button.data('age')
        var lmp = button.data('lmp')
        var pregnancyorder = button.data('pregnancyorder')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Epregnant_id').val(pregnant_id);
        modal.find('.modal-body #Eresident_id').val(resident_id);
        modal.find('.modal-body #Ename').val(name);
        modal.find('.modal-body #Eheight').val(height_cm);
        modal.find('.modal-body #Eweight').val(weight_kg);
        modal.find('.modal-body #Eage').val(age);
        modal.find('.modal-body #Elmp').val(lmp);
        modal.find('.modal-body #Epregnancyorder').val(pregnancyorder);
        });

    //{{-----------------------------DELETE PREGNANCY SCRIPT--------------------------------}}
    $('#deletepregconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var pregnant_id = button.data('pregnant_id')


        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Dpregnant_id').val(pregnant_id);
    });
//____END_________________PREGNANCY__________________//

//_________________DELIVERIES__________________//
    // {{-----------------------------VIEW DELIVERIES RECORD SCRIPT--------------------------------}}
    $('#viewdeliveriesconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var deliveries_id = button.data('deliveries_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')
        var meds_given = button.data('date_delivered')
        var outcome = button.data('outcome')
        var place = button.data('place')


        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vdeliveries_id').val(deliveries_id);
        modal.find('.modal-body #VresID').val(resident_id);
        modal.find('.modal-body #Vresname').val(name);
        modal.find('.modal-body #Vage').val(age);
        modal.find('.modal-body #Vdate_delivered').val(date_delivered);
        modal.find('.modal-body #Voutcome').val(outcome);
        modal.find('.modal-body #Vplace').val(place);
    });

    //{{-----------------------------EDIT DELIVERIES RECORD SCRIPT--------------------------------}}
    $('#editdeliveriesconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var deliveries_id = button.data('deliveries_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')
        var date_delivered = button.data('date_delivered')
        var outcome = button.data('outcome')
        var place = button.data('place')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Edeliveries_id').val(deliveries_id);
        modal.find('.modal-body #EresID').val(resident_id);
        modal.find('.modal-body #Eresname').val(name);
        modal.find('.modal-body #Eage').val(age);
        modal.find('.modal-body #Edate_delivered').val(date_delivered);
        modal.find('.modal-body #Eoutcome').val(outcome);
        modal.find('.modal-body #Eplace').val(place);
        });

    //{{-----------------------------DELETE DELIVERIES SCRIPT--------------------------------}}
    $('#deletedeliveriesconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var deliveries_id = button.data('deliveries_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Ddeliveries_id').val(deliveries_id);
    });
//____END_________________DELIVERIES__________________//

//_________________EPI__________________//
    //{{-----------------------------VIEW EPI SCRIPT--------------------------------}}
    $('#viewepiconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var birthdate = button.data('birthdate')
        var meds_given = button.data('meds_given')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vepi_id').val(epi_id);
        modal.find('.modal-body #VresID').val(resident_id);
        modal.find('.modal-body #Vresname').val(name);
        modal.find('.modal-body #Vbirthdate').val(birthdate);
        modal.find('.modal-body #Vmeds_given').val(meds_given);
    });

    //{{-----------------------------EDIT EPI RECORD SCRIPT--------------------------------}}
    $('#editepiconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var birthdate = button.data('birthdate')
        var meds_given = button.data('meds_given')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Eepi_id').val(epi_id);
        modal.find('.modal-body #EresID').val(resident_id);
        modal.find('.modal-body #Eresname').val(name);
        modal.find('.modal-body #Ebirthdate').val(birthdate);
        modal.find('.modal-body #Emeds_given').val(meds_given);
        });

    //{{-----------------------------DELETE EPI SCRIPT--------------------------------}}
    $('#deleteepiconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Depi_id').val(epi_id);
    });
//____END_________________DELIVERIES__________________//

//_________________NTP__________________//
    //{{-----------------------------VIEW NTP SCRIPT--------------------------------}}
    $('#viewntpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var birthdate = button.data('birthdate')
        var meds_given = button.data('meds_given')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vepi_id').val(epi_id);
        modal.find('.modal-body #VresID').val(resident_id);
        modal.find('.modal-body #Vresname').val(name);
        modal.find('.modal-body #Vbirthdate').val(birthdate);
        modal.find('.modal-body #Vmeds_given').val(meds_given);
    });
  //{{-----------------------------EDIT NTP RECORD SCRIPT--------------------------------}}
    $('#editntpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var birthdate = button.data('birthdate')
        var meds_given = button.data('meds_given')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Eepi_id').val(epi_id);
        modal.find('.modal-body #EresID').val(resident_id);
        modal.find('.modal-body #Eresname').val(name);
        modal.find('.modal-body #Ebirthdate').val(birthdate);
        modal.find('.modal-body #Emeds_given').val(meds_given);
        });

    //{{-----------------------------DELETE NTP SCRIPT--------------------------------}}
    $('#deletentpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var epi_id = button.data('epi_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Depi_id').val(epi_id);
    });
//____END_________________NTP__________________//

//_________________FAMILY PLANNING__________________//
    //{{-----------------------------VIEW FAMILY PLANNING SCRIPT--------------------------------}}
    $('#viewfpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var familyplanning_id = button.data('familyplanning_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')
        var method_used = button.data('method_used')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vfamilyplanning_id').val(familyplanning_id);
        modal.find('.modal-body #VresID').val(resident_id);
        modal.find('.modal-body #Vresname').val(name);
        modal.find('.modal-body #Vage').val(age);
        modal.find('.modal-body #Vmethod_used').val(method_used);
    });
  //{{-----------------------------EDIT  FAMILY PLANNING RECORD SCRIPT--------------------------------}}
    $('#editfpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var familyplanning_id = button.data('familyplanning_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')
        var method_used = button.data('method_used')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Efamilyplanning_id').val(familyplanning_id);
        modal.find('.modal-body #EresID').val(resident_id);
        modal.find('.modal-body #Eresname').val(name);
        modal.find('.modal-body #Eage').val(age);
        modal.find('.modal-body #Emethod_used').val(method_used);
    });
    //{{-----------------------------DELETE FAMILY PLANNING SCRIPT--------------------------------}}
    $('#deletefpconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var familyplanning_id = button.data('familyplanning_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Dfamilyplanning_id').val(familyplanning_id);
    });
//____END_________________FAMILY PLANNING__________________//

//_________________CONTROL OF DIARRHEAL PROBLEM__________________//
    //{{-----------------------------VIEW CONTROL OF DIARRHEAL PROBLEM SCRIPT--------------------------------}}
    $('#viewdiarrhealconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var diarrheal_id = button.data('diarrheal_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vdiarrheal_id').val(diarrheal_id);
        modal.find('.modal-body #VresID').val(resident_id);
        modal.find('.modal-body #Vresname').val(name);
        modal.find('.modal-body #Vage').val(age);
    });
    //{{-----------------------------EDIT  CONTROL OF DIARRHEAL PROBLEM RECORD SCRIPT--------------------------------}}
    $('#editdiarrhealconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var diarrheal_id = button.data('diarrheal_id')
        var resident_id = button.data('resident_id')
        var name = button.data('name')
        var age = button.data('age')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Ediarrheal_id').val(diarrheal_id);
        modal.find('.modal-body #EresID').val(resident_id);
        modal.find('.modal-body #Eresname').val(name);
        modal.find('.modal-body #Eage').val(age);
        });
    //{{-----------------------------DELETE CONTROL OF DIARRHEAL PROBLEM SCRIPT--------------------------------}}
    $('#deletediarrhealconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var diarrheal_id = button.data('diarrheal_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Ddiarrheal_id').val(diarrheal_id);
    });
//____END_________________CONTROL OF DIARRHEAL PROBLEM__________________//

//_________________OTHER SERVICES RENDERED__________________//
    //{{-----------------------------VIEW OTHER SERVICES RENDERED SCRIPT--------------------------------}}
    $('#viewotherconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var other_id = button.data('other_id')
        var service_rendered = button.data('service_rendered')
        var daterec = button.data('daterec')

        var modal = $(this)
        modal.find('.modal-title').text('View Consultation Record');
        modal.find('.modal-body #Vother_id').val(other_id);
        modal.find('.modal-body #Votherservice').val(service_rendered);
        modal.find('.modal-body #Vdaterec').val(daterec);
    });
    //{{-----------------------------EDIT OTHER SERVICES RENDERED SCRIPT--------------------------------}}
    $('#editotherconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var other_id = button.data('other_id')
        var service_rendered = button.data('service_rendered')
        var daterec = button.data('daterec')

        var modal = $(this)
        modal.find('.modal-title').text('Update Consultation Record');
        modal.find('.modal-body #Eother_id').val(other_id);
        modal.find('.modal-body #Eotherservice').val(service_rendered);
        modal.find('.modal-body #Edaterec').val(daterec);
    });
    //{{-----------------------------DELETE OTHER SERVICES RENDERED SCRIPT--------------------------------}}
    $('#deleteotherconsul').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var other_id = button.data('other_id')

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Consultation Record');
        modal.find('.modal-body #Dother_id').val(other_id);
    });
//____END_________________OTHER SERVICES RENDERED__________________//
