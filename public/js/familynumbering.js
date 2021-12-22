$('#editfamilynumber').on('hidden.bs.modal', function () {
    $('#editfamilynumber form')[0].reset();
});

 // {{-----------------------------VIEW FAMILY NUMBERING RECORD SCRIPT--------------------------------}}
 $('#viewfamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
    var resident_id = button.data('resident_id')
    var name = button.data('name')
    var purok = button.data('purok')

    var modal = $(this)
    modal.find('.modal-title').text('View Record');
    modal.find('.modal-body #Vfamilynumber_id').val(familynumber_id);
    modal.find('.modal-body #Vresident_id').val(resident_id);
    modal.find('.modal-body #Vresname').val(name);
    modal.find('.modal-body #purok').val(purok);

});

//{{-----------------------------EDIT FAMILY NUMBERING RECORD SCRIPT--------------------------------}}
$('#editfamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
    var resident_id = button.data('resident_id')
    var name = button.data('name')
    var purok = button.data('purok')

    var modal = $(this)
    modal.find('.modal-title').text('Update Record');
    modal.find('.modal-body #Efamilynumber_id').val(familynumber_id);
    modal.find('.modal-body #EresID').val(resident_id);
    modal.find('.modal-body #Eresname').val(name);
    modal.find('.modal-body #purok').val(purok);
    });

//{{-----------------------------DELETE FAMILY NUMBERING SCRIPT--------------------------------}}
$('#deletefamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')


    var modal = $(this)
    modal.find('.modal-title').text(' Delete Record');
    modal.find('.modal-body #Dfamilynumber_id').val(familynumber_id);
});