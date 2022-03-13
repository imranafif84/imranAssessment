@extends('layouts.app')
   
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Edit Table Row</h2>
            </div>
            <div class="col-6" style="text-align: right;">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('update', $dropee->id) }}" method="POST">
            @csrf
            <input type="hidden" name="old_loc" value="{{ $dropee->location }}" />
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" value="{{ $dropee->title }}" class="form-control" placeholder="Title">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-md-6 form-group">
                    <strong>Colour:</strong>
                    <select name="color" class="form-control">
                        <option value="black" @if($dropee->color === 'black') selected @endif>Black</option>
                        <option value="blue" @if($dropee->color === 'blue') selected @endif>Blue</option>
                        <option value="orange" @if($dropee->color === 'orange') selected @endif>Orange</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 form-group">
                    <strong>Size:</strong>
                    <select name="size" class="form-control">
                        <option value="12px" @if($dropee->size === '12px') selected @endif>12px</option>
                        <option value="16px" @if($dropee->size === '16px') selected @endif>16px</option>
                        <option value="20px" @if($dropee->size === '20px') selected @endif>20px</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-md-6 form-group">
                    <strong>Bold:</strong>
                    <select name="bold" class="form-control">
                        <option value="100" @if($dropee->bold === '100') selected @endif>No</option>
                        <option value="bold" @if($dropee->bold === 'bold') selected @endif>Yes</option>
                    </select>
                </div>

                <!-- <div class="col-12 col-md-6 form-group">
                    <strong>Location:</strong>
                    <input type="number" name="location" value="{{ $dropee->location }}" class="form-control">
                </div> -->
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection