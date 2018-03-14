<?php

namespace Admin\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomEvenement')
                ->add('formateur',EntityType::class,array('class'=>'AdminFormationBundle:Formateur','choice_label'=>'prenomFormateur','multiple'=>false,))
                ->add('datedebut',DateType::class, array( 'widget' => 'choice',))

                ->add('datefin')
                ->add('duree')
                ->add('prix')
                ->add('objectif')
                ->add('programme')
                ->add('informationplus',TextareaType::class, array(
                    'attr' => array('class' => 'AdminFormationBundle')))
                ->add('file');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\FormationBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_formationbundle_evenement';
    }


}
