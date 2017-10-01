<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://ehd4.f3322.net/youtube/bootstrap337/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @include('pannel', [
                    'head' => "hello, world"
                ])
            </div>
            <div class="col-sm-4">
                @include('pannel', [
                    'head' => "hello, world again"
                ])
            </div>
            <div class="col-sm-4">
                @component('pannel')
                    @slot('head')
                        hello,laravel again
                    @endslot

                    @slot('description')
                        One morning, when Gregor Samsa woke from troubled dreams, he found himself
                        transformed in his bed into a horrible vermin. He lay on his armour-like back,
                        and if he lifted his head a little he could see his brown belly, slightly domed
                        and divided by arches into stiff sections. The bedding was hardly able to cover
                        it and seemed ready to slide off any moment. His many legs, pitifully thin
                        compared with the size of the rest of him, waved about helplessly as he looked.
                        "What's happened to me? " he thought.
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                @component('message')
                    @slot('head')
                        利用天空中的相机跟踪入侵植物
                    @endslot
            
                    世界上很多地方的装饰性花园中，都很常见马缨丹和野生鼠尾草漂亮的粉色、橙色和白色的花朵。虽然在园林设计师看来这些植物又漂亮又耐寒，但保护生物学家却将其斥为“有史以来最坏的野草之一”。

                    马缨丹在原始生长地(美国热带地区)之外疯狂侵略生长，已扩散超过2千万公顷。在印度南半岛的Biligiri Ranganathaswamy山老虎保护区，这种多刺的灌木已经到处都是，闭死了其他植物，并且妨碍了野生生物的移动，令园区管理人员大为头疼，我们就在这里进行了研究。  
                @endcomponent
            </div>
        </div>
    </div>
</body>
</html>
