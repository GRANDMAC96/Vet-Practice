@extends('app')

@section("content")
    <form  method="post" >
    @csrf
        <h2 class="card-header">Create Owner</h2>

        <fieldset class="card-body"> 
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}"/>    
            </div>
            @error('first_name')
                <p class="form-control @error('first_name') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror  
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}"/>
            </div>
            @error('last_name')
                <p class="form-control @error('last_name') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="address_1">Address</label>
                <input id="address_1" name="address_1" class="form-control" value="{{ old('address_1') }}"/>    
            </div>
            @error('address_1')
                <p class="form-control @error('address_1') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror 
            <div class="form-group">
                <label for="address_2">Address</label>
                <input id="address_2" name="address_2" class="form-control" value="{{ old('address_2') }}"/>
            </div>
            @error('address_2')
                <p class="form-control @error('address_2') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="town">Town</label>
                <input id="town" name="town" class="form-control" value="{{ old('town') }}"/>  
            </div>
            @error('town')
                <p class="form-control @error('town') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" name="postcode" class="form-control" value="{{ old('postcode') }}"/> 
            </div>
            @error('postcode')
                <p class="form-control @error('postcode') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}"/> 
            </div>
            @error('telephone')
                <p class="form-control @error('telephone') is-invalid @enderror"> {{ $message }}
                </p>
            @enderror
              
        </fieldset>
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection