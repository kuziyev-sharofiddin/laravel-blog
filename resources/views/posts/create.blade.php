<x-layouts.main>
    @slot('title')
        Post yaratish
    @endslot
    <x-page-header>
        Post yaratish
    </x-page-header>
    {{-- <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4"> --}}
    <div class="row">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif --}}
                <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" value="{{ old('title') }}" name="title" id="subject" placeholder="Sarlavha"/>
                        @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                     <div class="control-group">
                        <select name="category_id">
                            @foreach ( $categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <br>
                        <select name="tags[]" multiple >
                            @foreach ( $tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="control-group">
                        <input name='photo' type="file" class="form-control p-4" id="subject" placeholder="Rasm"/>
                        @error('photo')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="short_content" id="message" placeholder="Qisqacha mazmuni">{{ old('short_content')}}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" id="message" placeholder="Maqola ">{{ old('content')}}</textarea>
                        @error('content')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
</div>
</div>
</div>
</x-layouts.main>
