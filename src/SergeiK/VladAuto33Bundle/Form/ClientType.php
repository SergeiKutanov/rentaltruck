<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', null, array(
            'label'     => 'Имя: '
        ))
            ->add('middleName', null, array(
            'label'     => 'Отчество: '
        ))
            ->add('lastName', null, array(
            'label'     => 'Фамилия: '
        ))
            ->add('age', 'integer', array(
            'label'     => 'Возраст: '
        ))
            ->add('driverLicence', null, array(
            'label'     => 'Номер прав: '
        ))
            ->add('expirience', null, array(
            'label'     => 'Опыт вождения: '
        ))
            ->add('address', null, array(
            'label'     => 'Адрес: '
        ))
            ->add('passportNumber', null, array(
            'label'     => 'Номер паспорта: '
        ))
            ->add('passportIssuer', null, array(
            'label'     => 'Кем выдан: ',
            'required'  => false
        ))
            ->add('phone', null, array(
            'label'     => 'Телефон: '
        ))
            ->add('usageArea', null, array(
            'label'     => 'Территория использования: ',
            'required'  => false
        ))
            ->add('punctuality', null, array(
            'label'     => 'Пунктуальность: ',
            'required'  => false
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_clienttype';
    }
}
