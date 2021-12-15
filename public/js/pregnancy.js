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