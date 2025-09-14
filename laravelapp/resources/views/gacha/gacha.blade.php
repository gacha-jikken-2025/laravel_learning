<div style="text-align: center;">
    レア排出確率{{$rate * 100}}%
    <h1>{{$result->item_name}}</h1>
    <p>{{$result->rarity}}</p>
    <img src="{{ asset($result->image) }}" alt="">
</div>
<div style="display: flex; gap: 1rem; justify-content: center; text-align: center;">
    <p>
        <a href="/gacha/1">
            ガチャ1
        </a>
        <br />
        レア排出確率 30%
    </p>
    <p>
        <a href="/gacha/2">
            ガチャ2
        </a>
        <br />
        レア排出確率 60%
    </p>
</div>