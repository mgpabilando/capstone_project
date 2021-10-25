@extends('layouts.home')
@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Manage Account</h3>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12 manage-acc">

        <div class="row">
         <div class="col-md-12 d-flex justify-content-between align-items-center">
          <h4>Personal Information</h4>
          <button type="button" class=update-btn name="button">UPDATE</button>
        </div>
        </div>

        <hr style="width:100%">

           <form>
            <div class="row">
             <div class="col-md-6 mb-1">
               <div class="form-dp justify-content-center">
                 <input type="file" class="custom-file-input" accept="image/jpeg">
                 <img src="{{asset ('images/profile.jpeg') }}" alt="profile">
               </div>

             </div>
           </div>

             <div class="row">
               <div class="col-md-6 mb-1">
                 <div class="form-outline">
                   <label class="form-label" for="firstName">First Name</label>
                   <input type="text" id="firstName" class="form-control" />
                 </div>

               </div>
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                    <label class="form-label" for="lastName">Last Name</label>
                   <input type="text" id="lastName" class="form-control" />
                 </div>

               </div>
             </div>

             <div class="row">
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                   <label class="form-label" for="address">Address</label>
                   <input type="text" id="address" class="form-control" />
                 </div>

               </div>
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                    <label class="form-label" for="contact">Contact No.:</label>
                   <input type="text" id="contact" class="form-control" />
                 </div>

               </div>
             </div>

             <div class="row">
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                   <label class="form-label" for="bdate">Birthdate</label>
                   <input type="date" id="bdate" class="form-control" />
                 </div>

               </div>
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                    <label class="form-label" for="age">Age:</label>
                   <input type="text" id="age" class="form-control" />
                 </div>

               </div>
             </div>

             <h4 class="mt-3">Account Information</h4>
             <hr style="width:100%">

             <div class="row mb-3">
               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                   <label class="form-label" for="bdate">E-mail</label>
                   <input type="text" id="bdate" class="form-control" />
                 </div>
               </div>

               <div class="col-md-6 mb-1">

                 <div class="form-outline">
                   <label class="form-label" for="bdate">Password</label>
                   <input type="password" id="bdate" class="form-control" />
                 </div>
               </div>
             </div>






           </form>

    </div>

</div>
@endsection
