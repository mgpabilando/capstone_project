//BHW-DATATABLE //
    $('#bhw-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 10 }]
    });
//END____BHW-DATATABLE //

//RESIDENTPROFILE-DATATABLE //
$('#residentprofile-datatable').DataTable
({
    columnDefs: 
    [{ orderable: false, targets: 7 }]
});
//END____RESIDENTPROFILE-DATATABLE //

//_________ {{-- HEALTH CONSULTATION TABLES --}} _________ //
    //PREGNANCY-DATATABLE //
    $('#pregnancy-datatable').DataTable
    ({
        columnDefs: 
            [{ orderable: false, targets: 10 }],
    });
    //END____PREGNANCY-DATATABLE //

    //DELIVERIES-DATATABLE //
    $('#deliveries-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 9 }]
    });
    //END____DELIVERIES-DATATABLE //

    //EPI-DATATABLE //
    $('#EPI-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 7 }]
    });
    //END____EPI-DATATABLE //

    //NTP-DATATABLE //
    $('#NTP-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 6 }]
    });
    //END____NTP-DATATABLE //

    //FAMILY PLANNING-DATATABLE //
    $('#familyplanning-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 6 }]
    });
    //END____FAMILY PLANNING-DATATABLE //

    //DIARRHEAL PROBLEMS-DATATABLE //
    $('#diarrheal-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 6 }]
    });
    //END____DIARRHEAL PROBLEMS-DATATABLE //

    //OTHER SERVICES-DATATABLE //
    $('#other-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 3 }]
    });
    //END____OTHER SERVICES-DATATABLE //

//FAMILYNUMBERING-DATATABLE //
    $('#familynumbering-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 3 }],
        // initComplete: function () {
        //     this.api().columns(0).every( function () {
        //         var column = this;
        //         var select = $('<select style="font-weight:800;"><option value="">Family Number</option></select>')
        //             .appendTo( $(column.header()).empty() )
        //             .on( 'change', function () {
        //                 var val = $.fn.dataTable.util.escapeRegex(
        //                     $(this).val()
        //                 );
 
        //                 column
        //                     .search( val ? '^'+val+'$' : '', true, false )
        //                     .draw();
        //             } );
 
        //         column.data().unique().sort().each( function ( d, j ) {
        //             select.append( '<option value="'+d+'">'+d+'</option>' )
        //         } );
        //     } );
        // }
    });
//END____FAMILYNUMBERING-DATATABLE //

//PUROK-DATATABLE //
    $('table.purok').DataTable( {
        columnDefs: 
    [{ orderable: false, targets: 5 }],
        initComplete: function () {
            this.api().columns(0).every( function () {
                var column = this;
                var select = $('<select style="font-weight:800;"><option value="">Purok</option></select>')
                    .appendTo( $(column.header()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
//END____PUROK-DATATABLE //

// MED REQUEST-DATATABLE //
$('#medRequest-datatable').DataTable
    ({
        columnDefs: 
        [{ orderable: false, targets: 3 }]
    });

//END____ MED REQUEST-DATATABLE //

$('#DTR-datatable').DataTable
({
    columnDefs: 
    [{ orderable: false, targets: 0 }],
    searching: false,
    "paging":   false,
    "ordering": false,
    "info":     false
});
