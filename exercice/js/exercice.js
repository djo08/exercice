(function() {
let submit = document.getElementById('submit');

submit.addEventListener('click', function (event) {

let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let valueNom;
let valuePrenom
if (!nom.value) {
   valueNom = nom.name;
}
else {
   valueNom = "";
}

if (!prenom.value) {
   valuePrenom = prenom.name;
}
else {
   valuePrenom = "";
}

if (valueNom != "" || valuePrenom != "") {

  event.preventDefault();
  alert('Champ(s) manquant(s) : ' + valueNom + ' ' + valuePrenom);
}

});
})();
