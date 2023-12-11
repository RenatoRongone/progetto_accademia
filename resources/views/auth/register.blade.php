<x-layout>
    <div class="container-fluid registerBackground d-flex flex-column justify-content-center registerHeight">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center mt-4 mb-md-4">
                <h1 class="text-center">Registrati</h1>
            </div>
        </div>

        <div class="row justify-content-center registerBackground">
            <div class="col-12 col-md-6 p-3 px-5 px-md-0 p-md-0 d-flex justify-content-center">
                <form method="POST" action="/register" class="registerForm shadow rounded-5 p-md-5">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="name" class="form-label">Nome</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid  @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="surname" class="form-label">Cognome</label>
                            <input name="surname" type="text" class="form-control @error('surname') is-invalid  @enderror" id="surname" value="{{old('surname')}}">
                            @error('surname')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <label for="birth" class="form-label">Data di nascita</label>
                            <input name="birth" type="date" class="@error('birth') is-invalid  @enderror form-control " id="birth" value="{{old('birth')}}">
                            @error('birth')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="d-block mb-2" for="gender">Genere</label>
                            <select name="gender" id="gender" class="@error('gender') is-invalid  @enderror w-100 rounded-2 ">
                                <option value="M">uomo</option>
                                <option value="F">donna</option>
                            </select>
                            @error('gender')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid  @enderror" id="email" value="{{old('email')}}" >
                            @error('email')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="telephone" class="form-label">Telefono</label>
                            <input name="telephone" type="text" class="form-control" id="telephone" placeholder="Campo opzionale" value="{{old('telephone')}}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6 passwordContainer">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid  @enderror" id="password">
                            <span class="openEyeIcon" id='eyeIcon'></span>
                            @error('password')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6 passwordContainer">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid  @enderror" id="password_confirmation">
                            <span class="openEyeIcon" id='eyeIcon_confirmation'></span>
                            @error('password_confirmation')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-5 px-4">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>