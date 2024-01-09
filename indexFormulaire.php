<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    
    <link rel="stylesheet" href="styleFormulaire.css">
</head>
<body>
    <div class="container">
    <h1 class="title">Formulaire d'un Cv</h1>
    <div class="content">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="info">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="input">Sélectionner une image carrée 1:1 (Recommandée)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="info">    
                <h2>Informations personnelles</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="span">Nom</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="span">Prénom</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
            
                <div class="input">
                    <label class="span">Adresse email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="input">
                    <label class="span">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder=" +212" required>
                </div>
            </div>
            <div class="Cinfo">    
                <h2>Compétences (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Les noms des compétences</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Sélectionnez des étoiles en fonction de votre niveau de compétence</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Débutant avancé</option>
                        <option value="3">3 - Compétent</option>
                        <option value="4">4 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Loisirs (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Loisir</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>À propos de moi</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Educations (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">École/Collège/Université</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom du diplôme</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">De</label>
                        <input type="text" name="from1" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">À</label>
                        <input type="text" name="to1" class="form-control">
                    </div>
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experiences (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Déscription</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <input type="submit" class="form-control my-2">
        </form>
    </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
