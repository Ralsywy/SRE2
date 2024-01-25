@extends('base')
@section('content')
<div class="page-inscrit">
    <div class="header">
        <h1>Liste des dossiers en cours</h1>
        <input type="text" id="search" name="search" class="search-bar hidden" placeholder="Rechercher...">
    </div>
    
    <table>
        <thead>
            <tr class="hidden">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Accompagnateur</th>
                <th>Nombre de rendez-vous</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach($inscrits as $ligne)
            <tr class="hidden">
                <td><a class="a-nom" href="{{ route('voir-inscrit',[$ligne["id"]]) }}">{{$ligne->nom}}</a></td>
                <td><a class="a-nom" href="{{ route('voir-inscrit',[$ligne["id"]]) }}">{{$ligne->prenom}}</a></td>
                <td>{{$ligne->user->name}}</td>
                <td>{{$ligne->rdvs->count()}}</td>
                <td>
                    <a href="{{ route('voir-rdv',[$ligne["id"]]) }}" class="a-rdv">Rendez-vous</a>
                    <a href="{{ route('modifier-inscrit',[$ligne["id"]]) }}" class="a-modif">Ajouter des infos</a>
                    <a href="{{ route('voir-inscrit',[$ligne["id"]]) }}" class="a-voir"><i class="fa-solid fa-eye"></i></a>
                    <form method="post" action="{{ route('terminer',[$ligne->id])}}" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn_terminer"><i class="fa-solid fa-lock"></i></button>
                    </form>
                    <form method="post" action="{{ route('supp-inscrit',[$ligne->id])}}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn_supp" onclick='return check_del()'><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- SCRIPT RECHERCHE DYNAMIQUE !-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        });
        function search_table(value){
            $('#tbody tr').each(function(){
                var found ='false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                    {
                        found='true';
                    }
                });
                if(found=='true'){
                    $(this).show();
                }
                else{
                    $(this).hide();
                }
            });
        }
    });
</script>
@endsection