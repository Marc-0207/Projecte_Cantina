document.getElementById("seguent").addEventListener("click", function(e) {


    let nom = document.getElementById("nom");
    let correu = document.getElementById("correu").value;

    let telefon = document.getElementById("telefon").value;


    if (telefon == "") {
        e.preventDefault();
    } else if (!(/^\d{9}$/.test(telefon))) {
        e.preventDefault();

    }

    if (correu == "") {
        e.preventDefault();
        alert("NO");
    } else if (!(/^([a-zA-Z0-9._-]+)@inspedralbes.cat$/.exec(correu))) {
        e.preventDefault();
        alert("No");
    }

});
