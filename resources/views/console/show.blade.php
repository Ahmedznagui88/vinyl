<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="fs-1 text-warning">{{ $console->name }}</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($console->logo) }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <p class="fs-1 text-warning">{{ $console->brand}}</p>
            <p class=" text-light">{{ $console->description}}</p>
            <p class=" text-light">Add by: {{ $console->user->name ?? 'Unknow User'}}</p>
            @if (count($console->vinyls))
            <h4 class="text-light">Vinyl available: </h4>
            <ul>
                @foreach ($console->vinyls as $vinyl )
                    <li class="text-light">{{ $vinyl->title }} by {{ $vinyl->artist }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <a href="{{ route('console.index') }}" class="text-decoration-none text-danger" >Back</a>
        </div>
    </div>

    
</x-layout>