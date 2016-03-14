<?php

namespace Manage;

class Bill2Controller extends ControllerBase {

	public function indexAction($page = 1) {
		\Phalcon\Tag::appendTitle('艾米计费信息');
		$this->view->labels = \Mo2::labels();
		$conditions = array();
		$reference = $this->request->get('reference');
		if ($reference) {
			$conditions['reference'] = $reference;
		}

		$data = \Mo2::find(array(
			$conditions,
			'sort' => array('_id' => -1)
		));

		$paginator = new \Phalcon\Paginator\Adapter\Model(
				array(
					"data" => $data,
					"limit" => 50,
					"page" => $page
				)
		);

		$this->view->page = $paginator->getPaginate();

		$keys = array('enduserprice' => 0);
		$this->view->totals = \Delivery::summatory($keys, $conditions);
	}

	public function dnAction($page = 1) {
		\Phalcon\Tag::appendTitle('艾米计费信息');
		$this->view->labels = \Dn2::labels();
		$conditions = array();
		$reference = $this->request->get('reference');
		if ($reference) {
			$conditions['reference'] = $reference;
		}

		$data = \Dn2::find(array(
			$conditions,
			'sort' => array('_id' => -1)
		));

		$paginator = new \Phalcon\Paginator\Adapter\Model(
				array(
					"data" => $data,
					"limit" => 50,
					"page" => $page
				)
		);

		$this->view->page = $paginator->getPaginate();

		$keys = array('enduserprice' => 0);
		$this->view->totals = \Delivery::summatory($keys, $conditions);
	}

}
