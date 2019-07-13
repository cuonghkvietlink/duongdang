<ul class="extralinks-col">
    @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}">
                <i class="fa fa-angle-right"></i> {{ $menu_item->title }}
            </a>
        </li>
    @endforeach
</ul>