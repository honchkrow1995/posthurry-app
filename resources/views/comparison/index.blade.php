@extends('layouts.main')
@section('content')
    <div class="row-fluid">
        <h1 class="pull-left" style="font-size: 30px;padding: 30px 10px;">
            List of your comparison
        </h1>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Show</th>
                    <th>First post on</th>
                    <th>Second post on</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->comparisons as $comparison)
                    <tr>
                        <td><a href="{{ url('comparison/'. $comparison->id) }}">Link</a></td>
                        <td>{{ $comparison->post1_page_name }} <span style="font-weight: 800;">({{ $comparison->post1_sort == 1 ? 'Group' : 'Page' }})</span></td>
                        <td>{{ $comparison->post2_page_name }} <span style="font-weight: 800;">({{ $comparison->post2_sort  == 1 ? 'Group' : 'Page' }})</span></td>
                        <td>{{ date('m-d-Y  h:i A', strtotime($comparison->created_at)) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-warning btn-lg pull-right">Back</a>
    </div>
@endsection