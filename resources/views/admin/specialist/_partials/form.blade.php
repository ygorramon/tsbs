@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $specialist->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <textarea name="description" id="description" class="form-control" maxlength="500">{{ $specialist->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <label>Foto:</label>
    <input type="file" name="photo" class="form-control">
</div>
<div class="form-group">
    <label>Cidade:</label>
    <input type="text" name="city" class="form-control" placeholder="Cidade" value="{{ $specialist->city ?? old('city') }}">
</div>
<div class="form-group">
    <label>Estado:</label>
    <select   class="form-control" name="state">
    <option value="AC" @if(isset($specialist) && $specialist->state=="AC") selected @endif>Acre</option>
    <option value="AP" @if(isset($specialist) && $specialist->state=="AP") selected @endif>Amapá</option>
    <option value="AL" @if(isset($specialist) && $specialist->state=="AL") selected @endif>Alagoas</option>
    <option value="AM" @if(isset($specialist) && $specialist->state=="AM") selected @endif>Amazonas</option>
    <option value="BA" @if(isset($specialist) && $specialist->state=="BA") selected @endif>Bahia</option>
    <option value="CE" @if(isset($specialist) && $specialist->state=="CE") selected @endif>Ceará</option>
    <option value="DF" @if(isset($specialist) && $specialist->state=="DF") selected @endif>Distrito Federal</option>
    <option value="ES" @if(isset($specialist) && $specialist->state=="ES") selected @endif>Espírito Santo</option>
    <option value="GO" @if(isset($specialist) && $specialist->state=="GO") selected @endif>Goiás</option>
    <option value="MA" @if(isset($specialist) && $specialist->state=="MA") selected @endif>Maranhão</option>
    <option value="MT" @if(isset($specialist) && $specialist->state=="MT") selected @endif>Mato Grosso</option>
    <option value="MS" @if(isset($specialist) && $specialist->state=="MS") selected @endif>Mato Grosso do Sul</option>
    <option value="MG" @if(isset($specialist) && $specialist->state=="MG") selected @endif>Minas Gerais</option>
    <option value="PA" @if(isset($specialist) && $specialist->state=="PA") selected @endif>Pará</option>
    <option value="PB" @if(isset($specialist) && $specialist->state=="PB") selected @endif>Paraíba</option>
    <option value="PR" @if(isset($specialist) && $specialist->state=="PR") selected @endif>Paraná</option>
    <option value="PE" @if(isset($specialist) && $specialist->state=="PE") selected @endif>Pernambuco</option>
    <option value="PI" @if(isset($specialist) && $specialist->state=="PI") selected @endif>Piauí</option>
    <option value="RJ" @if(isset($specialist) && $specialist->state=="RJ") selected @endif>Rio de Janeiro</option>
    <option value="RN" @if(isset($specialist) && $specialist->state=="RN") selected @endif>Rio Grande do Norte</option>
    <option value="RS" @if(isset($specialist) && $specialist->state=="RS") selected @endif>Rio Grande do Sul</option>
    <option value="RO" @if(isset($specialist) && $specialist->state=="RO") selected @endif>Rondônia</option>
    <option value="RR" @if(isset($specialist) && $specialist->state=="RR") selected @endif>Roraima</option>
    <option value="SC" @if(isset($specialist) && $specialist->state=="SC") selected @endif>Santa Catarina</option>
    <option value="SP" @if(isset($specialist) && $specialist->state=="SP") selected @endif>São Paulo</option>
    <option value="SE" @if(isset($specialist) && $specialist->state=="SE") selected @endif>Sergipe</option>
    <option value="TO" @if(isset($specialist) && $specialist->state=="TO") selected @endif>Tocantins</option>
    <option value="EX" @if(isset($specialist) && $specialist->state=="EX") selected @endif>Estrangeiro</option>
</select>
</div>
<div class="form-group">
    <label>Telefone / Whatsapp:</label>
    <input type="text" name="whatsapp" class="form-control" placeholder="(99) 999999999" value="{{ $specialist->whatsapp ?? old('whatsapp') }}">
</div>
<div class="form-group">
    <label>Instagram:</label>
    <input type="text" name="instagram" class="form-control" placeholder="instagram" value="{{ $specialist->instagram ?? old('instagram') }}">
</div>
<div class="form-group">
    <label>Facebook:</label>
    <input type="text" name="facebook" class="form-control" placeholder="facebook" value="{{ $specialist->facebook ?? old('facebook') }}">
</div>
<div class="form-group">
    <label>Site para contato:</label>
    <input type="text" name="site" class="form-control" placeholder="site" value="{{ $specialist->site ?? old('site') }}">
</div>
<div class="form-group">
    <label>Categoria:</label>
    <select   class="form-control" name="category_id">
        @foreach($categories as $category)
    <option value="{{$category->id}}" @if(isset($specialist) && $specialist->category->id==$category->id) selected @endif> {{$category->name}}</option>
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
