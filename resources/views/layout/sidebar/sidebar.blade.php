<!-- drawer -->
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


            <div class="d-flex align-items-center navbar-height">
                <form action="index" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                    <input type="text" class="form-control pl-0" placeholder="Tìm kiếm ...">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                </form>
            </div>



            <a href="index" class="sidebar-brand ">
                <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                    <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                </span>

            <span>@if (Auth::check())
                {{Auth::user()->name}}
            @endif</span>
            </a>

            @yield('sidebar_content') 
            @include('layout.sidebar.application')
        </div>
    </div>
</div>
<!-- // END drawer -->