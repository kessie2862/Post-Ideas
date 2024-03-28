<h4> Share yours ideas </h4>
<div class="row">
    {{-- Using named route in form action --}}
    <form action="{{ route('idea.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
            @error('idea')
                <span class="text-danger fs-6 d-block mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
