@extends('layouts.default')

@section('content')
<div class="section-header">
    <h1>Data Article</h1>
    <div class="section-header-breadcrumb">
        <a href="{{ route('article.create') }}" type="button" class="btn btn-primary text-white">+ New Article</a>
    </div>
</div>

@endsection