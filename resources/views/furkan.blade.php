<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <a href="{{ url('tolga') }}">KIRALIN SAYFASI</a>
            <ul>
                <li v-for="isim in isimler" v-text="isim"></li>
            </ul>
            <a v-text="furkanmesaj"></a>
        </div>
        <script src="{{ asset('js/vue.js') }}"></script>
    </body>
</html>
