<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * transaksi_id_pelanggan_option_list Model Action
     * @return array
     */
	function transaksi_id_pelanggan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id_pelanggan AS value , id_pelanggan AS label FROM pelanggan ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * transaksi_detail_id_barang_option_list Model Action
     * @return array
     */
	function transaksi_detail_id_barang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id_barang AS value , id_barang AS label FROM barang ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pengguna_user_role_id_option_list Model Action
     * @return array
     */
	function pengguna_user_role_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT role_id AS value, role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pengguna_username_value_exist Model Action
     * @return array
     */
	function pengguna_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * pengguna_email_value_exist Model Action
     * @return array
     */
	function pengguna_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

}
