<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="{{ asset('img/logo/lettermark[300].png') }}" height="250">
        </a>
        <a class="navbar-burger burger" @click="toggleNav" :class="{ 'is-active': navbarActive }" role="button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu" :class="{ 'is-active': navbarActive }">
        <div class="navbar-start">
            <a class="navbar-item" role="button" @click="scrollToSection('services-link')">Services</a>
            <a class="navbar-item" role="button" @click="scrollToSection('mission-link')">Mission</a>
            <a class="navbar-item" role="button" @click="scrollToSection('contact-link')">Contact</a>
        </div>
    </div>
</nav>