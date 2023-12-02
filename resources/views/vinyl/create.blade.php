<x-layout>
    
    <div class="container my-5 text-light">
        <div class="row">
            <h2 class="mx-5 text-warning">Sell your Vinyls</h2>
        </div>
    </div>
    
    <div class="container my-5 ">
        <div class="row">
            <div class="col-12 col-md-8">
                
                <form class="text-light p-5" action="{{ route('vinyl.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                    {{--  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif --}}

                    <div class="mb-3">
                        <label for="title" class="form-label ">Album</label>
                        <input type="text" class="form-control bg-transparent text-light @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control bg-transparent text-light @error('artist') is-invalid @enderror" id="artist" name="artist" value="{{ old('artist') }}">
                        @error('artist')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
{{-- 
                        <div class="mt-4">
                            <select multiple class="form-select form-select-lg mb-3" aria-label="Large select example">
                                <option selected>Turntables available</option>
                                @foreach ($consoles as $console)
                                <option value="{{ $console->id }}" name="consoles[]">{{ $console->name }}</option>
                                @endforeach
                            </select>
                        </div>
               --}}

                    {{-- ciclo checkbox --}}
                      <div class=" d-flex flex-row ">
                        <label class="form-label">Turntables available</label>
                        @foreach ($consoles as $console)
                        <div class="mx-5">
                          <input class="form-check-input" type="checkbox" value="{{ $console->id }}" id="{{ $console->id }}" name="consoles[]">
                          <label class="form-check-label" for="{{ $console->id }}">{{ $console->name }}</label>
                        </div>
                          
                        @endforeach
                      </div> 
                 
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control bg-transparent text-light @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" class="form-control bg-transparent text-light @error('cover') is-invalid @enderror" id="cover" name="cover" >
                        @error('cover')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control bg-transparent text-light @error('description') is-invalid @enderror"  id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                   
                    <button type="submit" class="btn btn-warning w-25">Sell</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>##