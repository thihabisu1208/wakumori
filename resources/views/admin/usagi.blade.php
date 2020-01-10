
@extends('layouts.game')

@extends('layouts.gameHeader')

@extends('layouts.order')
{{-- これだけだと表示されない。layout側で@yieldする必要がある --}}

@section('game')


<div class="gameUsagi">
    <div class="itemContent">

        {{-- アイテム欄 --}}



    <img class="usagiGame" src="img/yasiUsagi.png" alt="ヤシとウサギ">

    <div class="itemList">
        <div class="itemMenu">

            <usagiitem-component :usagis="{{ json_encode($usagi) }}"></usagiitem-component>

    </div>
</div>

</div>
</div>
@endsection


@extends('layouts.item')
@section('test')

<p>test test</p>
@endsection