@extends('defaultlayout')
@section('title', 'All Plots')
@section('middle_content') {{--Put your middle content--}}
<div class="card">
    <div class="card-header">
        plots List
    </div>
    <div class="card-body">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Plot Number</th>
                    <th>Street</th>
                    <th>Block</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plots as $key => $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->numbar}}</td>
                      <td>{{$data->street}}</td>
                      <td>{{$data->block}}</td>
                      <td>{{$data->status}}</td>
                      <td><a href="{{url('plotBooking/')}}" class="btn btn-primary">Booking/Transfer</a></td>
                    </tr>
                @endforeach
                {{-- <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td><a href="{{url('plotBooking')}}" class="btn btn-primary">Booking/Transfer</a></td>
                </tr> --}}
                {{-- <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 3</td>
                    <td>Row 1 Data 2</td>
                    <td><a href="{{url('plotTransfer')}}" class="btn btn-primary">Booking/Transfer</a></td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
