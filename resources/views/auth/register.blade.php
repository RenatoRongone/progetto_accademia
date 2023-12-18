<x-layout>
    <section class="container-fluid registerSection">
        <div class="container-fluid registerBackground d-flex flex-column justify-content-center registerHeight">
            <div class="row mt-3 mt-md-0">
                <div class="col-12 d-flex flex-column justify-content-center mb-md-0 py-2">
                    <h1 class="text-center">{{__('ui.registrati')}}</h1>
                </div>
            </div>
            
            <div class="row justify-content-center registerBackground">
                <div class="col-12 col-md-8 p-3 px-5 px-md-0 p-md-0 d-flex justify-content-center">
                    <form method="POST" action="/register" class="registerForm shadow p-md-5">
                        @csrf
                        <div class="row">
                            <div class="col-6 inputContainer">
                                <label for="name" class="form-label ">{{__('ui.nome')}}</label>
                                <input name="name" type="text" class="form-control @error('name') is-invalid  @enderror" id="name" value="{{old('name')}}">
                                @error('name')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6 inputContainer">
                                <label for="surname" class="form-label">{{__('ui.cognome')}}</label>
                                <input name="surname" type="text" class="form-control @error('surname') is-invalid  @enderror" id="surname" value="{{old('surname')}}">
                                @error('surname')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-md-6 inputContainer">
                                <label for="birth" class="form-label">{{__('ui.data')}}</label>
                                <input name="birth" type="date" class="@error('birth') is-invalid  @enderror form-control " id="birth" value="{{old('birth')}}">
                                @error('birth')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6 inputContainer">
                                <label class="d-block mb-2" for="gender">{{__('ui.genere')}}</label>
                                <select name="gender" id="gender" class="@error('gender') is-invalid  @enderror form-control w-100">
                                    <option value="X" class="gender_options">{{__('ui.non-specificato')}}</option>
                                    <option value="M" class="gender_options">{{__('ui.uomo')}}</option>
                                    <option value="F" class="gender_options">{{__('ui.donna')}}</option>
                                </select>
                                @error('gender')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-12 col-md-6 inputContainer">
                                <label for="email" class="form-label ">{{__('ui.email')}}</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid  @enderror" id="email" value="{{old('email')}}" >
                                @error('email')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 inputContainer">
                                <label for="telephone" class="form-label">{{__('ui.telefono')}}</label>
                                <input name="telephone" type="text" class="form-control" id="telephone" value="{{old('telephone')}}">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6 passwordContainer inputContainer position-relative">
                                <label for="password" class="form-label">{{__('ui.password')}}</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid  @enderror" id="password">
                                <span class="openEyeIcon position-absolute  translate-middle" id='eyeIcon'></span>
                                @error('password')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-6 passwordContainer inputContainer position-relative ">
                                <label for="password_confirmation" class="form-label">{{__('ui.rip-password')}}</label>
                                <input name="password_confirmation" type="password" class="form-control @error('password') is-invalid  @enderror" id="password_confirmation">
                                <span class="openEyeIcon position-absolute translate-middle" id='eyeIcon_confirmation'></span>
                                @error('password')
                                <p class="textMyPurple errorRegister">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <input name="privacy" type="checkbox" class="@error('privacy') is-invalid @enderror d-inline" id="privacy" value="true">
                            <label for="privacy" class="form-label mb-0 d-inline checkBoxDati">{{__('ui.privacy')}}</label>
                            @error('privacy')
                            <p class="textMyPurple errorRegister">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input name="marketing" type="checkbox" class="d-inline" id="marketing" value="1">
                            <label for="marketing" class="form-label mb-0 d-inline checkBoxDati">{{__('ui.marketing')}}</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btnLogin bgMyPurple textMyWhite mt-5 mb-3 mb-md-0 px-4">{{__('ui.registrati')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>