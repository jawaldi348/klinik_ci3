<?php
class Mtindakan extends CI_Model
{
    protected $tabel = 'tindakan';
    public function getAll()
    {
        return $this->db->get($this->tabel)->result_array();
    }
    public function kode()
    {
        $this->db->select('RIGHT(kd_tindakan,3) as kode', FALSE);
        $this->db->order_by('kd_tindakan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($this->tabel);
        if ($query->num_rows() <> 0) {
            $dt = $query->row();
            $kode = intval($dt->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "T" . $kodemax;
        return $kodejadi;
    }
    public function store($post)
    {
        $data = [
            'kd_tindakan' => $this->kode(),
            'nm_tindakan' => $post['nama'],
            'harga' => $post['harga']
        ];
        return $this->db->insert($this->tabel, $data);
    }
    public function show($id = null)
    {
        return $this->db->where('kd_tindakan', $id)->get($this->tabel)->row_array();
    }
    public function update($post)
    {
        $data = [
            'nm_tindakan' => $post['nama'],
            'harga' => $post['harga']
        ];
        return $this->db->where('kd_tindakan', $post['kode'])->update($this->tabel, $data);
    }
    public function destroy($kode)
    {
        return $this->db->simple_query("DELETE FROM $this->tabel WHERE kd_tindakan='$kode'");
    }
}
