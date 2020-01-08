@extends('layouts.game')

@extends('layouts.gameHeader')

@extends('layouts.order')
{{-- これだけだと表示されない。layout側で@yieldする必要がある --}}

@section('game')
<div class="gameUsagi">

    <img class="usagiGame" src="img/yasiUsagi.png" alt="ヤシとウサギ">  

</div>
@endsection


@extends('layouts.item')
@section('test')

<p>test test</p>
@endsection