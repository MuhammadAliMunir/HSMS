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
                    <th>Area</th>
                    <th>Location</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td><a href="{{url('plotBooking')}}" class="btn btn-primary">Booking/Transfer</a></td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td>Row 2 Data 3</td>
                    <td>Row 1 Data 2</td>
                    <td><a href="{{url('plotTransfer')}}" class="btn btn-primary">Booking/Transfer</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
