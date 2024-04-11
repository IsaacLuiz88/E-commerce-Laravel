@extends('home')

@section('content')

<h2>Create Category | <a href="{{ route('categories.index') }}">Back</a></h2>

<form method="POST" action="{{ route('categories.store') }}">
@csrf

<div>
<label for="name">Name: </label>
<input type="text" name="name" id="name" required>
</div>
<button type="submit">Create Category</button>
</form>
@endsection