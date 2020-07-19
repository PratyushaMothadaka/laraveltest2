@extends('design')

@section('styler')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('simplework')
    <div id="wrapper"">
        <div id="page" class="container">
             <h1 class="heading has-text-weight-bold is-size-4">Edit an Article here</h1>
            <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{$article->title}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea type="textarea" class="input" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <textarea type="textarea" class="input" name="body" id="body">{{$article->body}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Update</button>
                    </div>
                </div>
        </div>
    </div>

@endsection