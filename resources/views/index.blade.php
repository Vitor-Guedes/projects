@extends ('template')

@section('title') Projetos @endsection

@section('header')
    <nav class="projects">
        <ul>
            <li> <a href="{{ route('balancesystem.index') }}">Systema de Saldo</a> </li>
        </ul>
    </nav>
@endsection