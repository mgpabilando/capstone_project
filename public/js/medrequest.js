function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
};

//{{-----------------------------VIEW RESIDENT SCRIPT--------------------------------}}
    $('#viewNewConsultation').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var medicine_name = button.data('medicine_name')
        var med_quantity = button.data('med_quantity')

        var modal = $(this)
        modal.find('.modal-title').text('MEDICINE REQUEST');
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #medicine_name').val(medicine_name);
        modal.find('.modal-body #med_quantity').val(med_quantity);
    });

//{{-----------------------------DELETE RESIDENT SCRIPT--------------------------------}}
    $('#deletenewconsultation').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-title').text('Delete Medicine Request');
        modal.find('.modal-body #id').val(id);
    });

//{{-----------------------------EDIT RESIDENT SCRIPT--------------------------------}}

    $('#editnewconsultation').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var medicine_name = button.data('medicine_name')
        var med_quantity = button.data('med_quantity')

        var modal = $(this)
        modal.find('.modal-title').text('MEDICINE REQUEST');
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #medicine_name').val(medicine_name);
        modal.find('.modal-body #med_quantity').val(med_quantity);
    });