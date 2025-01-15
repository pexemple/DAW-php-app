<?php
/**
 * Calcular el total amb IVA.
 *
 * Aquesta funció calcula el preu total afegint l'IVA al preu donat.
 *
 * @param float $preu Preu sense IVA.
 * @param float $iva Percentatge de l'IVA (per defecte 21%).
 * @return float Total amb IVA inclòs.
 */
function calcularTotalAmbIVA($preu, $iva = 21) {
    return $preu + ($preu * ($iva / 100));
}

// Exemple d'ús
echo "El total és: " . calcularTotalAmbIVA(100) . " €";
