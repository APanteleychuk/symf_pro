<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PartAdmin extends Admin
{
  // Fields to be shown on create/edit forms
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
//      ->add('id')
      ->add('namePart')
      ->add('numberPart')
      ->add('url')
      ->add('idseason')
    ;
  }

  // Fields to be shown on filter forms
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('id')
      ->add('namePart')
      ->add('numberPart')
      ->add('url')
      ->add('idseason')
    ;
  }

  // Fields to be shown on lists
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
      ->add('namePart')
      ->add('numberPart')
      ->add('url')
      ->add('idseason')
    ;
  }
}