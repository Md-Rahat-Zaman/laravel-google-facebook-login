<nav class="navbar navbar-light bg-light shadow-sm px-3">

    <span class="navbar-brand">Dashboard</span>

    <div class="dropdown ms-auto">

        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Admin
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </li>
        </ul>

    </div>

</nav>