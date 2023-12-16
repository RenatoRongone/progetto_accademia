<x-layout>
    <div class="container-fluid registerBackground d-flex flex-column justify-content-center registerHeight">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center mt-4 mb-md-0">
                <h1 class="text-center">Registrati</h1>
            </div>
        </div>
        
        <div class="row justify-content-center registerBackground p-md-5">
            <div class="col-12 col-md-8 p-3 px-5 px-md-0 p-md-0 d-flex justify-content-center ">
                <form method="POST" action="/register" class="registerForm shadow p-md-5">
                    @csrf
                    <div class="row">
                        <div class="col-6 inputContainer">
                            <label for="name" class="form-label ">Nome *</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid  @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6 inputContainer">
                            <label for="surname" class="form-label">Cognome *</label>
                            <input name="surname" type="text" class="form-control @error('surname') is-invalid  @enderror" id="surname" value="{{old('surname')}}">
                            @error('surname')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-6 inputContainer">
                            <label for="birth" class="form-label">Data di nascita *</label>
                            <input name="birth" type="date" class="@error('birth') is-invalid  @enderror form-control " id="birth" value="{{old('birth')}}">
                            @error('birth')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6 inputContainer">
                            <label class="d-block mb-2" for="gender">Genere *</label>
                            <select name="gender" id="gender" class="@error('gender') is-invalid  @enderror w-100 rounded-2 ">
                                <option value="X">Non specificato</option>
                                <option value="M">Uomo</option>
                                <option value="F">Donna</option>
                            </select>
                            @error('gender')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12 col-md-6 inputContainer">
                            <label for="email" class="form-label ">Email *</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid  @enderror" id="email" value="{{old('email')}}" >
                            @error('email')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 inputContainer">
                            <label for="telephone" class="form-label">Telefono</label>
                            <input name="telephone" type="text" class="form-control" id="telephone" placeholder="Campo opzionale" value="{{old('telephone')}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6 passwordContainer inputContainer position-relative">
                            <label for="password" class="form-label">Password *</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid  @enderror" id="password">
                            <span class="openEyeIcon position-absolute  translate-middle" id='eyeIcon'></span>
                            @error('password')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6 passwordContainer inputContainer position-relative ">
                            <label for="password_confirmation" class="form-label">Ripeti Password *</label>
                            <input name="password_confirmation" type="password" class="form-control @error('password') is-invalid  @enderror" id="password_confirmation">
                            <span class="openEyeIcon position-absolute translate-middle" id='eyeIcon_confirmation'></span>
                            @error('password')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <input name="privacy" type="checkbox" class="@error('password') is-invalid @enderror d-inline" id="privacy">
                        <label for="privacy" class="form-label mb-0 d-inline checkBoxDati">Acconsento al trattamento dei dati personali *</label>
                        @error('password')
                        <p class="textMyPurple errorRegister">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input name="marketing" type="checkbox" class="d-inline" id="marketing">
                        <label for="marketing" class="form-label mb-0 d-inline checkBoxDati">Acconsento al trattamento dei dati per fini commerciali</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-5 px-4">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>