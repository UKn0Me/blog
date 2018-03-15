@extends('layouts.base')

@section('title', 'Test page')
@section('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.')

@section('meta')
    @parent

    <meta property="og:image" content="/assets/img/test/fireground.jpg">
    <meta name="twitter:image" content="/assets/img/test/fireground.jpg">
@endsection

@section('content')
    <section>
        <article>
            <h2>Subheading</h2>
            <p>
                Lorem ipsum dolor <b>sit amet</b>, consectetur adipiscing elit. <strong>Cras hendrerit urna sed
                    justo</strong> congue iaculis. Nunc et consectetur eros, a pretium ligula. Aenean rhoncus felis eget
                ipsum ultrices ullamcorper a id diam. <code class="markdown">Class aptent taciti sociosqu <em>ad litora
                        torquent per conubia nostra</em>, per inceptos himenaeos.</code> Nulla at
                <a
                    href="">odio quis diam
                </a>
                vulputate mattis.
            </p>

            <blockquote>
                <p>Hats are <em>incredible</em>.</p>
            </blockquote>

            <em>test text</em>

            <h3>Sub-subheading</h3>
            <p>Do you even emoji bro? 😋</p>

            <h3>Other sub-subheading</h3>

            <pre><code>&lt;?php
    // Return the test view when /test is requested
    $app-&gt;get('test', function () {
        return view('test');
    });
?&gt;</code></pre>

            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
        </article>

        <aside>
            <img src="/assets/img/test/fireground.jpg"
                 alt="Patrolling for hotspots and flareups after a bushfire."
                 title="Patrolling for hotspots and flareups after a bushfire.">
        </aside>
    </section>
@endsection