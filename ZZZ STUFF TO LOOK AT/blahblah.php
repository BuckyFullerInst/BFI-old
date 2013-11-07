<?php
	$node = menu_get_object();
	if ($node->type == 'project') {
		$node_id = $node->nid;
		$user_id = $data->uid;
		$rel_ids = relation_query('user', $user_id)
			->related('node', $node_id)
			->execute();
		$rels = entity_load('relation', array_keys($rel_ids));
		if (count($rels) == 1) {
			$value = 1;
			$rel_wrapper = entity_metadata_wrapper('relation', reset($rels)); // Wrapping fetch relation with Entity API wrapper (https://drupal.org/node/1021556)

			// Tallying up round 1
			if ($rel_wrapper->field_project_review_jury_auth->value()) {
				if ($rel_wrapper->field_project_review_r1_in->value()) print '<i class="icon-check-sign"></i>';
				else print '<i class="icon-check-minus"></i>';
			} else print '<i class="icon-check-empty"></i>';
		} else print 'N/A';
	}
?>