<?php

namespace Arden;

class TopProducts extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        $days_array = array();
        // Render top products
        foreach($this->data as $key => $val) {
            if($key == 'ranking') {
                echo '<table style="border:solid 1px">';
                echo '<tr>';
                foreach($val as $day) {
                    echo '<th style="border:solid 1px">';
                    echo '<div>'. $day;
                    echo '</div>';
                    echo '</th>';
                    array_push($days_array, $day);
                }
                echo '</tr>';
                echo '<tr>';
                foreach($this->data['images'] as $d => $hours) {
                    foreach ($days_array as $k => $v) {
                        if($d == $v) {
                            echo '<td style="border:solid 1px">'.$hours.'</td>';
                        }
                    }

                }
                echo '</tr>';
                echo '</table>';
            }

        }
    }
}