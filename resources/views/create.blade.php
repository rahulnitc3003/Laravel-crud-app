@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizental" method="POST" action="{{ url('/create') }}">
                <fieldset>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputTitle">Project Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Project Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleDescription">Project Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
                </fieldset>
            </form>

        </div>
    </div>
</div>


@include('inc.footer')
