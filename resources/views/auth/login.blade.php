<x-layout>
    <div class="container-fluid loginBackground d-flex flex-column justify-content-center loginHeight">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center py-2">
                <h1 class="text-center">Accedi</h1>
            </div>
        </div>

        <div class="row justify-content-center text-center error align-items-center ">
            <div class="col-12">
                @if ($errors->any())
                <div class="">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="mt-2 textMyPurple">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center loginBackground mt-2">
            <div class="col-6 py-0 d-flex justify-content-center">
                <form method="POST" action="/login" class="loginForm shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 passwordContainer">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <span class="openEyeIcon" id='eyeIcon'></span>
                    </div>
                    <div class="mb-3 form-check">
                        <input name="remember" type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
                    <div class="my-4">
                        <p class="textMyBlack text-start fs-7">
                            Non sei registrato?
                            <a class="text-decoration-none textMyPurple" href="{{route("register")}}">Crea un account !
                            </a>
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-3 px-4">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>