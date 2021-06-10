@extends('web::layouts.grids.12')

@section('title', trans('mumble::global.browser_title'))
@section('page_header', trans('mumble::global.settings_title'))
@section('page_description', trans('mumble::global.settings_subtitle'))

@section('full')

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mumble</h3>
            </div>
            <div class="card-body">
                <form method="post" id="seat-mumble-setup">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="agent-url">{{ trans('mumble::settings.agent_url') }}</label>
                        <input type="text" id="agent-url" name="agent-url" class="form-control"
                            value="{{ setting('mumble.agent_url', true) }}" />
                    </div>
                    <div class="form-group">
                        <label for="encrypt-key-algorithm">{{ trans('mumble::settings.encrypt_key_algorithm') }}</label>
                        @if (setting('mumble.encrypt_key_algorithm', true) == '')
                            <input type="text" id="encrypt-key-algorithm" name="encrypt-key-algorithm" class="form-control"
                                value="Blowfish" />
                        @else
                            <input type="text" id="encrypt-key-algorithm" name="encrypt-key-algorithm" class="form-control"
                                value="{{ setting('mumble.encrypt_key_algorithm', true) }}" />
                        @endif
                    </div>
                    <div class="form-group">
                        <label
                            for="encrypt-cipher-algorithm">{{ trans('mumble::settings.encrypt_cipher_algorithm') }}</label>
                        @if (setting('mumble.encrypt_cipher_algorithm', true) == '')
                            <input type="text" id="encrypt-cipher-algorithm" name="encrypt-cipher-algorithm"
                                class="form-control" value="Blowfish" />
                        @else
                            <input type="text" id="encrypt-cipher-algorithm" name="encrypt-cipher-algorithm"
                                class="form-control" value="{{ setting('mumble.encrypt_cipher_algorithm', true) }}" />
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="encrypt-key">{{ trans('mumble::settings.encrypt_key') }}</label>
                        <input type="text" id="encrypt-key" name="encrypt-key" class="form-control"
                            value="{{ setting('mumble.encrypt_key', true) }}" />
                    </div>
                    <div class="form-group">
                        <label for="encrypt-iv">{{ trans('mumble::settings.encrypt_iv') }}</label>
                        <input type="text" id="encrypt-iv" name="encrypt-iv" class="form-control"
                            value="{{ setting('mumble.encrypt_iv', true) }}" />
                    </div>
                </form>
            </div>
            <div class="card-footer clearfix">
                <button type="submit" class="btn btn-success float-right"
                    form="seat-connector-setup">{{ trans('web::seat.confirm_setup') }}</button>
            </div>
        </div>
    </div>

@stop

@push('javascript')
    <script>
        console.log('Include any JavaScript you may need here!');

    </script>
@endpush
