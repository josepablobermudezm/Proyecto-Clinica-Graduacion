@extends('layouts.app')
@section('PageTitle', 'Menú Antecedentes')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style=" text-align:center; color: #209f85; font-size: 20px; cursor: pointer;" >Menú Antecedentes</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div id='div_media'>
                        <nav>
                            <ul id='menu'>
                            <?php if($Genero == 'F') {?>
                                <a style=" outline:none;" href="{{ route('VerAntecedenteGinecologico',$idExp) }}"><button id="Button1" onmouseout="CambiarColor(this)" onmouseover="CambiarColor(this)" class="Button1"><i style="outline:none; color: #209f85;"  class="far fa-file-alt"></i><br><label class="textocool" >Ginecológico</label></button></a>
                            <?php  }?>
                            {!! Form::open(['method' => 'POST','route' => ['index', $idExp, 'q' ],'style'=>'display:inline']) !!}
                                <a style=" outline:none;"><button type="submit" id="Button1" onmouseout="CambiarColor(this)" onmouseover="CambiarColor(this)" class="Button1" onclick="CambiarColor(this)"><i  style="outline:none; color: #209f85;" class="far fa-file-alt"></i><br><label class="textocool">Quirúrgicos</label></button></a>
                            {!! Form::close() !!}
                                <a style=" outline:none;" href="{{ url('usuarios') }}"><button id="Button1" onmouseout="CambiarColor(this)" onmouseover="CambiarColor(this)" class="Button1" onclick="CambiarColor(this)"><i   style="outline:none; color: #209f85;" class="far fa-file-alt"></i><br><label class="textocool">Traumáticos</label></button></a>
                                <a style=" outline:none;" href="{{ route('usuarios.create')}}"><button id="Button1" onmouseout="CambiarColor(this)" onmouseover="CambiarColor(this)" class="Button1" onclick="CambiarColor(this)"><i     style="outline:none; color: #209f85;" class="far fa-file-alt"></i><br><label class="textocool">Registrar</label></button></a>
                                <a style=" outline:none;" href="{{ route('reportes') }}"><button id="Button1" onmouseout="CambiarColor(this)" onmouseover="CambiarColor(this)" class="Button1" onclick="CambiarColor(this)"><i style="outline:none; color: #209f85;" class="far fa-file-alt"></i><br><label class="textocool">Reportes</label></button></a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection