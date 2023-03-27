@extends('layouts.app')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created Date</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ date('Y-m-d', strtotime($contact->ceated_at)) }}</td>
                            <td>
                            <a href="contacts/{{$contact->id}}" class="btn btn-primary">Show</a>
                            <a href="contacts/{{$contact->id}}/reply" class="btn btn-primary">Reply</a>
                            <form action="posts/{{$contact->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div> 
    </div>
</div>
@endsection