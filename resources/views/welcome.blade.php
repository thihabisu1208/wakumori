<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('img/saruFace.png') }}">
        <title>わくわくの森</title>
        <script>
            (function(d) {
                var config = {
                kitId: 'xwd1kce',
                scriptTimeout: 3000,
                async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
        </script>
        <script src="{{ asset('/js/app.js') }}" defer></script>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <transition name="slide-fade" mode="linear">
                <modal-component class="modal" id="loginModal" :showing="loginModal">
                    <form method="POST" action="{{ route('login') }}" class="modalData">
                        @csrf
                        
                        <div class="close">
                            <i class="fas fa-times-circle" @click="loginModal = false"></i>
                        </div>
                        <div class="forms">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="studentName" class="labelItem">
                                <span class="contentItem">自分の名前を入れて</span>
                            </label>
                        </div>
                    <div class="forms">
                            <input type="text" name="password" autocomplete="off" required />
                            <label for="teacherName" class="labelItem">
                                <span class="contentItem">先生の名前を入れて</span>
                            </label>　
                        </div>
                        <p class="buttons">
                            <input type="submit" value="もりに入る" />
                        </p>
                    </form>
                </modal-component>
            </transition>
            
            <transition name="slide-fade" mode="linear">
                <modal-component class="modal" id="loginModal2" :showing="loginModal2">
                    <form method="POST" action="{{ route('login') }}" class="modalData">
                        @csrf
                        
                        <div class="close">
                            <i class="fas fa-times-circle" @click="loginModal2 = false"></i>
                        </div>
                        <div class="forms">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="studentName" class="labelItem">
                                <span class="contentItem">名前を入力してください</span>
                            </label>
                        </div>
                    <div class="forms">
                            <input type="text" name="password" autocomplete="off" required />
                            <label for="teacherName" class="labelItem">
                                <span class="contentItem">パスワードを入力してください</span>
                            </label>　
                        </div>
                        <p class="buttons">
                            <input type="submit" value="ログインする" />
                        </p>
                    </form>
                </modal-component>
            </transition>

            <div id="top">
                <div id="login">
                    <div>
                        <h1>わくわくの森</h1>
                        <h2>あなたに合う方を選んでね</h2>
                    </div>
                    @if (Route::has('login'))
                        <div id="loginForm">
                            @auth
                                <p class="buttons">
                                    <a href="{{ url('/home') }}">トップ</a>
                                </p>
                            @else
                                <p class="buttons" @click="loginModal = true">
                                    <a href="#">せいと</a>
                                </p>
                                <p class="buttons" @click="loginModal2 = true">
                                    <a href="#">せんせい</a>
                                </p>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
