@if(isset($errors))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif


@if (session('error'))
    <div class="alert-danger alert">
        {{session('error')}}
    </div>
@endif