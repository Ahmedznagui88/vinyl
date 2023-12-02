<x-layout>
    <div class="container my-5">
        <div class="row text-warning">
            <h2>
                Sign in
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-light">
            <form class="w-25" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3 ">
                  <label for="name" class="form-label">User name</label >
                  <input type="text" class="form-control bg-transparent text-light" id="name" name="name" value="{{ old('name') }}">
                  @error('name')
                      <div class="tex-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3 ">
                  <label for="email" class="form-label">Email address</label >
                  <input type="email" class="form-control bg-transparent text-light" id="email" name="email" value="{{ old('email') }}">
                  @error('email')
                      <div class="tex-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control bg-transparent text-light" id="password" name="password">
                  @error('password')
                      <div class="tex-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password_confirmation" class="form-label ">Confirm pass</label>
                  <input type="password" class="form-control bg-transparent text-light" id="password_confirmation" name="password_confirmation">
                </div>
                
                <button type="submit" class="btn btn-warning ">Sign in</button>
              </form> 
        </div>
    </div>
</x-layout>

