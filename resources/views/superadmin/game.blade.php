@extends('layouts.teacher')

@section('content')
    <div class="teacherContent" id="teacherGame">
        <div class="teacherGame">
            <h2>ゲーム画面<h2>
            <hr>
            <div id="teacherGames">
                <div class="teacherGamesContent">
                    <div class="teacherGame teacherGame1">
                        <div class="teacherGameContent">
                            <img src="/img/teacher/game1.png" />
                            <h3>ウサギさんを助けよう</h3>
                        </div>
                    </div>
                    <div class="teacherGame teacherGame2">
                        <div class="teacherGameContent">
                            <p>ヤシの木に登ってしまって、降りれなくなったウサギさんを様々なものを使って助ける。</p>
                            <p class="buttons" @click="game1Modal = true">
                                <a href="#">詳しくみる</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="teacherGamesContent">
                    <div class="teacherGame teacherGame1">
                        <div class="teacherGameContent">
                            <img src="/img/teacher/game1.png" />
                            <h3>クマさんを助けよう</h3>
                        </div>
                    </div>
                    <div class="teacherGame teacherGame2">
                        <div class="teacherGameContent">
                            <p>ヤシの木に登ってしまって、降りれなくなったウサギさんを様々なものを使って助ける。</p>
                            <p class="buttons">
                                <a href="#">詳しくみる</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="teacherGamesContent">
                    <div class="teacherGame teacherGame1">
                        <div class="teacherGameContent">
                            <img src="/img/teacher/game1.png" />
                            <h3>リスさんを助けよう</h3>
                        </div>
                    </div>
                    <div class="teacherGame teacherGame2">
                        <div class="teacherGameContent">
                            <p>ヤシの木に登ってしまって、降りれなくなったウサギさんを様々なものを使って助ける。</p>
                            <p class="buttons">
                                <a href="#">詳しくみる</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <transition name="slide-fade">
        <modal-component class="modal" id="game1Modal" :showing="game1Modal">
            <div class="modalData">
                <div class="close">
                    <i class="fas fa-times-circle" @click="game1Modal = false"></i>
                </div>
                <div class="modalGameContent">
                    <div class="modalGameImg">
                        <img src="/img/teacher/game1.png" />
                    </div>
                    <div class="modalGameData">
                        <h3>ウサギさんを助けよう</h3>
                        <p>ヤシの木に登ってしまって、降りれなくなったウサギさんを様々なものを使って助ける。</p>
                    </div>
                </div>
                <p class="buttons">
                    <a href="#">Tutorial を見る</a>
                </p>
                <div class="modalGameStudents">
                    <div class="modalGameStudent">
                        <div>
                            <p>
                                <i class="fas fa-user"></i>
                                <span>今やっている子たち</span>
                            <p>
                        </div>
                        <div>
                            <p>
                                <span>thiha, </span>
                                <span>thiha2, </span>
                                <span>thiha3</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </modal-component>
    </transition>
@endsection