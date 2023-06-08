@if (isset($errors) && count($errors) > 0)
<div class="alert alert-warning">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="text" class="form-control" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea type="text" class="form-control" placeholder="Descrição" cols="30"
            rows="5" name="body">{{ $support->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
</form>
