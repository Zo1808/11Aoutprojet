@extends('layouts.app')
@section('content')
<style>
    .divs {
    position: relative;
    display: inline-block;
    background-color: #71748d;
   
}

.inputs {
    position:absolute;
    left: 0px;
    height:100%;
    width: 100%;
    opacity: 0;
    background: #00f;
    z-index:999;
}

.icons {
    position:relative;
}
.ban {
  width:98%;
  margin-left:1%;
  background:white;
}

.ban h1 {
  margin:auto;
}

.select_wrap {
  width:100%;
  height:35px;
  margin:3px;
  background:url('http://www.foxrep.com/wp-content/uploads/2017/11/Down-Arrow-PNG.png') no-repeat right 10px center #ffffff;
  background-size:20px;
  border:1px solid lightgray;
}

.select_wrap span {
   line-height:35px;
  padding:0 10px;
 
}

.select_wrap ul {
  display:none;
  position:absolute;
  left:-1px;
  right:-1px;
  top:36px;
  list-style-type:none;
  background:#ffffff;
  margin:0;
  padding:10px 0;
  border:1px solid #000000;
  border-top:0;
}

.select_wrap ul li {
  display:block;
  padding:5px 10px;
  cursor:pointer;
}

.select_wrap span img,
.select_wrap ul li img {
  display:inline-block;
  vertical-align:middle;
  width:20px;
  margin-right:0px;
}

.select_wrap ul li:hover {
  color:red;
}
.avatar-wrapper{
    position: relative;
    height: 200px;
    width: 200px;
    margin: 50px auto;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 1px 1px 15px -5px black;
    transition: all .3s ease;
    &:hover{
        transform: scale(1.05);
        cursor: pointer;
    }
    &:hover .profile-pic{
        opacity: .5;
    }
    .profile-pic {
    height: 100%;
        width: 100%;
        transition: all .3s ease;
        &:after{
            font-family: FontAwesome;
            content: "\f007";
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            font-size: 190px;
            background: #ecf0f1;
            color: #34495e;
            text-align: center;
        }
    }
    .upload-button {
        position: absolute;
        top: 0; left: 0;
        height: 100%;
        width: 100%;
        .fa-arrow-circle-up{
            position: absolute;
            font-size: 234px;
            top: -17px;
            left: 0;
            text-align: center;
            opacity: 0;
            transition: all .3s ease;
            color: #34495e;
        }
        &:hover .fa-arrow-circle-up{
            opacity: .9;
        }
    }
}
picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
</style>
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Inscrire Nouvelle Etudiants</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                   <div class="picture-container">
                                        <div class="picture">
                                            <img src="https://oasys.ch/wp-content/uploads/2019/03/photo-avatar-profil-300x300.png" class="picture-src" id="wizardPicturePreview" title="">
                                        </div>
                                       <h6 class="text-light"></h6>

                                    </div>
                        </center>
                    <form action="{{route('etudiant.store')}}" method="POST"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        <center>
                            
                          &nbsp<input type="file" id="wizard-picture" name="photo"class=""value="choisir un photo">
                                        
                        </center>
                            
                          <h3><b>Information Etudiants</b> </h3>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Date de naissance</label>
                                    <input type="date" name="ddn" id="ddn" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                        <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Sexe</label>
                                   <select name="classe_id" id="classe_id" class="form-control">
                                            <option value="Masculin">Masculin</option>
                                       
                                            <option value="Feminin">Feminin</option>
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                       <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Commune</label>
                                    <input type="text" name="commune" id="commune" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">District et région d'origine</label>
                                    <input type="text" name="district" id="district" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Code Postal</label>
                                    <input type="text" name="postal" id="postal" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Situation Matrimoniale</label>
                                    <input type="text" name="sitM" id="sitM" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nationaité</label>
                                    <input type="text" name="nationalite" id="nationalite" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                       <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">CIN</label>
                                    <input type="text" name="CIN" id="cin" >
                                    du
                                    <input type="date" name="dateCin" id="dateCin" >
                                    à
                                    <input type="text" name="lieuCin" id="lieuCin" >
                                    
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Adresse</label>
                                  <input type="text" name="adresse" id="adresse" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Phone </label>
                                  <input type="text" name="telEtu" id="telEtu" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Email </label>
                                  <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Filière</label>
                                   <select name="filiere_id" id="filiere_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Filieres::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Niveau</label>
                                   <select name="classe_id" id="classe_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Classes::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom_classe}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>

                    


                    <hr>
                    <h3><b>Information Bacc</b></h3>
                     <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Année Bacc</label>
                                   <input type="text" name="bacc_annee" id="bacc_annee" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                                                                                                  



                    <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">N° D’INSCRIPTION BAC:</label>
                                   <input type="text" name="numInsBac" id="numInsBac" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">SERIE BAC :</label>
                                   <input type="text" name="bacc_serie" id="bacc_serie" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">SECTEUR :</label>
                                   <input type="text" name="secteur" id="secteur" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">SPECIALITE :</label>
                                   <input type="text" name="spec" id="spec" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">CENTRE BAC :</label>
                                   <input type="text" name="bacc_annee" id="bacc_annee" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <div class="row">
                          <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">CENTRE DE FORMATION D’ORIGINE :</label>
                                   <input type="text" name="cfo" id="cfo" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                   <hr>
                    <h3><b>Information Parents</b></h3>
                    <b><u>Père</u></b>
                    <br>
                    <br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom</label>
                                    <input type="text" name="nom_p" id="nom_p" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Prenom</label>
                                    <input type="text" name="prenom_p" id="prenom_p" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Profession</label>
                                    <input type="date" name="prof_p" id="prof_p" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Adresse</label>
                                  <input type="text" name="adresse_p" id="adresse_p" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">N° Tel</label>
                                  <input type="text" name="phone_p" id="phone_p" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <br>
                    <br>
                    <b><u>Mère</u></b>
                     <br>
                    <br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom</label>
                                    <input type="text" name="nom_m" id="nom_m" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Prenom</label>
                                    <input type="text" name="prenom_m" id="prenom_m" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Profession</label>
                                    <input type="date" name="prof_m" id="prof_m" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Adresse</label>
                                  <input type="text" name="adresse_m" id="adresse_m" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">N° Tel</label>
                                  <input type="text" name="phone_m" id="phone_m" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                       <button class="pull-right btn btn-primary">Inscrire</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection
@section('js')
<script>
     $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
      
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('.select_wrap').click(function() {
  $('.select_wrap ul').slideToggle(200);
});

//fermeture liste au blur


//au click sur un li
$('.select_wrap ul li').click(function() {
  //on recupere son contenu
  //var affichage = $(this).html();
    var affichage='<img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Madagascar.svg"> Madagasikara';
  //on recupere sa valeur
  var valeur = "Madagasikara";
  
  //on affiche son contenu dans le span
  $('.select_wrap span').html(affichage);
  //on attribue sa valeur à l'input
 // $('#pays').val(valeur);
 $('.select_wrap input').val(valeur);
});

</script>
@endsection