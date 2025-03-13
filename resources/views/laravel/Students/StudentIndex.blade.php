@extends('layouts.main')
@section('content')
<input type="search" name="search" id="searchInput" placeholder="search students...">

<div class="flex flex-col gap-2 p-8 sm:flex-row sm:items-center sm:gap-6 sm:py-4 ..." id="student_list">
  <img class="mx-auto block h-24 rounded-full sm:mx-0 sm:shrink-0" src="/img/erin-lindford.jpg" alt="" />
  <div class="space-y-2 text-center sm:text-left">
    <div class="space-y-0.5">
      <p class="text-lg font-semibold text-black"></p>
      <p class="font-medium text-gray-500"></p>
    </div>
    
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$document.ready(function(){
    $("#inputSearch").on('keyup',function(){
        let query = $(this).val()
        $.ajax({
            url : "{{ route('students.index')}}".
            method:"GET",
            data:{search:query},
            success:function(response){
                $("#student_list").html('')
                if(response.length>0){
                    response.forEach(student=>{
                        $("#student_list").append(` 
                                <div class="space-y-2 text-center sm:text-left">
                                    <div class="space-y-0.5">
                                    <p class="text-lg font-semibold text-black">${student.name}</p>
                                    <p class="font-medium text-gray-500">${student.age}</p>
                                    </div>
                                </div>`)
                    })
                }
                else{
                    $("#student_list").html('<h3>No Results</h3>')
                }
                
            }
        })
    })
})

</script>
@endsection

