<?php
	$nid = $data->nid;

	$rel_rids = relation_query('node', $nid)
		->execute();
	$rels = entity_load('relation', array_keys($rel_rids));
	if (isset($rels) && $rels) {
		$result = array();
		$count = 0;
		$max = count($rels);
		foreach ($rels as $key => $rel) {
			if ($rel->endpoints['und'][0]['entity_type'] == 'user') {
				if ($count && ($count < $max)) {
					print ', ';
				}
				$curr_user = user_load($rel->endpoints['und'][0]['entity_id']);
				print '<a href="../../../../../../../../user/'.$curr_user->uid.'">'.$curr_user->name.'</a>';
				$count++;
			} else {
				$max--;
			}
		}
	} else {
		print 'None assigned';
	}
?>
