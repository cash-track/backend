<b-navbar toggleable="lg" type="light" variant="light">
    <b-container>
        <b-navbar-brand href="#">Cash Track</b-navbar-brand>

        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav>
                <b-nav-item href="/" @if (Route::is('home')) active @endif>Home</b-nav-item>
                @auth()
                    <b-nav-item href="/dashboard">Dashboard</b-nav-item>
                    <b-nav-item href="/profile">Profile</b-nav-item>
                @endauth
                <b-nav-item href="/help" @if (Route::is('help')) active @endif>Help</b-nav-item>
                <b-nav-item href="/about" @if (Route::is('about')) active @endif>About</b-nav-item>
            </b-navbar-nav>

            @auth()
                <b-navbar-nav class="ml-auto">
                    <b-nav-item-dropdown right>
                        <template slot="button-content">{{ Auth::user()->name }}</template>
                        <b-dropdown-item href="/profile">Profile</b-dropdown-item>
                        <b-dropdown-item href="/logout">Logout</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            @else
                <b-navbar-nav class="ml-auto">
                    <b-nav-item right href="/login" @if (Route::is('login')) active @endif>Sign In</b-nav-item>
                    <b-nav-item right href="/register" @if (Route::is('register')) active @endif>Sign Up</b-nav-item>
                </b-navbar-nav>
            @endauth
        </b-collapse>
    </b-container>
</b-navbar>