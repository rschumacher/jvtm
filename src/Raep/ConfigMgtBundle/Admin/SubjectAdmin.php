<?php
/**
 * Created by JetBrains PhpStorm.
 * User: raphael
 * Date: 30.08.13
 * Time: 10:56
 * To change this template use File | Settings | File Templates.
 */

namespace Raep\ConfigMgtBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class SubjectAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'string', array('label' => 'Name of Subject'))
            ->add('description', 'text', array('label' => 'Subject description'))
			->add('reference', 'string', array('label' => 'Reference'))
            ->add('status', 'string', array('label' => 'Status'))
			->add('lifecycle_status', 'string', array('label' => 'LIfecylce status'))
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('lifecycle_status')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
			->add('description')
			->add('reference')
			->add('lifecycle_status')
        ;
    }
}
