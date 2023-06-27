<x-layouts.main>
    @slot('title')
        Postni o'zgartirish #{{$post->id}}
    @endslot
    <x-page-header>
        Postni o'zgartirish #{{$post->id}}
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
                <form action="{{ route('posts.update', ['post'=>$post->id])}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" value="{{ $post->title }}" name="title" id="subject" placeholder="Sarlavha"/>
                        @error('title')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input name='photo' type="file" class="form-control p-4" id="subject" placeholder="Rasm"/>
                        @error('photo')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="short_content" id="message" placeholder="Qisqacha mazmuni">{{$post->short_content}}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" id="message" placeholder="Maqola ">{{$post->content}}</textarea>
                        @error('content')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex">
                        <button class="btn btn-success  py-3 px-5" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-danger py-3 px-5" type="submit" id="sendMessageButton">Bekor qilish</a>
                    </div>
                </form>
</div>
</div>
</div>
</x-layouts.main>
