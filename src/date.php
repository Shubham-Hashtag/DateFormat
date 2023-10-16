<?php
    namespace DateFormat;

    class Date {
        public function date_format($value, $format) {
            return "Formatted Date is: ".date($format, strtotime($value));
        }
    }
?>