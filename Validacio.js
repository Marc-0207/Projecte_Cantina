
document.getElementById("telefon");
    phonenumber();
function phonenumber()
{
    let phoneno = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im";
    if((document.getElementById("telefon").value.match(phoneno)))
    {
        alert("Es correcte");
        return true;
    }
    else
    {
        alert("No es correcte");
        console.log("a");
        return false;
    }
}