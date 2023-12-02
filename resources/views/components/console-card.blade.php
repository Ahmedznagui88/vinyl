<div class="card mb-3 bg-secondary-subtle " style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ Storage::url($console->logo) }}" class="img-fluid rounded-start" alt="{{ $console->name }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $console->name }}</h5>
          <p class="card-text">Brand: {{ $console->brand }}</p>
        </div>
      </div>
    </div>
    <div class="div row g-0">
      <div class="col-12 d-flex">
        <a href="{{ route('console.show', $console) }}" class="btn text-primary">Show me</a>
        @if (Auth::user() && $console->user_id == Auth::user()->id)
        <form action="{{ route('console.destroy', $console) }}" method="POST">
          @csrf
          @method('DELETE')
          <a href="{{ route('console.edit', $console) }}" class="btn text-warning">Edit</a>
          <button type="submit" class="btn btn-link text-danger text-decoration-none">Delete</button>  
        </form>
        @endif
        
      </div>
    </div>
  </div>