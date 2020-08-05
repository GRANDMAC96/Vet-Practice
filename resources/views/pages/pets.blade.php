@extends("app")
            @section("content")
            {{-- @if(count($animals) === 1) --}}
                {{-- If there are entries in table it will output this div --}}
                <div class="list-group">
                    {{-- { /* loop over all of the articles */ } --}}
                    {{-- { /* each article object goes into $article */ } --}}
                    @foreach ($animals as $animal)
                        <a href="/pets/{{ $animal->id }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">

                                {{-- { /* output the animal and its properties */ } --}}
                                <h5 class="mb-1">{{ $animal->animalName($animal->id) }}</h5>
                                    <p class="mb-1">{{ $animal->species }}</p>                            
                            </div>

                            {{-- { /* output the truncated content */ } --}}
                        </a>
                        
                    @endforeach
                </div>
                {{-- @else
                <p> No Pets found!</p>
                @endif --}}
            @endsection 