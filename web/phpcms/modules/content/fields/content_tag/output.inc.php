	function content_tag($field, $value) {
		extract(string2array($this->fields[$field]['setting']));
		if($outputtype) {
			return $value;
		} else {
		$db = pc_base::load_model('content_tag_model'); 
			$datas = $db->select("type='$setting[tag]'",'*',50);

		foreach($datas as $k=>$v) {
			$option[$v['id']] = $v['name'];
		}
			$string = '';
			switch($this->fields[$field]['boxtype']) {
				case 'radio':
					$string = $option[$value];
				break;

				case 'checkbox':
					$value_arr = explode(',',$value);
					foreach($value_arr as $_v) {
						if($_v) $string .= $option[$_v].' 、';
					}
				break;

				default:
				case 'select':
					$string = $option[$value];
				break;

				case 'multiple':
					$value_arr = explode(',',$value);
					foreach($value_arr as $_v) {
						if($_v) $string .= $option[$_v].' 、';
					}
				break;
			}
			return $string;
		}
	}
