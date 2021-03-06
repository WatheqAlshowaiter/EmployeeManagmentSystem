@extends("_layout")

@section("title")
maange accounts
@endsection



@section("content")
<a class="btn Confirm btn-success" href="/accounteq/create">Create New Account</a>
<table class="table table-hover">
    <thead>
        <tr><th width="5%">#</th><th>Full Name</th><th>Email</th><th>Active</th><th>Gender</th>
            <th>Country</th>
            <th width="12%"></th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($items as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->fullname}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->active}}</td>
            <td>{{$i->gender}}</td>
            <td>{{$i->country->name}}</td>
            <td>
                    <a href="/accounteq/{{$i->id}}" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-info-sign"></i>
                    </a>
                    <a href="/accounteq/{{$i->id}}/edit" class="btn btn-primary btn-xs">
                        <i class="glyphicon glyphicon-bookmark"></i>
                    </a>
<!--
                    <a onclick="return confirm('Are you sure dude?')" href="/accounteq/{{$i->id}}/delete" class="btn btn-warning btn-xs">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
-->
                    <a href="/accounteq/{{$i->id}}/delete" class="Confirm btn btn-danger btn-xs">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
            </td>
        </tr>
        @endforeach
        
        </tbody>
</table>
{{$items->links()}}
@endsection


