@extends('layout.public')
  
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Report</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('/user') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="box">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $report->name }}</td>
                        </tr>
                        <tr>
                            <th>Details</th>
                            <td>{{ $report->details }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="/images/{{ $report->image }}" width="500px"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <style>
        .box {
        border: 1px solid #ccc;
        box-shadow: 5px 5px #ccc;
        padding: 10px;
    }</style>
        <style>
        .back-btn {
            background-color: #ff0000; /* or any other color of your choice */
            color: #; /* to change the text color */
    }</style>
@endsection