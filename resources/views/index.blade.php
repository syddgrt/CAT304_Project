@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ReportTruzz Report Form and Upload</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ route('create') }}">Report</a>   
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="300px">Action</th>
                    </tr>
                    @foreach ($reports as $report)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img src="/images/{{ $report->image }}" width="100px"></td>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->details }}</td>
                        <td>
                            <form action="{{ route('destroy',$report->id) }}" method="POST">
                                
                                <a class="btn btn-info" href="{{ route('show',$report->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('edit',$report->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <a></a>
                </thead>
            </table>

            {!! $reports->links() !!}
        </div>
    </div>
</div>
@endsection
