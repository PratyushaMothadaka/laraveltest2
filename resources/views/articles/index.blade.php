@extends('design')

@section('simplework')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach ( $articles as $article )
                <div class="content">
                    <div class="title">
                        <h2> 
                            <a href="{{ route('articles.show',$article)}}">
                            {{--<a href="/articles/{{$article->id}}">--}}
                                {{ $article->title }}
                             </a>
                        </h2>
                    </div>

                    <p>
                        <img src="images/banner.jpg" alt="" class="image image-full"/>
                    </p>

                    {!!$article->excerpt !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection