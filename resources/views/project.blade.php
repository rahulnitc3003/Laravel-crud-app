@include('inc.header')

<div class="container">
    @if ($projectDetails)
        <div class="jumbotron">
            <h1 class="display-5">{{ $projectDetails->title }}</h1>
            <hr class="my-4">
            <p>{{ $projectDetails->description }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
        </div>
    @endif
</div>
@include('inc.footer')
