@if(session()->get('user')->role == 'superuser')
@include("layout.header")
<div class="main-content">
    <section class="section">
        @yield('content')
    </section>
</div>
@include("layout.footer")
@else
@include("layout.nonSuper.header")
<div class="main-content">
    <section class="section">
        @yield('content')
    </section>
</div>
@include("layout.footer")
@endif
<!-- Main Content -->