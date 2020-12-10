@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            @if(session('msg_delete'))
                <div class="alert alert-danger">
                    {{ session('msg_delete') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $student -> id}}</th>
                        <td>{{ $student -> firstname}} {{ $student -> lastname}}</td>
                        <td>{{ $student -> course_id}}</td>
                        <td>{{ $student -> year}}</td>
                        <td>
                            <a href="{{ route('student.show',['id'=>$student->id]) }}">View</a>
                            <a href="{{ route('student.edit',['id'=>$student->id]) }}">Edit</a>
                            <a href="" class="text-danger" data-toggle="modal" data-target="#exampleModal{{ $student-> id }}">Delete</a>
                        </td>
                    </tr>



                    <div class="modal fade" id="exampleModal{{ $student-> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete the data of {{ $student->firstname }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Data that are deleted cannot be restored.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('student.destroy',['id'=>$student->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>




                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
