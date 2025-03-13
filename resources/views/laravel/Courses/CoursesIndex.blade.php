@extends('layouts.main')
@section('content')
<form action="{{ route('courses.store') }}" method="POST">
@csrf
<input type ="text"name="name" placeholder="enter a name">
<input name="description" placeholder="placeholder">
<button type="submit">Add course</button>
</form>

<div class="flex flex-col gap-2 p-8 sm:flex-row sm:items-center sm:gap-6 sm:py-4 ...">
    @foreach($courses as $course)
  <div class="space-y-2 text-center sm:text-left">
    <div class="space-y-0.5">
      <p class="text-lg font-semibold text-black">{{ course->name }}</p>
      <p class="font-medium text-gray-500">{{ course->description }}</p>
    </div>
   <form method="POST" action="{{  route('courses.destroy',$course->id)}}"> <button class="border-red-200 text-red-600 hover:border-transparent hover:bg-red-600 hover:text-white active:bg-purple-700 ...">
      Delete
    </button>
    </form>
  </div>
</div>
@endforeach

@endsection