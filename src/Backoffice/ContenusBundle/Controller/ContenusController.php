<?php

namespace Backoffice\ContenusBundle\Controller;

use Backoffice\ContenusBundle\Entity\Contents;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContenusController extends Controller
{
    private function constructForm($contenus){
        //construction du formulaire a partir de l'objet $contenus 
        $form = $this->createFormBuilder($contenus)
                    ->add('nomContents', 'text', array('required' => true))
                    ->add('slugContents', 'text', array('required' => true))
                    ->add('descriptContents', 'textarea', array('required' => true))
                    ->add('idMenusContents', 'integer', array('required' => true))
                    ->add('isActivatedContents', 'checkbox', array('required' => false))
                    ->add('dateCreaContents', 'date', array('required' => true))
                    ->add('dateModifContents', 'date', array('required' => true))
                    ->getForm();
        return $form;
    }
    
    public function indexAction()
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $source = new Entity('BackofficeContenusBundle:Contents');
            // Get a Grid instance
            $grid = $this->container->get('grid');
            // Attach the source to the grid
            $grid->setSource($source);
            // OR with only one value
            $grid->setLimits(5);
            
            $rowAction = new RowAction("Gérer", 'edit_contenus');
            $grid->addRowAction($rowAction);
    
            $rowAction = new RowAction("Supprimer", 'contenus_delete', true, '_self');
            $rowAction->setConfirmMessage('Etes vous sur de vouloir supprimer cet article ?');
            $grid->addRowAction($rowAction);
            // Return the response of the grid to the template
            return $grid->getGridResponse('BackofficeContenusBundle:Contenus:index.html.twig');
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function newcontenuAction()
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $contenus = new Contents();
            //construction du formualaire
            $form= $this->constructForm($contenus);
                    
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
                    $em->persist($contenus);
                    $em->flush();
                    // On redirige vers la page de visualisation de l'article
                    //nouvellement créé
                    return $this->redirect($this->generateUrl('edit_contenus', array('id' => $contenus->getId())));
                }
            }
            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient
            //d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est
            //pas valide, donc on l'affiche de nouveau
            return $this->render('BackofficeContenusBundle:Contenus:newcontenus.html.twig', array(
                'form' => $form->createView(),
            ));
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function editcontenuAction($id=null)
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            if($id!=null){
                // crée une tâche et lui donne quelques données par défaut pour cet exemple
                $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BackofficeContenusBundle:Contents');
                // On récupère l'entité correspondant à l'id $id
                $contenus = $repository->find($id);
                if (!$contenus) {
                    throw $this->createNotFoundException(
                        'Aucun menus trouvé pour cet id : '.$id
                    );
                }                
            }
            //$contenus = new Menus();
            //$contenus->setMenus('Gestion des menus');
    
            //construction du formualaire
            $form= $this->constructForm($contenus);
            
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
                    $em->persist($contenus);
                    $em->flush();
                    // On redirige vers la page de visualisation de l'article
                    //nouvellement créé
                    return $this->redirect($this->generateUrl('edit_contenus', array('id' => $contenus->getId())));
                }
            }
            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient
            //d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est
            //pas valide, donc on l'affiche de nouveau
            return $this->render('BackofficeContenusBundle:Contenus:editcontenus.html.twig', array(
                'form' => $form->createView(),
            ));
        }else{
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function deletecontenuAction($id=null){
        if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            if($id!=null){
                $em = $this->getDoctrine()->getManager();
                $menu = $em->getRepository('BackofficeContenusBundle:Contents')->find($id);
                $em->remove($menu);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('micro_cool_contents_homepage'));
    }
}

