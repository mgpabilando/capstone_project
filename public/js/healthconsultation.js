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

// {{-----------------------------VIEW DELIVERIES RECORD SCRIPT--------------------------------}}
$('#viewdeliveriesconsul').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var deliveries_id = button.data('deliveries_id')
    var resident_id = button.data('resident_id')
    var name = button.data('name')
    var age = button.data('age')
    var date_delivered = button.data('date_delivered')
    var outcome = button.data('Voutcome')
    var place = button.data('age')


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