@if(session('status'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <buttton type="button" class="close"  data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </buttton>
    </div>
@endif
