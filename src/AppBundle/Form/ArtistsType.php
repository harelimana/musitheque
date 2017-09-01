<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 01.09.17
 * Time: 19:31
 */

namespace AppBundle\Form;

use AppBundle\Entity\artists;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtistsType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('instrument', TextType::class)
            ->add('biography', TextType::class)
            ->add('birth_date', TextType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => artists::class,
        ));
    }
}