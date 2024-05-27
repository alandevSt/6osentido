<?php
    if (!function_exists('getDayOfWeekInSpanish')) {
        function getDayOfWeekInSpanish($day) {
            $days = [
                'Monday' => 'Lun',
                'Tuesday' => 'Mar',
                'Wednesday' => 'Mié',
                'Thursday' => 'Jue',
                'Friday' => 'Vie',
                'Saturday' => 'Sáb',
                'Sunday' => 'Dom'
            ];
            return $days[$day] ?? $day;
        }
    }

?>