<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPrenomFr')
                ->add('nomPrenomAr')
                ->add('civiliteFr')
                ->add('civiliteAr')
                ->add('sexe')
                ->add('dateNaiss')
                ->add('nationalite')
                ->add('email')
                ->add('adresse')
                ->add('tel1')
                ->add('etat')
                //->add('departement')
                //->add('ouvrage')
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\Personne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_personne';
    }


}
