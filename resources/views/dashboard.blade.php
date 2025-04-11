@extends('layouts.master')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    @if ($role == 'admin')
                        <h2>Selamat Datang Admin!</h2>
                    @else
                        <h2>Selamat Datang {{ $user->name }}!</h2>
                    @endif
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

@endsection
