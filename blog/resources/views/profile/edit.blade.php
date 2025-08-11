@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Profile</h2>

    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
