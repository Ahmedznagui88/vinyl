<x-layout>

   

    <div class="container my-5 text-light">
        <div class="row">
            <h2 class="mx-5 text-warning">Your Store</h2>
        </div>
    </div>

    <div class="container my-5 text-light">
        <div class="row">
            @foreach ($vinyls as $vinyl)
                <div class="col-12 col-md-3 m-3">
                    <x-card :vinyl="$vinyl" />
                </div>    
            @endforeach
        </div>
    </div>
</x-layout>