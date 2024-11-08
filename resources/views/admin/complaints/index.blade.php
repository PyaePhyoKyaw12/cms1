@extends ('layouts.master')

@section('content')

<div id="content">

<div class="container">
    <div class="row mt-5">
        <div class="col-md-2">
            <a href="{{route('complaints.create')}}" class="btn btn-dark">Add New Complaints</a>
        </div>

        
    </div>

    <div class="row mt-2">
        @if ($message=Session::get('success'))
        <span class="alert alert-success">{{$message}}</span>
        @endif
    </div>

    <div class="row mt-5">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Anonymous</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Role</th>
                        <th>Departments</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)
                    <tr id="{{$complaint->id}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$complaint->name}}</td>
                    <td>{{$complaint->anonymous}}</td>
                    <td>{{$complaint->Email}}</td>
                    <td>{{$complaint->category->name}}</td>
                    <td>{{$complaint->role->name}}</td>
                    <td>{{$complaint->department->name}}</td>
                    
                    <td data-url="{{route('complaints.forward',$complaint->id)}}"><button  class="btn btn-dark ">Send</button></td>
                    <td><a href="{{route('complaints.forward',$complaint->id)}}" class="btn btn-success ">Forward</a></td>


                    </tr>
                    @endforeach
                </tbody>
                 
            </table>
        </div>
        
    </div>
    
</div>

</div>

@endsection