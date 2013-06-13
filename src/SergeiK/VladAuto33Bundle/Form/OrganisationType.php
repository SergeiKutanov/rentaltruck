<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('iNN')
            ->add('bankAccount')
            ->add('corrAccount')
            ->add('bIC')
            ->add('cEOFirstName')
            ->add('cEOMiddleName')
            ->add('cEOLastName')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Organisation'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_organisationtype';
    }
}
