<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style type="text/css" media="screen">
    #PRData td:nth-child(7) {
        text-align: right;
    }
    <?php if ($Owner || $Admin || $this->session->userdata('show_cost')) {
        ?>
    #PRData td:nth-child(9) {
        text-align: right;
    }
        <?php
    } if ($Owner || $Admin || $this->session->userdata('show_price')) {
        ?>
    #PRData td:nth-child(8) {
        text-align: right;
    }
        <?php
    } ?>
</style>
<script>
    var oTable;
    $(document).ready(function () {
        oTable = $('#PRData').dataTable({
            "aaSorting": [[2, "asc"], [3, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "<?= lang('all') ?>"]],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= admin_url('products/getDistinctProducts' . ($warehouse_id ? '/' . $warehouse_id : '') . ($supplier ? '?supplier=' . $supplier->id : '')) ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                console.log("1");
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                console.log(2);
                            var oSettings = oTable.fnSettings();
                            nRow.id = aData[0];
                            // nRow.className = "product_link";
                            //if(aData[7] > aData[9]){ nRow.className = "product_link warning"; } else { nRow.className = "product_link"; }
                            return nRow;
                        },
                        "aoColumns": [
                            {"bSortable": false, "mRender": checkbox}, 
                            {"bSortable": false,"mRender": img_hl}, 
                            null, null, 
            <?php 
            if ($Owner || $Admin)
            {
                echo '{"mRender": currencyFormat}, {"mRender": currencyFormat},';
            }
            else
            {
                if ($this
                    ->session
                    ->userdata('show_cost'))
                {
                    echo '{"mRender": currencyFormat},';
                }
                if ($this
                    ->session
                    ->userdata('show_price'))
                {
                    echo '{"mRender": currencyFormat},';
                }
            } ?> {"mRender": formatQuantity}, null, <?php if (!$warehouse_id || !$Settings->racks)
            {
                echo '{"bVisible": false},';
            }
            else
            {
                echo '{"bSortable": true},';
            } ?> {"mRender": formatQuantity}, {"bSortable": false}
                        ]
                    }).fnSetFilteringDelay().dtFilter([
                        {column_number: 2, filter_default_label: "[<?=lang('name'); ?>]", filter_type: "text", data: []},
                        {column_number: 3, filter_default_label: "[<?=lang('brand'); ?>]", filter_type: "text", data: []},
                        {column_number: 4, filter_default_label: "[<?=lang('category'); ?>]", filter_type: "text", data: []},
                        <?php $col = 4;
            if ($Owner || $Admin)
            {
                echo '{column_number : 5, filter_default_label: "[' . lang('cost') . ']", filter_type: "text", data: [] },';
                echo '{column_number :6, filter_default_label: "[' . lang('price') . ']", filter_type: "text", data: [] },';
                $col += 2;
            }
            else
            {
                if ($this
                    ->session
                    ->userdata('show_cost'))
                {
                    $col++;
                    echo '{column_number : ' . $col . ', filter_default_label: "[' . lang('cost') . ']", filter_type: "text", data: [] },';
                }
                if ($this
                    ->session
                    ->userdata('show_price'))
                {
                    $col++;
                    echo '{column_number : ' . $col . ', filter_default_label: "[' . lang('price') . ']", filter_type: "text, data: []" },';
                }
            }
            ?>

            {column_number: <?php $col++;
            echo $col; ?>, filter_default_label: "[<?=lang('quantity');?>]", filter_type: "text", data: []},
            {column_number: <?php $col++;
            echo $col; ?>, filter_default_label: "[<?=lang('unit');?>]", filter_type: "text", data: []},
            <?php $col++; if ($warehouse_id && $Settings->racks) {
                echo '{column_number : ' . $col . ', filter_default_label: "[' . lang('rack') . ']", filter_type: "text", data: [] },';
            } ?>
            {column_number: <?php $col++;
            echo $col; ?>, filter_default_label: "[<?=lang('alert_quantity');?>]", filter_type: "text", data: []},
        ], "footer");

    });
</script>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i
                class="fa-fw fa fa-barcode"></i><?= lang('products') . ' (' . ($warehouse_id ? $warehouse->name : lang('all_warehouses')) . ')' . ($supplier ? ' (' . lang('supplier') . ': ' . ($supplier->company && $supplier->company != '-' ? $supplier->company : $supplier->name) . ')' : ''); ?>
        </h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <?php if (!empty($warehouses)) {
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-building-o tip" data-placement="left" title="<?= lang('warehouses') ?>"></i></a>
                        <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                            <li><a href="<?= admin_url('products') ?>"><i class="fa fa-building-o"></i> <?= lang('all_warehouses') ?></a></li>
                            <li class="divider"></li>
                            <?php
                            foreach ($warehouses as $warehouse) {
                                echo '<li><a href="' . admin_url('products/' . $warehouse->id) . '"><i class="fa fa-building"></i>' . $warehouse->name . '</a></li>';
                            } ?>
                        </ul>
                    </li>
                    <?php
                } ?>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext"><?= lang('list_results'); ?></p>

                <div class="table-responsive">
                    <table id="PRData" class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr class="primary">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th style="min-width:40px; width: 40px; text-align: center;"><?php echo $this->lang->line('image'); ?></th>
                            <th><?= lang('name') ?></th>
                            <th><?= lang('brand') ?></th>
                            <th><?= lang('category') ?></th>
                            <?php
                            if ($Owner || $Admin) {
                                echo '<th>' . lang('cost') . '</th>';
                                echo '<th>' . lang('price') . '</th>';
                            } else {
                                if ($this->session->userdata('show_cost')) {
                                    echo '<th>' . lang('cost') . '</th>';
                                }
                                if ($this->session->userdata('show_price')) {
                                    echo '<th>' . lang('price') . '</th>';
                                }
                            }
                            ?>
                            <th><?= lang('quantity') ?></th>
                            <th><?= lang('unit') ?></th>
                            <th><?= lang('rack') ?></th>
                            <th><?= lang('alert_quantity') ?></th>
                            <!-- <th style="min-width:65px; text-align:center;"><?= lang('actions') ?></th> -->
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="11" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>
                        </tr>
                        </tbody>

                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th style="min-width:40px; width: 40px; text-align: center;"><?php echo $this->lang->line('image'); ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <?php
                            if ($Owner || $Admin) {
                                echo '<th></th>';
                                echo '<th></th>';
                            } else {
                                if ($this->session->userdata('show_cost')) {
                                    echo '<th></th>';
                                }
                                if ($this->session->userdata('show_price')) {
                                    echo '<th></th>';
                                }
                            }
                            ?>
                            <th></th>
                            <th></th>
                            <th></th>
                            <!-- <th></th> -->
                            <!-- <th style="width:65px; text-align:center;"><?= lang('actions') ?></th> -->
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($Owner || ($GP && $GP['bulk_actions'])) {
    ?>
    <div style="display: none;">
        <input type="hidden" name="form_action" value="" id="form_action"/>
        <?= form_submit('performAction', 'performAction', 'id="action-form-submit"') ?>
    </div>
    <?= form_close() ?>
    <?php
} ?>
