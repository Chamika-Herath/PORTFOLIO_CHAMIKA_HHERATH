<?php
class projects_LIST{
    private $sql_seach_data = "";
    private $sql_process_data = "*";
    private $pagination_data_result;
    private $ast = "1";

    public function get_all_data()
    {
        $this->sql_process_data = "*";
        return $this;
    }

    public function get_count_report()
    {
        $this->sql_process_data = " count(id) ";
        return $this;
    }

    public function set_data_limits($start_point, $per_page_data_count)
    {
        $this->pagination_data_result = " ORDER BY id DESC LIMIT " . $start_point . ", " . $per_page_data_count . " ";
        return $this;
    }

    public function remove_list()
    {
        $this->ast = "0";
        return $this;
    }

    public function search_contact($get_like_heading)
    {
        $this->sql_seach_data .= " AND (name LIKE '%" . $get_like_heading . "%' OR description LIKE '%" . $get_like_heading . "%' OR main_description LIKE '%" . $get_like_heading . "%' OR client LIKE '%" . $get_like_heading . "%')";
        return $this;
    }

    public function filter_by_show_on_web($get_state)
    {
        $this->sql_seach_data .= " AND show_on_web='" . $get_state . "'";
        return $this;
    }

    public function get_result()
    {
        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT " . $this->sql_process_data . "
                          FROM projects
                          WHERE ast='" . $this->ast . "'" . $this->sql_seach_data . $this->pagination_data_result;

        return $data_base_obj->get_result($get_sql_query);
    }

}