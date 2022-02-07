form = $("#signUp")

form.submit(() => {

    let prenom = $("#signUp").find("[name=prenom]").val()
    let nom = $("#signUp").find("[name=nom]").val()
    let tel = $("#signUp").find("[name=telephone]").val()
    let jour = $("#signUp").find("[name=jour]").val()
    let mois = $("#signUp").find("[name=mois]").val()
    let annee = $("#signUp").find("[name=annee]").val()
    let email = $("#signUp").find("[name=email]").val()
    let pass = $("#signUp").find("[name=password]").val()
    let confirm = $("#signUp").find("[name=confirm]").val()

    if (prenom == "") {
        $("#alert-prenom").css("display", "block")
        $("#alert-prenom").text("Veuillez renseignez un prenom")
    }

    else if (nom == "") {
        $("#alert-nom").css("display", "block")
        $("#alert-nom").text("Veuillez renseignez un nom")
    }

    else if (nom == "") {
        $("#alert-telephone").css("display", "block")
        $("#alert-telephone").text("Veuillez renseignez un telephone")
    }

    else if (nom == "") {
        $("#alert-email").css("display", "block")
        $("#alert-email").text("Veuillez renseignez un email")
    }

    else if (nom == "") {
        $("#alert-password").css("display", "block")
        $("#alert-password").text("Veuillez renseignez un mot de passe")
    }

    else if (nom == "") {
        $("#alert-confirm").css("display", "block")
        $("#alert-confirm").text("Veuillez confirmez votre mot de passe")
    }

    else {
        $.post("model.php", { prenom: prenom, email: email, newUser: true, nom: nom, tel: tel, date: `${annee}-${mois}-${jour}`, pass: pass, confirmPass: confirm }, function (data) {
            window.location.href = "profil.php";
            console.log(data)
        })
    }

    return false

})