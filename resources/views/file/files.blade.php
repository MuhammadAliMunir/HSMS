@extends('defaultlayout')
@section('title', 'All Files')
@section('middle_content') {{--Put your middle content--}}
<table id="table_id" class="display col-md-12">
    <thead>
        <tr>
            <th>Id</th>
            <th>Registration number</th>
            <th>Area</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>Row 1 Data 2</td>
        </tr>
    </tbody>
</table>
@endsection
