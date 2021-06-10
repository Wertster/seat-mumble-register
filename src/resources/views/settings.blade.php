@extends('web::layouts.grids.12')

@section('title', trans('mumble::global.browser_title'))
@section('page_header', trans('mumble::global.settings_title'))
@section('page_description', trans('mumble::global.settings_subtitle'))

@section('full')

<p>Your Packages View!</p>
<p>Refer to the web package for more examples!</p>

@stop

@push('javascript')
<script>
  console.log('Include any JavaScript you may need here!');
</script>
@endpush