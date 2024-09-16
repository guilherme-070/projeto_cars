@extends('templates.main')

@section('content')

<form action="{{route('carro.update', $carro->id)}}"method="POST">


    @csrf
    @method('PUT')

    <label class="mt-3">Placa</label>
    <input type="text" name="placa" class="form-control" value="{{$placa->carro->name}}"/>


    <label class="mt-3">Marca</label>
    <select name="marca" class="form-control">
        <option selected disabled></option>

    @foreach ($carro as $item)
        @if($item->id == $carro->modelo_id)
        <option value="{{$item->id}}" selected> {{$item->name}}</option>
        @else
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endif
    @endforeach
    </select>


<input type="submit" value="Alterar" class="btn btn-success mt-1">
</form>

@endsection
