<div class="collection">
    @php
    $page = str_replace('/admin', '', $_SERVER['REDIRECT_URL']);
    @endphp
    <a href="{{ url('/admin') }}" class="collection-item {{ ($page == '' ? 'active' : '') }}">
        Dashboard
        <i class="material-icons right">send</i>
    </a>
    <a href="{{ route('showCategory') }}" class="collection-item {{ ($page == '/category' ? 'active' : '') }}">
        Categories
        <i class="material-icons right">send</i>
    </a>
    <a href="{{ route('showPost') }}" class="collection-item {{ ($page == '/post' ? 'active' : '') }}">
        Posts
        <i class="material-icons right">send</i>
    </a>
</div>