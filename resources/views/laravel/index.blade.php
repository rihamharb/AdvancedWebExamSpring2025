@extends('layouts.main')
@section('content')
<h1>Welcome to My Laravel App</h1>
<h4>Manage students and courses easily</h4>
<a href="{{ route('students.index') }}"><button>Manage courses</button></a>
<a href="{{  route('courses.index')}}"><button>Manage students</button></a>

@endsection