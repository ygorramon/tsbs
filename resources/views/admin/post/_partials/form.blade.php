@include('admin.includes.alerts')

<div class="form-group">
    <label>Título:</label>
    <input type="text" name="title" class="form-control" placeholder="Nome:" value="{{ $post->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <textarea name="description" id="description" class="form-control" maxlength="500">{{ $post->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <label>Foto:</label>
    <input type="file" name="photo" class="form-control">
</div>

<div class="form-group">
    <label>Autor:</label>
    <select   class="form-control" name="author_id">
        @foreach($authors as $author)
    <option value="{{$author->id}}" @if(isset($post) && $post->author->id==$author->id) selected @endif> {{$author->name}}</option>
    @endforeach    
</select>
</div>



<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
@section('plugins.Summernote', true)
@section('js')
<script>
$(document).ready(function() {
  $('#description').summernote();
});
</script>
@endsection
