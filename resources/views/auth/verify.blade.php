@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">Verify Your Email Address</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success text-center" role="alert">
                            A fresh verification link has been sent to your email address.
                        </div>
                    @endif

                    Before proceeding, please check your email for a verification link.<br>
                    If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
