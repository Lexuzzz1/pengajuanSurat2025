@extends('layouts.master')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="title">
                @if ($role == 'admin')
                    <h2 class="text-2xl font-semibold text-gray-800">Selamat Datang Admin!</h2>
                @elseif($role == 'user')
                    <h2 class="text-2xl font-semibold text-gray-800">Maaf, Anda sudah tidak memiliki akses ke halaman ini</h2>
                @else
                    <h2 class="text-2xl font-semibold text-gray-800">Selamat Datang {{ $user->name }}!</h2>
                @endif
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

@endsection
