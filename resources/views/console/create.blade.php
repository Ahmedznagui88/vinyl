<x-layout>
  
    <div class="container my-5">
        <div class="row">
            <h2 class="fs-1 text-warning">Add turntable</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 text-warning">
                <form action="{{ route('console.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label ">Name </label>
                      <input type="text" class="form-control bg-transparent text-white" id="name" name="name">
                    </div>
                      <div class="mb-3">
                        <label for="brand" class="form-label">Brand </label>
                        <input type="text" class="form-control bg-transparent text-white" id="brand" name="brand">
                      </div>
                      <div class="mb-3 d-flex flex-column">
                        <label class="form-label">Vinyl available</label>
                        @foreach ($vinyls as $vinyl)
                        <div class="">
                          <input class="form-check-input" type="checkbox" value="{{ $vinyl->id }}" id="{{ $vinyl->id }}" name="vinyls[]">
                          <label class="form-check-label" for="{{ $vinyl->id }}">{{ $vinyl->title }}</label>
                        </div>
                          
                        @endforeach
                      </div>
                      <div class="mb-3">
                        <label for="logo" class="form-label ">logo </label>
                        <input type="file" class="form-control text-white bg-transparent text-white" id="logo" name="logo">
                      </div>
                      <div class="mb-3 ">
                        <label for="description" class="form-label ">Description</label>
                        <textarea name="description" id="description " class="bg-transparent rounded-3 text-white border-light" cols="72" rows="5"></textarea>
                        
                      </div>
                   
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>