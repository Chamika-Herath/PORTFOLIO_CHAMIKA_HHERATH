<?php
class projects_SINGLE_DATA{
    private $id;
    private $ast;
    private $sdt;
    private $name;
    private $description;
    private $main_description;
    private $client;
    private $main_img;
    private $show_on_web;
    private $main_user_login_id;
    private $project_url;
    private $seo_keywords;
    private $seo_description;
    private $main_color;
    private $secondary_color;
    private $state_of_data = false;

    public function __construct($id)
    {
        $this->id = $id;

        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT * FROM projects WHERE id='" . $this->id . "'";

        $result = $data_base_obj->get_result($get_sql_query);

        if ($result && $result->num_rows > 0) {
            $this->state_of_data = true;
            while ($get_row = $result->fetch_assoc()) {
                $this->id = $get_row["id"];
                $this->ast = $get_row["ast"];
                $this->sdt = $get_row["sdt"];
                $this->name = $get_row["name"];
                $this->description = $get_row["description"];
                $this->main_description = $get_row["main_description"];
                $this->client = $get_row["client"];
                $this->main_img = $get_row["main_img"];
                $this->show_on_web = $get_row["show_on_web"];
                $this->main_user_login_id = $get_row["main_user_login_id"];
                $this->project_url = isset($get_row["project_url"]) ? $get_row["project_url"] : "";
                $this->seo_keywords = isset($get_row["seo_keywords"]) ? $get_row["seo_keywords"] : "";
                $this->seo_description = isset($get_row["seo_description"]) ? $get_row["seo_description"] : "";
                $this->main_color = isset($get_row["main_color"]) ? $get_row["main_color"] : "";
                $this->secondary_color = isset($get_row["secondary_color"]) ? $get_row["secondary_color"] : "";
            }
        }
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_ast()
    {
        return $this->ast;
    }

    public function get_sdt()
    {
        return $this->sdt;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_description()
    {
        return $this->description;
    }

    public function get_main_description()
    {
        return $this->main_description;
    }

    public function get_client()
    {
        return $this->client;
    }

    public function get_main_img()
    {
        return $this->main_img;
    }   

    public function get_show_on_web()
    {
        return $this->show_on_web;
    }

    public function get_main_user_login_id()
    {
        return $this->main_user_login_id;
    }

    public function get_project_url()
    {
        return $this->project_url;
    }

    public function get_seo_keywords()
    {
        return $this->seo_keywords;
    }

    public function get_seo_description()
    {
        return $this->seo_description;
    }

    public function get_main_color()
    {
        return $this->main_color;
    }

    public function get_secondary_color()
    {
        return $this->secondary_color;
    }

    public function get_state_of_data()
    {
        return $this->state_of_data;
    }

}