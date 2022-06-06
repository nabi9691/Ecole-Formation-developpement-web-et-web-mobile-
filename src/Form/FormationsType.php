<?php

namespace App\Form;

use App\Entity\Formations;
// use App\Entity\Messages;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class FormationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

                ->add('nom_formation', ChoiceType::class, [
                'label' => 'Votre formation :',
                'required' => true,
                'choices' => ["Langage PHP" => "Langage PHP", "Langage JAVA" => "Langage JAVA", "Langage JAVASCRIPT" => "Langage JAVASCRIPT", "Langage PYTHON" => "Langage PYTHON", "SYMFONY" => "SYMFONY", "DOTNET" => "DOTNET", "MYSQL" => "MYSQL", "CSS" => "CSS"],
                'multiple' => false,
            ])
            ->add('civilite', ChoiceType::class, [
                'label' => 'Votre civilité',
                'required' => true,
                'choices' => ["Madame" => "Madame", "Monsieur" => "Monsieur"],
                'multiple' => false,
            ])
            ->add('contenu', TextType::class, [
                'label' => 'Le contenu de votre formation :',
                'required' => true
            ])

            ->add('date_formation', BirthdayType::class, [
                'label' => 'Votre date de formation :',
                'required' => false,
                'widget' => 'single_text'
            ])
        
            ->add('status', TextType::class, [
                'label' => 'Le status de votre formation :',
                'required' => true
            ])
        ;   
        
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
