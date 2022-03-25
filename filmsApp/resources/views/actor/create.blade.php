
@include("navbar")

    <center><h1>Add actor or actress</h1></center>
    {{-- se incluye el formulario --}}
    <form action="{{ url('/actor') }}" method='post'> 
        @csrf
        @include('actor.form')
    </form>

@include("footer")