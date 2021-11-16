@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Member</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('airports.store')}}">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                <small class="form-text text-muted">Airline name.</small>
                            </div>
                            <div class="form-group">
                                <label>Countries list</label>
                                <select name="country_id" class="form-control">
                                    <option></option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"><b>Country: {{ $country->name }}</b>, <i>County
                                                code: {{ $country->code }}</i></option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Select country from the list</small>
                            </div>

                            @csrf
                            <button class="btn btn-primary" style="float: right" type="submit">ADD</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
