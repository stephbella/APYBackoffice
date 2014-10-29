<?php

namespace Backoffice\MenusBundle\Controller;

use Backoffice\MenusBundle\Entity\Menus;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenusController extends Controller
{
    private function constructForm($menus){
        //construction du formulaire a partir de l'objet $menus 
        $form = $this->createFormBuilder($menus)
                    ->add('nomMenus', 'text', array('required' => true))
                    ->add('slugMenus', 'text', array('required' => true))
                    ->add('ordreMenus', 'integer', array('required' => true))
                    ->add('nivMenus', 'integer', array('required' => true))
                    ->add('isActivatedMenus', 'checkbox', array('required' => false))
                    ->add('dateCreaMenus', 'date', array('required' => true))
                    ->add('dateModifMenus', 'date', array('required' => true))
                    ->getForm();
        return $form;
    }
    
    public function indexAction()
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $source = new Entity('BackofficeMenusBundle:Menus');
            // Get a Grid instance
            $grid = $this->container->get('grid');
            // Attach the source to the grid
            $grid->setSource($source);
            // OR with only one value
            $grid->setLimits(5);
            
            $rowAction = new RowAction("Gérer", 'edit_menus');
            $grid->addRowAction($rowAction);
    
            $rowAction = new RowAction("Supprimer", 'menus_delete', true, '_self');
            $rowAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet article ?');
            $grid->addRowAction($rowAction);
            // Return the response of the grid to the template
            return $grid->getGridResponse('BackofficeMenusBundle:Menus:index.html.twig');
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function newmenuAction()
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $menus = new Menus();
            //construction du formualaire
            $form= $this->constructForm($menus);
                    
            // On récupère la requête
            $request = $this->get('request');
            // On vérifie qu'elle est de type POST
            if ($request->getMethod() == 'POST') {
                // On fait le lien Requête <-> Formulaire
                // À partir de maintenant, la variable $article contient les
                //valeurs entrées dans le formulaire par le visiteur
                $form->bind($request);
                // On vérifie que les valeurs entrées sont correctes
                if ($form->isValid()) {
                    // On l'enregistre notre objet $article dans la base de
                    //données
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($menus);
                    $em->flush();
                    // On redirige vers la page de visualisation de l'article
                    //nouvellement créé
                    return $this->redirect($this->generateUrl('edit_menus', array('id' => $menus->getId())));
                }
            }
            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient
            //d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est
            //pas valide, donc on l'affiche de nouveau
            return $this->render('BackofficeMenusBundle:Menus:newmenus.html.twig', array(
                'form' => $form->createView(),
            ));
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function editmenuAction($id=null)
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            if($id!=null){
                // crée une tâche et lui donne quelques données par défaut pour cet exemple
                $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BackofficeMenusBundle:Menus');
                // On récupère l'entité correspondant à l'id $id
                $menus = $repository->find($id);
                if (!$menus) {
                    throw $this->createNotFoundException(
                        'Aucun menus trouvé pour cet id : '.$id
                    );
                }                
            }
            //$menus = new Menus();
            //$menus->setMenus('Gestion des menus');
    
            //construction du formualaire
            $form= $this->constructForm($menus);
            
            // On récupère la requête
            $request = $this->get('request');
            // On vérifie qu'elle est de type POST
            if ($request->getMethod() == 'POST') {
                // On fait le lien Requête <-> Formulaire
                // À partir de maintenant, la variable $article contient les
                //valeurs entrées dans le formulaire par le visiteur
                $form->bind($request);
                // On vérifie que les valeurs entrées sont correctes
                if ($form->isValid()) {
                    // On l'enregistre notre objet $article dans la base de
                    //données
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($menus);
                    $em->flush();
                    // On redirige vers la page de visualisation de l'article
                    //nouvellement créé
                    return $this->redirect($this->generateUrl('edit_menus', array('id' => $menus->getId())));
                }
            }
            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient
            //d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est
            //pas valide, donc on l'affiche de nouveau
            return $this->render('BackofficeMenusBundle:Menus:editmenus.html.twig', array(
                'form' => $form->createView(),
            ));
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function deletemenuAction($id=null){
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            if($id!=null){
                $em = $this->getDoctrine()->getManager();
                $menu = $em->getRepository('BackofficeMenusBundle:Menus')->find($id);
                $em->remove($menu);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('micro_cool_menus_homepage'));
    }
}
