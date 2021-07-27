@extends('template.template')

@section('content')
    <h1>Members</h1>
    <a class="btn btn-info" href="{{route('createMembers')}}">Create members</a>
    
    <section>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $member)
              <tr>
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->name}}</td>
                <td>{{$member->age}}</td>
                <td>{{$member->gender}}</td>
                <td>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>
    
@endsection