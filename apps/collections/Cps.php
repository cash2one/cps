<?php

class Cps extends \Phalcon\Mvc\Collection {

	public function getColumnMap() {
		return array(
			'CP名称' => 'CP名称',
			'游戏名称' => '名称',
			'渠道号' => '渠道号',
			'厂商名称' => '厂商名称',
			'日期' => '日期',
			'新增用户' => '新增用户',
			'付费金额' => '付费金额',
			'厂商收益' => '厂商收益',
			'CP收益' => 'CP收益',
			'自己收益' => '自己收益',
			'厂商分成比列' => '厂商分成比列',
			'调整后的新增用户' => '调整后的新增用户',
			'调整后的付费金额' => '调整后的付费金额',
			'付费金额调整系数' => '付费金额调整系数',
			'CPA新增用户调整系数' => 'CPA新增用户调整系数',
			'厂商调整系数' => '厂商调整系数',
			'CPA单价' => 'CPA单价',
			'调整后厂商收益' => '调整后厂商收益',
			'调整后自己收益' => '调整后自己收益',
			'调整后CP收益' => '调整后CP收益',
			'CP调整系数' => 'CP调整系数',
			'CP分成比列' => 'CP分成比列',
			'支付方' => '支付方',
			'支付通道' => '支付通道',
			'支付通道成本比例' => '支付通道成本比例',
			'坏账比例' => '坏账比例',
			'支付方税金比例' => '支付方税金比例',
			'通道成本' => '通道成本',
			'坏账' => '坏账',
			'支付方税金' => '支付方税金',
			'可分配总收益' => '可分配总收益',
			'CP可分配收益' => 'CP可分配收益',
			'厂商可分配收益' => '厂商可分配收益',
			'调整后CP可分配收益' => '调整后CP可分配收益',
			'调整后厂商可分配收益' => '调整后厂商可分配收益',
			'备注' => '备注',
			'结算方式' => '结算方式',
			'付费用户数' => '付费用户数',
			'付费金额（自己统计）' => '付费金额（自己统计）',
			'渠道接口人' => '渠道接口人',
		);
	}

	public static function labels($group = NULL) {
		if ($group == '信息费用户') {
			return array(
				'游戏名称' => '名称',
				'渠道号' => '渠道号',
				'日期' => '日期',
				'渠道号' => '渠道号',
				'调整后的付费金额' => '信息费',
				'厂商分成比列' => '分成比例',
				'调整后厂商收益' => '收益',
			);
		} elseif ($group == 'CPS用户') {
			return array(
				'游戏名称' => '名称',
				'渠道号' => '渠道号',
				'日期' => '日期',
				'渠道号' => '渠道号',
				'厂商分成比列' => '分成比例',
				'调整后厂商收益' => '收益',
			);
		} elseif ($group == 'CPA用户') {
			return array(
				'游戏名称' => '名称',
				'渠道号' => '渠道号',
				'日期' => '日期',
				'渠道号' => '渠道号',
				'调整后的新增用户' => '新增用户',
				'CPA单价' => 'CPA单价',
				'调整后厂商收益' => '收益',
			);
		} else {
			$my = new self();
			return $my->getColumnMap();
		}
	}

}
