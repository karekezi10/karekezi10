@extends('layouts.app')
@extends('layouts.Header')
@section('content')

<div class="container" width="400px" style="background-color: white;" >
    <div class="card-header"  style="border: 2px #020202;">
        <div class="card-body">
            <div class="pull-left card-header">
                <h5 style="margin-left:20;   color: #000;">List of Blood Donors! </h5>
            </div>
            <a href="{{ route('projects.create') }}" class="btn btn-primary btn-block float-right" style="width: 15%;font-size: small; margin-left: 80%;">
                <i class="fa fa-plus"></i>  New Donor</a>
            <a href="bloodstore" class="btn btn-primary btn-block float-right" style="width: 15%; height: 5%; font-size: small; margin-left: 35%;">Gutanga Amaraso</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="card-body" style="width:99%;margin-left: 4%; background-color:white; color:black; font-size: small; border: #4cae4c">
        <tr class="btn-primary">
            <th >No</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date Created</th>
            <th >Action</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td >{{ ++$i }}</td>
                <td>{{ $project->fname }}</td>
                <td>{{ $project->lname }}</td>
                <td>{{ $project->age }}</td>
                <td>{{ $project->email }}</td>
                <td>{{ $project->phone}}</td>
                <td>{{ $project->address }}</td>
                <td>{{ date_format($project->created_at, ' M Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fa fa-eye fa-lg text-danger"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                        </button>
                        <i class="fa fa-edit fa-fw text-danger "></i> 

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete"  style="border: none;">
                        <i class="fa fa-remove  fa-fw text-danger " ></i> 

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

    {!! $projects->links() !!}

@endsection
