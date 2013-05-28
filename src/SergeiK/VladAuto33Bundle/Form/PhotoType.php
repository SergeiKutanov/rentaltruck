<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file', array(
                'label'     => 'Загрузить фото: ',
                'required'  => false
        ))
            ->add('main', 'checkbox', array(
                'label'     => 'Главное фото: ',
                'required'  => false,
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Photo'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_phototype';
    }
}
