@include('inc.header')
<div class="container">
    <div class="row">
        @if (session('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
        @endif
        <legend class="text text-center">Project Blogs</legend>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Project Title</th>
                    <th scope="col">Project Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($articles) > 0)
                    @foreach ($articles->all() as $article)
                        <tr class="table-default">
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>
                                <a href="{{ url('/project/'.$article->id) }}" class="btn btn-success btn-sm">Read</a>
                                <a href="{{ url('/update/'.$article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('/delete/'.$article->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@include('inc.footer')

<script type="text/javascript">
    $(document).ready( function() {
      $('.alert-success').delay(3000).fadeOut();
    });
</script>
