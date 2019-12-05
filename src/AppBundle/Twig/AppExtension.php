<?php

namespace AppBundle\Twig;

use Snd\EternityBundle\Entity\HipayTransaction;

Class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('boolean', array($this, 'booleanFilter')),
            new \Twig_SimpleFilter('dateApp', array($this, 'dateAppFilter')),
            new \Twig_SimpleFilter('amount', array($this, 'amountFilter')),
            new \Twig_SimpleFilter('transactionStatus', array($this, 'hipayStatusFilter')),
            new \Twig_SimpleFilter('transactionCategory', array($this, 'transactionCategoryFilter')),
            new \Twig_SimpleFilter('b64', array($this, 'encode64')),
        );
    }

    public function booleanFilter($value)
    {
        if ($value) {
            return '<span class="label label-success">oui</span>';
        } else {
            return '<span class="label label-danger">non</span>';
        }
    }

    public function amountFilter($value)
    {
        return $value / 100;
    }

    public function dateAppFilter($value)
    {
        if ($value == null) {
            return '-';
        } else {
            return $value->format('d-m-Y à H:i:s');
        }
    }

    public function getName()
    {
        return 'app_extension';
    }

    public function hipayStatusFilter($value)
    {
        $label = 'iconnu';
        switch ($value) {
            case 0:
                $label = '<span class="label label-default">Initialisée</span>';
                break;
            case 1:
                $label = '<span class="label label-success">Réussie</span>';
                break;
            case 2:
                $label = '<span class="label label-danger">Echouée</span>';
                break;
            case 3:
                $label = '<span class="label label-warning">en Attente</span>';
                break;
            case 4:
                $label = '<span class="label label-warning">Remboursée</span>';
                break;
            case 5:
                $label = '<span class="label label-danger">Contestée</span>';
                break;
            default:
                $label = '<span class="label label-warning">inconnu</span>';
                break;

        }
        return $label;
    }

    public function transactionCategoryFilter($value){
        $label = 'inconnu';
        switch($value){
            case 0:
                $label = '<span class="label label-success">First</span>';
                break;
            case 1:
                $label = '<span class="label label-success">Rebill</span>';
                break;
            case 2:
                $label = '<span class="label label-info">Retry</span>';
                break;
            case 3:
                $label = '<span class="label label-info" title="Retry manuel">Retry M</span>';
                break;
            default:
                break;
        }
        return $label;
    }

    public function encode64($value){
        $value = base64_encode($value);
        return $value;
    }
}
