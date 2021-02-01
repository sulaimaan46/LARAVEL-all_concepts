@extends('layouts.master')

@section('title')

    Lar-Sulai-Form

    @endsection

@section('content')

<div class="container">
<h2>Haii</h2>

</div>

<div class="container">
<h2>Haii</h2>

</div>
<div class="container">
<h2>logical concept</h2>

</div>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<form action="{{url('/')}}/formrequestdate" method="post">
@csrf

<h2>From Date: <input type="date" name="startdate" id="datepicker1"></h2>
<h2>To Date: <input type="date" name="enddate" id="datepicker2"></h2>
<h2>How many person: <input type="text" name="person" ></h2>

{{--    <h2>Amount: <input type="text" name="amount" ></h2>--}}
{{--    <h2>type: <input type="text" name="type" ></h2>--}}


    <p><button type="submit" class="btn btn-primary">Result:</button><span id="result">{{$total}}</span></p>

</form>
<div class="container">
<input type="text" id="customers" name="value" onkeyup="myfunc()">
{{--<button type="button" onclick="myFunction()">Try</button>--}}
</div></br></br></br>

{{-- <table id="customers1" >--}}
{{--   <tr>--}}
{{--     <th>Product</th>--}}
{{--     <th>Quantity</th>--}}
{{--     <th>Price</th>--}}
{{--  </tr>--}}

{{--     <tr>--}}
{{--         <td><input type="text" name="product" id="product1" ></input></td>--}}
{{--         <td><input type="number" name="quantity" id="quantity1"></input></td>--}}
{{--         <td><input type="number" name="price" id="price1"></input></td>--}}
{{--     </tr>--}}

{{-- </table>--}}

<p id="val"></p>
  <script>
      function myfunc(){
          // alert('function call');

         var row=$("#customers").val();
          var data='<tr><td><input type="text" name="product" ></input></td><td><input type="number" name="quantity"></input></td><td><input type="number" name="price" class="price1"></input></td></tr>';

         // var data1=$("#customers1");
         // alert(data1);
         // var value=$(this).closest('table').attr('id');
         // alert(value);
         if(row ==''){
             var data= '';
             $("#val").remove(data);

      }else{
             for(i=1;i<=row;i++){
         $("#val").append(data);
         }
      }
      }

  </script>


@endsection('content')
