@extends('tukecx-core::admin._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
    <div class="row stat-boxes">
        @php do_action('tukecx-dashboard.index.stat-boxes.get') @endphp
    </div>
    <div class="row">
        @php do_action('tukecx-dashboard.index.other.get') @endphp
    </div>
@endsection
