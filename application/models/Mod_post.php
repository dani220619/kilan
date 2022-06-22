<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Create By ARYO
 */
class Mod_post extends CI_Model
{
    public function post()
    {
        $query = $this->db->query("
       select p.*, tu.full_name, c.name
        from posts p
        left join tbl_user tu
        on p.id_user=tu.id_user
        left join category c
        on p.category_id=c.id
        order by p.post_date desc
        ");
        return $query;
    }
    public function category()
    {
        $query = $this->db->query("
        select * from category 
        ");
        return $query;
    }
    public function category_list($id)
    {
        $query = $this->db->query("
        select * from category where id = " . $id . "
        ");
        return $query;
    }
    function insertpost($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }
    function updatepost($id, $data)
    {
        $this->db->where('post_id', $id);
        $this->db->update('posts', $data);
    }
    function cekpost_title($title)
    {
        $this->db->where("post_title", $title);
        return $this->db->get("posts");
    }
    public function delete($post_id)
    {
        $this->db->where('post_id', $post_id);
        $this->db->delete('posts'); // Untuk mengeksekusi perintah delete data
    }
    function getImage($id)
    {
        $this->db->select('post_thumbnail');
        $this->db->from('posts');
        $this->db->where('post_id', $id);
        return $this->db->get();
    }
    public function get_post($post_id)
    {
        $query = $this->db->query("
        select * from posts where post_id = " . $post_id . " 
        ");
        return $query;
    }
    public function get_post_by_slug($slug = null)
    {
        $this->db->select('p.*, c.name, u.full_name, u.image');
        $this->db->join('category c', 'c.id=p.category_id');
        $this->db->join('tbl_user u', 'u.id_user=p.id_user', 'left');
        $query = $this->db->get_where('posts p', ['p.post_slug' => $slug]);
        return $query->row();
    }
    public function recent_post($slug)
    {
        $this->db->join('category c', 'c.id=p.category_id');
        $this->db->where('post_slug !=', $slug);
        $this->db->order_by('post_date', 'desc');
        $this->db->limit(5);
        return $this->db->get('posts p')->result();
    }
    public function show_post($id)
    {
        $this->db->from('posts');
        $this->db->where($id);
        $query = $this->db->get();
        return $query;
    }
    public function show_lifelight($id)
    {
        $this->db->from('posts');
        $this->db->where($id);
        $query = $this->db->get();
        return $query;
    }

    public function content($post_slug)
    {
        $query = $this->db->query("
        select * from posts where post_slug = " . $post_slug . " 
        ");
        return $query;
    }
    function cekcategory($title)
    {
        $this->db->where("id", $title);
        return $this->db->get("category");
    }
    function getcategory($id)
    {
        $this->db->select('image');
        $this->db->from('category');
        $this->db->where('id', $id);
        return $this->db->get();
    }
    public function getcontent($id)
    {
        $query = $this->db->query("
         select * from category
        where id = " . $id . " 
        ");
        return $query;
    }
    public function network()
    {
        $query = $this->db->query("
         select * from network
        ");
        return $query;
    }
    function ceknetwork($title)
    {
        $this->db->where("id", $title);
        return $this->db->get("network");
    }
    function getimgnet($id)
    {
        $this->db->select('image');
        $this->db->from('network');
        $this->db->where('id', $id);
        return $this->db->get();
    }
    function updatenet($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('network', $data);
    }
    public function delete_net($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('network'); // Untuk mengeksekusi perintah delete data
    }
    public function gallery()
    {
        $query = $this->db->query("
         select * from gallery
        ");
        return $query;
    }
    function cekgallery($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("gallery");
    }
    function getgallery($id)
    {
        $this->db->select('image');
        $this->db->from('gallery');
        $this->db->where('id', $id);
        return $this->db->get();
    }
    public function getcontgallery($slug)
    {
        $query = $this->db->query("
        select pg.*
        from posts_gallery pg
        left join gallery g
        on pg.gallery_id=g.id
        where pg.slug = " . $slug . " 
        ");
        return $query;
    }
    public function post_gallery()
    {
        $query = $this->db->query("
         select pg.*, g.title as tit_gal
          from posts_gallery pg
          left join gallery g
          on pg.gallery_id=g.id
          order by date desc
        ");
        return $query;
    }
    function cekpostgallery($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("posts_gallery");
    }
    public function delete_postgal($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts_gallery'); // Untuk mengeksekusi perintah delete data
    }
    function getImageGal($id)
    {
        $this->db->select('image');
        $this->db->from('posts_gallery');
        $this->db->where('id', $id);
        return $this->db->get();
    }

    public function show_post_gal($id)
    {
        $this->db->from('posts_gallery');
        $this->db->where($id);
        $query = $this->db->get();
        return $query;
    }
    public function gallery_list($id)
    {
        $query = $this->db->query("
        select * from gallery where id = " . $id . "
        ");
        return $query;
    }
    public function get_post_gallery($id)
    {
        $query = $this->db->query("
        select * from posts_gallery where id = " . $id . " 
        ");
        return $query;
    }
    function updatepostgallery($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('posts_gallery', $data);
    }

    public function tot_posts()
    {
        $query = $this->db->query("
       select count(post_id) as tot_po
       from posts
        ");
        return $query;
    }

    public function tot_gal()
    {
        $query = $this->db->query("
       select count(id) as tot_gallery
       from posts_gallery
        ");
        return $query;
    }
    public function tot_adm()
    {
        $query = $this->db->query("
       select count(id_user) as tot_admin
       from tbl_user
       where id_level = 1
        ");
        return $query;
    }
}
