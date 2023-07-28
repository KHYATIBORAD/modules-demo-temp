@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3 class="text-center">Modules List</h3>
		</div>
	</div>
	<div class="row mt-3">
		@foreach($allModules as $module)
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-9">
							<h5>{{ $module['name'] }}</h5>
						</div>
						<div class="col-md-3 text-end">
							<span class="badge text-bg-primary">{{ $module['version'] }}</span>
						</div>
					</div>
					<span>{{ $module['description'] }}</span>
					<div class="row mt-5 text-end">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<a href="{{ route('modulemanager.module_delete', ['id' => $module['id'], 'name' => $module['name']]) }}" class="btn btn-danger btn-sm">Delete</a>
							@php
							$btncolor = ($module['is_active'] == '1' ? 'warning' : 'success');
							$btnname = ($module['is_active'] == '1' ? 'Disable' : 'Enable');
							@endphp
							<a class="btn btn-{{ $btncolor }} btn-sm" href="{{ route('modulemanager.module_status', $module['id']) }}">{{ $btnname }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection