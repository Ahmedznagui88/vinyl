<x-layout>
    <div class="container my-5">
        <div class="row text-warning">
            <h2>
                Submit
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-light">
            <form class="w-25" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3 ">
                  <label for="email" class="form-label">Email address</label >
                  <input type="email" class="form-control bg-transparent text-light" id="email" name="email" >
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control bg-transparent text-light" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="remember" name="remember">
                  <label class="form-check-label" for="remember">Remember</label>
                </div>
                <button type="submit" class="btn btn-warning ">Submit</button>
              </form> 
        </div>
    </div>
</x-layout>

