<x-layout>
    <div class="container my-5 text-center">
        <div class="row ">
            <h2 class=" text-warning">Dashboard</h2>
        </div>
    </div>

    @if (count(Auth::user()->consoles) > 0)
    <div class="container my-5 ">
        <div class="row ">
            <h2 class=" text-warning">Turntables</h2>
        </div>
    </div>
    <div class="container my-5 ">
        <div class="row ">
            @foreach (Auth::user()->consoles as $console)
               <div class="col-12 col-md-4">
                <x-console-card :console=$console />
                </div> 
            @endforeach
        </div>
    </div> 
    @endif

  
    <div class="container my-5 ">
        <div class="row ">
            <h2 class=" text-warning">Vinyls</h2>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row ">
            @foreach (Auth::user()->vinyls as $vinyl)
               <div class="col-12 col-md-4">
                <x-card :vinyl=$vinyl />
                </div> 
            @endforeach
        </div>
    </div>



</x-layout>