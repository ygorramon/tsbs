@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $author->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <textarea name="description" id="description" class="form-control" maxlength="500">{{ $author->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <label>Foto:</label>
    <input type="file" name="photo" class="form-control">
</div>
<div class="form-group">
    <label>Cidade:</label>
    <input type="text" name="city" class="form-control" placeholder="Cidade" value="{{ $author->city ?? old('city') }}">
</div>
<div class="form-group">
    <label>Estado:</label>
    <select   class="form-control" name="state">
    <option value="AC" @if(isset($user) && $user->state=="AC") selected @endif>Acre</option>
    <option value="AP" @if(isset($user) && $user->state=="AP") selected @endif>Amapá</option>
    <option value="AL" @if(isset($user) && $user->state=="AL") selected @endif>Alagoas</option>
    <option value="AM" @if(isset($user) && $user->state=="AM") selected @endif>Amazonas</option>
    <option value="BA" @if(isset($user) && $user->state=="BA") selected @endif>Bahia</option>
    <option value="CE" @if(isset($user) && $user->state=="CE") selected @endif>Ceará</option>
    <option value="DF" @if(isset($user) && $user->state=="DF") selected @endif>Distrito Federal</option>
    <option value="ES" @if(isset($user) && $user->state=="ES") selected @endif>Espírito Santo</option>
    <option value="GO" @if(isset($user) && $user->state=="GO") selected @endif>Goiás</option>
    <option value="MA" @if(isset($user) && $user->state=="MA") selected @endif>Maranhão</option>
    <option value="MT" @if(isset($user) && $user->state=="MT") selected @endif>Mato Grosso</option>
    <option value="MS" @if(isset($user) && $user->state=="MS") selected @endif>Mato Grosso do Sul</option>
    <option value="MG" @if(isset($user) && $user->state=="MG") selected @endif>Minas Gerais</option>
    <option value="PA" @if(isset($user) && $user->state=="PA") selected @endif>Pará</option>
    <option value="PB" @if(isset($user) && $user->state=="PB") selected @endif>Paraíba</option>
    <option value="PR" @if(isset($user) && $user->state=="PR") selected @endif>Paraná</option>
    <option value="PE" @if(isset($user) && $user->state=="PE") selected @endif>Pernambuco</option>
    <option value="PI" @if(isset($user) && $user->state=="PI") selected @endif>Piauí</option>
    <option value="RJ" @if(isset($user) && $user->state=="RJ") selected @endif>Rio de Janeiro</option>
    <option value="RN" @if(isset($user) && $user->state=="RN") selected @endif>Rio Grande do Norte</option>
    <option value="RS" @if(isset($user) && $user->state=="RS") selected @endif>Rio Grande do Sul</option>
    <option value="RO" @if(isset($user) && $user->state=="RO") selected @endif>Rondônia</option>
    <option value="RR" @if(isset($user) && $user->state=="RR") selected @endif>Roraima</option>
    <option value="SC" @if(isset($user) && $user->state=="SC") selected @endif>Santa Catarina</option>
    <option value="SP" @if(isset($user) && $user->state=="SP") selected @endif>São Paulo</option>
    <option value="SE" @if(isset($user) && $user->state=="SE") selected @endif>Sergipe</option>
    <option value="TO" @if(isset($user) && $user->state=="TO") selected @endif>Tocantins</option>
    <option value="EX" @if(isset($user) && $user->state=="EX") selected @endif>Estrangeiro</option>
</select>
</div>
<div class="form-group">
    <label>Telefone / Whatsapp:</label>
    <input type="text" name="whatsapp" class="form-control" placeholder="(99) 999999999" value="{{ $author->whatsapp ?? old('whatsapp') }}">
</div>
<div class="form-group">
    <label>Instagram:</label>
    <input type="text" name="instagram" class="form-control" placeholder="instagram" value="{{ $author->instagram ?? old('instagram') }}">
</div>
<div class="form-group">
    <label>Facebook:</label>
    <input type="text" name="facebook" class="form-control" placeholder="facebook" value="{{ $author->facebook ?? old('facebook') }}">
</div>
<div class="form-group">
    <label>Site para contato:</label>
    <input type="text" name="site" class="form-control" placeholder="site" value="{{ $author->site ?? old('site') }}">
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
