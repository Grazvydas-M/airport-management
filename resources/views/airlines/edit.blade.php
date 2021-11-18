@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Edit airlines</b></div>

                    <div class="card-body">
                        <form method="POST" action="{{route('airlines.update', $airline)}}">
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $airline->name}}">
                                <small class="form-text text-muted">Airport name</small>
                            </div>
                            <div class="form-group">
                                <label>Countries list</label>
                                <select name="country_id" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" @if(old('country_id',$country->id) == $airline->country_id ) selected @endif><b>Country: {{ $country->name }}</b>, <i>County
                                                code: {{ $country->code }}</i></option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Select country from the list</small>
                            </div>
                            <div class="form-group">
                                <label>Airports list</label>
                                <select class="selectpicker" multiple name="airport_ids[]" id="airport_ids">
                                    @foreach ($airports as $airport)
                                        <option value="{{ $airport->id }}" @if($airport->id == $airline->airport_id) selected @endif> {{ $airport->name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Select country from the list</small>
                            </div>
                            @csrf
                            <button class="btn btn-primary" style="float: right" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
