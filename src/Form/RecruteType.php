<?php

namespace App\Form;

use App\Entity\TgRecrute;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('publication')
            ->add('lbTitre')
            ->add("lbDescription", TextareaType::class)
            ->add("dateDebut")
            ->add("dateFin");
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TgRecrute::class,
        ]);
    }
}
