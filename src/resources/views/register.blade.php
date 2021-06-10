@extends('web::layouts.grids.12')

@section('title', trans('mumble::global.browser_title'))
@section('page_header', trans('mumble::global.register_title'))
@section('page_description', trans('mumble::global.register_subtitle'))

@section('full')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ trans('mumble::global.register_subtitle') }}</h3>
        </div>
        <div class="card-body">
            <form method="post" id="mumble-register">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="mumble-user">{{ trans('mumble::register.mumble_user') }}</label>
                    <span class="help-block">{{ trans('mumble::register.mumble_user_desc') }}</span>
                    <input type="text" id="mumble-user" name="mumble-user" class="form-control" disabled
                        value="{{ auth()->user()->name }}" />
                </div>
                <div class="form-group">
                    <label for="mumble-email">{{ trans('mumble::register.mumble_email') }}</label>
                    <span class="help-block">{{ trans('mumble::register.mumble_email_desc') }}</span>
                    <input type="text" id="mumble-email" name="mumble-email" class="form-control" value="" />
                </div>
            </form>
        </div>
        <div class="card-footer clearfix">
            <button type="submit" class="btn btn-success"
                form="mumble-register">{{ trans('web::seat.register_account') }}</button>
        </div>
    </div>

@stop

@push('javascript')
    <script>
        console.log('Include any JavaScript you may need here!');

    </script>
@endpush
