@extends('app')

@section("content")
    <form  method="post" action="/animals/create" >
    @csrf
        <h2 class="card-header">Create Pet</h2>

        <fieldset class="card-body"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" class="form-control" value="{{ old('name') }}"/>    
            </div>
            @error('name')
                <p class="form-control @error('name') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror  
            <div class="form-group">
                <label for="species">Species</label>
                <input id="species" name="species" class="form-control" value="{{ old('species') }}"/>
            </div>
            @error('species')
                <p class="form-control @error('species') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input id="date_of_birth" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}"/>    
            </div>
            @error('date_of_birth')
                <p class="form-control @error('date_of_birth') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror 
            <div class="form-group">
                <label for="weight">Weight</label>
                <input id="weight" name="weight" class="form-control" value="{{ old('weight') }}"/>
            </div>
            @error('weight')
                <p class="form-control @error('weight') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="height">Height</label>
                <input id="height" name="height" class="form-control" value="{{ old('height') }}"/>  
            </div>
            @error('height')
                <p class="form-control @error('height') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="biteyness">Safety Rating</label>
                <input id="biteyness" name="biteyness" class="form-control" value="{{ old('biteyness') }}"/> 
            </div>
            @error('biteyness')
                <p class="form-control @error('biteyness') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="owner_id">Owner ID</label>
                <input id="owner_id" name="owner_id" class="form-control" value="{{ old('owner_id') }}"/> 
            </div>
            @error('owner_id')
                <p class="form-control @error('owner_id') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
              
        </fieldset>
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection