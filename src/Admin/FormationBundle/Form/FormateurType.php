<?php

namespace Admin\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\form\Extension\Core\Type\FileType;
class FormateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cINFormateur')
                ->add('nomFormateur')
                ->add('prenomFormateur')
                ->add('emailFormateur')
                ->add('descriptionFormateur')
                ->add('telFormateur')
                ->add('fbFormateur')
                ->add('linkFormateur')
                ->add('file')
               ->add('cvformateur',FileType::class, array('label' => 'CV (PDF file)','data_class' => null));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\FormationBundle\Entity\Formateur' ));

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_formationbundle_formateur';
    }


}
