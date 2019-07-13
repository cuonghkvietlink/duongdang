<ul class="default-menu mainmenu" id="mainmenu">
    @foreach($items as $menu_item)
        <li class="mainmenu-item">
            <a href="{{ $menu_item->link() }}">
                <span class="menuoffset">{{ $menu_item->title }}</span>
            </a>
        </li>
    @endforeach
</ul>