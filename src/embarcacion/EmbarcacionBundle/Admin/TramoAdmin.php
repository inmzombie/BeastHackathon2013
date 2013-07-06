<?php

namespace embarcacion\EmbarcacionBundle\Admin;                                                      

use Sonata\AdminBundle\Admin\Admin; 
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;                                                             

class TramoAdmin extends Admin {  
        protected function configureFormFields(FormMapper $form) {                                  
                $form          
			->add('nombre')
			->add('coord1')
			->add('coord2')
			->add('coord3')
			->add('coord4');
        }
        protected function configureListFields(ListMapper $list) {                                  
                $list          
                        ->add('nombre');        
                //->addIdentifier('nombre');                                                        
		    } 
		        }
		        
