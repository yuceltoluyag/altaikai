@include('admin.layout.partials.head')
<body class="app sidebar-mini rtl">
@include('admin.layout.partials.navbar')
@include('admin.layout.partials.sidebar')

         @yield('content')

@include('admin.layout.partials.footer')