@extends('playground::layouts.resource.form', [
    'withFormInfo' => 'playground-admin-resource::setting/form-info',
    'withFormStatus' => 'playground-admin-resource::setting/form-status',
])

@section('form-tertiary')
@include('playground-admin-resource::setting/form-publishing')
@endsection
