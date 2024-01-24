@extends('base')
@section('content')
<div class="page-rdv">
    <section id="plans-action">
        <div class="container">
            <h1>Plans d'action de {{$inscrit->nom}} {{$inscrit->prenom}}</h1>
            <table>
                <thead>
                    <tr class="hidden">
                        <th>Actions à mener</th>
                        <th>Objectifs</th>
                        <th>Moyens mis en oeuvre</th>
                        <th>Échéances</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr class="hidden">
                        <form method="POST" action="{{ route('creer-plan',[$inscrit->id])}}">
                            @csrf
                            <td><textarea class="form-control" id="action_menee" name="action_menee" rows="3"></textarea></td>
                            <td><textarea class="form-control" id="objectif" name="objectif" rows="3"></textarea></td>
                            <td><textarea class="form-control" id="moyen_oeuvre" name="moyen_oeuvre" rows="3"></textarea></td>
                            <td><input class="form-control" type="date" id="echeance" name="echeance"></td>
                            <td><button type="submit" class="btn_creer">Créer</button></td>
                        </form>
                    </tr>
                    @foreach($inscrit->planActions as $ligne)
                    <tr>
                        <td>{{$ligne->action_menee}}</td>
                        <td>{{$ligne->objectif}}</td>
                        <td>{{$ligne->moyen_oeuvre}}</td>
                        <td>{{$ligne->echeance}}</td>
                        <td>
                            <form method="post" action="{{ route('supp-plan',[$ligne->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn_supp" onclick='return check_del()'>Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    
    <hr>
    <section id="rdv">
        <div class="container">
            <h1>Rendez-vous de {{$inscrit->nom}} {{$inscrit->prenom}}</h1>
            <table>
                <thead>
                    <tr class="hidden">
                        <th>Contexte</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr class="hidden">
                        <form method="POST" action="{{ route('creer-rdv',[$inscrit->id])}}">
                            @csrf
                            <td><textarea class="form-control" id="contexte" name="contexte" rows="3"></textarea></td>
                            <td><input class="form-control" type="date" id="date" name="date"></td>
                            <td><button type="submit" class="btn_creer">Créer</button></td>
                        </form>
                    </tr>
                    @foreach($inscrit->rdvs as $ligne)
                    <tr>
                        <td>{{$ligne->contexte}}</td>
                        <td>{{$ligne->date}}</td>
                        <td>
                            <form method="post" action="{{ route('supp-rdv',[$ligne->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn_supp" onclick='return check_del()'>Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection