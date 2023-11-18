@extends('layouts.layout-dash')
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-cover -->
                <header class="page-cover">
                    <div class="text-center">
                        <a href="user-profile.html" class="user-avatar user-avatar-xl"><img
                                src="{{ asset('assets/images/avatars/profile.jpg') }}" alt=""></a>
                        <h2 class="h4 mt-2 mb-0"> Beni Arisandi </h2>

                    </div><!-- .cover-controls -->

                </header><!-- /.page-cover -->

                <nav class="page-navs">
                    <!-- .nav-scroller -->
                    <div class="nav-scroller">
                        <!-- .nav -->
                        <div class="nav nav-center nav-tabs">
                            <a class="{{ "dashboard/profile/task" == request()->path() ? "nav-link active":"nav-link" }}" href="{{ route('task') }}">TASK'S</a>
                            <a class="{{ "dashboard/profile/plan"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('plan') }}">PLAN'S</a>
                            <a class="{{ "dashboard/profile/note"  == request()->path()  ? "nav-link active":"nav-link" }}" href="{{ route('note') }}">NOTE'S</a>
                        </div><!-- /.nav -->
                    </div><!-- /.nav-scroller -->
                </nav><!-- /.page-navs -->

                <div class="page-inner">
                    <div class="page-inner">
                        <!-- .page-section -->

                        <div class="page-section">
                            <!-- .section-block -->
                            <div class="section-block">
                                <!-- metric row -->
                                <div class="metric-row">
                                    <!-- metric column -->
                                                @yield('plan')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
@endsection
