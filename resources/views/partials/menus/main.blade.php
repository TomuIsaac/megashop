<ul>
    @foreach($items as $menu_item)
            @if($menu_item->link() !== 'https://blog.laravelecommerceexample.ca')
        <li>
            <a href="{{$menu_item->link()}}">
                {{ $menu_item->title }}
                @if ($menu_item->title === 'Cart')
                    @if (Cart::instance('default')->count() > 0)
                    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>

        </li>
        @endif
    @endforeach
</ul>
