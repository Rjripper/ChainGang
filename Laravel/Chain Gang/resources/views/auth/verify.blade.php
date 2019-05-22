@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifieer uw email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Een nieuwe verificatie link is gestuurt naar uw email') }}
                        </div>
                    @endif

                    {{ __('Voordat u verder gaat, verifieer uw email') }}
                    {{ __('Als u geen email heeft gekregen') }}, <a href="{{ route('verification.resend') }}">{{ __('klik dan hier om er nog een te sturen') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
