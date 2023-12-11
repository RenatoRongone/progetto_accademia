<x-layout>
    <div class="container-fluid loginBackground d-flex flex-column justify-content-center loginHeight">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center py-2">
                <h1 class="text-center">Accedi</h1>
            </div>
        </div>
        
        <div class="row justify-content-center loginBackground">
            <div class="col-6 py-0 d-flex justify-content-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="/login" class="loginForm shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input name="remember" type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">ricordami</label>
                    </div>
                    <div class="my-4">
                        <p class="textMyBlack text-start fs-7">
                            Non sei registrato? <a href="{{route("register")}}">Crea un account !</a>
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>