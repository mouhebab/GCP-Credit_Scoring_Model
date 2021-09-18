@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Existing Product: {{ $product->name }}</h4>
                    <p class="category">Fill in the fields to update the product</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('product.update', $project) }}" method="POST" autocomplete="off">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label>Client</label>
                            <select name="client_id" class="form-control">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" {{ $project->client->id == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
                        </div>

                        <div class="form-group">
                            <label>Notes</label>
                            <textarea name="notes" cols="30" rows="10" class="form-control">{{ old('notes', $product->notes) }}</textarea>
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Save Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection