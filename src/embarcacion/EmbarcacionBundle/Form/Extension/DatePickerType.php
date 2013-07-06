<?php

namespace Backend\AdminVialidadBundle\Form\Extension;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DatePickerType extends AbstractType {
    
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'date';
    }
    
    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {

        //$view->vars['widget'] = $options['widget'];
        $view->vars['datepicker_format'] = $options['datepicker_format'];
        $view->vars['datepicker_start_date'] = $options['datepicker_start_date'];
        $view->vars['datepicker_end_date'] = $options['datepicker_end_date'];
        $view->vars['datepicker_autoclose'] = $options['datepicker_autoclose'];
        $view->vars['datepicker_show_on'] = $options['datepicker_show_on'];
        $view->vars['datepicker_start_view'] = $options['datepicker_start_view'];
        $view->vars['datepicker_week_start'] = $options['datepicker_week_start'];
        $view->vars['datepicker_type'] = $options['datepicker_type'];

        parent::finishView($view, $form, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'widget'         => 'single_text',
            /**
             * both format should be in sync
             * for now its done via code
             */
            'format'=>'MM-dd-yyyy',
            'datepicker_format' => 'dd-mm-yyyy',
            'datepicker_start_date' => null,
            'datepicker_end_date' => null,
            'datepicker_show_on' => 'true',
            'datepicker_autoclose' => 'true',
            /* month, year, decade */
            'datepicker_start_view' => 'decade',
            'datepicker_week_start' => 0,
            /* standalone datetimepicker */
            'datepicker_type' => 'standalone',
            'error_bubbling'=>true
           ));
    }



    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'bootstrap_datepicker';
    }
}


