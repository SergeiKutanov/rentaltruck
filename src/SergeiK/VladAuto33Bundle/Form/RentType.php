<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pickUpDate')
            ->add('returnDate')
            ->add('pickUpMillage')
            ->add('returnMillage', null, array(
                'required'  => false
            ))
            ->add('payment')
            ->add('deposit')
            ->add('returnDeposit', null, array(
                'required'  => false
            ))
            ->add('usageArea', null, array(
                'required'  => false
            ))
            ->add('notes', null, array(
                'required'  => false
            ))
            ->add('car')
            ->add('client')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Rent'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_renttype';
    }
}
