<div class="navbar">
    {{-- トップページへのリンク --}}
    <a class="title" href="/mypage">Share Photo</a>
    <div>
        <ul class="menu">
            <li><p class="menu-photo"> {!! link_to_route('users.mypage', 'photo') !!}</p>
            <li><p class="menu-favorite"> {!! link_to_route('users.mypage', 'favorite') !!}</p>
            <li><p class="menu-logout"> {!! link_to_route('logout.get', 'Logout') !!}</p>
        </ul>
    </div>
</div>