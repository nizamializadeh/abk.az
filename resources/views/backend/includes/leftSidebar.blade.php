<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name }}
            </div>
            <div class="email">
                {{auth()->user()->email}}
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{request()->routeIs('callme') ? 'active' : ''}}">
                    <a href="{{route('callme.index')}}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{(request()->routeIs('author.index') || request()->routeIs('tag.index') || request()->routeIs('category.index')) ? 'active' : ''}}">
                    <a href="javascript:void(0);" class="menu-toggle ">
                        <i class="material-icons">fiber_new</i>
                        <span>Site managment</span>
                    </a>
                    <ul class="ml-menu">
                        {{--@if ( auth()->user()->role == 1)--}}
                        {{--do something--}}
                        {{--@endif--}}
                        <li class="{{request()->routeIs('about.index') ? 'active' : ''}}">
                            <a href="{{route('about.index')}}">Abouts</a>
                        </li>
                        <li class="{{request()->routeIs('slider.index') ? 'active' : ''}}">
                            <a href="{{route('slider.index')}}">Slider</a>
                        </li>
                        <li class="{{request()->routeIs('testimonial.index') ? 'active' : ''}}">
                            <a href="{{route('testimonial.index')}}">Testimonial</a>
                        </li>


                    </ul>
                </li>
            </ul>
        </div>

    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; {{ now()->year }} <a href="javascript:void(0);">Abk.az</a>
            	<p>Site by <a target="_blank" href="https://www.facebook.com/Nizamializadah">Nizami Alizade</a></p>

        </div>
    </div>
    <!-- #Footer -->
</aside>