<?php 

namespace Drupal\customnode\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

Class CustomnodeCreation extends Controllerbase
{
	public function content()
	{
		drupal_flush_all_caches();
		$node = Node::create(['type' => 'page']);
	 	$node->set('title','test node...');
	 	$node->set('uid',1);
	 	$node->status = 1;
	 	$node->save();
	 	return drupal_set_message("Node with new nid " . $node->id() . " saved!\n");		 
	} 
 }
