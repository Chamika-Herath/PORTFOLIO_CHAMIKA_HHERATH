<?php
class projects_ADD_UPDATE{
    private $id;
    private $ast = "1";
    private $sdt;
    private $name;
    private $description;
    private $main_description;
    private $client;
    private $main_img;
    private $show_on_web = "1";
    private $main_user_login_id;
    private $project_url = "";
    private $seo_keywords = "";
    private $seo_description = "";
    private $main_color = "";
    private $secondary_color = "";
    private $sql_update_query;

    public function __construct($get_main_user_login_id){
        $this->main_user_login_id = $get_main_user_login_id;
        $this->sdt = date("Y-m-d H:i:s");
    }

    public function get_data($get_name, $get_description, $get_main_description, $get_client, $get_main_img, $get_show_on_web = "1"){
        $this->name = $get_name;
        $this->description = $get_description;
        $this->main_description = $get_main_description;
        $this->client = $get_client;
        $this->main_img = $get_main_img;
        $this->show_on_web = $get_show_on_web;

        $this->sql_update_query = 
            ", name='" . $this->name . "',
            description='" . $this->description . "',
            main_description='" . $this->main_description . "',
            client='" . $this->client . "',
            show_on_web='" . $this->show_on_web . "',
            main_img='" . $this->main_img . "'";
    }

    public function set_name($get_name){
        $this->name = $get_name;
        $this->sql_update_query .= ", name='" . $this->name . "'";
    }

    public function set_description($get_description){
        $this->description = $get_description;
        $this->sql_update_query .= ", description='" . $this->description . "'";
    }

    public function set_main_description($get_main_description){
        $this->main_description = $get_main_description;
        $this->sql_update_query .= ", main_description='" . $this->main_description . "'";
    }

    public function set_client($get_client){
        $this->client = $get_client;
        $this->sql_update_query .= ", client='" . $this->client . "'";
    }

    public function set_main_img($get_main_img){
        $this->main_img = $get_main_img;
        $this->sql_update_query .= ", main_img='" . $this->main_img . "'";
    }

    public function set_show_on_web($get_show_on_web){
        $this->show_on_web = $get_show_on_web;
        $this->sql_update_query .= ", show_on_web='" . $this->show_on_web . "'";
    }

    public function set_project_url($get_project_url){
        $this->project_url = $get_project_url;
        $this->sql_update_query .= ", project_url='" . $this->project_url . "'";
    }

    public function set_seo_keywords($get_seo_keywords){
        $this->seo_keywords = $get_seo_keywords;
        $this->sql_update_query .= ", seo_keywords='" . $this->seo_keywords . "'";
    }

    public function set_seo_description($get_seo_description){
        $this->seo_description = $get_seo_description;
        $this->sql_update_query .= ", seo_description='" . $this->seo_description . "'";
    }

    public function set_main_color($get_main_color){
        $this->main_color = $get_main_color;
        $this->sql_update_query .= ", main_color='" . $this->main_color . "'";
    }

    public function set_secondary_color($get_secondary_color){
        $this->secondary_color = $get_secondary_color;
        $this->sql_update_query .= ", secondary_color='" . $this->secondary_color . "'";
    }

    public function get_id(){
        return $this->id;
    }

    public function set_id($get_id){
        $this->id = $get_id;
    }

    private $error_msg;
    public function get_error_msg(){
        return $this->error_msg;
    }

    public function process_new_record(){
        $data_base_obj = new DataBase();
        $get_sql_query = "INSERT INTO projects 
                                (name, 
                                description, 
                                main_description, 
                                client, 
                                main_img, 
                                show_on_web,
                                ast, 
                                sdt, 
                                main_user_login_id,
                                project_url,
                                seo_keywords,
                                seo_description,
                                main_color,
                                secondary_color) 
                    VALUES (
                    '" . $this->name . "',
                     '" . $this->description . "',
                      '" . $this->main_description . "',
                       '" . $this->client . "',
                        '" . $this->main_img . "',
                         '" . $this->show_on_web . "',
                          '" . $this->ast . "',
                           '" . $this->sdt . "',
                            '" . $this->main_user_login_id . "',
                             '" . $this->project_url . "',
                              '" . $this->seo_keywords . "',
                               '" . $this->seo_description . "',
                                '" . $this->main_color . "',
                                 '" . $this->secondary_color . "')";

        $data_base_obj->get_result($get_sql_query); 
        $this->error_msg = $data_base_obj->get_error();
        $this->id = $data_base_obj->get_id(); 
        
        return $data_base_obj->get_error_state_boolean();   
    }

    public function process_update(){
        $data_base_obj = new DataBase();
        $get_sql_query = "UPDATE projects SET ast='" . $this->ast . "', sdt='" . $this->sdt . "' " . $this->sql_update_query . " WHERE id='" . $this->id . "' AND main_user_login_id='" . $this->main_user_login_id . "'";
        $data_base_obj->get_result($get_sql_query);
        $this->error_msg = $data_base_obj->get_error();
        return $data_base_obj->get_error_state_boolean();
    }

}