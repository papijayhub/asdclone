<li class="nav-item">
    <a href="{{ route('books.index') }}"
       class="nav-link {{ Request::is('books*') ? 'active' : '' }}">
        <p>Books</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


