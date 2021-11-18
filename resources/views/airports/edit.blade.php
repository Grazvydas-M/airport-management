@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Edit airport</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{route('airports.update', $airport)}}">
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $airport->name}}">
                                <small class="form-text text-muted">Airport name</small>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="latitude" value="{{ $airport->latitude}}">
                                <small class="form-text text-muted">Latitude</small>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="longitude"
                                       value="{{ $airport->longitude}}">
                                <small class="form-text text-muted">Longitude</small>
                            </div>
                            <div class="form-group">
                                <label>Countries list</label>
                                <select name="country_id" class="form-control">
                                    <option></option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" @if(old('country_id', $airport->country_id) == $country->id) selected @endif>Country: {{ $country->name }}, County
                                                code: {{ $country->code }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Select country from the list</small>
                                @csrf
                                <button class="btn btn-primary" style="float: right" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
