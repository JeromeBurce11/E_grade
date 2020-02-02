@extends('admin.output')
@section('title','Training')
@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <div class="container">
    <center>
        @foreach ($courses->chunk(3) as $chunk)
            <div class="row">
               
                @foreach ($chunk as $course)
                    <div class="col-md-3">
                    <!-- {{$course}} -->
                    
                    <div class="panel panel-primary">
                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <a href="{{route('addStudent', $course->id )}}" class="btn btn-outline-info"> <i class="fas fa-user-plus"></i></a>
                        
                        <!-- <a href="{{url('admin/course/', [$course->courseId])}}" class="btn btn-outline-info"> <i class="fas fa-user-plus"></i></a> -->
                        
                        <a href="{{route('showStudentsInCourse',$course->id )}}" class="btn btn-outline-info"> <i class="fas fa-users"></i></a>
                        <div class="panel-footer">
                        {{$course->id}}
                            <h2>{{$course['course']}}</h2>
                            <h2>{{$course['units']}}</h2>
                            <h2>{{$course['schedule']}}</h2>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach


        </center>
    </div>

<style>
    h2{
        font:20px comic;
    }
</style>

    
@endsection


