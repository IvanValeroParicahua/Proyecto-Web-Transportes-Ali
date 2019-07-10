<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Sales') ?>

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('reservation_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('people') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sales as $sale): ?>
                <tr>
                  <td><?= $this->Number->format($sale->id) ?></td>
                  <td><?= $sale->has('reservation') ? $this->Html->link($sale->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $sale->reservation->id]) : '' ?></td>
                  <td><?= $this->Number->format($sale->people) ?></td>
                  <td><?= $this->Number->format($sale->price) ?></td>
                  <td><?= $sale->has('user') ? $this->Html->link($sale->user->name, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
                  <td><?= $sale->has('client') ? $this->Html->link($sale->client->name, ['controller' => 'Clients', 'action' => 'view', $sale->client->id]) : '' ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $sale->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Html->link(__('Tickets'), ['controller'=>'Tickets' ,'action' => 'add', $sale->id], ['class'=>'btn btn-success btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>