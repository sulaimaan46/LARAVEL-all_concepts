@extends('layouts.master')

@section('title')

    Lar-Sulai-Student

@endsection

@section('content')



    <!------ Include the above in your HEAD tag ---------->



    <div class="card">
        <div class="card-header">
            <h3>CRUD</h3>
            <h5 class="card-title mb-0">Registration Form</h5><br>
            <p class="card-text">We recommend using you can indicate invalid and valid form fields with is also supported with these classes.</p>
        </div>
        <div class="card-body">
            <form action="{{url('/')}}/insert_student" method ="post" class="form_submit">
                @csrf
                <div class="form-row">
                        <label for="validationServer01"> Name</label>
                        <input type="text" class="form-control" id="validationServer01"name="name" placeholder="Enter Your Name *"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>

                        <label for="validationServerUsername">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="email" class="form-control" id="validationServerUsername" name="email" placeholder="Enter Your Email *" aria-describedby="inputGroupPrepend3" required>

                        </div>

                        <label for="validationServer02"> Phone Number</label>
                        <input type="text" class="form-control" id="validationServer02" name="phone_number" placeholder="Enter Your Number *"  required>


                        <label for="validationServer06">Address</label>
                        <input type="text" class="form-control" id="validationServer06" name="address" placeholder="Enter Your Address" required>
                    </div>
                <br>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" class="form-control" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <div >
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection
