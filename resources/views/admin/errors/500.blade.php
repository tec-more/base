@extends('tukecx-core::admin._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
    <div class="layout-1columns">
        <div class="column main">
            <h2 class="headline">500</h2>
            <h3>有些错误发生</h3>
            <p>{{ $exception->getMessage() or '' }}</p>
        </div>
    </div>
@endsection
