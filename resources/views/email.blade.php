@extends('layouts.master')

@section('title')

    Lar-Sulai-Email

    @endsection

@section('content')

<div class="container" >
    <h2 >Email SEND</h2>
    <h3 class="notification"></h3>
    <form action={{url('/')}}/emailform class="myform"  method="post"  enctype="multipart/form-data" style="margin-top: 109px;">
        @csrf
        <div class="form-group">
            Name:<input type="text" class="form-control validate" id="name" name="name" placeholder="Enter Your Name" >
        </div>

        <div class="form-group">
            To Email:<input type="email" class="form-control validate" id="email" name="email" placeholder="Enter Your Email" >
        </div>
        <div class="form-group">
            Bcc:<input type="email" class="form-control validate" id="emailbcc" name="emailbcc" placeholder="Enter Your Email" >
        </div>
        <div class="form-group">
            CC:<input type="email" class="form-control validate" id="emailcc" name="emailcc" placeholder="Enter Your Email" >
        </div>
        <div class="form-group">
            Subject:<input type="text" class="form-control validate" id="subject" name="subject" placeholder="Enter Subject" >
        </div>
        <div class="form-group">
            Message:<textarea id="message" class="md-textarea form-control validate" rows="5" name="message" placeholder="Enter Message"></textarea>
        </div>
        <div class="form-group">
            Address:<input type="text" class="form-control validate" id="address" name="address" placeholder="Enter Your Address" >
        </div>
{{--        <div class="form-group">--}}
{{--            File Upload:<input type="file" class="form-control validate" name="fileupload" id="fileToUpload">--}}
{{--        </div>--}}

        <button type="submit" name="submit" class="btn btn-primary" >Send</button>
    </form>
</div>


<script>

    function validation(){

        error_count=0;
        console.log(error_count);

        $(".validate").each(function() {


            var value=$(this).val();

            if(value==""){

                error_count++;
                $(this).parent("div").find(".invalid").remove();
                $(this).css({"border":"2px solid red"}).parent("div").append("<label class='invalid'> *This Field is required </label>");
            }else{

                $(this).parent("div").find(".invalid").remove();
                $(this).css({"border":"1px solid green"});

            }

        });
        return error_count;
    }

    $(document).on("submit",".myform",function(){

        var error_count=validation();
        if(error_count==0){

            return true;

        }else{

            return false;
        }
    })

</script>
@endsection('content')
