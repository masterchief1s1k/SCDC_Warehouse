<?php
	class c_admin_product{
		public $models;

		function c_admin_product(){
		}

		function admin_product(){
			include_once 'views/v_admin_product.php';
		}

		function admin_add_product(){
			include_once 'views/v_admin_add_product.php';
		}
	}
?>