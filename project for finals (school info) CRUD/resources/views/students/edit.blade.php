@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('student.update', ['id'=>$student->id]) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="exampleFormControlInput1">First Name</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" placeholder="e.g Juan" value="{{ old('firstname', $student->firstname) }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput1" placeholder="e.g Dela Cruz" value="{{ old('lastname', $student->lastname) }}">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Age</label>
                    <input type="number" class="form-control" name="age" id="exampleFormControlInput1" placeholder="e.g 21"  value="{{ old('age', $student->age) }}">
                </div>

                
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Gender</label>
                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                    <option value="">Select Gender</option>
                    <option value="male"
                        @if($student->gender=="male")
                            selected 
                        @endif>Male</option>
                    <option value="female"@if($student->gender=="female")
                            selected 
                        @endif>Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="exampleFormControlInput1" value="{{ old('dob', $student->dob) }}">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Course</label>
                    <select class="form-control" name="course_id" id="exampleFormControlSelect1">
                    <option value="">Select Course</option>
                    <option value="B.S Information Technology"
                        @if($student->course_id=="B.S Information Technology")
                            selected 
                        @endif>
                    B.S Information Technology</option>
                    </select>
                </div>

                <div class="form-group  col-md-6">
                    <label for="exampleFormControlSelect1">Year Level</label>
                    <select class="form-control" name="year" id="exampleFormControlSelect1">
                    <option value="">Select Year Level</option>
                    <option value="First Year" @if($student->year=="First Year")
                            selected 
                        @endif>First Year</option>
                    <option value="Second Year" 
                        @if($student->year=="Second Year")
                            selected 
                        @endif>Second Year</option>
                    <option value="Third Year"
                        @if($student->year=="Third Year")
                            selected 
                        @endif>Third Year</option>
                    <option value="Fourth Year"
                        @if($student->year=="Fourth Year")
                            selected 
                        @endif>Fourth Year</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="text-right">
            <button type="submit" class="btn btn-success">Update Data</button>
            <a href="{{ route('student.index') }}" class="btn btn-info">Cancel</a>
            </div>

        </form>
    </div>
</div>
@endsection