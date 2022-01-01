    <div class="modal fade" id="medrequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Generate Medicine Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="medrequestPrint" style="width:100%;" class="form-group-mar" method="post">
                <div class="d-flex justify-content-center flex-column mar-report">
                <h5 class="text-center">MEDICINE REQUEST FORM</h5>
                    <br>
                    <div  class="request_form">
                        <p class="mb-1 fw-bold req_name">Requested By: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" style="border-radius: 0px;" name="" value=""></p>
                        <p class="mb-1 fw-bold req_name">Date Requested: <input type="date" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase req_date"  style="border-radius: 0px;" name="" value=""></p>
                        <p class="lh-sm fw-bold req_name">Request No.: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name=""  style="border-radius: 0px;" value=""></p>
                        <p class="lh-sm fst-italic text-uppercase fw-bold req_name">Medicine Needed:</p>
    
                        <center>
    
    
                        <table style="width:100%" class="table table-bordered border-dark">
    
                            <thead>
                            <tr>
                            <th class="text-center"scope="col">QUANTITY</th>
                            <th class="text-center"scope="col">MEDICINE NAME</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>data1</td>
                            <td>data2</td>
                            </tr>
                            </tbody>
                            </table>
                            </center>
                            </div>
                            <br>
                            <div class="d-flex flex-row-reverse signature-line ">
                            <p class="name_signature fw-bold mb-0 border-top ">Signature Over Printed Name</p>
                    </div>
                </div>
            </form>
    
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
            <button id="medreqBtn" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button>
            </div>
        </div>
        </div>
    </div>