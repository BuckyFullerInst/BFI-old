<?php
	$nid = $data->nid;
	$b = $t = $r = $e = 0;

	$rel_rids = relation_query('node', $nid)->execute();
	$rels = entity_load('relation', array_keys($rel_rids));
	if (isset($rels) && $rels) {
		$result = array();
		foreach ($rels as $key => $rel) {
			$rel_wrapper = entity_metadata_wrapper('relation', $rel); // Wrapping fetch relation with Entity API wrapper
			if ($rel->relation_type == 'trimtab_includes') {
				if ($rel_wrapper->field_newsletter_item_section->value()->tid == 8) $b++;
				if ($rel_wrapper->field_newsletter_item_section->value()->tid == 9) $t++;
				if ($rel_wrapper->field_newsletter_item_section->value()->tid == 10) $r++;
				if ($rel_wrapper->field_newsletter_item_section->value()->tid == 11) $e++;
			}
		}
	}
	echo $b.'.'.$t.'.'.$r.'.'.$e;
?>


<?php
	$ass_val = $view->style_plugin->rendered_fields[$view->row_index]['php_4'];
	if ($ass_val) {
		$all = explode('.', $ass_val);
		echo $all[0];
	}
?>


<?php
	echo $view->style_plugin->rendered_fields[$view->row_index]['php']+
	$view->style_plugin->rendered_fields[$view->row_index]['php_1']+
	$view->style_plugin->rendered_fields[$view->row_index]['php_2']+
	$view->style_plugin->rendered_fields[$view->row_index]['php_3'];
?>


<?php
	$node = node_load($data->nid);
	$ass_val = $view->style_plugin->rendered_fields[$view->row_index]['php_4'];
	if ($ass_val) {
		$all = explode('.', $ass_val);
		$r3 = explode('-', $all[2]);
		if ($r3[0]) {
			if (!$r3[1] && ($node->field_project_round['und'][0]['value'] == 1
				|| $node->field_project_round['und'][0]['value'] == 2)) echo '-';
			else {
				if ($r3[0] == $r3[1]) echo '<i class="icon-check-sign"></i>';
				else echo $r3[1].'/'.$r3[0];
			}
		} else {
			echo '-';
		}
	}
?>