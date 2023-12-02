<x-layout>
    
    @if (session("consoleCreated"))
    <div class="alert alert-success text-center">
        {{ session("consoleCreated") }}
    </div>
    @elseif(session('consoleUpdated'))
    <div class="alert alert-success text-center">
        {{ session('consoleUpdated') }}
    </div>
    @elseif(session('consoleDeleted'))
    <div class="alert alert-danger text-center">
        {{ session('consoleDeleted') }}
    </div>
    @endif

    <div class="container my-5">
        <div class="row">
            @if(count($consoles)>0)
            <div class="container my-5">
                <div class="row">
                    <h2 class="fs-1 text-warning">Turntables</h2>
                </div>
            </div>
            @foreach ($consoles as $console)
                <div class="col-12 col-md-4">
                    <x-console-card :console="$console" />
                </div>
            @endforeach
            @else

                <div class="col-12 text-white text-center">
                    <h3>There is no turntables yet</h3>
                    <a href="{{ route('console.create') }}" class="text-decoration-none ">Add turntable</a>
                </div>

            @endif
        </div>
    </div>
</x-layout>