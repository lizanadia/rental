<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sepeda extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sepeda', 'sepeda');
    }

    public function typesepeda()
    {
        $data = array(
            'title' => 'Type Sepeda',
            'isi'   => 'back/v_type_sepeda',
            'type_sepeda'  => $this->sepeda->get_all_type(),
        );
        $this->load->view('back/v_wrapper', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required|is_unique[tbl_type.kode_type]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Kode Type Lain..'
        ));

        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required|is_unique[tbl_type.nama_type]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Nama Type Lain..'
        ));

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Type sepeda',
                'isi'   => 'back/v_type_sepeda',
                'type_sepeda'  => $this->sepeda->get_all_type(),
            );
            $this->load->view('back/v_wrapper', $data);
        } else {
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type,
            );

            $this->sepeda->tambah_type($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan..');
            redirect('sepeda/typesepeda');
        }
    }

    public function ubah($id_type)
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required|is_unique[tbl_type.kode_type]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Kode Type Lain..'
        ));

        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required|is_unique[tbl_type.nama_type]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Nama Type Lain..'
        ));

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Type sepeda',
                'isi'   => 'back/v_type_sepeda',
                'type_sepeda'  => $this->sepeda->get_all_type(),
            );
            $this->load->view('back/v_wrapper', $data);
        } else {
            // $id_type = $this->input->post('id_type');
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'id_type'  => $id_type,
                'kode_type' => $kode_type,
                'nama_type' => $nama_type,
            );

            $this->sepeda->ubah_type($id_type, $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan..');
            redirect('sepeda/typesepeda');
        }
    }

    public function hapus($id_type)
    {

        $data = array(
            'id_type'   => $id_type,
        );

        $this->sepeda->hapus_type($id_type, $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus..');
        redirect('sepeda/typesepeda');
    }

    public function typemerek()
    {
        $data = array(
            'title' => 'Type Merek',
            'isi'   => 'back/v_type_merek',
            'type_merek'  => $this->sepeda->get_all_type_merek(),
        );
        $this->load->view('back/v_wrapper', $data);
    }

    public function tambahmerek()
    {
        $this->form_validation->set_rules('kode_merek', 'Kode Merek', 'required|is_unique[tbl_merek.kode_merek]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Kode Type Lain..'
        ));

        $this->form_validation->set_rules('nama_merek', 'Nama Merek', 'required|is_unique[tbl_merek.nama_merek]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Nama Type Lain..'
        ));
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Type sepeda',
                'isi'   => 'back/v_type_merek',
                'type_merek'  => $this->sepeda->get_all_type_merek(),
            );
            $this->load->view('back/v_wrapper', $data);
        } else {
            $kode_merek = $this->input->post('kode_merek');
            $nama_merek = $this->input->post('nama_merek');

            $data = array(
                'kode_merek' => $kode_merek,
                'nama_merek' => $nama_merek,
            );

                $this->sepeda->tambah_merek($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan..');
                redirect('sepeda/typemerek');
            }
        }

    public function ubahmerek($id_merek)
    {
        $this->form_validation->set_rules('kode_merek', 'Kode Merek', 'required|is_unique[tbl_merek.kode_merek]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Kode Type Lain..'
        ));

        $this->form_validation->set_rules('nama_merek', 'Nama Merek', 'required|is_unique[tbl_merek.nama_merek]', array(
            'required' => '%s Harus Diisi !!!',
            'is_unique' => '%s Ini Sudah Terdaftar di System Kami, Silahkan Masukan Nama Type Lain..'
        ));
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Type sepeda',
                'isi'   => 'back/v_type_merek',
                'type_merek'  => $this->sepeda->get_all_type_merek(),
            );
            $this->load->view('back/v_wrapper', $data);
        } else {             
            }
            $kode_merek = $this->input->post('kode_merek');
            $nama_merek = $this->input->post('nama_merek');
            $data = array(
                'id_merek'  => $id_merek,
                'kode_merek' => $kode_merek,
                'nama_merek' => $nama_merek,
            );

            $this->sepeda->ubah_merek($id_merek, $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit..');
            redirect('sepeda/typemerek');
        }

    public function hapusmerek($id_merek)
    {

        $data = array(
            'id_merek'   => $id_merek,
        );

        $this->sepeda->hapus_merek($id_merek, $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus..');
        redirect('sepeda/typemerek');
    }

    public function allsepeda()
    {

        $data = array(
            'title' => 'Data Product',
            'isi'   => 'back/v_sepeda',
            'sepeda'  => $this->sepeda->get_all_sepeda(),
        );
        $this->load->view('back/v_wrapper', $data);
    }

    public function addsepeda()
    {
        $data = array(
            'title' => 'Tambah Data Product',
            'isi'   => 'back/v_add_sepeda',
            'type'  => $this->sepeda->get_all_type(),
            'merek'  => $this->sepeda->get_all_type_merek(),
            'product'  => $this->sepeda->get_all_sepeda(),
        );

        $this->load->view('back/v_wrapper', $data);
    }

    public function addsepedaaksi()
    {

        $this->form_validation->set_rules('id_type', 'Nama Type', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('id_merek', 'Nama Merek', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('nama_kendaraan', 'Nama Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        
        $this->form_validation->set_rules('warna', 'Warna Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('tahun', 'Tahun Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('status', 'Status Sewa', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('harga', 'Harga Sewa', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Tambah Data Product',
                'isi'   => 'back/v_add_sepeda',
                'type'  => $this->sepeda->get_all_type(),
                'merek'  => $this->sepeda->get_all_type_merek(),
                'product'  => $this->sepeda->get_all_sepeda(),
            );

            $this->load->view('back/v_wrapper', $data);
        } else {
            $id_type = $this->input->post('id_type');
            $id_merek = $this->input->post('id_merek');
            $nama_kendaraan = $this->input->post('nama_kendaraan');
            
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');

            $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path'] = './back/uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
                $config['max_size']     = '5048';
                $config['max_width'] = '2024';
                $config['max_height'] = '2024';
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);
                $this->load->library('upload', $config);
                $upload = $this->upload->do_upload('gambar');

                if ($upload) {
                    $gambar_baru = $this->upload->data('file_name', $upload);
                    $data = array(
                        'id_type' => $id_type,
                        'id_merek' => $id_merek,
                        'nama_kendaraan' => $nama_kendaraan,
                        'slug' => strtolower(url_title($nama_kendaraan)),
                        'warna' => $warna,
                        'tahun' => $tahun,
                        'status' => $status,
                        'harga' => $harga,
                        'gambar' => $gambar_baru,
                        'deskripsi' => $deskripsi,
                    );
                    $this->sepeda->tambah_product($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan..');
                    redirect('sepeda/allsepeda');
                } else {
                    $this->session->set_flashdata('error', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert"><button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h5><i class="bi bi-sign-stop"></i> Alert!</h5>' . $this->upload->display_errors() . '</div>');
                    redirect('sepeda/allsepeda');
                }
                $data = array(
                    'id_type' => $id_type,
                    'id_merek' => $id_merek,
                    'nama_kendaraan' => $nama_kendaraan,
                    'slug' => strtolower(url_title($nama_kendaraan)),
                    'warna' => $warna,
                    'tahun' => $tahun,
                    'status' => $status,
                    'harga' => $harga,
                    'gambar' => $gambar,
                    'deskripsi' => $deskripsi,
                );

                $this->sepeda->tambah_product($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan..');
                redirect('sepeda/allsepeda');
            }
        }
    }

    public function editsepeda($slug)
    {
        $data = array(
            'title' => 'Edit Data Product',
            'isi'   => 'back/v_edit_sepeda',
            'type'  => $this->sepeda->get_all_type(),
            'merek'  => $this->sepeda->get_all_type_merek(),
            'detail'  => $this->sepeda->detail_sepeda($slug),
        );

        $this->load->view('back/v_wrapper', $data);
    }


    public function editsepedaaksi($slug)
    {

        $this->form_validation->set_rules('id_type', 'Nama Type', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('id_merek', 'Nama Merek', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('nama_kendaraan', 'Nama Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('warna', 'Warna Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('tahun', 'Tahun Kendaraan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('status', 'Status Sewa', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('harga', 'Harga Sewa', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Edit Data Product',
                'isi'   => 'back/v_edit_sepeda',
                'type'  => $this->sepeda->get_all_type(),
                'merek'  => $this->sepeda->get_all_type_merek(),
                'detail'  => $this->sepeda->detail_sepeda($slug),
            );

            $this->load->view('back/v_wrapper', $data);
        } else {
            $slug = $slug;
            $id_sepeda= $this->input->post('id_sepeda');
            $id_type = $this->input->post('id_type');
            $id_merek = $this->input->post('id_merek');
            $nama_kendaraan = $this->input->post('nama_kendaraan');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path'] = './back/uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
                $config['max_size']     = '5048';
                $config['max_width'] = '2024';
                $config['max_height'] = '2024';
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);
                $this->load->library('upload', $config);
                $upload = $this->upload->do_upload('gambar');

                if ($upload) {
                    $gambar_baru = $this->upload->data('file_name', $upload);
                    $data = array(
                        'id_sepeda' => $id_sepeda,
                        'id_type' => $id_type,
                        'id_merek' => $id_merek,
                        'nama_kendaraan' => $nama_kendaraan,
                        'slug' => strtolower(url_title($nama_kendaraan)),
                        'warna' => $warna,
                        'tahun' => $tahun,
                        'status' => $status,
                        'harga' => $harga,
                        'gambar' => $gambar_baru,
                        'deskripsi' => $deskripsi,
                    );
                    $this->sepeda->edit_product($slug, $data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit..');
                    redirect('sepeda/allsepeda');
                } else {
                    $this->session->set_flashdata('error', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert"><button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h5><i class="bi bi-sign-stop"></i> Alert!</h5>' . $this->upload->display_errors() . '</div>');
                    redirect('sepeda/allsepeda');
                }
                $deskripsi = $this->input->post('deskripsi');
                $data = array(
                    'id_sepeda' => $id_sepeda,
                    'id_type' => $id_type,
                    'id_merek' => $id_merek,
                    'nama_kendaraan' => $nama_kendaraan,
                    'slug' => strtolower(url_title($nama_kendaraan)),
                    'warna' => $warna,
                    'tahun' => $tahun,
                    'status' => $status,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi,
                    
                );

                $this->sepeda->edit_product($slug, $data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit..');
                redirect('sepeda/allsepeda');
            }

        
            $data = array(
                'id_sepeda' => $id_sepeda,
                'id_type' => $id_type,
                'id_merek' => $id_merek,
                'nama_kendaraan' => $nama_kendaraan,
                'slug' => strtolower(url_title($nama_kendaraan)),
                'warna' => $warna,
                'tahun' => $tahun,
                'status' => $status,
                'harga' => $harga,
                'deskripsi' => $deskripsi,

            );

            $this->sepeda->edit_product($slug, $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit..');
            redirect('sepeda/allsepeda');
        }
    }

    public function delete_sepeda($id_sepeda)
    {
        $data = array('id_sepeda' => $id_sepeda,);

        $this->sepeda->deletesepeda($id_sepeda, $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus..');
        redirect('sepeda/allsepeda');
    }
}
