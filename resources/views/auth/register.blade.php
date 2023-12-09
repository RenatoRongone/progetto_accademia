<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5 bg-warning">
                <h1 class="text-center">Registrati</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 py-5 bg-info">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">cognome</label>
                        <input name="surname" type="text" class="form-control" id="surname">
                    </div>
                    <div class="mb-3">
                        <label for="birth" class="form-label">data di nascita</label>
                        <input name="birth" type="date" class="form-control" id="birth">
                    </div>
                    <div class="mb-3">
                        <label class="d-block" for="gender">genere</label>
                        <select name="gender" id="gender">
                            <option value="M">uomo</option>
                            <option value="F">donna</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">telefono</label>
                        <input name="telephone" type="text" class="form-control" id="telephone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center py-4">
                        <button type="submit" class="btn bgMyPurple">registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>