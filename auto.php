<SCRIPT LANGUAGE="JavaScript">
function checkPw(form) {
pw1 = form.passe.value;
pw2 = form.passe2.value;

if (pw1 != pw2) {
alert ("\erreur: les mots de passes ne correspondent pas")
return false;
}
else return true;
}
</script>

<form action="checkPw()">
<INPUT TYPE="password" size=20 VALUE="" NAME="passe"><br>
<INPUT TYPE="password" size=20 VALUE="" NAME="passe2"> 
</form>