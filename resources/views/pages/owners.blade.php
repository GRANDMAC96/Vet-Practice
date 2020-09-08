@extends("app")
            @section("content")
            {{-- @if(count($owners) === 1) --}}
                {{-- If there are entries in table it will output this div --}}
                <div class="list-group">
                    {{-- { /* loop over all of the owners */ } --}}
                    {{-- { /* each owner object goes into $owner */ } --}}
                    @foreach ($owners as $owner)
                        <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">

                                {{-- { /* output the owner name */ } --}}
                                <h5 class="mb-1">{{ $owner->fullName($owner->id) }}</h5>

                                {{-- { /* use the fullAddress() method */ } --}}
                                <small>{{ $owner->fullAddress($owner->id) }}</small>
                                
                            </div>

                            {{-- { /* output the truncated content */ } --}}
                            <p class="mb-1"></p>
                            
                        </a>
                    @endforeach
                </div>
                {{-- @else
                <p> No Owners found!</p>
                @endif --}}
            @endsection 