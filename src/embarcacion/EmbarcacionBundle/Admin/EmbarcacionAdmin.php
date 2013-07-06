<?php 

namespace embarcacion\EmbarcacionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin; 
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EmbarcacionAdmin extends Admin {
	protected function configureFormFields(FormMapper $form) {
		$form
			->add('matricula')
			->add('propietario')
			->add('nombre')
			->add('tramo','sonata_type_model');
	}
	protected function configureListFields(ListMapper $list) {
		$list
			->add('matricula')
			->add('propietario')
			->add('nombre');	
		//->addIdentifier('nombre'); 
	} 


}

