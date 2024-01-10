//scroll animations
const observer = new IntersectionObserver((entries)=> {
    entries.forEach((entry)=> {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

// message confirmation suppression accompagnateurs
function check_del()
{
    return confirm('Voulez-vous le supprimer définitivement ?')
}

//NOM en maj
const nameInput = document.getElementById("name");

  nameInput.addEventListener("keyup", function(event) {
    event.preventDefault();
    nameInput.value = nameInput.value.toUpperCase();
  });

// premiere lettre du prenom en maj
  function capitalizeFirstLetter() {
    // Récupérer le texte saisi dans le champ d'entrée
    var inputElement = document.getElementById("prenom");
    var inputValue = inputElement.value;

    // Vérifier si le texte n'est pas vide
    if (inputValue.length > 0) {
        // Mettre la première lettre en majuscule et concaténer avec le reste du texte
        inputValue = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
    }

    // Mettre à jour le champ d'entrée avec le texte modifié
    inputElement.value = inputValue;
}
