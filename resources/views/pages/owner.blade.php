@extends("app")

@section("content")
    <div class="card" id="delete-button">
        <h2 class="card-header">{{ $owner->fullAddress() }}</h2>
        <button>Delete</button>                           
        <article class="card-body">
             {{-- {{ /* if an article has comments list them */ }}  --}}
                {{-- @if($owner->animals->isNotEmpty()) --}}
                     <div class="list-group">
                        @foreach ($owner->animals as $animal)
                            <div class="d-flex w-100 justify-content-between" > 
                                <a href="pages/pets"><h5 class="mb-1">{{ $animal->name }}</h5></a>
                            </div>
                            {{-- <p class="mb-1">{{ $owner->animals }}</p>  --}}
                            @endforeach
                    </div> 
                {{-- @else
                    <p class="alert alert-secondary">No animals found</p> 
                @endif --}}
        </article>
    </div>
@endsection