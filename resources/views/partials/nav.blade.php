<nav>
    <ul>
        {{-- Antes de implementar la funcion... --}}
            {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> --}}
            
            <li class="{{ setActive('home')}}"><a href="/">{{ __('Home') }}</a></li>
            <li class="{{ setActive('about')}}"><a href="/about">{{ __('About') }}</a></li>
            <li class="{{ setActive('portfolio')}}"><a href="/portfolio">{{ __('Portfolio') }}</a></li>
            <li class="{{ setActive('contact')}}"><a href="/contact">{{ __('Contact') }}</a></li>    
        
    </ul>
</nav>