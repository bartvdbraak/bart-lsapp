<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">Created with <a href="https://laravel.com/">Laravel</a> by <b>Bart van der Braak</b> in 2019 for the open-source community.</small>
        </div>
        <div class="col-6 col-md">
            <h5>Main</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="/">Home</a></li>
                <li><a class="text-muted" href="/about">About</a></li>
                <li><a class="text-muted" href="/services">Services</a></li>
                <li><a class="text-muted" href="/posts">Blog</a></li>

            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Users</h5>
            <ul class="list-unstyled text-small">
                @if(Auth::guest())
                <li><a class="text-muted" href="/register">Register</a></li>
                <li><a class="text-muted" href="/login">Login</a></li>
                <li><a class="text-muted" href="/password/reset">Reset Password</a></li>
                @else
                <li><a class="text-muted" href="/dashboard">Dashboard</a></li>
                <li><a class="text-muted" href="/posts/create">New post</a></li>
                <li><a class="text-muted" href="/logout">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</footer>
