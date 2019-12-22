<style>
.main {
    max-width: 1024px;
    position: relative;
    width: 100%;
    margin: 0 auto;
    
}

.homepage {
    min-width: 300px;
    width: auto;
    display: table;
    margin: 0 auto;
    position: relative;
}

.image { 
    display: inline-block;
}

@media all and (max-width: 768px) {
    .homepage { 
        width: 240px;
    }

    .image:last-of-type {
        display: block;
        width: 150px;
        margin: 0 auto;
    }
}

@media all and (max-width: 450px) {
    .homepage { 
        min-width:12px;
        width: 120px;
    }
}
</style>
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
