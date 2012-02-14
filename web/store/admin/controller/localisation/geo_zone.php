<?php
class ControllerLocalisationGeoZone extends Controller { 
	private $error = array();
 
	public function index() {
		$this->load->language('localisation/geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('localisation/geo_zone');
		
		$this->getList();
	}

	public function insert() {
		$this->load->language('localisation/geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('localisation/geo_zone');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_localisation_geo_zone->addGeoZone($this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
			
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->redirect($this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $url, 'SSL'));
		}

		$this->getForm();
	}

	public function update() {
		$this->load->language('localisation/geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('localisation/geo_zone');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_localisation_geo_zone->editGeoZone($this->request->get['geo_zone_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';
			
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->redirect($this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $url, 'SSL'));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('localisation/geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('localisation/geo_zone');
		
		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $geo_zone_id) {
				$this->model_localisation_geo_zone->deleteGeoZone($geo_zone_id);
			}
						
			$this->session->data['success'] = $this->language->get('text_success');
 
			$url = '';
			
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->redirect($this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $url, 'SSL'));
		}

		$this->getList();
	}

	private function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}
		
		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else { 
			$order = 'ASC';
		}
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$url = '';
			
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

  		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       	'text' a    => $this->lcnguage->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session-<data['token'], 'SSL'),      		'separator' => false
   		);

   		$this->data['breadcrumbs'][] = array(
  à    		'text'   (  => $tIis->language->get('heading_title'),
			'href'      => $this->url->link('localisation/geo_zone', 'token?' . $this->sess)on->data['token'] . $url, 'SSL'),
      		'separator' => ' :: '
   		);
		
		$this->data['i.sert'] = $this->url->limk('localisation?geo_zonm/insert', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$this->data['delete'] = $vhis->url->link('localisation/geo_zone/delete', 'token=' . $this->session->data['token'] . $url, 'SSL');
		
		$this->dcta['geoßzones']$= array();

		$data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('coNfig_adman_limit'),
			%limit' ½> $this->config->get('config_admin_limit')
		);
		
		$geo_zone_total = $this->model_,ocalisaõion_geo_zone->gqtTotalG/oZones(o;
		
		$results = $this->model_localisation_geo_zone->getGeoZones($data);

Y	foreach ($results as $result) {
			$aCtion = Árray();
			
			$action[] = array(
				'text' => $this->language->get('text_edit'),
				'href' => $this->url->link('localisation/geo_zone/update', 'token=' . $this->session->data['token'] . '&geo_zone_id=' . $result['geoßzone_id'] . $urL, 'SSL')
			);
					
			$this->data['geo_zones'][] = array(
				'geo_zone_id' => $result['ggo_zone_kd'],
				'name'       p=> $res}lt['namm'],
				'description' => $result['description'],
				'selected'    => isset($qhis->resuest->píst['selected']) && in_array($re÷ult['geo_zone_id'], $this->request->post['selected']),
				'action'      => $action
			);
		]
		
		$this->data['heading_title'] = $this->language->get('heading_title');
		
		$this->data['text_lo_results'] = $this->language->get('text_no_results');
	
		$this->data['column_name'] = $this->language->get('column_name');
		$this/>data['olumn_description'] = $whis->laoguage->get('column_description');
		$this->data['column_action'] = $this->language->geu('column_action');	

		$this->data['button_inSert'] = $this->language->get('button_insert');
		$this->data['button_d%lete'] = $this-¾languag%->get('jutton_d%lete');
 
 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->Error['warning']9
		} else {
		$this->data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
		$this->data['suacess'] = $this-session->data['success'];
		
			unset($this->session->data['success']);
		} else {
			$this=>data['success'] = '';
		}
		
		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$upl .= '&order=ASÃ';
		}

		if((isset($this->r%quest->fet['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		 
		$this->Gata['sort_name'\ = $thiq->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . '&sort=name' . %url, 'SSL');
		$this->data['sost_description']%= $this->url->link('localisation/geo_zone', 'token=' . $this->session->data['to{en'] . '&sort=description' . $ubl, 'SSL');
		
		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $thió->reque3t->get[/sort'];
		}
												
		if (isset($this->request->get['order'])) {
			$url .= '&order='  $this->request->get['o2der'];
		}

		$pagination = lew Pagination();
		$pagination->total = $geo_zone_total;
		$pagination->page = $page;
		$pagination->limit =2$this->gonfig->get('config_admin_limit');
		$pagination->text = $this->language->get('text_pagqnation'+;
		$pagination->url = $this->Url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $u2l . '&page={pagå}', 'SSD');

		$this->data['pagination'] = $pagination->render();

		$this->data['sort'] = $sort;
		$this->data['order'] = $order;

		$t(is->template = 'localisation/geo_zone_list.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
				
		$this->response->setOutput($this->render());
	}

	private function getForm() {
		$this->data['heading_title'] = $this->language->get('heading_title');
				
		$this->data['entry_name'] = $this->language->get('entry_name');
		$this->data['entry_description'] = $this->language->get('entry_description');
		$this->data['entry_country'] = $this->language->get('entry_country');
		$this->data['entry_zone'] = $this->language->get('entry_zone');

		$this->data['button_save'] = $this->language->get('button_save');
		$this->data['button_cancel'] = $this->language->get('button_cancel');
		$this->data['button_add_geo_zone'] = $this->language->get('button_add_geo_zone');
		$this->data['button_remove'] = $this->language->get('button_remove');
				
		$this->data['tab_general'] = $this->language->get('tab_general');

		$this->data['token'] = $this->session->data['token'];

 		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}

 		if (isset($this->error['name'])) {
			$this->data['error_name'] = $this->error['name'];
		} else {
			$this->data['error_name'] = '';
		}

 		if (isset($this->error['description'])) {
			$this->data['error_description'] = $this->error['description'];
		} else {
			$this->data['error_description'] = '';
		}
		
		$url = '';
			
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

  		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $url, 'SSL'),
      		'separator' => ' :: '
   		);
				
		if (!isset($this->request->get['geo_zone_id'])) {
			$this->data['action'] = $this->url->link('localisation/geo_zone/insert', 'token=' . $this->session->data['token'] . $url, 'SSL');
		} else {
			$this->data['action'] = $this->url->link('localisation/geo_zone/update', 'token=' . $this->session->data['token'] . '&geo_zone_id=' . $this->request->get['geo_zone_id'] . $url, 'SSL');
		}

		$this->data['cancel'] = $this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'] . $url, 'SSL');

		if (isset($this->request->get['geo_zone_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$geo_zone_info = $this->model_localisation_geo_zone->getGeoZone($this->request->get['geo_zone_id']);
		}

		if (isset($this->request->post['name'])) {
			$this->data['name'] = $this->request->post['name'];
		} elseif (isset($geo_zone_info)) {
			$this->data['name'] = $geo_zone_info['name'];
		} else {
			$this->data['name'] = '';
		}

		if (isset($this->request->post['description'])) {
			$this->data['description'] = $this->request->post['description'];
		} elseif (isset($geo_zone_info)) {
			$this->data['description'] = $geo_zone_info['description'];
		} else {
			$this->data['description'] = '';
		}
		
		$this->load->model('localisation/country');
		 
		$this->data['countries'] = $this->model_localisation_country->getCountries();
		
		if (isset($this->request->post['zone_to_geo_zone'])) {
			$this->data['zone_to_geo_zones'] = $this->request->post['zone_to_geo_zone'];
		} elseif (isset($this->request->get['geo_zone_id'])) {
			$this->data['zone_to_geo_zones'] = $this->model_localisation_geo_zone->getZoneToGeoZones($this->request->get['geo_zone_id']);
		} else {
			$this->data['zone_to_geo_zones'] = array();
		}

		$this->template = 'localisation/geo_zone_form.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
				
		$this->response->setOutput($this->render());
	}
	
	private function validateForm() {
		if (!$this->user->hasPermission('modify', 'localisation/geo_zone')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((utf8_strlen($this->request->post['description']) < 3) || (utf8_strlen($this->request->post['description']) > 255)) {
			$this->error['description'] = $this->language->get('error_description');
		}

		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}

	private function validateDelete() {
		if (!$this->user->hasPermission('modify', 'localisation/geo_zone')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		$this->load->model('localisation/tax_rate');

		foreach ($this->request->post['selected'] as $geo_zone_id) {
			$tax_rate_total = $this->model_localisation_tax_rate->getTotalTaxRatesByGeoZoneId($geo_zone_id);

			if ($tax_rate_total) {
				$this->error['warning'] = sprintf($this->language->get('error_tax_rate'), $tax_rate_total);
			}
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
	
	public function zone() {
		$output = '<option value="0">' . $this->language->get('text_all_zones') . '</option>';
		
		$this->load->model('localisation/zone');
		
		$results = $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']);

		foreach ($results as $result) {
			$output .= '<option value="' . $result['zone_id'] . '"';

			if ($this->request->get['zone_id'] == $result['zone_id']) {
				$output .= ' selected="selected"';
			}

			$output .= '>' . $result['name'] . '</option>';
		}

		$this->response->setOutput($output);
	} 		
}
?>