function valider (form)
{
    if ( form.lastName.value == "" )
    {
        $("#formSignIn").append(`<div class="alert alert-warning">
                <p>Veuillez entrer votre nom !.</p>
            </div>`);
        valid = false;
        form.lastName.focus();
return valid;
    }
    if ( form.firstName.value == "" )
    {
        alert ( "Veuillez entrer votre prénom !" );
        valid = false;
        form.firstName.focus();
return valid;
    }
    if ( form.birthyear.value == "" )
    {
        alert ( "Veuillez saisir votre année de naissance !" );
        valid = false;
        form.birthyear.focus();
return valid;
    }
    if ( form.email.value == "" )
    {
        alert ( "Veuillez saisir votre adresse mail !" );
        valid = false;
        form.email.focus();
return valid;
    }

    if ( form.phoneNumber.value == "" )
    {
        alert ( "Veuillez entrer votre numéro de téléphone !" );
        valid = false;
        form.phoneNumber.focus();
return valid;
    }
   
    if (form.pwd1.value != "" && form.pwd1.value != form.pwd2.value)    {
        alert ( "Verifier votre mot de passe" );
        valid = false;
        form.pwd1.focus();
return valid;
    }
    if (form.pwd1.value == form.firstName.value || form.pwd1.value == form.lastName.value ) {
        alert("le mot de passe doit etre different du prenom ou du nom !");
        valid = false;
        form.pwd1.focus();
return valid;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Le mot de passe doit contenir au moins un chiffre (0-9)!");
        form.pwd1.focus();
        valid = false; 
return valid;        
      }    
    re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Le mot de passe doit contenir au moins une majuscule (A-Z)!");
        form.pwd1.focus();
        valid = false;
return valid; 
      }    
     if ( valid = true) {
        create_user();
        console.log("tout va bien navvette")
     } 
}
       
