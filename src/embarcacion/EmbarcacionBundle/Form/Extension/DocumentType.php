<?php

namespace Backend\AdminVialidadBundle\Form\Extension;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends FileType {

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setOptional(array('file_path'));
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        parent::buildView($view, $form, $options);

        if (array_key_exists('file_path', $options)) {
            $parentData = $form->getParent()->getData();

            if (null !== $parentData) {
                $accessor = PropertyAccess::getPropertyAccessor();
                $imageUrl = $accessor->getValue($parentData, $options['file_path']);
            } else {
                $imageUrl = null;
            }

            // set an "image_url" variable that will be available when rendering this field
            $view->vars['file_url'] = $imageUrl;
        }
    }

    public function getName() {
        return 'document_file';
    }

}

