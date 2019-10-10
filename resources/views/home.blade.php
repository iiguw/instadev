<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Instadev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


        <script src="{{ asset('js/import.js') }}" ></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="/node_modules/vue-infinite-scroll/vue-infinite-scroll.js"></script>
    </head>
    <body>
        <div class="ui top fixed menu">
            <a href="/" class="item">
                <h2><i class="instagram icon"></i>&nbsp; Instadev</h2>
            </a>
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Busca">
                    <i class="search icon"></i>
                </div>
            </div>
            <div class="right menu">
                <div class="ui dropdown item">
                    <i class="user circle icon"></i><b>nickname</b>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">
                            <i class="cog icon"></i> &nbsp; Configurações
                        </a>
                        <a class="item">
                            <i class="sign-out icon"></i> &nbsp; Sair 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="app" class="ui container">

            <criarpost id="novoPost" v-if="pages.newPost"></criarpost>

            <feed id="feed" v-if="pages.feed"></feed>

            <button id="btnNovoPost" class="ui icon circular big black button infoPopup" v-if="pages.feed" v-on:click="novoPost" data-content="Nova publicação">
                <i class="ui add icon"></i>
            </button>
        </div>
        <div class="ui dimmer"></div>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
<script>
    $(document).ready(function () {
        $('.ui.dropdown').dropdown();
        $('.infoPopup').popup({
            variation: 'inverted'
        });
    });
</script>
