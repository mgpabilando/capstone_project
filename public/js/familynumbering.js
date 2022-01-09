$('#editfamilynumber').on('hidden.bs.modal', function () {
    $('#editfamilynumber form')[0].reset();
});

 // {{-----------------------------VIEW FAMILY NUMBERING RECORD SCRIPT--------------------------------}}
 $('#viewfamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
    var f_name = button.data('f_name')
    var m_name = button.data('m_name')
    var l_name = button.data('l_name')
    var purok = button.data('purok')

    var modal = $(this)
    modal.find('.modal-title').text('View Record');
    modal.find('.modal-body #Vfamilynumber_id').val(familynumber_id);
    modal.find('.modal-body #Vf_name').val(f_name);
    modal.find('.modal-body #Vm_name').val(m_name);
    modal.find('.modal-body #Vl_name').val(l_name);
    modal.find('.modal-body #Vpurok').val(purok);

});

//{{-----------------------------EDIT FAMILY NUMBERING RECORD SCRIPT--------------------------------}}
$('#editfamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
    var f_name = button.data('f_name')
    var m_name = button.data('m_name')
    var l_name = button.data('l_name')
    var purok = button.data('purok')

    var modal = $(this)
    modal.find('.modal-title').text('Update Record');
    modal.find('.modal-body #Efamilynumber_id').val(familynumber_id);
    modal.find('.modal-body #Ef_name').val(f_name);
    modal.find('.modal-body #Em_name').val(m_name);
    modal.find('.modal-body #El_name').val(l_name);
    modal.find('.modal-body #Epurok').val(purok);
    });

//{{-----------------------------DELETE FAMILY NUMBERING SCRIPT--------------------------------}}
$('#deletefamilynumber').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
 
 
    var modal = $(this)
    modal.find('.modal-title').text(' Delete Resident Profile');
    modal.find('.modal-body #Dfamilynumber_id').val(familynumber_id);
});

//   {{-----------------------------DELETE PERMANENTLY SCRIPT--------------------------------}
$('#deleteModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var familynumber_id = button.data('familynumber_id')
 
 
    var modal = $(this)
    modal.find('.modal-title').text(' Delete Resident Profile');
    modal.find('.modal-body #familyhead_id').val(familynumber_id);
 })