

@extends('layouts.game')

@extends('layouts.gameHeader')

@extends('layouts.order')
{{-- これだけだと表示されない。layout側で@yieldする必要がある --}}

@section('game')
<div class="gameRisu">

    <img class="risuGame" src="img/bananaRisu.png" alt="リス">

</div>
@endsection


@extends('layouts.item')
@section('test')

<p>test test</p>
@endsection