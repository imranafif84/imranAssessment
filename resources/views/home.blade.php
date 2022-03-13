@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Imran Dropee Assessment</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th style="width:10%; text-align: center;">Position</th>
            <th style="width:90%; text-align: left;">Title</th>
            <th style="width:10%; text-align: center;">Action</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td style="text-align: center;">{{ $result->location }}</td>
            <td>{{ $result->title }}</td>
            <td style="text-align: center;">
                <a class="btn btn-primary" href="{{ route('edit',$result->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
