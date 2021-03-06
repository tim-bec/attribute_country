<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeCountry
 * @author      Oliver Hoff <oliver@hofff.com>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

$GLOBALS['METAMODELS']['attributes']['country']['class'] = 'MetaModelAttributeCountry';
$GLOBALS['METAMODELS']['attributes']['country']['image'] = 'system/modules/metamodelsattribute_country/html/country.png';
$GLOBALS['METAMODELS']['filters']['select']['attr_filter'][] = 'country';