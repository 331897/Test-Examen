<?php

/**
 * @dataProvider faillingStatusCodes
 * 
 * if ($aantalBezoekers < 600 || $aantalBezoekers > 2500) { 
            return "Concert afgelast, het aantal bezoekers valt buiten de prognose.";
        } elseif ($prijsTickets < 25 || $prijsTickets > 75) {
            return "De ticketprijzen zijn niet realistisch, de verkoopprijs meot tussen de 25 en 75 euro liggen.";
        } else{
            $totaalBedrag = round($aantalBezoekers * $prijsTickets);
            $maxBandUitgaven = round((20 / 100) * $totaalBedrag);
            return $maxBandUitgaven < 3500 ? 'Voor dit bedrag is geen band beschikbaar, verhoog de ticketprijs.' : $maxBandUitgaven ;
        }
 * 
 * 
 */


class BenefietAvondtest
{
    public function testKostenBeneFietConcert()
    {

        return[
            [400],
            [200],
        

        ];

        
    }
}
