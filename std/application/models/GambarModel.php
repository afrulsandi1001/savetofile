<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class GambarModel extends CI_Model
{
    // Fungsi untuk menampilkan semua data gambar
    public function view()
    {
        return $this->db->get('upload')->result();
    }

    // Fungsi untuk melakukan proses upload file
    public function upload()
    {
        $config['upload_path'] = './assets/img/foto/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('user/folder', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('user/folder', $data);
        }
    }
}
