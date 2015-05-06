<?php
/**
 * index.php - a view page for generic Customer controller.
 *
 * Additionaly, it does CRUD within the CI Framework.
 *
 * views/customer/index.php
 *
 * @package ITC260
 * @subpackage Customer
 * @author Victoria Moiseenko <moiseenkovika@gmail.com>
 * @version 1.0 2015/04/30
 * @link http://www.mykhabarovsk.com/ci
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see Customer.php
 * @todo none
 */
 $this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>


<?php foreach ($query->result() as $customer): ?>

<?php
 echo $customer->FirstName . "<br />";
?>

<?php endforeach ?>



<?php
$this->load->view($this->config->item('theme') . 'footer');
?>
