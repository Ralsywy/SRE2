@extends('base')
@section('content')
<div class="page-inscrit">
    <input type="text" id="search" name="search" class="search-bar hidden" placeholder="Rechercher...">
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
                <td>{{$ligne->nom}}</td>
                <td>{{$ligne->prenom}}</td>
                <td>{{$ligne->user->name}}</td>
                <td>{{$ligne->nb_rdv}}</td>
                <td>
                    <a href="{{ route('modifier-inscrit',[$ligne["id"]]) }}" class="a-modif">Modifier</a>
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