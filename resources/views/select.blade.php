@extends('layouts.app')
@extends('layouts.Header')
@section('content')
<div class="container"  style="border-raduis:20px;top:15%;position:absolute;height:900px;background-color:#fff;color:black;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h7 class="" style="margin-left:20;">Blood Donors! </h7>
            </div>
            <div class="pull-right">
               
                    </a>
            </div>
        </div>
    </div>

    
        <div class="alert alert-success" style="700px;">
           
        <a href="#" class="btn btn-primary btn-block float-right" style="width: 14%; height: 3%; font-size: small; margin-left: 72%;">
                <i class="fa fa-plus"></i>  New Request </a>
    

    <table class="table table-bordered table-responsive-lg" style="width:90%;background-color:#fff;color:black">
        <tr class="btn-warning">
            <th >No</th>
            <th>Blood Group</th>
            <th>Volume</th>
            <th>status</th>
            <th>donor</th>
            <th>Request</th>
            <th>Date</th>
        
           
        </tr>
        
        @foreach ($blood_inventories as $blood_inventories)
       <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $blood_inventories->blood_group}}</td>
                <td>{{ $blood_inventories->volume }}</td>
                <td>{{$blood_inventories->status }}</td>
                <td>{{ $blood_inventories->donor_id }}</td>
                <td>{{  $blood_inventories->request_id}}</td>
                <td>{{ date_format($blood_inventories->created_at, 'jS M Y') }}</td>
               
               
            </tr>
        @endforeach
    </table>
 </div>
</div>

   

@endsection
