
    $('#editbhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var fname = button.data('fname')
        var lname = button.data('lname')
        var email = button.data('email')
        var age = button.data('age')
        var bdate = button.data('bdate')
        var address = button.data('address')
        var contact = button.data('contact')


        var modal = $(this)
        modal.find('.modal-title').text('Edit Profile');
        modal.find('.modal-body .edituser_id').val(user_id);
        modal.find('.modal-body .editfname').val(fname);
        modal.find('.modal-body .editlname').val(lname);
        modal.find('.modal-body .editemail').val(email);
        modal.find('.modal-body .editage').val(age);
        modal.find('.modal-body .editbdate').val(bdate);
        modal.find('.modal-body .editaddress').val(address);
        modal.find('.modal-body .editcontact').val(contact);
    });

    $('#deletebhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')


        var modal = $(this)
        modal.find('.modal-title').text(' Delete Profile');
        modal.find('.modal-body .deleteuser_id').val(user_id);
    });

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')


        var modal = $(this)
        modal.find('.modal-title').text(' Delete Profile');
        modal.find('.modal-body .deleteuser_id').val(user_id);
        p
    });

    $('#viewbhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var fname = button.data('fname')
        var lname = button.data('lname')
        var email = button.data('email')
        var age = button.data('age')
        var bdate = button.data('bdate')
        var address = button.data('address')
        var contact = button.data('contact')
        var password = button.data('password')

        var modal = $(this)
        modal.find('.modal-title').text('View Record');
        modal.find('.modal-body .user_id').val(user_id);
        modal.find('.modal-body .fname').val(fname);
        modal.find('.modal-body .lname').val(lname);
        modal.find('.modal-body .email').val(email);
        modal.find('.modal-body .age').val(age);
        modal.find('.modal-body .bdate').val(bdate);
        modal.find('.modal-body .address').val(address);
        modal.find('.modal-body .contact').val(contact);
        modal.find('.modal-body .password').val(password);
    });