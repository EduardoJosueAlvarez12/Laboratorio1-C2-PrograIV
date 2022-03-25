
@include("navbar")

    <center><h1>Edit actor or actress</h1></center>
    {{-- se incluye el formulario --}}
    <form action="{{ url('/actor/' .$actor->id) }}" method='post'> 
        @csrf
        {{ method_field('PUT') }}
        @include('actor.form')
    </form>

@include("footer")