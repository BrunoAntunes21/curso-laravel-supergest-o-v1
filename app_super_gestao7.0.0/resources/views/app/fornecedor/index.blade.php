<h3
>Fornecedor</h3>
{{-- esse comentario será descardado--}}
{{-- teste--}}
@php




@endphp

{{-- @unless se o retorno for false --}}
<h4>
@isset($fornecedores)

    @forelse( $fornecedores as $indece =>$fornecedor)


    <hr>
    Iteração atual:{{$loop->iteration}}<br>
    Fornecedor:{{$fornecedor['nome']}}
    <br>
    Status:{{$fornecedor['status']}}
    <br>

    {{-- @isset testa a existencia de uma varavel --}}
   CNPJ:{{$fornecedor['cnpj'] ?? ' OPS... parece que o dado foi não preenchido'}}
    <!--
        $variavel testada não estiver definida(isset)
        ou
        $variavel testada possui o valor null
        -->
    <br>
    TELEFONE:({{$fornecedor['ddd']??''}} {{$fornecedor['telefone'] ?? ''}})
    <br>
    @if($loop->first)
       <i> primeira interação</i><br>
    @endif
    @if($loop->last)
    <i>ultima interação do loop<br>
    total de registros:{{$loop->count}}</i><br>
    @endif
    @switch($fornecedor['ddd'])
        @case('11')
            São paulo-SP
            @break

        @case('12')
            Sâo josé dos campos-SANJA CITY São paulo
            @break
        @case('85')
            Fortaleza-Ceará
            @break
        @default
            Estado não identificado


    @endswitch
    @empty
    Não existem fornecedores cadastrados

    @endforelse
@endisset

</h4>


