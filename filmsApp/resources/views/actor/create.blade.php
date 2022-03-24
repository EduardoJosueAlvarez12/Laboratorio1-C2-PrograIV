
@include("navbar")

    <center><h1>Add actor or actress</h1></center>

    <form action="{{ url('/actor') }}" method='post'> 
        @csrf
        @include('actor.form')
    </form>

@include("footer")