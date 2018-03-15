@extends('layouts.base')

@section('title', 'Get in contact')
@section('description', '')

@section('meta')
    @parent

@endsection

@section('content')
    <section>
        <article>
            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequatur culpa cumque earum est id incidunt laudantium libero nemo odio, officiis saepe sapiente soluta suscipit tempore ut velit! Itaque, sapiente.</span>
            </p>
            <p>
                <span>Laudantium, quas, saepe! Asperiores corporis deleniti dolor earum est eveniet fugiat hic iste itaque labore molestias obcaecati odio odit quae quam quasi quibusdam quis quos ratione soluta suscipit tempora, ullam?</span>
                <span>Ad atque aut autem corporis cum dolore, dolorum eius et itaque laudantium, libero magnam molestiae obcaecati quidem sapiente sequi vitae voluptate voluptatem. Atque consequuntur corporis culpa magni omnis quisquam vero.</span>
            </p>
        </article>

        <aside>
            <form action="{{ app('request')->url() }}" method="post">
                <input type="text" name="name" placeholder="Name">
                <br>
                <input type="email" name="email" placeholder="Email address">
                <br>
                <textarea name="message" placeholder="What's up?"></textarea>
                <br>
                <button type="submit">Send it!</button>
            </form>
        </aside>
    </section>
@endsection