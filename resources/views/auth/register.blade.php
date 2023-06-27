<x-layouts.main>
    @slot('title')
    Ro'yxatdan o'tish
    @endslot
    <br>
    <br>
    <div class="row">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <h2 style="text-align: center">Ro'yxatdan o'tish</h2>
            <div class="contact-form">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="control-group ">
                        <input type="text" class="form-control p-4"  name="name"  placeholder="Ismingizni kiriting"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div class="control-group ">
                        <input type="text" class="form-control p-4"  name="email"  placeholder="Emailingizni kiriting"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div class="control-group ">
                        <input type="password" class="form-control p-4"  name="password"  placeholder="Parolni kiriting"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div class="control-group ">
                        <input type="password" class="form-control p-4" name="password_confirmation" placeholder="Parolni tasdiqlang"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Yuborish</button>
                        <a class="btn btn-primary btn-block py-3 px-5" type="submit" href="{{ route('auth.login') }}">Kirish</a>
                    </div>
                </form>
</div>
</div>
</div>
</x-layouts.main>
