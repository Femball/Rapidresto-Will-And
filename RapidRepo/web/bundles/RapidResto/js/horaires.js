/**
 * Created by rakotomalala on 31/07/2017.
 */

function ouvert_fermer(heureOuverture, heureFermeture, heureOuverturePM, heureFermeturePM, jour1, jour2) {

    var date = new Date();
    var jour = date.getDate();
    var heure = date.getHours();
    var minutes = date.getMinutes();
    var heureActuelle = heure * 60 * 60 + minutes * 60;

    if (heureOuverture) {
        var h1 = heureOuverture.split(":");
        var openAM = h1[0] * 60 * 60 + h1[1] * 60;
    }

    if (heureFermeture) {
        var h2 = heureFermeture.split(":");
        var closeAM = h2[0] * 60 * 60 + h2[1] * 60;
    }

    if (heureFermeture) {
        var h3 = heureOuverturePM.split(":");
        var openPM = h3[0] * 60 * 60 + h3[1] * 60;
    }
    if (heureFermeture) {
        var h4 = heureFermeturePM.split(":");
        var closePM = h4[0] * 60 * 60 + h4[1] * 60;
    }

    var ouvert = '<div style="color: green; font-size: 22px; text-align: center; border-radius: 5px;"><b><i>Ouvert</i></b></div>';
    var ferme = '<div style="color: red; font-size: 22px; text-align: center; border-radius: 5px;"><b><i>Fermé</i></b></div>';

    if ((jour == jour1) || (jour == jour2)) {
        return ferme;
    } else {
        if (((heureActuelle >= openAM) && (heureActuelle <= closeAM)) || ((heureActuelle >= openPM) && (heureActuelle <= closePM))) {
            return ouvert;
        } else {
            return ferme;
        }
    }
}