<div class="card bg-transparent text-light text-center border-0" style="width: 18rem;">
    <div class="vinyl">
      <img id="imgUno" src="{{Storage::url( $vinyl->cover )}}" class="card-img-top rounded-circle" alt="...">
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $vinyl->title }}</h5>
      <p class="card-text">{{ $vinyl->artist }}</p>
      <p class="card-text">{{ $vinyl->description }}</p>
      
      <p class="card-text">Add by:{{ $vinyl->user->name ?? 'Unknow User'}}</p>
      <p class="card-text">Price: {{ $vinyl->price }}</p>
    </div>
    <div class="bg-white rounded-4">
      <h4 class="text-dark">Console:</h4>
      @foreach ($vinyl->consoles as $console)
      <p class="text-dark">{{ $console->name }}</p>
      @endforeach
    </div>
</div>