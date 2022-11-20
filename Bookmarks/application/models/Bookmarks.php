<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Bookmarks extends CI_Model {
        function get_all_bookmarks() {
            return $this-> db ->query("SELECT * FROM bookmarks")->result_array();
        }
        function get_bookmark_by_id($bookmark_id) {
            return $this -> db ->query("SELECT * FROM bookmarks WHERE id = ? ORDER BY created_at", array($bookmark_id)) ->row_array();
        }
        function add_bookmark($bookmark) {
            $query = "INSERT INTO bookmarks(name, url, folder, created_at, updated_at) VALUES (?,?,?,?,?)";
            $val = array($bookmark['name'], $bookmark['url'], $bookmark['folder'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
            return $this ->db->query($query, $val);
        }
        function delete_bookmark($bookmark_id) {
            echo "delete";
            $this->db->where('id', $bookmark_id);
            $this->db->delete('url');
        }
        function update($id, $array) {
            $this -> db ->where($id, $array);
            $this -> db ->update('url', $array);
        }
        
    }

?>