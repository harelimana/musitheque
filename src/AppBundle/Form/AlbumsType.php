<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 01.09.17
 * Time: 19:30
 */

namespace AppBundle\Form;

use AppBundle\Entity\albums;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlbumsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('release_date', TextType::class)
            ->add('album_art', TextType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => albums::class,
        ));
    }
}