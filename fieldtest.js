function kolla(u, p) {

    if (kollaField(u)) {
        if (kollaField(p))
            return true;
        else
            return false;
    } else
        return false;


}

function kollaField(f) {
    f = f.trim();
    if (f.length == 0 || f == "") {
        return false;
    } else {

        if (f.length > 15) {
            alert("För långt användarnamn eller lösenord,\nhögst 15 tecken är tillåtet.\nDu har använt " + f.length + " tecken.");
            return false;
        } else {

            if (  kollaTecknet(f) )
            {
                  return true;
            }
            else
            {
                  return false;
            }


        }

    }
}

function kollaTecknet(t)
{

    var patt = /[\s \\ \/ < >]/;

    var ut = t.match(patt);
    if (ut == null)
        return true;
    else
        alert("Otillåtet tecken i användarnamnet eller i lösenordet");

}
