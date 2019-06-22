@extends('defaultlayout')
@section('title', 'All Coustomers')
@section('middle_content') {{--Put your middle content--}}
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>C.N.I.C</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
    </tbody>
</table>
@endsection
