<?php
namespace CjDennis\DateTime;

class DateTimeNanosecondSeam extends DateTimeNanosecond {
  public function round_seam(float $value, int $old_precision = 0, int $new_precision = 0) {
    return call_user_func_array('parent::round', func_get_args());
  }

  public function nanoseconds_seam() {
    return $this->nanoseconds();
  }

  public function whole_second_date_time_seam() {
    return $this->whole_second_date_time();
  }
}