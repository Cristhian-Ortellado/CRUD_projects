
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
