
@include("navbar")
    <center>
        <h1>Actors list</h1>
    </center>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Birth Place</th>
                    <th>Birth Date</th>.
                    <th>Height</th>
                    <th>Net worth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actors as $actor)
                <tr>
                    <td> {{ $actor->id}} </td>
                    <td> {{ $actor->first_name}} </td>
                    <td> {{ $actor->middle_name}} </td>
                    <td> {{ $actor->last_name}} </td>
                    <td> {{ $actor->birth_place}} </td>
                    <td> {{ $actor->birth_date}} </td>
                    <td> {{ $actor->height}} </td>
                    <td> {{ $actor->net_worth}} </td>

                    <form action="{{ url('/actor/'.$actor->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <td>
                            <input class="btn btn-danger" type="submit" value="Eliminar"
                            onclick="return confirm('Do you want to delete this record?')">
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>

@include("footer")