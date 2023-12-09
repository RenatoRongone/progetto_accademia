<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5 bg-warning">
                <h1 class="text-center">Accedi</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 py-5 bg-info">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="/login">
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
                    <div class="d-flex justify-content-center py-4">
                        <button type="submit" class="btn bgMyPurple">accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>