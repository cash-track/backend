<div class="links">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('help') }}">Help</a>
    <a href="{{ route('about') }}">About</a>
    <router-link :to="{name: 'login'}">Login</router-link>
</div>