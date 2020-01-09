

@extends('layouts.game')

@extends('layouts.gameHeader')

@extends('layouts.order')
{{-- これだけだと表示されない。layout側で@yieldする必要がある --}}

@section('game')
<div class="gameKuma">

    <img class="kumaGame" src="img/baobabuKuma.png" alt="くま">  

</div>
@endsection


@extends('layouts.item')
@section('test')

<p>test test</p>
@endsection