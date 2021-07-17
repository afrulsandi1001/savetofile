
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DownloadModel extends CI_Model
{

    public function download($id)
    {
        $query = $this->db->get_where('upload', array('id' => $id));
        return $query->row_array();
    }
}
