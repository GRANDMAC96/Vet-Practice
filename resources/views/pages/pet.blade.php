@extends("app")

@section("content")
    <div class="card">
        <h2 class="card-header">{{ $animal->animalName() }}</h2> 
        <article class="card-body">
             {{-- {{ /* if an article has comments list them */ }}  --}}
                {{-- @if($owner->animals->isNotEmpty()) --}}
                     <div class="list-group">
                        {{-- @foreach ($animal as $animal) --}}
                            <div class="d-flex w-100 justify-content-between"> 
                                <a href="/animals/{{ $animal->id }}"><h5 class="mb-1">{{ $animal->name }}</h5></a>
                            </div>

                            {{-- <p class="mb-1">{{ $owner->animals }}</p>  --}}
                        {{-- @endforeach --}}
                    </div> 
                {{-- @else
                    <p class="alert alert-secondary">No animals found</p> 
                @endif --}}
        </article>
    </div>
@endsection