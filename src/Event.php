<?php
/**
 * Tech&Pizza Delivery Waiter
 *
 * @package TPW
 * @author Manuel Zavatta <manuel.zavatta@gmail.com>
 */

namespace TPW;

class Event extends HtmlSection {

  public function __construct(
    private Dataset $dataset
  ){}

  public function render():string {
    $days = [ 'Domenica','Luned&igrave;','Marted&igrave;','Mercoled&igrave;','Gioved&igrave;','Venerd&igrave;','Sabato' ];
    $day = $days[ $dayName = date('N',strtotime($this->dataset->getDate())) ];
    $date = date('d-m-Y',strtotime($this->dataset->getDate()));
    $event = $this->dataset->getEvent();
    return <<<EOS
<p>$day, $date</p>
<p><strong>$event</strong></p>
<hr/>
EOS;
  }

}
