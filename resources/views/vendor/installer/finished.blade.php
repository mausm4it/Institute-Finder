@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.final.title') }}
@endsection

@section('container')
    <p> <strong>Super Admin: </strong> super_admin@codetechbd.com </p>
    <p> <strong>Admin: </strong> admin@codetechbd.com </p>
    <p> <strong>Editor: </strong> editor@codetechbd.com </p>
    <p> <strong>Repoter: </strong> repoter@codetechbd.com </p>
    <p> <strong>Password: </strong> 12345678 </p>
    @if (session('message')['dbOutputLog'])
        <p><strong><small>{{ trans('installer_messages.final.migration') }}</small></strong></p>
        <pre><code>{{ session('message')['dbOutputLog'] }}</code></pre>
    @endif

    <p><strong><small>{{ trans('installer_messages.final.console') }}</small></strong></p>
    <pre><code>{{ $finalMessages }}</code></pre>

    <p><strong><small>{{ trans('installer_messages.final.log') }}</small></strong></p>
    <pre><code>{{ $finalStatusMessage }}</code></pre>

    <p><strong><small>{{ trans('installer_messages.final.env') }}</small></strong></p>
    <pre><code>{{ $finalEnvFile }}</code></pre>

    <div class="buttons">
        <a href="{{ url('/') }}" class="button bg-color">{{ trans('installer_messages.final.exit') }}</a>
    </div>
@endsection
