<x-layouts.main>
    @slot('title')
        Kirish
    @endslot
    <br>
    <br>
    <div class="row">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <h2 style="text-align: center">Kirish</h2>
            <div class="contact-form">
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    <div class="control-group ">
                        <input type="text" class="form-control p-4" value="" name="email" id="subject" placeholder="Emailingizni kiriting"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div class="control-group ">
                        <input type="password" class="form-control p-4" value="" name="password" id="subject" placeholder="Parolingizni kiriting"/>
                        {{-- @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror --}}
                    </div>
                    <br>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Kirish</button>
                        <a class="btn btn-primary btn-block py-3 px-5" href="{{ route('auth.register')}}" type="submit" id="sendMessageButton">Ro'yxatdan o'tish</a>
                    </div>
                </form>
</div>
</div>
</div>
</x-layouts.main>
