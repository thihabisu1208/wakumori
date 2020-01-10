@section('order')
    <div class="orderContent">
{{-- 画面左側 --}}
        <div class="order">
            <div class="makeItem">
                <p class="orderTitle">作ったもの</p>
            </div>

            <draggable tag="div" :options="{group:'img'}">
            <div class="selectItem">
                <p class="orderTitle">選んだもの</p>
            </div>
        </div>
    </draggable>

    </div>

@endsection