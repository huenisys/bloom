<template>
  <nav id="app-navbar" class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <router-link class="navbar-brand" to="/">
        <img src="/favicon/favicon.png" alt="Huenits Navbar Logo" class="d-sm-none">
        <span class="d-none d-sm-inline">Bloom</span>
      </router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <router-link to="/hello" class="nav-link" >Hello</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/terms" class="nav-link" >Terms</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/pages" class="nav-link" >Pages</router-link>
          </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
