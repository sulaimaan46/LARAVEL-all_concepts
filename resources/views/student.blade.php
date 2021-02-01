@extends('layouts.master')

@section('title')

    Lar-Sulai-Student

@endsection

@section('content')



    name:{{$students['name']}}

<table class="table table-striped" style="margin-top: 90px;">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> {{$students['id']}}</td>
        <td> {{$students['name']}}</td>
        <td> {{$students['email']}}</td>
        <!-- Button trigger modal -->
        <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View Details</button></td>

{{--        <td> {{$students->getprofile->implode('id')}}</td>--}}
{{--        <td>{{$students->getprofile->implode('name', ', ')}}</td>--}}

    </tr>



    </tbody>
</table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Details Of Authors</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                                @foreach($students->getprofile as $studentdata)

                                <div class="card">
                                    <div class="card-body">
                                        <p>Author Id:{{$studentdata->author_id}}</p>
                                        <p>Name:{{$studentdata->name}}</p>
                                        <p> Id:{{$studentdata->id}}</p>
                                        <p>Title:{{$studentdata->title}}</p>
                                        <p>Comments:{{$studentdata->Comments}}</p>
                                    </div>
                                </div>
                                @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
