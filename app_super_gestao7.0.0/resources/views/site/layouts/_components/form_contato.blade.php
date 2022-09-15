{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        {{$errors->first('nome')}}

    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
        {{$errors->has('telefone')?$errors->first ('telefone'):''}}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
        {{$errors->has('email')?$errors->first ('email'):''}}
    <br>

    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="1">Qual o motivo do contato?</option>
       <option value="2">Duvida</option>
       <option value="3">Elogio</option>
       <option value="4">Reclamação</option>
       <option value="5">Sugestão</option>



    </select>
    {{$errors->has('motivo_contatos_id')?$errors->first ('motivo_contatos_id'):''}}
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    {{$errors->has('mensagem')?$errors->first ('mensagem'):''}}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>


