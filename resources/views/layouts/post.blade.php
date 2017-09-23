@extends('layouts.base')

@section('post-info')
    <aside id="post-info">
        <p>Monday, 30th January 2017</p>
        <p>Written by Aidhan Dossel</p>
    </aside>
@endsection

@section('content')
    @yield('content')
@endsection

@section('comments')
    <section id="post-comments">
        <header>
            <h3>Comments</h3>
            <aside id="comments-info">
                <p>3 comments, 2 replies</p>
            </aside>
        </header>

        <main>
            <div>content</div>
            <div>satsdf</div>
            <div>hfghf</div>
            <div>asdwetv</div>
            <div>gdfhdfgh</div>
        </main>

    </section>
@endsection