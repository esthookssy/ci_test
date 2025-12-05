<?php
/**
 * CodeIgniter 3 IDE Helper for VSCode + Intelephense
 * ---------------------------------------------------
 * ใส่ไว้ใน root ของโปรเจกต์ เช่น:
 *   /_ide_helper.php
 *
 * ไฟล์นี้ไม่ถูกรันจริง ใช้เฉพาะสำหรับ autocomplete เท่านั้น
 */

// ----------------------------------------------------
// CI_Controller Stub
// ----------------------------------------------------
/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Output $output
 * @property CI_Config $config
 * @property CI_URI $uri
 * @property CI_Router $router
 * @property CI_Session $session
 * @property CI_Email $email
 * @property CI_Form_validation $form_validation
 * @property CI_Security $security
 * @property CI_Pagination $pagination
 * @property CI_Upload $upload
 * @property CI_Image_lib $image_lib
 * @property CI_Cart $cart
 * @property CI_Encrypt $encrypt
 * @property CI_DB_query_builder $db
 */
class CI_Controller {}

// ----------------------------------------------------
// CI_Model Stub
// ----------------------------------------------------
/**
 * @property CI_DB_query_builder $db
 */
class CI_Model {}

// ----------------------------------------------------
// Loader Stub
// ----------------------------------------------------
class CI_Loader {
    /** @return CI_Loader */
    public function library($lib, $params = NULL, $object_name = NULL) {}

    /** @return CI_Loader */
    public function model($model, $object_name = NULL, $connect = FALSE) {}

    /** @return CI_Loader */
    public function view($view, $vars = [], $return = FALSE) {}
}

// ----------------------------------------------------
// Input Stub
// ----------------------------------------------------
class CI_Input {
    /** @return string|null */
    public function post($index = NULL, $xss_clean = NULL) {}

    /** @return string|null */
    public function get($index = NULL, $xss_clean = NULL) {}

    /** @return string|null */
    public function cookie($index = NULL) {}

    /** @return string|null */
    public function ip_address() {}
}

// ----------------------------------------------------
// Output Stub
// ----------------------------------------------------
class CI_Output {
    /** @return CI_Output */
    public function set_output($output) {}

    /** @return CI_Output */
    public function set_content_type($mime_type) {}
}

// ----------------------------------------------------
// Config Stub
// ----------------------------------------------------
class CI_Config {
    /** @return mixed */
    public function item($key) {}

    /** @return CI_Config */
    public function set_item($key, $value) {}
}

// ----------------------------------------------------
// URL Helper Functions
// ----------------------------------------------------
function base_url($uri = '') {}
function site_url($uri = '') {}
function redirect($uri = '', $method = 'auto') {}

// ----------------------------------------------------
// Form Helper
// ----------------------------------------------------
function form_open($action = '', $attributes = [], $hidden = []) {}
function form_input($data = '', $value = '', $extra = '') {}
function form_password($data = '', $value = '', $extra = '') {}
function form_dropdown($name = '', $options = [], $selected = [], $extra = '') {}

// ----------------------------------------------------
// Session Library
// ----------------------------------------------------
class CI_Session {
    /** @return mixed */
    public function userdata($key) {}
    public function set_userdata($key, $value = NULL) {}
    public function unset_userdata($key) {}
    public function sess_destroy() {}
}

// ----------------------------------------------------
// Email Library
// ----------------------------------------------------
class CI_Email {
    public function from($from, $name = '') {}
    public function to($to) {}
    public function cc($cc) {}
    public function bcc($bcc) {}
    public function subject($subject) {}
    public function message($body) {}
    public function send() {}
}

// ----------------------------------------------------
// Pagination Library
// ----------------------------------------------------
class CI_Pagination {
    public function initialize($params = []) {}
    public function create_links() {}
}

// ----------------------------------------------------
// Upload Library
// ----------------------------------------------------
class CI_Upload {
    public function do_upload($field) {}
    public function data() {}
    public function display_errors() {}
}

// ----------------------------------------------------
// Image Library
// ----------------------------------------------------
class CI_Image_lib {
    public function resize() {}
    public function rotate() {}
    public function crop() {}
    public function watermark() {}
    public function display_errors() {}
}

// ----------------------------------------------------
// Cart Library
// ----------------------------------------------------
class CI_Cart {
    public function insert($items) {}
    public function update($items) {}
    public function destroy() {}
}

// ----------------------------------------------------
// Security Library
// ----------------------------------------------------
class CI_Security {
    public function xss_clean($data) {}
    public function sanitize_filename($str) {}
}

// ----------------------------------------------------
// DB Result
// ----------------------------------------------------
class CI_DB_result {
    /** @return object[] */
    public function result() {}

    /** @return object */
    public function row() {}

    /** @return array */
    public function result_array() {}
}

// ----------------------------------------------------
// DB Query Builder (FULL STUB)
// ----------------------------------------------------
class CI_DB_query_builder {

    // Query Builder Core
    public function select($select = '*', $escape = NULL) {}
    public function select_max($select = '', $alias = '') {}
    public function select_min($select = '', $alias = '') {}
    public function select_avg($select = '', $alias = '') {}
    public function select_sum($select = '', $alias = '') {}
    public function distinct($val = TRUE) {}
    public function from($from) {}
    public function join($table, $cond, $type = '') {}
    public function where($key, $value = NULL, $escape = NULL) {}
    public function or_where($key, $value = NULL) {}
    public function where_in($key = NULL, $values = NULL) {}
    public function where_not_in($key = NULL, $values = NULL) {}
    public function like($field, $match = '', $side = 'both') {}
    public function or_like($field, $match = '', $side = 'both') {}
    public function not_like($field, $match = '', $side = 'both') {}
    public function group_by($by) {}
    public function order_by($orderby, $direction = '') {}
    public function limit($value, $offset = 0) {}

    // CRUD
    public function get($table = '', $limit = NULL, $offset = NULL) {}
    public function insert($table = '', $set = NULL) {}
    public function update($table = '', $set = NULL, $where = NULL, $limit = NULL) {}
    public function delete($table = '', $where = '', $limit = NULL, $reset_data = TRUE) {}

    // Result Helpers
    public function insert_id() {}
    public function affected_rows() {}
    public function count_all($table = '') {}
    public function count_all_results($table = '') {}
}

