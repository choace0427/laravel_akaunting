@extends('layouts.modules')

@section('title', trans_choice('general.modules', 2))

@section('content')
    @include('partials.modules.bar')

    <div class="col-md-12 no-padding-left">
        <div class="content-header no-padding-left">
            <h3>{{ $title }}</h3>
        </div>

        @if ($modules)
            @foreach ($modules as $module)
                @include('partials.modules.item')
            @endforeach
        @else
            <div class="box box-success">
                <div class="box-body">
                    <p class="col-md-12" style="margin-top: 15px">
                        {{ trans('modules.no_apps') }}
                    </p>
                    <p class="col-md-12" style="margin-top: 20px">
                        <small>{!! trans('modules.developer') !!}</small>
                    </p>
                </div>
                <!-- /.box-body -->
            </div>
        @endif
    </div>
@endsection