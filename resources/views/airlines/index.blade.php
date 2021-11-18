@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="align-items: center">
                        <b>Our Airlines</b>
                        <a href="{{route('airlines.create')}}" class="btn btn-secondary"
                           style="float: right">Add new airlines</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($airlines as $airline)
                                <li class="list-group-item" style="width: 100%; display: inline-block">
                                    <div class="list-block" style="display: flex; align-items: center">
                                        <div class="list-block_content" style="width: 100%">
                                            <span> <b>Airlines:</b><i> {{ $airline->name }} </i></span>
                                        </div>
                                        <div class="list-block_buttons" style="display: flex;">
                                            <a href="{{route('airlines.edit', [$airline])}}" class="btn btn-secondary"
                                               style="margin: 3px">Edit</a>
                                            <form method="POST" action="{{route('airlines.destroy', $airline)}}">
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" style="margin: 3px">Delete</button>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
