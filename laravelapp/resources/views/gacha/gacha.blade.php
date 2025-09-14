<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="head">
                <h1>武器ガチャ</h1>
                <p>レア排出確率{{ $rate * 100 }}%</p>
            </div>

            <div class="result" data-rarity="{{ $result->rarity }}">
                <div class="result_head">
                    <h2>{{ $result->item_name }}</h2>
                    <p class="result_rarity">{{ $result->rarity }}</p>
                </div>
                <figure class="result_image">
                    <img src="{{ asset($result->image) }}" alt="{{ $result->item_name }}">
                </figure>
            </div>
            
            <div class="foot">
                <p class="foot_item">
                    <a href="/gacha/1">
                        ガチャ1
                    </a>
                    レア排出確率 30%
                </p>
                <p class="foot_item">
                    <a href="/gacha/2">
                        ガチャ2
                    </a>
                    レア排出確率 60%
                </p>
            </div>
        </div>
    </body>
</html>