<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class TicketAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('grc_user','text')
            ->add('email','email')
            ->add('grc_user','sonata_type_model',array(
                'class' => 'AppBundle\Entity\User',
            ))
            ->add('eternity','sonata_type_model',array(
                'class' => 'AppBundle\Entity\Eternity',
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('eternity')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('eternity')
            ->add('grcuser')
            ->add('created_at','datetime', ['format' => 'd/m/Y H:i:s'])
            ->add('source')
            ->add('email')
            ->add('refundedAmount')
            ->add('wasUnsuscribed')
            ->add('matchedUserId')
        ;
    }

    protected $datagridValues = array(
        '_page' => 1,
        '_per_page' => 32,
        '_sort_order' => 'DESC',
    );

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('eternity')
            ->add('grcuser')
            ->add('created_at')
            ->add('source')
            ->add('email')
            ->add('refundedAmount')
            ->add('wasUnsuscribed')
            ->add('matchedUserId')
            ->add('comments')
        ;
    }
}