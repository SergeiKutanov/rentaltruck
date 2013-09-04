<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('date')
            ->add('publish', null, array(
                'required'  => false
            ))
            ->add('body')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_newstype';
    }
}
