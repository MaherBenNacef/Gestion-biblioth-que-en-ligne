<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OuvrageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeOuvrage')
                ->add('titre')
                ->add('maisonPublication')
                ->add('couverture')
                ->add('resumee')
                ->add('dateSortie')
                ->add('nbrePages')
                ->add('lienTelechargement')
                ->add('taille')
                ->add('supprimee')
                ->add('dateCreation')
                ->add('nbreTelechargement')
                ->add('nbreVue')
               // ->add('personne')
                //->add('motsCles')
                //->add('theme')
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\Ouvrage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_ouvrage';
    }


}
