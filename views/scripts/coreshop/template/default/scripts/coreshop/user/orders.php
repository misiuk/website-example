<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?=$this->url(array("lang" => $this->language), "coreshop_index", true)?>"><?=$this->translate("Home")?></a></li>
        <li><a href="<?=$this->url(array("lang" => $this->language, "act" => "profile"), "coreshop_user")?>"><?=$this->translate("My Profile")?></a></li>
        <li class="active"><a href="<?=$this->url(array("lang" => $this->language, "act" => "orders"), "coreshop_user")?>"><?=$this->translate("Orders")?></a></li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        <?=$this->translate("Orders")?>
    </h2>
    <!-- Main Heading Ends -->
    <div class="table-responsive compare-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><?=$this->translate("Order Number")?></td>
                    <td><?=$this->translate("Date")?></td>
                    <td><?=$this->translate("Total")?></td>
                    <td><?=$this->translate("State")?></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->session->user->getOrders() as $order) { ?>
                <tr>
                    <td><?=$order->getOrderNumber()?></td>
                    <td>
                        <?=$order->getOrderDate()->format('d.m.Y')?>
                    </td>
                    <td>
                        <?=\CoreShop\Tool::formatPrice($order->getTotal())?>
                    </td>
                    <td>
                        <?php if($order->getOrderState() instanceof CoreShop\Model\OrderState) { ?>
                            <?=$order->getOrderState()->getName()?>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>