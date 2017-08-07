<?php

namespace RapidResto\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        function ouvert_fermer($heureOuverture, $heureFermeture, $heureOuverturePM = '', $heureFermeturePM = '', $jourUnFerme = '', $jourDeuxFerme = '' ){
            $days = date('N');
            $hours = date('H:i');
            $ouvert = '<div style="color: green; font-size: 22px; text-align: center; border-radius: 5px;"><b><i>Ouvert</i></b></div>';
            $ferme = '<div style="color: red; font-size: 22px; text-align: center; border-radius: 5px;"><b><i>Fermé</i></b></div>';


            if (($days == $jourUnFerme) || ($days == $jourDeuxFerme)){
                return $ferme;
            }else{
                if((($hours >= $heureOuverture) && ($hours <= $heureFermeture)) || (($hours >= $heureOuverturePM) && ($hours <= $heureFermeturePM))) {
                    return $ouvert;
                }else{
                    return $ferme;
                }
            }
        }

        $chezSoso = ouvert_fermer('11:3s0', '15:00', '18:30', '22:30');
        $homBurger =  ouvert_fermer('11:30', '14:00', '18:30', '21:00', '6', '1');
        $madameNoy = ouvert_fermer('11:00', '14:00', '18:00', '22:00', '0');
        $macDo = ouvert_fermer('11:00', '22:30');
        $pastaNostra = ouvert_fermer('11:00', '15:00', '18:00', '22:00', '6', '1');
        $pabloPizza = ouvert_fermer('11:00', '14:00', '18:00', '22:30', '1', '2');

        return $this->render('RapidRestoSiteBundle:Default:index.html.twig', array(
            'chezSoso'      =>  $chezSoso,
            'homBurger'     =>  $homBurger,
            'madameNoy'     =>  $madameNoy,
            'macDo'         =>  $macDo,
            'pastaNostra'   =>  $pastaNostra,
            'pabloPizza'    =>  $pabloPizza
        ));
    }
}
