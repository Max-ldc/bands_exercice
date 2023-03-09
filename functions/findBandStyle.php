<?php

/**
 * Return the object Style, from the list, with the correspondant ID
 *
 * @param integer $id
 * @param array $styles styles list
 * @return Style
 */
function findBandStyle(int $id, StylesDb $stylesDb) : Style
{
    foreach ($stylesDb->getStyles() as $style) {
        if ($style->getId() === $id) {
            return $style;
        }
    }
}