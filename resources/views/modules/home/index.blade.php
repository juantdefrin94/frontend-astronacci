@extends('layouts.template')

@section('title', 'Astronacci - Home')
@section('main-page-content')

<main class="container my-4 flex-grow-1">
    <!-- Article Section -->
    <div id="articles">
        <h2 class="h5 mb-3">Articles</h2>
        <div class="row g-3"></div>
    </div>

    <!-- Video Section -->
    <div id="videos" class="d-none">
        <h2 class="h5 mb-3">Videos</h2>
        <div class="row g-3"></div>
    </div>
</main>

<script>
    var data = @json($data);
</script>
<script src="{{ asset('assets/js/home.js') }}"></script>

@endsection
