Student details: {{ $id }}<br>
Student Name: {{ $name }}

@for ($a=0; $a<=$id; $a++)
    <br> {{$name }} {{ $a }}
@endfor

{{-- calling another view, and sending data to it --}}
@include('subviews.input', [
    'name'=> $name.$id
])